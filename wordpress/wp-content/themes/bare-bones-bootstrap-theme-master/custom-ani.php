<?php /* Template Name: Custom Ani Page Template */ ?>
    <?php get_header(); ?>






        <div class="container-fluid text-center" id="homeSlider">

            <div id="myCarousel" class="carousel slide vert-offset-top-1 vert-offset-bottom-2" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <!--                                        <h2>dsvhdsbvhiuds fdshiufbdsbfds</h2>-->
                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/ani2.jpg">
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/ani1.jpg"></div>

                    <div class="item">
                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/ani3.jpg"></div>

                    <div class="item">
                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/ani4.jpg"></div>

                </div>
            </div>


        </div>
        <!-- end of container -->



        <div class="container" id="vat">


            <div class="row">
                <div class="col-xs-12 col-sm-12 col-lg-12">
                    <h1 class="page-header">
                    Welcome to Animation and Motion Graphics
                </h1>
                </div>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>About</h3>
                        </div>
                        <div class="panel-body">
                            <p>In the Animation and Motion Graphics Major (ANI) students get a solid grounding in art and animation skills and theory. During the course of their studies they learn script writing, how to draw, the principles and techniques of 2D animation, 3D modeling and create 3D animated projects. Students will also get the opportunity to dive into motion graphics, art history and film studies. The result is well-rounded graduates ready to move on to the next phase in their careers.</p>
                            <a href="http://www.bmcc.cuny.edu/media-arts/ani_program.jsp" target="_blank" class="btn btn-default">Learn More</a>
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
                                $the_query = new WP_Query( array( 'category_name' => 'ani', 'posts_per_page' => 12, 'paged' => $paged ) ); ?>

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
