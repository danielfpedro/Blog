<div class="postsTags index">

	<?php
	$label = 'Adicionar PostsTag';
	$path = array('controller'=> 'postsTags', 'action'=> 'add');
	$options = array('class'=> 'btn btn-success pull-right');
	echo $this->Html->link($label, $path, $options);
?>

	<h2><?php echo __('Posts Tags'); ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('post_id'); ?></th>
			<th><?php echo $this->Paginator->sort('tag_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($postsTags as $postsTag): ?>
	<tr>
		<td><?php echo h($postsTag['PostsTag']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($postsTag['Post']['title'], array('controller' => 'posts', 'action' => 'view', $postsTag['Post']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($postsTag['Tag']['name'], array('controller' => 'tags', 'action' => 'view', $postsTag['Tag']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $postsTag['PostsTag']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $postsTag['PostsTag']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $postsTag['PostsTag']['id']), null, __('Are you sure you want to delete # %s?', $postsTag['PostsTag']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Página {:page} de {:pages}, mostrando {:current} registro(s) de um total de {:count} , começando no registro {:start} e terminando no registro {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
