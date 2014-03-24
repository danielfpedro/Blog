<div class="row">
	<div class="col-lg-12">
		<h4>
			<?php echo $category ?>
		</h4>
	</div>
</div>
<div class="row">
	<div class="col-lg-8">
		<?php foreach ($posts as $post): ?>
			<h4>
				<?php echo $this->Html->link($post['Post']['title'], $this->Site->getPostUrl($post['Post'])); ?>
			</h4>
		<?php endforeach ?>
	</div>
	<div class="col-lg-4">
		
	</div>
</div>