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
			<h6><?php echo $post['User']['Profile']['name']; ?></h6>
			<?php echo $this->Time->timeAgoInWords($post['Post']['created']); ?>
		</div>
		<div class="col-lg-9">
			<p><?php echo $post['Post']['text']; ?></p>
		</div>
	</div>
</div>