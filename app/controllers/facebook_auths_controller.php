<?php
class FacebookAuthsController extends AppController {

	var $name = 'FacebookAuths';

    var $helpers = array('Html','Form','Javascript');
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
            $user = json_decode(file_get_contents($graph_url));
            print_r($user);
            //echo '<script>window.close();</script>';
 
        }
    }
    function auth_complete() {
        //need to remove
    }
    function close() {
        //need to remove
    }
    function beforeFilter() {
        parent::beforeFilter(); 
        $this->Auth->allowedActions = array('index', 'view');
    }
}
