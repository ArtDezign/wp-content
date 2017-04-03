<!--sidebar-->
<div class="col-3" id="sidebar">

<div id="sidebar">
    <div class="row" id="header-image">
        
          	<img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width;?>" alt="murphy's Logo" />
        
      </div>
      
    	<div class="site-identity">
            <h1>Open Everday - 10 AM to 7 PM</h1>
            <h3>2962 Baseline Cornelius, OR 97113 <br> Phone: 503-640-1124</h3>
        </div>
      
      <div class="row" id="menu">
          
          	<?php wp_nav_menu( array('menu' => 'Header Menu')); ?>
          
      </div>
</div>
      
      		<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
                   	<div id="secondary" class="widget-area" role="complementary">
                    <?php dynamic_sidebar( 'sidebar-2' ); ?></div>
            <?php endif; ?>
      
</div>

