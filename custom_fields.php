<?php $lieu = get_post_meta(get_the_ID(), 'wpcf-lieu', true); ?>
<div class="meta">
	<?php if(!empty($lieu)):?>
		<span><?php echo $lieu; ?></span>
	<?php endif;?>
</div>