<div id="mySidebar" class="goth">
    <h2>This is my sidebar</h2>
</div>

<div class="sidebar-widget red-background">
		<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('topwidgetsidebar')) ?>
</div>

<div class="sidebar-widget">
    <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('bottomwidgetsidebar')) ?>
</div>