<?php
class ApplicationsController extends AppController {

	var $name = 'Applications';

	function index() {
		$this->Application->recursive = 0;
		$this->set('applications', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid application', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('application', $this->Application->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Application->create();
			if ($this->Application->save($this->data)) {
				$this->Session->setFlash(__('The application has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid application', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Application->save($this->data)) {
				$this->Session->setFlash(__('The application has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Application->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for application', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Application->delete($id)) {
			$this->Session->setFlash(__('Application deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Application was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
