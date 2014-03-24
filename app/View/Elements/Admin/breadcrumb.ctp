<ol class="breadcrumb">
	<?php
		$total = count($dados);
		$i = 1;
	?>
	<?php foreach($dados as $value): ?>
		<?php if ($i < $total): ?>
			<li>
				<?php
					$label = $value['label'];
					$url = array('controller'=> '', 'action'=> '');
					$options = array();
				
					echo $this->Html->link($label, $url, $options);
				?>
			</li>
		<?php else: ?>
			<li class="active">
				<?php echo $value['label']; ?>
			</li>
		<?php endif ?>
		<?php $i++; ?>
	<?php endforeach; ?>
</ol>