<?php
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
    function beforeFilter() {
        parent::beforeFilter(); 
        $this->Auth->allowedActions = array('index', 'view');
    }
}
