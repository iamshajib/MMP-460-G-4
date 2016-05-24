<?php /* Template Name: Custom Mmd Page Template */ ?>
    <?php get_header(); ?>








        <div class="container-fluid text-center" id="homeSlider">

            <div id="myCarousel" class="carousel slide vert-offset-top-1 vert-offset-bottom-2" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                    <li data-target="#myCarousel" data-slide-to="4"></li>
                    <li data-target="#myCarousel" data-slide-to="5"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
  <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/mmd9.jpg">
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/mmd3.jpg"></div>

                    <div class="item">
                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/mmd6.png">
                       </div>

                    <div class="item">
                         <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/mmd1.jpg">
                       </div>
                     <div class="item">
                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/mmd11.jpg"></div>

                     <div class="item">
                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/mmd2.jpg"></div>

                </div>
            </div>


        </div>
        <!-- end of container -->



        <div class="container" id="vat">


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12">
                    <h1 class="page-header">
                    Welcome to Multimedia Programming and Design
                </h1>
                </div>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>About</h3>
                        </div>
                        <div class="panel-body">
                            <p>In the Multimedia Programming and Design (MMD) major, students complete a broad range of visual design and interactive projects. Starting from a base knowledge of digital media, graphic and interaction design principles majors complete a range of print and screen-baed designs and applications from brand identity to games, magazine layout to web design. All aspects of the process are covered from planning through execution, delivery and presentation. The program culminates with a capstone group project where students put their talents together and work in teams toward specific deliverables.</p>
                            <a href="http://www.bmcc.cuny.edu/media-arts/mmp_program.jsp" target="_blank" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>



            </div>



            <!-- Team Members -->
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-lg-12">
                    <h1 class="page-header">Students Works</h1>
                </div>



                <?php
                                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                                $the_query = new WP_Query( array( 'category_name' => 'mmd', 'posts_per_page' => 12, 'paged' => $paged ) ); ?>

                    <?php if ( $the_query->have_posts() ) : ?>

                        <!-- pagination here -->

                        <!-- the loop -->
                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <div class="col-md-3 text-center">
                                <div class="thumbnail">
                                    <!-- check if the post has a Post Thumbnail assigned to it. -->
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php  the_post_thumbnail( 'post-medium', array( 'class' => 'img-responsive' ) );?>
                                        </a>
                                        <?php endif; ?>
                                            <h2><?php the_title(); ?></h2>
                                            <h5> <?php echo get_the_term_list( $post->ID, 'students'); ?>
<!--                                       <?php echo get_cat_name(3);?>-->
                                       </h5>
                                </div>
                            </div>

                            <?php endwhile; ?>
                                <!-- end of the loop -->

                                <!-- pagination here -->

                                <?php
                                    $args = [
                                      'query' => $the_query,
                                      'output_wrap' => 'ul',
                                      'output_class' => 'pagination',
                                      'current_wrap' => 'li',
                                      'current_class' => 'active',
                                      'page_wrap' => 'li',
                                      'page_class' => '',
                                      'link_class' => '',
                                      'show_page_count' => false
                                    ];
                                    echo get_paginated_numbers( $args )
                                ?>

                                    <?php wp_reset_postdata(); ?>


                                        <?php else : ?>
                                            <p>
                                                <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                                            </p>
                                            <?php endif; ?>


                                                <!-- end of students list-->

            </div>
            <!-- end of Team Members -->



        </div>
        <!-- end of Team Members -->


        <hr>

        </div>
        <!--- end of container--->






        <?php get_footer(); ?>
