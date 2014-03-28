<?php
App::uses('AppController', 'Controller');
/**
 * Galeries Controller
 *
 * @property Galery $Galery
 * @property PaginatorComponent $Paginator
 */
class GaleriesController extends AppController {

public $layout = 'admin';	
/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Galery->recursive = 0;
		$this->set('galeries', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Galery->exists($id)) {
			throw new NotFoundException(__('Invalid galery'));
		}
		$options = array('conditions' => array('Galery.' . $this->Galery->primaryKey => $id));
		$this->set('galery', $this->Galery->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Galery->create();
			if ($this->Galery->save($this->request->data)) {
				$this->Session->setFlash(__('The galery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The galery could not be saved. Please, try again.'));
			}
		}
		$images = $this->Galery->Image->find('list');
		$this->set(compact('images'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Galery->exists($id)) {
			throw new NotFoundException(__('Invalid galery'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Galery->save($this->request->data)) {
				$this->Session->setFlash(__('The galery has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The galery could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Galery.' . $this->Galery->primaryKey => $id));
			$this->request->data = $this->Galery->find('first', $options);
		}
		$images = $this->Galery->Image->find('list');
		$this->set(compact('images'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Galery->id = $id;
		if (!$this->Galery->exists()) {
			throw new NotFoundException(__('Invalid galery'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Galery->delete()) {
			$this->Session->setFlash(__('The galery has been deleted.'));
		} else {
			$this->Session->setFlash(__('The galery could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
