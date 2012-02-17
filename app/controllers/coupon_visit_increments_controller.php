<?php
class CouponVisitIncrementsController extends AppController {

	var $name = 'CouponVisitIncrements';

	function index() {
		$this->CouponVisitIncrement->recursive = 0;
		$this->set('couponVisitIncrements', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid coupon visit increment', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('couponVisitIncrement', $this->CouponVisitIncrement->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CouponVisitIncrement->create();
			if ($this->CouponVisitIncrement->save($this->data)) {
				$this->Session->setFlash(__('The coupon visit increment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coupon visit increment could not be saved. Please, try again.', true));
			}
		}
		$couponVisitCounts = $this->CouponVisitIncrement->CouponVisitCount->find('list');
		$this->set(compact('couponVisitCounts'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid coupon visit increment', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CouponVisitIncrement->save($this->data)) {
				$this->Session->setFlash(__('The coupon visit increment has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coupon visit increment could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CouponVisitIncrement->read(null, $id);
		}
		$couponVisitCounts = $this->CouponVisitIncrement->CouponVisitCount->find('list');
		$this->set(compact('couponVisitCounts'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for coupon visit increment', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CouponVisitIncrement->delete($id)) {
			$this->Session->setFlash(__('Coupon visit increment deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Coupon visit increment was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
