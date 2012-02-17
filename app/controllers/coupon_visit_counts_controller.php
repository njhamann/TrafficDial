<?php
class CouponVisitCountsController extends AppController {

	var $name = 'CouponVisitCounts';

	function index() {
		$this->CouponVisitCount->recursive = 0;
		$this->set('couponVisitCounts', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid coupon visit count', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('couponVisitCount', $this->CouponVisitCount->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->CouponVisitCount->create();
			if ($this->CouponVisitCount->save($this->data)) {
				$this->Session->setFlash(__('The coupon visit count has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coupon visit count could not be saved. Please, try again.', true));
			}
		}
		$coupons = $this->CouponVisitCount->Coupon->find('list');
		$this->set(compact('coupons'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid coupon visit count', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CouponVisitCount->save($this->data)) {
				$this->Session->setFlash(__('The coupon visit count has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The coupon visit count could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CouponVisitCount->read(null, $id);
		}
		$coupons = $this->CouponVisitCount->Coupon->find('list');
		$this->set(compact('coupons'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for coupon visit count', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CouponVisitCount->delete($id)) {
			$this->Session->setFlash(__('Coupon visit count deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Coupon visit count was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
