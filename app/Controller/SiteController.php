<?php
App::uses('AppController', 'Controller');
/**
 * Categories Controller
 *
 * @property Category $Category
 * @property PaginatorComponent $Paginator
 */
class SiteController extends AppController {

	public $layout = 'site_home';

	public function home () {
		$this->loadModel('Post');
		
		$options['limit'] = 20;
		$posts = $this->Post->find('all', $options);

		$this->set(compact('posts'));
	}

	public function post ($id = null, $slug = null) {
		$this->loadModel('Post');

		$this->Post->recursive = 2;

		$options['conditions'] = array('Post.id'=> $id);
		$post = $this->Post->find('first', $options);

		$this->set(compact('post'));
	}

	public function category ($slug = null) {
		$this->loadModel('Post');

		$category = $this->Post->Category->find('first', array('conditions'=> array('Category.name'=> $slug)));

		if (!empty($category)) {
			# code...

			$options['conditions'] = array('Post.category_id'=> $category['Category']['id']);
			$posts = $this->Post->find('all', $options);

			$category = $category['Category']['name'];
			$this->set(compact('posts','category'));
		} else {
			throw new NotFoundException();
		}

	}

	public function getPostsByTagName($kitchenId = null) {
		$this->loadModel('Post');
	    $posts = $this->Post->find('all', array(
	        'joins' => array(
	             array('table' => 'posts_tags',
	                'alias' => 'PostsTag',
	                'type' => 'INNER',
	                'conditions' => array(
	                    'PostsTag.tag_id = Tag.id',
	                    'PostsTag.post_id = Post.id'
	                )
	            )
	        ),
	        'group' => 'Post.id'
	    ));
	    return $posts;
	}

	public function pesquisa () {
		$this->loadModel('Post');
		
		$q = $this->request->query('q');
		if (!empty($q)) {
			$_q = str_replace(' ', '%', $q);
			
			$options = array();
			$options['conditions'] = array('Tag.name LIKE'=> '%'.$_q.'%');
			$posts = $this->Post->Tag->find('all', $options);

			$this->set(compact('posts'));
		} else {
			$this->redirect('/');
		}
	}

}