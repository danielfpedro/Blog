<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<h6><?php echo $post['Category']['name']; ?></h6>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-12">
			<h2><?php echo $post['Post']['title']; ?></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3">
			<h6><?php echo $post['User']['Profile'][0]['name']; ?></h6>
			<?php echo $this->Time->timeAgoInWords($post['Post']['created']); ?>
		</div>
		<div class="col-lg-9">
			<p><?php echo nl2br($post['Post']['text']); ?></p>

			<div class="row">
				<div class="col-lg-12">
					<p>Tags:
						<?php foreach ($post['Tag'] as $tag): ?>
							<span class="label label-info"><?php echo $tag['name']; ?></span>
						<?php endforeach ?>
					</p>
				</div>
			</div>

		</div>
	</div>

</div>