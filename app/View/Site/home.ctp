<div class="row">
	<div class="col-lg-4">
		<div class="row">
			<?php foreach ($posts as $post): ?>
				<div class="col-lg-12">
					<h5>
						<?php echo $this->Html->link($post['Category']['name'],
							array('action'=> 'category',
								strtolower(Inflector::slug($post['Category']['name'], '-')))); ?>
					</h5>
					<?php echo $this->Html->link($post['Post']['title'], $this->Site->getPostUrl($post['Post'])); ?>
				</div>	
			<?php endforeach ?>
		</div>	
	</div>
</div>