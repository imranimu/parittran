<?php
/* 
Template Name: Home-Page
*/

get_header(); ?>

    <!-- <section class="bannerSection">
		<div class="auto-container">
			<div class="HomeMainSlider owl-carousel owl-theme">
				<div class="item">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/banner-1.jpg" alt="Image 1">               
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/banner-2.jpg" alt="Image 2">               
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/banner-3.jpg" alt="Image 3">               
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/banner-4.jpg" alt="Image 3">               
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/banner-5.jpg" alt="Image 3">               
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/banner-6.jpg" alt="Image 3">               
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/banner-7.jpg" alt="Image 3">               
				</div>
				<div class="item">
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/banner/banner-8.jpg" alt="Image 3">               
				</div>
			</div>
		</div>
	</section>     -->

    <section class="bannerSection">
		<div class="auto-container">
			<div class="HomeMainSlider owl-carousel owl-theme">
                <?php
                    $args = array(
                        'post_type' => 'slider',
                        'post_status' => 'publish',
                        'posts_per_page' => -1
                    );                              
                    $query = new WP_Query( $args );                              
                    if ( $query->have_posts() ) {
                        while ( $query->have_posts() ) {
                            $query->the_post();
                            $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

                            if($featured_img_url){
                                $thum = $featured_img_url;
                            }else{
                                $thum = 'https://via.placeholder.com/1920x810.png?text=Slider+Image';
                            }
                            ?>
                            <div class="item">
                                <img src="<?php echo $thum; ?>" alt="<?php echo get_the_title(); ?>">               
                            </div>
                            <?php
                        }
                        wp_reset_postdata();
                    }
                ?>  
			</div>
		</div>
	</section> 

	<section class="marquee-section my-4">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-12">
                    <h4>Envet News</h4>
                    <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 6
                            );                              
                            $query = new WP_Query( $args );                              
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    ?>
                                    <a href="<?php echo get_the_permalink();?>"><?php echo get_the_title(); ?></a>
                                    <?php
                                }
                                wp_reset_postdata();
                            }
                        ?>                              
                    </marquee>
                </div>
            </div>
        </div>
    </section>

    <!-- about-section -->
    <section class="about-section bg-color-1 p_relative sec-pad">
        <div class="auto-container">
            <div class="row align-items-center clearfix">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content_block_one">
                        <div class="content-box p_relative mr_30">
                            <div class="sec-title mb_40">
                                <span class="sub-title">About Parittran</span>
                                <h2>Our Vision Is to build a just Society</h2>
                            </div>
                            <div class="text mb_35">
                                <p style="text-align: justify;">In 1993 a group of dalit students named Dalit Students' Association was formed. Now, it is named 'Parittran', a Bengali word meaning 'Liberation or Salvation'. It is always a learning organization. Parittran is a promise, Parittran is a movement of the Dalits, for the Dalits and by the Dalits. Parittran It is a non-government organization, the first dalit social action group in Bangladesh. This is a community-based organization, and network that work to secure social change and protect the rights of marginalized people. Parittran is committed towards building a strong line of leadership for the marginalized Movement through advocacy and networking.</p>
                                <p style="text-align: justify;">Since working for long, Parittran has achieved the sustainable changes of dalit and marginalized people and the communities in Bangladesh.</p>
                            </div>
                            <div class="inner mb_45">
                                <div class="row clearfix">
                                    <div class="col-lg-4 col-md-4 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="upper">
                                                <a href="<?php echo home_url();?>/vision">
                                                    <div class="icon-box"><i class="icon-4"></i></div>
                                                    <h3>Vision</h3>
                                                </a>
                                            </div>
                                            <!-- <p>Amet minim mollit no deserunt ulamco sit enim.</p> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="upper">
                                                <a href="<?php echo home_url();?>/mission">
                                                    <div class="icon-box"><i class="icon-5"></i></div>
                                                    <h3>Mission</h3>
                                                </a>
                                            </div>
                                            <!-- <p>Amet minim mollit no deserunt ulamco sit enim.</p> -->
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="upper">
                                                <a href="<?php echo home_url();?>/objectives">
                                                    <div class="icon-box"><i class="icon-3"></i></div>
                                                    <h3>Objectives</h3>
                                                </a>
                                            </div>
                                            <!-- <p>Amet minim mollit no deserunt ulamco sit enim.</p> -->
                                        </div>
                                    </div>
                                </div>
                            </div>                                 
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div class="image_block_one">
                        <div class="image-box p_relative d_block ml_40">
                            <div class="shape">
                                <div class="shape-1" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/shape/shape-1.png);"></div>
                                <div class="shape-2" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/shape/shape-1.png);"></div>
                                <div class="shape-3"></div>
                            </div>
                            <figure class="image image-1"><img src="<?php echo get_template_directory_uri() ?>/assets/images/resource/about-1.jpg" alt=""></figure>
                            <figure class="image image-2"><img src="<?php echo get_template_directory_uri() ?>/assets/images/resource/about-2.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-section end --> 

    <!-- news-section -->
    <section class="news-section sec-pad">
        <div class="auto-container">
            <div class="row">
                <div class="col-md-8 mb-3">
                    <div class="sec-title mb-3">
                        <h2 class="sub-title">Event News</h2> 
                    </div>
                    <div class="row clearfix">
                        <?php
                            $args = array(
                                'post_type' => 'post',
                                'post_status' => 'publish',
                                'posts_per_page' => 6
                            );                              
                            $query = new WP_Query( $args );                              
                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();

                                    get_template_part( 'template-parts/content', 'block' );

                                }
                                wp_reset_postdata();
                            }
                        ?>                           
                    </div>

                    <div class="sec-title mb-3">
                        <h2 class="sub-title">Youtube Videos</h2> 
                    </div>

                    <div class="row clearfix">
                        <div class="col-md-6 mb-3">                                
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="100%" height="300" type="text/html" src="https://www.youtube.com/embed/tO-bNurb5hk?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"></iframe>
                        </div>
                        <div class="col-md-6 mb-3">                                
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="100%" height="300" type="text/html" src="https://www.youtube.com/embed/2xpgNmJ3FlU?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"></iframe>
                        </div>
                        <div class="col-md-6 mb-3">                                
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="100%" height="300" type="text/html" src="https://www.youtube.com/embed/iioFw9697Dw?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"></iframe>
                        </div>
                        <div class="col-md-6 mb-3 text-right">   

                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"width="100%" height="300" type="text/html" src="https://www.youtube.com/embed/IkC46xZ6YSw?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com"></iframe>

                            <a href="https://www.youtube.com/@parittran1926" target="_blank" class="btn btn-danger">View All on Youtube</a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 mb-3">
                    <div class="default-sidebar blog-sidebar">    
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Message From ED</h3>
                            </div>
                            <div class="widget-content">
                                <div class="EDMsg">
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/images/headshot.jpg" alt="Message From ED"> 

                                    <p>In Bangladesh Human Rights not only are distended but also are denied for historical and cultural reasons to Dalit communities. All these disruptions in Bangladesh are directly or indirectly linked to violence. <a href="<?php echo home_url();?>/message-from-executive-director">Read More ...</a></p>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Notice Board</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="#">Job Circular</a></li>
                                    <li><a href="#">EOI</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Help Desk</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="tel:+8801720587100"><i class="icon-19"></i> +8801720587100</a></li>                                         
                                </ul> 
                            </div>
                        </div>
                        <div class="sidebar-widget post-widget">
                            <div class="widget-title">
                                <h3>Archived</h3>
                            </div>
                            <div class="post-inner">
                                <div class="post">
                                    <figure class="post-thumb"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/news/post-1.jpg" alt=""></a></figure>
                                    <h5><a href="#">Our Donation is Hope for Poor Childrens</a></h5>
                                    <span class="post-date">Apr 17, 2022</span>
                                </div>
                                <div class="post">
                                    <figure class="post-thumb"><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/news/post-2.jpg" alt=""></a></figure>
                                    <h5><a href="#">Our Donation is Hope for Poor Childrens</a></h5>
                                    <span class="post-date">Apr 16, 2022</span>
                                </div> 
                            </div>
                        </div>  
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Right to Information</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="#">Designated Officer</a></li>
                                    <li><a href="#">Awareness Materials</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Safeguarding</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="#">Safeguarding Focal</a></li>
                                    <li><a href="#">Awareness Materials</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Child Focal Person</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="#">Child Focal Person</a></li>
                                    <li><a href="#">Awareness Materials</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Gender Focal Person</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="#">Gender Focal Person</a></li>
                                    <li><a href="#">Awareness Materials</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Sexual Harassment Protection Focal</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="#">Focal Person</a></li>
                                    <li><a href="#">Situation Report</a></li>
                                </ul>
                            </div>
                        </div>   

                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Disaster & Climate Action</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="#">Focal Person</a></li>
                                    <li><a href="#">Situation Report</a></li>
                                </ul>
                            </div>
                        </div>   

                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Whistle Blowing Focal Person</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="category-list clearfix">
                                    <li><a href="#">Focal Person</a></li>
                                    <li><a href="#">Awareness Materials</a></li>
                                </ul>
                            </div>
                        </div>  

                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Complain Box</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="info-list clearfix">
                                    <li>
                                        <i class="icon-18"></i>
                                        <a href="mailto:parittran@yahoo.com">parittran@yahoo.com</a>
                                    </li>
                                    <li>
                                        <i class="icon-18"></i>
                                        <a href="mailto:rabiulislam@parittran.org">rabiulislam@parittran.org</a>
                                    </li>                                        
                                    <li>
                                        <i class="icon-19"></i><a href="tel:+8801718209923">+8801718209923</a>
                                    </li>
                                </ul>
                            </div>
                        </div> 

                        <div class="sidebar-widget category-widget">
                            <div class="widget-title">
                                <h3>Beneficiaries Feedback Mechanism</h3>
                            </div>
                            <div class="widget-content">
                                <ul class="info-list clearfix">
                                    <li>
                                        <i class="icon-18"></i>
                                        <a href="mailto:uzzaldas@parittran.org">uzzaldas@parittran.org</a>
                                    </li>
                                    <li>
                                        <i class="icon-18"></i>
                                        <a href="mailto:parittran@gmail.com">parittran@gmail.com</a>
                                    </li>                                        
                                    <li>
                                        <i class="icon-19"></i><a href="tel:+8801720587144">+8801720587144</a>
                                    </li>
                                </ul>
                            </div>
                        </div>                       
                    </div>
                </div>

                <div class="col-md-12 default-sidebar">                         
                    <div class="row">
                        <div class="col-md-12">
                            <div class="sidebar-widget category-widget">
                                <div class="widget-title">
                                    <h3>Contributing towards SDG</h3>
                                </div>
                                <div class="widget-content">
                                    <div class="sdgWrap">
                                        <ul>
                                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/sdg/01.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/sdg/02.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/sdg/03.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/sdg/04.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/sdg/05.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/sdg/06.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/sdg/07.png" alt=""></a></li>
                                            <li><a href="#"><img src="<?php echo get_template_directory_uri() ?>/assets/images/sdg/08.png" alt=""></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>

            </div>                
        </div>
    </section>

<?php 
	get_footer();
?>