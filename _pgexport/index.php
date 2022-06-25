<?php get_header(); ?>

<nav class="bg-white navbar navbar-expand-lg navbar-light py-lg-1"> 
    <div class="container"> 
        <?php echo get_custom_logo() ?>
        <ul class="flex-row ms-auto navbar-nav order-lg-1 ps-2 pe-2"> 
            <li class="nav-item"> 
                <?php echo get_search_link(); ?> 
            </li>
            <li class="nav-item"> <a class="nav-link p-2 pb-3 ps-2 pe-2 pt-3" href="<?php echo esc_url( wc_get_cart_url() ); ?>" title="<?php esc_attr_e( 'View Cart' ); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.25em" height="1.25em">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M7 8V6a5 5 0 1 1 10 0v2h3a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1h3zm0 2H5v10h14V10h-2v2h-2v-2H9v2H7v-2zm2-2h6V6a3 3 0 0 0-6 0v2z"></path>
                        </g>
                    </svg> <span class="small" id="cart-count"><?php echo wp_kses_data( sprintf( _n( '%d', '%d', WC()->cart->get_cart_contents_count(), 'bakkpress' ), WC()->cart->get_cart_contents_count() ) ); ?></span></a> 
            </li>                     
            <li class="nav-item"> <a class="nav-link pb-3 ps-2 pe-2 pt-3" href="#" title="Account"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="1.25em" height="1.25em">
                        <g>
                            <path fill="none" d="M0 0h24v24H0z"></path>
                            <path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm-4.987-3.744A7.966 7.966 0 0 0 12 20c1.97 0 3.773-.712 5.167-1.892A6.979 6.979 0 0 0 12.16 16a6.981 6.981 0 0 0-5.147 2.256zM5.616 16.82A8.975 8.975 0 0 1 12.16 14a8.972 8.972 0 0 1 6.362 2.634 8 8 0 1 0-12.906.187zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8zm0-2a2 2 0 1 0 0-4 2 2 0 0 0 0 4z"></path>
                        </g>
                    </svg></a> 
            </li>                     
        </ul>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown-3" aria-controls="navbarNavDropdown-3" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse " id="navbarNavDropdown-3"> 
            <?php
                PG_Smart_Walker_Nav_Menu::$options['template'] = '<li class="nav-item {CLASSES}" id="{ID}"><a class="active nav-link px-lg-3 py-lg-4" aria-current="page" {ATTRS}>{TITLE}</a>
                                        </li>';
                wp_nav_menu( array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul class="%2$s ms-auto navbar-nav" id="%1$s">%3$s</ul>',
                    'walker' => new PG_Smart_Walker_Nav_Menu()
            ) ); ?> 
        </div>                 
    </div>             
</nav>
<section class="background-cover bg-dark pb-5 position-relative pt-5 text-white" style="background-image:url('https://images.unsplash.com/photo-1523381294911-8d3cead13475?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixid=MXwyMDkyMnwwfDF8c2VhcmNofDI0fHxmYXNoaW9uJTIwc2hvb3R8ZW58MHx8fA&ixlib=rb-1.2.1&q=80&w=1080');" background-image="<?php echo get_option( 'hero_bg' ); ?>">
    <div class="container pb-5 pt-5">
        <div class="pb-5 pt-5 row">
            <div class="col-lg-7 pb-5 pt-5">
                <p class="fw-normal h4 text-uppercase"><?php echo get_option( 'hero_st' ); ?></p>
                <h1 class="display-3 fw-bold mb-3"><?php echo get_option( 'hero_tt' ); ?></h1>
                <p class="lead mb-4"><?php echo get_option( 'hero_bd' ); ?></p>
                <a href="<?php echo esc_url( get_theme_mod( 'hero_btn_link' ) ); ?>" class="btn btn-light pb-2 ps-4 pe-4 pt-2"><?php echo get_option( 'hero_btn_label' ); ?></a>
            </div>
        </div>
    </div>
</section>
<main class="pb-5 pt-5">
    <section> 
        <div class="container"> 
            <div class="justify-content-center row"> 
                <div class="col-lg-4 col-md-6 py-3"> 
                    <div class="position-relative text-dark"> 
                        <img src="https://images.unsplash.com/photo-1467043237213-65f2da53396f?fp-z=3.75&fp-y=.5&fp-x=0&crop=focalpoint&fit=crop&w=280&h=200" class="img-fluid w-100" alt="Product image" width="280" height="200"/>
                        <div class="bottom-0 end-0  pb-5 pe-4 position-absolute ps-4 start-0">
                            <h2 class="h5 mb-3"><?php _e( 'Mens Summer Collection', 'bakkpress' ); ?></h2>
                            <a href="#" class="link-secondary small stretched-link text-decoration-none"><?php _e( 'View Collection', 'bakkpress' ); ?></a>
                        </div>                                 
                    </div>                             
                </div>
                <div class="col-lg-4 col-md-6 py-3"> 
                    <div class="position-relative text-dark"> 
                        <img src="https://images.unsplash.com/photo-1516762689617-e1cffcef479d?h=200&w=280&fit=crop&crop=focalpoint&fp-x=0&fp-y=.5&fp-z=3.75" class="img-fluid w-100" alt="Product image" width="280" height="200"/>
                        <div class="bottom-0 end-0  pb-5 pe-4 position-absolute ps-4 start-0">
                            <h2 class="h5 mb-3"><?php _e( 'Womens New Arrival', 'bakkpress' ); ?></h2>
                            <a href="#" class="link-secondary small stretched-link text-decoration-none"><?php _e( 'View Collection', 'bakkpress' ); ?></a>
                        </div>                                 
                    </div>                             
                </div>
                <div class="col-lg-4 col-md-6 py-3"> 
                    <div class="position-relative text-dark"> 
                        <img src="https://images.unsplash.com/photo-1556905055-8f358a7a47b2?h=200&w=280&fit=crop&crop=focalpoint&fp-x=0&fp-y=.5&fp-z=3" class="img-fluid w-100" alt="Product image" width="280" height="200"/>
                        <div class="bottom-0 end-0  pb-5 pe-4 position-absolute ps-4 start-0">
                            <h2 class="h5 mb-3"><?php _e( 'Womens New Arrival', 'bakkpress' ); ?></h2>
                            <a href="#" class="link-secondary small stretched-link text-decoration-none"><?php _e( 'View Collection', 'bakkpress' ); ?></a>
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </section>
    <section class=" pb-3 pt-3 text-center"> 
        <div class="container"> 
            <div class="bg-dark text-white">
                <div class="align-items-center row"> 
                    <div class="col-lg-6 pb-5 pb-lg-0 pt-5 pt-lg-0">
                        <div class="ps-5 pe-5">
                            <h2 class="fw-normal h5 mb-1 text-white-50"><?php _e( 'Grab your collection today', 'bakkpress' ); ?></h2>
                            <h3 class="fw-bold h1 mb-4"><?php _e( 'Seasonal Sale Upto 70% off', 'bakkpress' ); ?></h3>
                            <a href="#" class="btn btn-light pb-2 ps-4 pe-4 pt-2"><?php _e( 'Shop Collection', 'bakkpress' ); ?></a>
                        </div>                                 
                    </div>                             
                    <div class="col-lg-6"> 
                        <img src="https://images.unsplash.com/photo-1610970161790-57a21fc7d775?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=480&h=360&fit=crop" class="d-block img-fluid w-100" alt="CTA image" width="480" height="360"/> 
                    </div>                             
                </div>
            </div>                     
        </div>                 
    </section>
    <div class="container pb-4 pt-4">
        <div class="align-items-center row">
            <div class="col">
                <hr class="mb-0 mt-0"/> 
            </div>
            <div class="col-auto">
                <h2 class="fw-normal lead mb-0 text-dark"><?php _e( 'Popular this Week', 'bakkpress' ); ?></h2> 
            </div>
            <div class="col">
                <hr class="mb-0 mt-0"/> 
            </div>
        </div>
    </div>
    <section>
        <div class="container"> 
            <div class="justify-content-center row"> 
                <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                    <div> <a href="#" class="d-block mb-3"><img src="https://images.unsplash.com/photo-1598403031688-e7cfd2c222c4?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDM2NXx8dCUyMHNoaXJ0fGVufDB8fHw&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=500&h=700&fit=crop" class="img-fluid w-100" alt="Product image" width="500" height="700"/></a>
                        <a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php _e( 'Armani', 'bakkpress' ); ?></a>
                        <a href="#" class="link-dark text-decoration-none"><h3 class="h6"><?php _e( 'Borgonuovo T-shirt in viscose jersey', 'bakkpress' ); ?></h3></a>
                        <div class="">
                            <s class="me-2"><?php _e( '$ 95', 'bakkpress' ); ?></s>
                            <span class="h6 text-danger"><?php _e( '$ 75', 'bakkpress' ); ?></span>
                        </div>                                 
                    </div>                             
                </div>                         
                <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                    <div> <a href="#" class="d-block mb-3"><img src="https://images.unsplash.com/photo-1589747297079-6ab76138dcab?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDJ8fHQtc2hpcnR8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=500&h=700&fit=crop" class="img-fluid w-100" alt="Product image" width="500" height="700"/></a>
                        <a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php _e( 'Armani', 'bakkpress' ); ?></a>
                        <a href="#" class="link-dark text-decoration-none"><h3 class="h6"><?php _e( 'Borgonuovo T-shirt in viscose jersey', 'bakkpress' ); ?></h3></a>
                        <div>
                            <span class="me-2"><?php _e( '$ 100', 'bakkpress' ); ?></span>
                        </div>                                 
                    </div>                             
                </div>                         
                <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                    <div> <a href="#" class="d-block mb-3"><img src="https://images.unsplash.com/photo-1554526735-356bb52de232?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDIxfHx0LXNoaXJ0fGVufDB8fHw&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=500&h=700&fit=crop" class="img-fluid w-100" alt="Product image" width="500" height="700"/></a>
                        <a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php _e( 'Armani', 'bakkpress' ); ?></a>
                        <a href="#" class="link-dark text-decoration-none"><h3 class="h6"><?php _e( 'Borgonuovo T-shirt in viscose jersey', 'bakkpress' ); ?></h3></a>
                        <div>
                            <span class="me-2"><?php _e( '$ 95', 'bakkpress' ); ?></span>
                        </div>                                 
                    </div>                             
                </div>
                <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                    <div> <a href="#" class="d-block mb-3"><img src="https://images.unsplash.com/photo-1503342217505-b0a15ec3261c?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDM0OXx8dC1zaGlydHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=500&h=700&fit=crop" class="img-fluid w-100" alt="Product image" width="500" height="700"/></a>
                        <a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php _e( 'Armani', 'bakkpress' ); ?></a>
                        <a href="#" class="link-dark text-decoration-none"><h3 class="h6"><?php _e( 'Borgonuovo T-shirt in viscose jersey', 'bakkpress' ); ?></h3></a>
                        <div>
                            <span class="me-2"><?php _e( '$ 75', 'bakkpress' ); ?></span>
                        </div>                                 
                    </div>                             
                </div>
                <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                    <div> <a href="#" class="d-block mb-3"><img src="https://images.unsplash.com/photo-1605295982505-556d4026a930?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDg4fHx0LXNoaXJ0fGVufDB8fHw&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=500&h=700&fit=crop" class="img-fluid w-100" alt="Product image" width="500" height="700"/></a>
                        <a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php _e( 'Armani', 'bakkpress' ); ?></a>
                        <a href="#" class="link-dark text-decoration-none"><h3 class="h6"><?php _e( 'Borgonuovo T-shirt in viscose jersey', 'bakkpress' ); ?></h3></a>
                        <div>
                            <span class="me-2"><?php _e( '$ 115', 'bakkpress' ); ?></span>
                        </div>                                 
                    </div>                             
                </div>
                <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                    <div> <a href="#" class="d-block mb-3"><img src="https://images.unsplash.com/photo-1604908695926-17ee04a3c54f?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE4M3x8dC1zaGlydHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=500&h=700&fit=crop" class="img-fluid w-100" alt="Product image" width="500" height="700"/></a>
                        <a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php _e( 'Armani', 'bakkpress' ); ?></a>
                        <a href="#" class="link-dark text-decoration-none"><h3 class="h6"><?php _e( 'Borgonuovo T-shirt in viscose jersey', 'bakkpress' ); ?></h3></a>
                        <div>
                            <s class="me-2"><?php _e( '$ 125', 'bakkpress' ); ?></s>
                            <span class="h6 text-danger"><?php _e( '$ 100', 'bakkpress' ); ?></span>
                        </div>                                 
                    </div>                             
                </div>
                <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                    <div> <a href="#" class="d-block mb-3"><img src="https://images.unsplash.com/photo-1554971052-d465be00ca02?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDIyNHx8dC1zaGlydHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=500&h=700&fit=crop" class="img-fluid w-100" alt="Product image" width="500" height="700"/></a>
                        <a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php _e( 'Armani', 'bakkpress' ); ?></a>
                        <a href="#" class="link-dark text-decoration-none"><h3 class="h6"><?php _e( 'Borgonuovo T-shirt in viscose jersey', 'bakkpress' ); ?></h3></a>
                        <div>
                            <span class="me-2"><?php _e( '$ 95', 'bakkpress' ); ?></span>
                        </div>                                 
                    </div>                             
                </div>
                <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                    <div> <a href="#" class="d-block mb-3"><img src="https://images.unsplash.com/photo-1600823722907-43f78d7ba93f?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDIyOHx8dC1zaGlydHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=500&h=700&fit=crop" class="img-fluid w-100" alt="Product image" width="500" height="700"/></a>
                        <a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php _e( 'Armani', 'bakkpress' ); ?></a>
                        <a href="#" class="link-dark text-decoration-none"><h3 class="h6"><?php _e( 'Borgonuovo T-shirt in viscose jersey', 'bakkpress' ); ?></h3></a>
                        <div>
                            <span class="me-2"><?php _e( '$ 100', 'bakkpress' ); ?></span>
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </section>
    <section class="pb-4 pt-4"> 
        <div class="container"> 
            <div class="justify-content-center row"> 
                <div class="col-md-6 py-3"> 
                    <div class="position-relative text-dark"> 
                        <img src="https://images.unsplash.com/flagged/photo-1556637640-2c80d3201be8?fp-z=2.25&fp-y=.5&fp-x=.5&crop=focalpoint&fit=crop&w=450&h=300" class="img-fluid w-100" alt="Product image" width="450" height="300"/>
                        <div class="bottom-0 end-0  pb-5 pe-4 position-absolute ps-4 start-0">
                            <h2 class="h4 mb-3"><?php _e( 'Unique Sneakers for Men', 'bakkpress' ); ?></h2>
                            <a href="#" class="link-dark stretched-link text-decoration-none"><?php _e( 'View Collection', 'bakkpress' ); ?></a>
                        </div>                                 
                    </div>                             
                </div>
                <div class="col-md-6 py-3"> 
                    <div class="position-relative text-dark"> 
                        <img src="https://images.unsplash.com/photo-1534534734151-83bc15801803?h=300&w=450&fit=crop&crop=focalpoint&fp-x=.5&fp-y=.5&fp-z=2.25" class="img-fluid w-100" alt="Product image" width="450" height="300"/>
                        <div class="bottom-0 end-0  pb-5 pe-4 position-absolute ps-4 start-0">
                            <h2 class="h4 mb-3"><?php _e( 'Latest Arrival for Women', 'bakkpress' ); ?></h2>
                            <a href="#" class="link-dark stretched-link text-decoration-none"><?php _e( 'View Collection', 'bakkpress' ); ?></a>
                        </div>                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </section>
    <div class="container pb-4 pt-4">
        <div class="align-items-center row">
            <div class="col">
                <hr class="mb-0 mt-0"/> 
            </div>
            <div class="col-auto">
                <h2 class="fw-normal lead mb-0 text-dark"><?php _e( 'Latest Arrival', 'bakkpress' ); ?></h2> 
            </div>
            <div class="col">
                <hr class="mb-0 mt-0"/> 
            </div>
        </div>
    </div>
    <section>
        <div class="container"> 
            <div class="justify-content-center row"> 
                <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                    <div> <a href="#" class="d-block mb-3"><img src="https://images.unsplash.com/photo-1553798397-0aee146267a1?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDQ4fHx0LXNoaXJ0fGVufDB8fHw&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=500&h=700&fit=crop" class="img-fluid w-100" alt="Product image" width="500" height="700"/></a>
                        <a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php _e( 'Armani', 'bakkpress' ); ?></a>
                        <a href="#" class="link-dark text-decoration-none"><h3 class="h6"><?php _e( 'Borgonuovo T-shirt in viscose jersey', 'bakkpress' ); ?></h3></a>
                        <div class="">
                            <s class="me-2"><?php _e( '$ 95', 'bakkpress' ); ?></s>
                            <span class="h6 text-danger"><?php _e( '$ 75', 'bakkpress' ); ?></span>
                        </div>                                 
                    </div>                             
                </div>                         
                <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                    <div> <a href="#" class="d-block mb-3"><img src="https://images.unsplash.com/photo-1569033083669-a63ea13bc769?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDM2NHx8dC1zaGlydHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=500&h=700&fit=crop" class="img-fluid w-100" alt="Product image" width="500" height="700"/></a>
                        <a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php _e( 'Armani', 'bakkpress' ); ?></a>
                        <a href="#" class="link-dark text-decoration-none"><h3 class="h6"><?php _e( 'Borgonuovo T-shirt in viscose jersey', 'bakkpress' ); ?></h3></a>
                        <div>
                            <span class="me-2"><?php _e( '$ 100', 'bakkpress' ); ?></span>
                        </div>                                 
                    </div>                             
                </div>                         
                <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                    <div> <a href="#" class="d-block mb-3"><img src="https://images.unsplash.com/photo-1611986773179-7d14794ede62?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDQ2Nnx8dCUyMHNoaXJ0fGVufDB8fHw&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=500&h=700&fit=crop" class="img-fluid w-100" alt="Product image" width="500" height="700"/></a>
                        <a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php _e( 'Armani', 'bakkpress' ); ?></a>
                        <a href="#" class="link-dark text-decoration-none"><h3 class="h6"><?php _e( 'Borgonuovo T-shirt in viscose jersey', 'bakkpress' ); ?></h3></a>
                        <div>
                            <span class="me-2"><?php _e( '$ 95', 'bakkpress' ); ?></span>
                        </div>                                 
                    </div>                             
                </div>
                <div class="col-6 col-lg-3 col-md-4 pb-3 pt-3"> 
                    <div> <a href="#" class="d-block mb-3"><img src="https://images.unsplash.com/photo-1503443207922-dff7d543fd0e?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDcwOXx8dC1zaGlydHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=500&h=700&fit=crop" class="img-fluid w-100" alt="Product image" width="500" height="700"/></a>
                        <a href="#" class="d-inline-block link-secondary mb-2 small text-decoration-none"><?php _e( 'Armani', 'bakkpress' ); ?></a>
                        <a href="#" class="link-dark text-decoration-none"><h3 class="h6"><?php _e( 'Borgonuovo T-shirt in viscose jersey', 'bakkpress' ); ?></h3></a>
                        <div>
                            <span class="me-2"><?php _e( '$ 75', 'bakkpress' ); ?></span>
                        </div>                                 
                    </div>                             
                </div>                         
            </div>
            <div class="pb-4 pt-4 text-center">
                <a href="#" class="btn btn-dark pb-2 ps-4 pe-4 pt-2"><?php _e( 'View More', 'bakkpress' ); ?></a>
            </div>                     
        </div>                 
    </section>
    <section class="bg-light mb-4 mt-4 pb-5 pt-5 text-center"> 
        <div class="container pb-3 position-relative pt-3"> 
            <div class="row"> 
                <div class="col-lg-8 ms-auto me-auto"> 
                    <div id="carousel5" class="carousel slide" data-bs-ride="carousel"> 
                        <div class="carousel-inner"> 
                            <div class="carousel-item active"> 
                                <img src="https://images.unsplash.com/photo-1517101724602-c257fe568157?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDZ8fHBhcnJvdHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=360&h=360&fit=crop" class="img-fluid mb-3 rounded-circle testimonial_img" width="120" height="120" alt="User image"/>
                                <p class="mb-4"><?php _e( 'Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.', 'bakkpress' ); ?></p>
                                <h2 class="fw-bold h5 mb-0 text-dark"><?php _e( 'Kathryn Murphy', 'bakkpress' ); ?></h2>
                                <p class="small"><?php _e( 'Chief Technology Officer', 'bakkpress' ); ?></p> 
                            </div>
                            <div class="carousel-item"> 
                                <img src="https://images.unsplash.com/photo-1537151625747-768eb6cf92b2?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=360&h=360&fit=crop" class="img-fluid mb-3 rounded-circle testimonial_img" width="120" height="120" alt="User image"/>
                                <p class="mb-4"><?php _e( 'Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.', 'bakkpress' ); ?></p>
                                <h2 class="fw-bold h5 mb-0 text-dark"><?php _e( 'Dianne Russell', 'bakkpress' ); ?></h2>
                                <p class="small"><?php _e( 'Chief Technology Officer', 'bakkpress' ); ?></p> 
                            </div>
                            <div class="carousel-item"> 
                                <img src="https://images.unsplash.com/photo-1574158622682-e40e69881006?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDd8fGNhdHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=360&h=360&fit=crop" class="img-fluid mb-3 rounded-circle testimonial_img" width="120" height="120" alt="User image"/>
                                <p class="mb-4"><?php _e( 'Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt nisi.', 'bakkpress' ); ?></p>
                                <h2 class="fw-bold h5 mb-0 text-dark"><?php _e( 'Darrell Steward', 'bakkpress' ); ?></h2>
                                <p class="small"><?php _e( 'Chief Technology Officer', 'bakkpress' ); ?></p> 
                            </div>                                     
                        </div>
                        <ol class="carousel-indicators position-relative"> 
                            <li data-bs-target="#carousel5" data-bs-slide-to="0" class="active bg-dark"></li>                                     
                            <li data-bs-target="#carousel5" data-bs-slide-to="1" class="bg-dark"></li>                                     
                            <li data-bs-target="#carousel5" data-bs-slide-to="2" class="bg-dark"></li>                                     
                        </ol>                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </section>
    <section class="pb-5 pt-5 text-center">
        <div class="container"> 
            <div class="justify-content-center row"> 
                <div class="col-lg-4 col-sm-6 pb-3 pt-3">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="3rem" height="3rem" class="mb-3 text-dark">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"/>
                                <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"/>
                            </g>
                        </svg>
                        <h2 class="fw-bold h5 mb-3 text-dark"><?php _e( 'Free Shipping', 'bakkpress' ); ?></h2>
                        <p class="mb-0"><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod', 'bakkpress' ); ?></p>
                    </div>                             
                </div>
                <div class="col-lg-4 col-sm-6 pb-3 pt-3">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="3rem" height="3rem" class="mb-3 text-dark">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"/>
                                <path d="M3.783 2.826L12 1l8.217 1.826a1 1 0 0 1 .783.976v9.987a6 6 0 0 1-2.672 4.992L12 23l-6.328-4.219A6 6 0 0 1 3 13.79V3.802a1 1 0 0 1 .783-.976zM12 13.5l2.939 1.545-.561-3.272 2.377-2.318-3.286-.478L12 6l-1.47 2.977-3.285.478 2.377 2.318-.56 3.272L12 13.5z"/>
                            </g>
                        </svg>
                        <h2 class="fw-bold h5 mb-3 text-dark"><?php _e( '100% Authentic', 'bakkpress' ); ?></h2>
                        <p class="mb-0"><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod', 'bakkpress' ); ?></p>
                    </div>                             
                </div>
                <div class="col-lg-4 col-sm-6 pb-3 pt-3">
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" width="3rem" height="3rem" class="mb-3 text-dark">
                            <g>
                                <path fill="none" d="M0 0h24v24H0z"/>
                                <path d="M12 2c5.523 0 10 4.477 10 10s-4.477 10-10 10S2 17.523 2 12 6.477 2 12 2zM7.197 14.682l-2.175 2.174a8.549 8.549 0 0 0 1.818 1.899l.305.223 2.173-2.175a5.527 5.527 0 0 1-1.98-1.883l-.14-.238zm9.606 0a5.527 5.527 0 0 1-1.883 1.98l-.238.14 2.174 2.176a8.549 8.549 0 0 0 1.899-1.818l.223-.304-2.175-2.174zM12 8a4 4 0 1 0 0 8 4 4 0 0 0 0-8zM7.145 5.022a8.549 8.549 0 0 0-1.9 1.818l-.223.305 2.175 2.173a5.527 5.527 0 0 1 1.883-1.98l.238-.14-2.173-2.176zm9.71 0l-2.173 2.175a5.527 5.527 0 0 1 1.98 1.883l.14.238 2.176-2.173a8.549 8.549 0 0 0-1.818-1.9l-.304-.223z"/>
                            </g>
                        </svg>
                        <h2 class="fw-bold h5 mb-3 text-dark"><?php _e( '24/7 Online Support', 'bakkpress' ); ?></h2>
                        <p class="mb-0"><?php _e( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit eiusmod', 'bakkpress' ); ?></p>
                    </div>                             
                </div>                         
            </div>                     
        </div>
    </section>
    <div class="container pb-4 pt-4">
        <div class="align-items-center row">
            <div class="col">
                <hr class="mb-0 mt-0"/> 
            </div>
            <div class="col-auto">
                <h2 class="fw-normal lead mb-0 text-dark"><?php _e( 'From Our Blog', 'bakkpress' ); ?></h2> 
            </div>
            <div class="col">
                <hr class="mb-0 mt-0"/> 
            </div>
        </div>
    </div>
    <section>
        <div class="container"> 
            <div class="justify-content-center row"> 
                <div class="col-lg-4 col-md-6 pb-3 pt-3"> 
                    <div class="card h-100">
                        <a href="#" class="d-block"><img src="https://images.unsplash.com/photo-1508672019048-805c876b67e2?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDJ8fHRyYXZlbHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=700&h=480&fit=crop" class="card-img-top img-fluid" alt="Blog image" width="700" height="480"/></a>
                        <div class="card-body">
                            <a href="#" class="link-dark text-decoration-none"><h2 class="card-title h5"><?php _e( 'Relaxing and observing the mountain reflection in a lake', 'bakkpress' ); ?></h2></a>
                            <p class="card-text"><?php _e( 'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.', 'bakkpress' ); ?></p>
                        </div>
                        <div class="align-items-center card-footer d-flex justify-content-between small">
                            <a href="#" class="align-items-center d-flex link-dark text-decoration-none"><img src="https://images.unsplash.com/photo-1537151625747-768eb6cf92b2?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="me-2 rounded-circle" width="40" height="40" alt="Author image"/><div>
                                    <h3 class="h6 mb-0"><?php _e( 'Dianne Russell', 'bakkpress' ); ?></h3>
                                    <p class="mb-0 text-secondary"><?php _e( '10 August 2020', 'bakkpress' ); ?></p>
                                </div></a>
                            <span><?php _e( '6 min', 'bakkpress' ); ?></span>
                        </div>
                    </div>                             
                </div>
                <div class="col-lg-4 col-md-6 pb-3 pt-3"> 
                    <div class="card h-100">
                        <a href="#" class="d-block"><img src="https://images.unsplash.com/photo-1499363536502-87642509e31b?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE2fHx0cmF2ZWx8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=700&h=480&fit=crop" class="card-img-top img-fluid" alt="Blog image" width="700" height="480"/></a>
                        <div class="card-body">
                            <a href="#" class="link-dark text-decoration-none"><h2 class="card-title h5"><?php _e( 'How to enjoy running your business?', 'bakkpress' ); ?></h2></a>
                            <p class="card-text"><?php _e( 'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.', 'bakkpress' ); ?></p>
                        </div>
                        <div class="align-items-center card-footer d-flex justify-content-between small">
                            <a href="#" class="align-items-center d-flex link-dark text-decoration-none"><img src="https://images.unsplash.com/photo-1574158622682-e40e69881006?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDd8fGNhdHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="me-2 rounded-circle" width="40" height="40" alt="Author image"/><div>
                                    <h3 class="h6 mb-0"><?php _e( 'Kathryn Murphy', 'bakkpress' ); ?></h3>
                                    <p class="mb-0 text-secondary"><?php _e( '10 August 2020', 'bakkpress' ); ?></p>
                                </div></a>
                            <span><?php _e( '8 min', 'bakkpress' ); ?></span>
                        </div>
                    </div>                             
                </div>
                <div class="col-lg-4 col-md-6 pb-3 pt-3"> 
                    <div class="card h-100">
                        <a href="#" class="d-block"><img src="https://images.unsplash.com/photo-1471506480208-91b3a4cc78be?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDUyfHx0cmF2ZWx8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=700&h=480&fit=crop" class="card-img-top img-fluid" alt="Blog image" width="700" height="480"/></a>
                        <div class="card-body">
                            <a href="#" class="link-dark text-decoration-none"><h2 class="card-title h5"><?php _e( 'How to notice colors when cycling over a mountain pass?', 'bakkpress' ); ?></h2></a>
                            <p class="card-text"><?php _e( 'Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit.', 'bakkpress' ); ?></p>
                        </div>
                        <div class="align-items-center card-footer d-flex justify-content-between small">
                            <a href="#" class="align-items-center d-flex link-dark text-decoration-none"><img src="https://images.unsplash.com/photo-1517101724602-c257fe568157?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDZ8fHBhcnJvdHxlbnwwfHx8&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="me-2 rounded-circle" width="40" height="40" alt="Author image"/><div>
                                    <h3 class="h6 mb-0"><?php _e( 'Darrell Steward', 'bakkpress' ); ?></h3>
                                    <p class="mb-0 text-secondary"><?php _e( '10 August 2020', 'bakkpress' ); ?></p>
                                </div></a>
                            <span><?php _e( '5 min', 'bakkpress' ); ?></span>
                        </div>
                    </div>                             
                </div>                         
            </div>                     
        </div>
    </section>
    <div class="container mt-5 pb-4 pt-4">
        <hr class="mb-0 mt-0"/>
    </div>
    <section class="pb-5 pt-5 text-center"> 
        <div class="container pb-4 pt-4"> 
            <div class="row"> 
                <div class="col-lg-8 ms-auto me-auto py-3"> 
                    <h2 class="text-dark"><?php _e( 'Join our newsletter and get 15% off', 'bakkpress' ); ?></h2> 
                    <p class="mb-5 text-secondary"><?php _e( 'Sign up for our newsletter to receive updates and exclusive offers', 'bakkpress' ); ?></p> 
                    <div class="col-md-9 col-xl-8 ms-auto me-auto"> 
                        <form> 
                            <div class="bg-white border input-group overflow-hidden p-1">
                                <input type="text" class="border-0 form-control pe-3 ps-3" placeholder="Enter email..." aria-label="Recipient's email" aria-describedby="newsletter-submit"/>
                                <button class="btn btn-dark pb-2 pe-4 ps-4 pt-2 rounded-0" type="button" id="newsletter-submit">
                                    <?php _e( 'Sign Up', 'bakkpress' ); ?>
                                </button>
                            </div>
                        </form>                                 
                    </div>                             
                </div>                         
            </div>                     
        </div>                 
    </section>
</main>
<div class="container-fluid p-0">
    <div class="g-0 row">
        <img src="https://images.unsplash.com/photo-1524738258074-f8125c6a7588?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="col-2 img-fluid" alt="Instagram image" width="400" height="400"/>
        <img src="https://images.unsplash.com/photo-1532453288672-3a27e9be9efd?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="col-2 img-fluid" alt="Instagram image" width="400" height="400"/>
        <img src="https://images.unsplash.com/photo-1477044545293-98b9221de30a?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="col-2 img-fluid" alt="Instagram image" width="400" height="400"/>
        <img src="https://images.unsplash.com/photo-1603217192634-61068e4d4bf9?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="col-2 img-fluid" alt="Instagram image" width="400" height="400"/>
        <img src="https://images.unsplash.com/photo-1583001308455-e5d48b880c67?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="col-2 img-fluid" alt="Instagram image" width="400" height="400"/>
        <img src="https://images.unsplash.com/photo-1579362094443-5d73793e4d3c?ixid=MXwyMDkyMnwwfDF8c2VhcmNofDE5fHxkb2d8ZW58MHx8fA&ixlib=rb-1.2.1q=85&fm=jpg&crop=faces&cs=srgb&w=400&h=400&fit=crop" class="col-2 img-fluid" alt="Instagram image" width="400" height="400"/>
    </div>
</div>
<footer class="bg-dark pt-5 text-white"> 
    <div class="container"> 
        <div class="row"> 
            <div class="col-xl-4 py-3"> <a href="#" class="d-inline-block fw-bold h2 link-light mb-4 text-decoration-none"><?php _e( 'PG Shop', 'bakkpress' ); ?></a> 
                <p class="mb-3"> <?php _e( 'Duis pharetra venenatis felis, ut tincidunt ipsum consequat nec. Fusce et porttitor libero, eu aliquam nisi. Nam finibus ullamcorper semper.', 'bakkpress' ); ?></p> 
                <div class="mb-4"> <a href="#" class="link-light text-decoration-none"><?php _e( '+1 234 567-890', 'bakkpress' ); ?></a> <br/> <a href="#" class="link-light text-decoration-none"><?php _e( 'hello@company.com', 'bakkpress' ); ?></a> 
                </div>                         
            </div>                     
            <div class="col-md-3 col-xl-2 py-3"> 
                <h2 class="fw-normal h5 mb-4 text-uppercase text-white"><?php _e( 'About', 'bakkpress' ); ?></h2> 
                <ul class="list-unstyled"> 
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none"><?php _e( 'Get Quote', 'bakkpress' ); ?></a> 
                    </li>                             
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none"><?php _e( 'Enterprise Plan', 'bakkpress' ); ?></a> 
                    </li>                             
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none"><?php _e( 'Become an Affiliate', 'bakkpress' ); ?></a> 
                    </li>                             
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none"><?php _e( 'Our Portfolio', 'bakkpress' ); ?></a> 
                    </li>                             
                </ul>                         
            </div>                     
            <div class="col-md-3 col-xl-2 py-3"> 
                <h2 class="fw-normal h5 mb-4 text-uppercase text-white"><?php _e( 'Services', 'bakkpress' ); ?></h2> 
                <ul class="list-unstyled"> 
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none"><?php _e( 'Web Design', 'bakkpress' ); ?></a> 
                    </li>                             
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none"><?php _e( 'Web Development', 'bakkpress' ); ?></a> 
                    </li>                             
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none"><?php _e( 'WordPress', 'bakkpress' ); ?></a> 
                    </li>                             
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none"><?php _e( 'Digital Marketing', 'bakkpress' ); ?></a> 
                    </li>                             
                    <li class="mb-3"> <a href="#" class="link-light text-decoration-none"><?php _e( 'Content Writing', 'bakkpress' ); ?></a> 
                    </li>                             
                </ul>                         
            </div>                     
            <div class="col-md-6 col-xl-4 py-3"> 
                <h2 class="fw-normal h5 mb-4 text-uppercase text-white"><?php _e( 'Subscribe', 'bakkpress' ); ?></h2>
                <p class="mb-3"><?php _e( 'Subscribe to our newsletter and get exclusive updates directly in your inbox.', 'bakkpress' ); ?></p>
                <form class="mb-4"> 
                    <div class="bg-white border input-group overflow-hidden p-1">
                        <input type="text" class="border-0 form-control pe-3 ps-3" placeholder="Enter email..." aria-label="Recipient's email" aria-describedby="newsletter-submit2"/>
                        <button class="btn btn-dark pb-2 ps-4 pe-4 pt-2 rounded-0" type="button" id="newsletter-submit2" aria-label="submit">
                            <svg viewBox="0 0 24 24" fill="currentColor" class="d-inline-block" height="16" width="16">
                                <path d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                            </svg>                                     
                        </button>
                    </div>
                </form>
                <h2 class="fw-normal h5 mb-3 text-uppercase text-white"><?php _e( 'Get Social', 'bakkpress' ); ?></h2>
                <div class="d-inline-flex flex-wrap"> <a href="#" class="link-light p-1" aria-label="facebook link"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                            <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/> 
                        </svg> </a> <a href="#" class="link-light p-1" aria-label="twitter link"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                            <path d="M22.162 5.656a8.384 8.384 0 0 1-2.402.658A4.196 4.196 0 0 0 21.6 4c-.82.488-1.719.83-2.656 1.015a4.182 4.182 0 0 0-7.126 3.814 11.874 11.874 0 0 1-8.62-4.37 4.168 4.168 0 0 0-.566 2.103c0 1.45.738 2.731 1.86 3.481a4.168 4.168 0 0 1-1.894-.523v.052a4.185 4.185 0 0 0 3.355 4.101 4.21 4.21 0 0 1-1.89.072A4.185 4.185 0 0 0 7.97 16.65a8.394 8.394 0 0 1-6.191 1.732 11.83 11.83 0 0 0 6.41 1.88c7.693 0 11.9-6.373 11.9-11.9 0-.18-.005-.362-.013-.54a8.496 8.496 0 0 0 2.087-2.165z"/> 
                        </svg> </a> <a href="#" class="link-light p-1" aria-label="instagram link"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                            <path d="M12 2c2.717 0 3.056.01 4.122.06 1.065.05 1.79.217 2.428.465.66.254 1.216.598 1.772 1.153a4.908 4.908 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428.047 1.066.06 1.405.06 4.122 0 2.717-.01 3.056-.06 4.122-.05 1.065-.218 1.79-.465 2.428a4.883 4.883 0 0 1-1.153 1.772 4.915 4.915 0 0 1-1.772 1.153c-.637.247-1.363.415-2.428.465-1.066.047-1.405.06-4.122.06-2.717 0-3.056-.01-4.122-.06-1.065-.05-1.79-.218-2.428-.465a4.89 4.89 0 0 1-1.772-1.153 4.904 4.904 0 0 1-1.153-1.772c-.248-.637-.415-1.363-.465-2.428C2.013 15.056 2 14.717 2 12c0-2.717.01-3.056.06-4.122.05-1.066.217-1.79.465-2.428a4.88 4.88 0 0 1 1.153-1.772A4.897 4.897 0 0 1 5.45 2.525c.638-.248 1.362-.415 2.428-.465C8.944 2.013 9.283 2 12 2zm0 5a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm6.5-.25a1.25 1.25 0 0 0-2.5 0 1.25 1.25 0 0 0 2.5 0zM12 9a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/> 
                        </svg> </a> <a href="#" class="link-light p-1" aria-label="linkedin link"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                            <path d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"/> 
                        </svg> </a> <a href="#" class="link-light p-1" aria-label="youtube link"> <svg viewBox="0 0 24 24" fill="currentColor" width="20" height="20"> 
                            <path d="M21.543 6.498C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5l6-3.5-6-3.5v7z"/> 
                        </svg> </a> 
                </div>                         
            </div>                     
        </div>                 
        <div class="pb-3 pt-3 small"> 
            <hr class="border-secondary mt-0"/> 
            <div class="align-items-center row">
                <div class="col-md pb-2 pt-2">
                    <p class="mb-0"><?php _e( '&copy; 2002 - 2021 | All Rights Reserved - Company Name', 'bakkpress' ); ?></p>
                </div>
                <div class="col-md-auto pb-2 pt-2">
                    <a href="#" class="link-light text-decoration-none"><?php _e( 'Privacy Policy', 'bakkpress' ); ?></a> | <a href="#" class="link-light text-decoration-none"><?php _e( 'Terms of Use', 'bakkpress' ); ?></a>
                </div>
            </div>                     
        </div>                 
    </div>             
</footer>        

<?php get_footer(); ?>