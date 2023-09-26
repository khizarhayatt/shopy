<!-- Small header. -->
<div class="small-header container mt-2 ">
    <div class="row">
        <div class="col-md-6 col-12">
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
        <div class="col-md-6 col-12">
            <ul class="social-icons">
                <li class="social link"><a href="#"> <i class="fa-brands fa-facebook"></i></a></li>
                <li class="social link"><a href="#"> <i class="fa-brands fa-twitter"></i></a></li>
                <li class="social link"><a href="#"> <i class="fa-brands fa-instagram"></i></a></li>
                <li class="social link"><a href="#"> <i class="fa-brands fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</div>

<!-- Main header. -->
<div class="main-header container">
    <div class="row">
        <div class="site-branding col-md-4">
            <a href="javascript:void(0)" id="desktop-menu-toggle" class="mega-menu-toggle">
                <i class="fas fa-bars"></i>
            </a>
            <?php
            if(has_custom_logo()):
                the_custom_logo();
            else:
                echo  bloginfo('name') ;
            endif;    
                ?>
        </div>
        <div class="search-col col-md-4"></div>
        <div class="buttons-col col-md-4"></div>
    </div>
</div>