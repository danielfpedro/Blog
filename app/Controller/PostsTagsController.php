<?php
App::uses('AppController', 'Controller');
/**
 * PostsTags Controller
 *
 * @property PostsTag $PostsTag
 * @property PaginatorComponent $Paginator
 */
class PostsTagsController extends AppController {

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
		$this->PostsTag->recursive = 0;
		$this->set('postsTags', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PostsTag->exists($id)) {
			throw new NotFoundException(__('Invalid posts tag'));
		}
		$options = array('conditions' => array('PostsTag.' . $this->PostsTag->primaryKey => $id));
		$this->set('postsTag', $this->PostsTag->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PostsTag->create();
			if ($this->PostsTag->save($this->request->data)) {
				$this->Session->setFlash(__('The posts tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The posts tag could not be saved. Please, try again.'));
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
		if (!$this->PostsTag->exists($id)) {
			throw new NotFoundException(__('Invalid posts tag'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PostsTag->save($this->request->data)) {
				$this->Session->setFlash(__('The posts tag has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The posts tag could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PostsTag.' . $this->PostsTag->primaryKey => $id));
			$this->request->data = $this->PostsTag->find('first', $options);
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
		$this->PostsTag->id = $id;
		if (!$this->PostsTag->exists()) {
			throw new NotFoundException(__('Invalid posts tag'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PostsTag->delete()) {
			$this->Session->setFlash(__('The posts tag has been deleted.'));
		} else {
			$this->Session->setFlash(__('The posts tag could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
