<!-- Small header. -->
<div class="small-header container">
    <div class="row">
        <div class="col md-6 col-12">
            <?php 
            wp_nav_menu(
                array(
                    'theme_location'=> 'top-header',
                    'menu-id'=> 'small-header-nav',
                    'menu_class'=>'small-nav'
                )
             )
            ?>
        </div>
        <div class="col md-6 col-12"></div>
    </div>

</div>