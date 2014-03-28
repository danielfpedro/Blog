<h1>hjhjkh</h1>
<div class="readersInformations view">
<h2><?php echo __('Readers Information'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($readersInformation['ReadersInformation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($readersInformation['ReadersInformation']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($readersInformation['ReadersInformation']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($readersInformation['ReadersInformation']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Readers Information'), array('action' => 'edit', $readersInformation['ReadersInformation']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Readers Information'), array('action' => 'delete', $readersInformation['ReadersInformation']['id']), null, __('Are you sure you want to delete # %s?', $readersInformation['ReadersInformation']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Readers Informations'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Readers Information'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Readers'), array('controller' => 'readers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reader'), array('controller' => 'readers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Readers'); ?></h3>
	<?php if (!empty($readersInformation['Reader'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Readers Information Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($readersInformation['Reader'] as $reader): ?>
		<tr>
			<td><?php echo $reader['id']; ?></td>
			<td><?php echo $reader['name']; ?></td>
			<td><?php echo $reader['email']; ?></td>
			<td><?php echo $reader['password']; ?></td>
			<td><?php echo $reader['created']; ?></td>
			<td><?php echo $reader['modified']; ?></td>
			<td><?php echo $reader['readers_information_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'readers', 'action' => 'view', $reader['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'readers', 'action' => 'edit', $reader['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'readers', 'action' => 'delete', $reader['id']), null, __('Are you sure you want to delete # %s?', $reader['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Reader'), array('controller' => 'readers', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
