<div class="readers index">

	<?php
	$label = 'Adicionar Reader';
	$path = array('controller'=> 'readers', 'action'=> 'add');
	$options = array('class'=> 'btn btn-success pull-right');
	echo $this->Html->link($label, $path, $options);
?>

	<h2><?php echo __('Readers'); ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th><?php echo $this->Paginator->sort('readers_profile_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($readers as $reader): ?>
	<tr>
		<td><?php echo h($reader['Reader']['id']); ?>&nbsp;</td>
		<td><?php echo h($reader['Reader']['name']); ?>&nbsp;</td>
		<td><?php echo h($reader['Reader']['email']); ?>&nbsp;</td>
		<td><?php echo h($reader['Reader']['password']); ?>&nbsp;</td>
		<td><?php echo h($reader['Reader']['created']); ?>&nbsp;</td>
		<td><?php echo h($reader['Reader']['modified']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($reader['ReadersProfile']['name'], array('controller' => 'readers_profiles', 'action' => 'view', $reader['ReadersProfile']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $reader['Reader']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $reader['Reader']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $reader['Reader']['id']), null, __('Are you sure you want to delete # %s?', $reader['Reader']['id'])); ?>
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
