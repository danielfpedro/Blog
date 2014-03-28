<h1>hjhjkh</h1>
<div class="readers view">
<h2><?php echo __('Reader'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($reader['Reader']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($reader['Reader']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($reader['Reader']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($reader['Reader']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($reader['Reader']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($reader['Reader']['modified']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Readers Information'); ?></dt>
		<dd>
			<?php echo $this->Html->link($reader['ReadersInformation']['name'], array('controller' => 'readers_informations', 'action' => 'view', $reader['ReadersInformation']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Reader'), array('action' => 'edit', $reader['Reader']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Reader'), array('action' => 'delete', $reader['Reader']['id']), null, __('Are you sure you want to delete # %s?', $reader['Reader']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Readers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Reader'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Readers Informations'), array('controller' => 'readers_informations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Readers Information'), array('controller' => 'readers_informations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Comments'), array('controller' => 'comments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Comments'); ?></h3>
	<?php if (!empty($reader['Comment'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Body'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th><?php echo __('Post Id'); ?></th>
		<th><?php echo __('Reader Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($reader['Comment'] as $comment): ?>
		<tr>
			<td><?php echo $comment['id']; ?></td>
			<td><?php echo $comment['body']; ?></td>
			<td><?php echo $comment['created']; ?></td>
			<td><?php echo $comment['modified']; ?></td>
			<td><?php echo $comment['post_id']; ?></td>
			<td><?php echo $comment['reader_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'comments', 'action' => 'view', $comment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'comments', 'action' => 'edit', $comment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'comments', 'action' => 'delete', $comment['id']), null, __('Are you sure you want to delete # %s?', $comment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Comment'), array('controller' => 'comments', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
