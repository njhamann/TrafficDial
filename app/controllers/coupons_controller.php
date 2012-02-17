<?php
class CouponsController extends AppController {

	var $name = 'Coupons';

	function index() {
		$this->Coupon->recursive = 0;
		$this->set('coupons', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid coupon', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('coupon', $this->Coupon->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Coupon->create();
			if ($this->Coupon->save($this->data)) {
				$this->Session->setFlash(__('The coupon has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coupon could not be saved. Please, try again.', true));
			}
		}
		$messages = $this->Coupon->Message->find('list');
		$this->set(compact('messages'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid coupon', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Coupon->save($this->data)) {
				$this->Session->setFlash(__('The coupon has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coupon could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Coupon->read(null, $id);
		}
		$messages = $this->Coupon->Message->find('list');
		$this->set(compact('messages'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for coupon', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Coupon->delete($id)) {
			$this->Session->setFlash(__('Coupon deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Coupon was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
