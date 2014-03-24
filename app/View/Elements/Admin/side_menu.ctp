<?php
	$controller = $this->params['controller'];

	$values = array(
		array(
			'label'=> 'Posts',
			'controller'=> 'posts',
			'action'=> 'admin_index'
			),
		array(
			'label'=> 'Categorias',
			'controller'=> 'categories',
			'action'=> 'admin_index'
			),
		array(
			'label'=> 'Tags',
			'controller'=> 'tags',
			'action'=> 'admin_index'
			),
		array(
			'label'=> 'Users',
			'controller'=> 'users',
			'action'=> 'admin_index'
			),
		array(
			'label'=> 'Roles',
			'controller'=> 'usersRoles',
			'action'=> 'admin_index'
			),
		array(
			'label'=> 'Pages',
			'controller'=> 'pages',
			'action'=> 'admin_index'
			),
		);
?>
<ul class="nav nav-pills nav-stacked">

	<?php foreach ($values as $key => $value) : ?>
		<li class="<?php echo ($controller == $value['controller'])? 'active' : ''; ?>">
			<?php
				$label = 'Alunos';
				$url = array('controller'=> $value['controller'], 'action'=> $value['action']);
				$options = array();
			
				echo $this->Html->link($value['label'], $url, $options);
			?>
		</li>
	<?php endforeach; ?>
</ul>