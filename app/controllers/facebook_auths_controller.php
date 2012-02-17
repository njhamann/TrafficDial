<?php
class FacebookAuthsController extends AppController {

	var $name = 'FacebookAuths';

	function index() {
		$this->FacebookAuth->recursive = 0;
		$this->set('facebookAuths', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid facebook auth', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('facebookAuth', $this->FacebookAuth->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->FacebookAuth->create();
			if ($this->FacebookAuth->save($this->data)) {
				$this->Session->setFlash(__('The facebook auth has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The facebook auth could not be saved. Please, try again.', true));
			}
		}
		$clientServices = $this->FacebookAuth->ClientService->find('list');
		$this->set(compact('clientServices'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid facebook auth', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->FacebookAuth->save($this->data)) {
				$this->Session->setFlash(__('The facebook auth has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The facebook auth could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->FacebookAuth->read(null, $id);
		}
		$clientServices = $this->FacebookAuth->ClientService->find('list');
		$this->set(compact('clientServices'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for facebook auth', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->FacebookAuth->delete($id)) {
			$this->Session->setFlash(__('Facebook auth deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Facebook auth was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
    function auth_start() {
        $url = $this->params['url'];
        if(isset($url['start_auth'])){
            $this->redirect('https://www.facebook.com/dialog/oauth?client_id=332400076798368&redirect_uri='. urlencode('http://ec2-75-101-211-0.compute-1.amazonaws.com/facebook_auths/auth_return').'&scope=email,read_stream,manage_pages,publish_actions,publish_stream,ads_management,offline_access');
        }
    }
    function auth_return() {
        $url = $this->params['url'];
        if(isset($url['error'])){
            echo $url['error'];
            $this->Session->setFlash(__('Sorry there was an error with your Facebook authorization', true));
            $this->redirect(array('action' => 'close'));
        }
        if(isset($url['code'])){
            $response = file_get_contents('https://graph.facebook.com/oauth/access_token?client_id=332400076798368&redirect_uri='.urlencode('http://ec2-75-101-211-0.compute-1.amazonaws.com/facebook_auths/auth_return').'&client_secret=ad9acadb5142786183841276c8834d8d&code='.$url['code']);
            $params = null;
            parse_str($response, $params);
            $graph_url = "https://graph.facebook.com/me?access_token=".$params['access_token'];
            $json = file_get_contents($graph_url);
            $client_service = json_decode($json);
            $client_service->json = $json;
            $client_service->auth_token = $params['access_token'];
            $count = $this->FacebookAuth->find('count', array('conditions' => array('FacebookAuth.service_number' => $client_service->id)));
            if($count > 0){
                $this->Session->setFlash(__('Sorry this account already exist.', true));
                $this->redirect(array('action' => 'close'));
            }else{
                $this->save_client_service($client_service);         
                $this->redirect(array('action' => 'close'));
            }             
        }
    }
    function save_client_service($client_service) {
        $user = $this->Session->read('Auth');
        $client_service_data = array(
            'user_id' => $user['User']['id'],
            'type' => 'facebook',
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s')
        );
        $this->FacebookAuth->ClientService->save($client_service_data);
        $client_service_id = $this->FacebookAuth->ClientService->id;
        $facebook_data = array(
            'FacebookAuth' => array(
                'client_service_id' => $client_service_id,
                'service_number' => $client_service->id,
                'auth_token' => $client_service->auth_token,
                'first_name' => $client_service->first_name,
                'last_name' => $client_service->last_name,
                'link' => $client_service->link,
                'username' => $client_service->username,
                'email' => $client_service->email,
                'user_json' => $client_service->json,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
        ));
        if(!$this->FacebookAuth->save($facebook_data)){ 
            $this->Session->setFlash(__('The facebook auth could not be saved. Please, try again.', true));
        }
    }
    function auth_complete() {
        //need to remove
    }
    function close() {
        echo '<script>window.close();</script>';
    }
    function beforeFilter() {
        parent::beforeFilter(); 
        $this->Auth->allowedActions = array('index', 'view');
    }
}
