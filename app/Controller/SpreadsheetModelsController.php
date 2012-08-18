<?php
App::uses('AppController', 'Controller');
/**
 * SpreadsheetModels Controller
 *
 * @property SpreadsheetModel $SpreadsheetModel
 */
class SpreadsheetModelsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->SpreadsheetModel->recursive = 0;
		$this->set('spreadsheetModels', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->SpreadsheetModel->id = $id;
		if (!$this->SpreadsheetModel->exists()) {
			throw new NotFoundException(__('Invalid spreadsheet model'));
		}
		$this->set('spreadsheetModel', $this->SpreadsheetModel->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->SpreadsheetModel->create();
			if ($this->SpreadsheetModel->save($this->request->data)) {
				$this->Session->setFlash(__('The spreadsheet model has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The spreadsheet model could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->SpreadsheetModel->id = $id;
		if (!$this->SpreadsheetModel->exists()) {
			throw new NotFoundException(__('Invalid spreadsheet model'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->SpreadsheetModel->save($this->request->data)) {
				$this->Session->setFlash(__('The spreadsheet model has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The spreadsheet model could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->SpreadsheetModel->read(null, $id);
		}
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
		$this->SpreadsheetModel->id = $id;
		if (!$this->SpreadsheetModel->exists()) {
			throw new NotFoundException(__('Invalid spreadsheet model'));
		}
		if ($this->SpreadsheetModel->delete()) {
			$this->Session->setFlash(__('Spreadsheet model deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Spreadsheet model was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
