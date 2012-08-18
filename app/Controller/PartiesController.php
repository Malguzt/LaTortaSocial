<?php
App::uses('AppController', 'Controller');
/**
 * Parties Controller
 *
 * @property Party $Party
 */
class PartiesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Party->recursive = 0;
		$this->set('parties', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Party->id = $id;
		if (!$this->Party->exists()) {
			throw new NotFoundException(__('Invalid party'));
		}
		$this->set('party', $this->Party->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Party->create();
			if ($this->Party->save($this->request->data)) {
				$this->Session->setFlash(__('The party has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The party could not be saved. Please, try again.'));
			}
		}
		$spreadsheetModels = $this->Party->SpreadsheetModel->find('list');
		$users = $this->Party->User->find('list');
		$this->set(compact('spreadsheetModels', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Party->id = $id;
		if (!$this->Party->exists()) {
			throw new NotFoundException(__('Invalid party'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Party->save($this->request->data)) {
				$this->Session->setFlash(__('The party has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The party could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Party->read(null, $id);
		}
		$spreadsheetModels = $this->Party->SpreadsheetModel->find('list');
		$users = $this->Party->User->find('list');
		$this->set(compact('spreadsheetModels', 'users'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Party->id = $id;
		if (!$this->Party->exists()) {
			throw new NotFoundException(__('Invalid party'));
		}
		if ($this->Party->delete()) {
			$this->Session->setFlash(__('Party deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Party was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
