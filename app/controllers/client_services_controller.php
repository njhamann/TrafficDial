<?php
class ClientServicesController extends AppController {

	var $name = 'ClientServices';
    var $helpers = array('Html','Form','Javascript');
	function index() {
		$this->ClientService->recursive = 0;
		$this->set('clientServices', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid client service', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('clientService', $this->ClientService->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ClientService->create();
			if ($this->ClientService->save($this->data)) {
				$this->Session->setFlash(__('The client service has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client service could not be saved. Please, try again.', true));
			}
		}
		$users = $this->ClientService->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid client service', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ClientService->save($this->data)) {
				$this->Session->setFlash(__('The client service has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The client service could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ClientService->read(null, $id);
		}
		$users = $this->ClientService->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for client service', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ClientService->delete($id)) {
			$this->Session->setFlash(__('Client service deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Client service was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
    function beforeFilter() {
        parent::beforeFilter(); 
        $this->Auth->allowedActions = array('index', 'view');
    }
}
