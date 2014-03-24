<div class="usersRoles index">

	<?php
	$label = 'Adicionar UsersRole';
	$path = array('controller'=> 'usersRoles', 'action'=> 'add');
	$options = array('class'=> 'btn btn-success pull-right');
	echo $this->Html->link($label, $path, $options);
?>

	<h2><?php echo __('Users Roles'); ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($usersRoles as $usersRole): ?>
	<tr>
		<td><?php echo h($usersRole['UsersRole']['id']); ?>&nbsp;</td>
		<td><?php echo h($usersRole['UsersRole']['name']); ?>&nbsp;</td>
		<td><?php echo h($usersRole['UsersRole']['created']); ?>&nbsp;</td>
		<td><?php echo h($usersRole['UsersRole']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $usersRole['UsersRole']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $usersRole['UsersRole']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $usersRole['UsersRole']['id']), null, __('Are you sure you want to delete # %s?', $usersRole['UsersRole']['id'])); ?>
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
