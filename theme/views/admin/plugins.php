<h1>Plugins</h1>

<ul class="items">
	<?php foreach($plugins as $plugin): ?>
		<li class="<?php echo $plugin->active ? 'active' : '' . ' ' . ($plugin->page === true ? 'page' : 'nopage'); ?>">
			<?php if($plugin->page): ?><a href="/admin/plugins/<?php echo $plugin->slug; ?>"><?php endif; ?>
				<span class="title"><?php echo $plugin->name; ?> <small>by <?php echo $plugin->author; ?></small></span>
				
				<?php if($plugin->active): ?>
					<span class="tag">Active</span>
				<?php endif; ?>
				<?php if($plugin->page): ?>
					<span class="tag">Has page</span>
				<?php endif; ?>
			<?php if($plugin->page): ?></a><?php endif; ?>
			
			<?php if($plugin->active): ?>
				<a class="btn" href="?disable=<?php echo $plugin->slug; ?>">Disable</a>
			<?php else: ?>
				<a class="btn" href="?enable=<?php echo $plugin->slug; ?>">Enable</a>
			<?php endif; ?>
		</li>
	<?php endforeach; ?>
</ul>