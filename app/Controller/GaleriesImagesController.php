<?php
App::uses('AppController', 'Controller');
/**
 * GaleriesImages Controller
 *
 * @property GaleriesImage $GaleriesImage
 * @property PaginatorComponent $Paginator
 */
class GaleriesImagesController extends AppController {

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
		$this->GaleriesImage->recursive = 0;
		$this->set('galeriesImages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->GaleriesImage->exists($id)) {
			throw new NotFoundException(__('Invalid galeries image'));
		}
		$options = array('conditions' => array('GaleriesImage.' . $this->GaleriesImage->primaryKey => $id));
		$this->set('galeriesImage', $this->GaleriesImage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->GaleriesImage->create();
			if ($this->GaleriesImage->save($this->request->data)) {
				$this->Session->setFlash(__('The galeries image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The galeries image could not be saved. Please, try again.'));
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
		if (!$this->GaleriesImage->exists($id)) {
			throw new NotFoundException(__('Invalid galeries image'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->GaleriesImage->save($this->request->data)) {
				$this->Session->setFlash(__('The galeries image has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The galeries image could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('GaleriesImage.' . $this->GaleriesImage->primaryKey => $id));
			$this->request->data = $this->GaleriesImage->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->GaleriesImage->id = $id;
		if (!$this->GaleriesImage->exists()) {
			throw new NotFoundException(__('Invalid galeries image'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->GaleriesImage->delete()) {
			$this->Session->setFlash(__('The galeries image has been deleted.'));
		} else {
			$this->Session->setFlash(__('The galeries image could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
