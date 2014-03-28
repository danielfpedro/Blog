<h1>hjhjkh</h1>
<div class="galeriesImages view">
<h2><?php echo __('Galeries Image'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($galeriesImage['GaleriesImage']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Galery'); ?></dt>
		<dd>
			<?php echo $this->Html->link($galeriesImage['Galery']['name'], array('controller' => 'galeries', 'action' => 'view', $galeriesImage['Galery']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Image'); ?></dt>
		<dd>
			<?php echo $this->Html->link($galeriesImage['Image']['name'], array('controller' => 'images', 'action' => 'view', $galeriesImage['Image']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Title'); ?></dt>
		<dd>
			<?php echo h($galeriesImage['GaleriesImage']['title']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Galeries Image'), array('action' => 'edit', $galeriesImage['GaleriesImage']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Galeries Image'), array('action' => 'delete', $galeriesImage['GaleriesImage']['id']), null, __('Are you sure you want to delete # %s?', $galeriesImage['GaleriesImage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Galeries Images'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Galeries Image'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Galeries'), array('controller' => 'galeries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Galery'), array('controller' => 'galeries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images'), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image'), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>
