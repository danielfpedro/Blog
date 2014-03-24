<h3>Pesquisa</h3>

<?php if (!empty($posts)): ?>
	<?php foreach ($posts as $row): ?>
		<?php foreach ($row['Post'] as $post): ?>
			<h4>
				<?php echo $this->Html->link($post['title'], $this->Site->getPostUrl($post)); ?>
			</h4>
		<?php endforeach ?>
	<?php endforeach ?>
<?php else: ?>
	Nenhum post encontrado para <strong>'<?php echo $this->request->query('q'); ?>'</strong>
<?php endif ?>