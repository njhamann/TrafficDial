<?php
App::import('Vendor', 'oauth', array('file' => 'OAuth' . DS . 'oauth_consumer.php'));

class TwitterAuthsController extends AppController {

	var $name = 'TwitterAuths';
    var $helpers = array('Html','Form','Javascript');

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
            $data = $consumer->post($accessToken->key, $accessToken->secret, 'https://api.twitter.com/1/statuses/update.json', array('status' => 'hello world!'));
            echo $data;
            //echo '<script>window.close();</script>';
        }
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
