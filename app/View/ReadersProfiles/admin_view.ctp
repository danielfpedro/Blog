<h1>hjhjkh</h1>
<div class="readersProfiles view">
<h2><?php echo __('Readers Profile'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($readersProfile['ReadersProfile']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($readersProfile['ReadersProfile']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($readersProfile['ReadersProfile']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($readersProfile['ReadersProfile']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Readers Profile'), array('action' => 'edit', $readersProfile['ReadersProfile']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Readers Profile'), array('action' => 'delete', $readersProfile['ReadersProfile']['id']), null, __('Are you sure you want to delete # %s?', $readersProfile['ReadersProfile']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Readers Profiles'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Readers Profile'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Readers'), array('controller' => 'readers', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reader'), array('controller' => 'readers', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Readers'); ?></h3>
	<?php if (!empty($readersProfile['Reader'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Readers Profile Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($readersProfile['Reader'] as $reader): ?>
		<tr>
			<td><?php echo $reader['id']; ?></td>
			<td><?php echo $reader['name']; ?></td>
			<td><?php echo $reader['email']; ?></td>
			<td><?php echo $reader['password']; ?></td>
			<td><?php echo $reader['created']; ?></td>
			<td><?php echo $reader['modified']; ?></td>
			<td><?php echo $reader['readers_profile_id']; ?></td>
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
