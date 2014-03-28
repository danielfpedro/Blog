<div class="galeriesImages index">

	<?php
	$label = 'Adicionar GaleriesImage';
	$path = array('controller'=> 'galeriesImages', 'action'=> 'add');
	$options = array('class'=> 'btn btn-success pull-right');
	echo $this->Html->link($label, $path, $options);
?>

	<h2><?php echo __('Galeries Images'); ?></h2>

	<br style="clear: both;">

	<table class="table table-condensed table-bordered table-hover table-striped">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('galery_id'); ?></th>
			<th><?php echo $this->Paginator->sort('image_id'); ?></th>
			<th><?php echo $this->Paginator->sort('title'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($galeriesImages as $galeriesImage): ?>
	<tr>
		<td><?php echo h($galeriesImage['GaleriesImage']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($galeriesImage['Galery']['name'], array('controller' => 'galeries', 'action' => 'view', $galeriesImage['Galery']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($galeriesImage['Image']['name'], array('controller' => 'images', 'action' => 'view', $galeriesImage['Image']['id'])); ?>
		</td>
		<td><?php echo h($galeriesImage['GaleriesImage']['title']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $galeriesImage['GaleriesImage']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $galeriesImage['GaleriesImage']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $galeriesImage['GaleriesImage']['id']), null, __('Are you sure you want to delete # %s?', $galeriesImage['GaleriesImage']['id'])); ?>
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
