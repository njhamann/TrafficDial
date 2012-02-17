<?php
App::import('Vendor', 'oauth', array('file' => 'OAuth' . DS . 'oauth_consumer.php'));

class TwitterAuthsController extends AppController {

	var $name = 'TwitterAuths';

	function index() {
		$this->TwitterAuth->recursive = 0;
		$this->set('twitterAuths', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid twitter auth', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('twitterAuth', $this->TwitterAuth->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->TwitterAuth->create();
			if ($this->TwitterAuth->save($this->data)) {
				$this->Session->setFlash(__('The twitter auth has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The twitter auth could not be saved. Please, try again.', true));
			}
		}
		$clientServices = $this->TwitterAuth->ClientService->find('list');
		$this->set(compact('clientServices'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid twitter auth', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->TwitterAuth->save($this->data)) {
				$this->Session->setFlash(__('The twitter auth has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The twitter auth could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->TwitterAuth->read(null, $id);
		}
		$clientServices = $this->TwitterAuth->ClientService->find('list');
		$this->set(compact('clientServices'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for twitter auth', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->TwitterAuth->delete($id)) {
			$this->Session->setFlash(__('Twitter auth deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Twitter auth was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
    
    //Twitter functions
    public function request_token() {
    
        //Twitter oauth stuff
        $consumer = $this->createConsumer();
        $requestToken = $consumer->getRequestToken('https://api.twitter.com/oauth/request_token', 'http://' . $_SERVER['HTTP_HOST'] . '/twitter_auths/callback');

        if ($requestToken) {
          $this->Session->write('twitter_request_token', $requestToken);
          $this->redirect('https://api.twitter.com/oauth/authorize?oauth_token=' . $requestToken->key);
        } else {
          // an error occured when obtaining a request token
        }
        //END 
    }
    public function callback() {
        $requestToken = $this->Session->read('twitter_request_token');
        $consumer = $this->createConsumer();
        $accessToken = $consumer->getAccessToken('https://api.twitter.com/oauth/access_token', $requestToken);
        if ($accessToken) {
                        
            $json = $consumer->get(
                $accessToken->key, 
                $accessToken->secret, 
                'http://api.twitter.com/1/account/verify_credentials.json');
            $client_service = json_decode($json);
            
            $client_service->auth_key = $accessToken->key;
            $client_service->auth_secret = $accessToken->secret;
            $client_service->json = $json; 
            $count = $this->TwitterAuth->find('count', 
                array('conditions' => array('TwitterAuth.service_number' => $client_service->id)));
            if($count > 0){
                $this->Session->setFlash(__('Sorry this account already exist.', true));
                $this->redirect(array('action' => 'close'));
            }else{
                $this->save_client_service($client_service);
                $this->redirect(array('action' => 'close'));
            }             
            //$data = $consumer->post($accessToken->key, $accessToken->secret, 'https://api.twitter.com/1/statuses/update.json', array('status' => 'hello world!'));
            //echo '<script>window.close();</script>';
        }
    }

    function save_client_service($client_service) {
        $user = $this->Session->read('Auth');
        $client_service_data = array(
            'user_id' => $user['User']['id'],
            'type' => 'twitter',
            'created' => date('Y-m-d H:i:s'),
            'modified' => date('Y-m-d H:i:s')
        );
        $this->TwitterAuth->ClientService->save($client_service_data);
        $client_service_id = $this->TwitterAuth->ClientService->id;
        $twitterData = array(
            'TwitterAuth' => array(
                'client_service_id' => $client_service_id,
                'service_number' => $client_service->id,
                'auth_key' => $client_service->auth_key,
                'auth_secret' => $client_service->auth_secret,
                'name' => $client_service->name,
                'link' => 'http://twitter.com/'.$client_service->screen_name,
                'username' => $client_service->screen_name,
                'user_json' => $client_service->json,
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s')
        ));

        if(!$this->TwitterAuth->save($twitterData)){ 
            $this->Session->setFlash(__('The facebook auth could not be saved. Please, try again.', true));
        }
    }
    function close() {
        echo '<script>window.close();</script>';
    }
    private function createConsumer() {
        return new OAuth_Consumer('km2eVUECrR0UKvL1e7dUQ', 'ixMYFR28SUGJzgWUjTAzkOQcoRIWVueeGLaUh6IfQ4');
    }
    //END
    
    function beforeFilter() {
        parent::beforeFilter(); 
        $this->Auth->allowedActions = array('index', 'view');
    }
}
