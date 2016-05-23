<?php /* Template Name: Custom Ani Page Template */ ?>
    <?php get_header(); ?>








        <div class="container-fluid allslider">

            <div class="row">

                <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1">



                    <div class="bg-ivory hide-title" id="tribeca-loft">

                        <div class="slider">
                            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel" data-slide-to="1"></li>
                                    <li data-target="#myCarousel" data-slide-to="2"></li>
                                    <li data-target="#myCarousel" data-slide-to="3"></li>
                                    <li data-target="#myCarousel" data-slide-to="4"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    <div class="item active">
                                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/nyc-1.jpg"></div>

                                    <div class="item">
                                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/nyc-3.jpg"></div>

                                    <div class="item">
                                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/nyc-2.jpg"></div>

                                    <div class="item">
                                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/nyc-3.jpg"></div>

                                </div>
                            </div>
                        </div>
                    </div>



                </div>


            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->



        <div class="container" id="vat">


            <div class="row">
                <div class="col-lg-12">
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
                            <a href="#" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>



            </div>



            <!-- Team Members -->
            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Students</h1>
                </div>



               <?php
                                $wp_query = new WP_Query( array( 'category_name' => 'ani', 'posts_per_page' => 8) ); ?>

                    <?php if ( $wp_query->have_posts() ) : ?>

                        <!-- pagination here -->

                        <!-- the loop -->
                        <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
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
                                <p>posts pagination</p>
                                <?php

the_posts_pagination( array( 'mid_size'  => 2 ) );

//                                    the_posts_pagination( array( // 'mid_size' => 2, // 'prev_text' => __( 'Back', 'textdomain' ), // 'next_text' => __( 'Onward', 'textdomain' ), // ) );
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

            <hr>

            <!-- Pagination -->
            <div class="row text-center">
                <div class="col-lg-12">
                    <ul class="pagination">
                        <li>
                            <a href="#">&laquo;</a>
                        </li>
                        <li class="active">
                            <a href="#">1</a>
                        </li>
                        <li>
                            <a href="#">2</a>
                        </li>
                        <li>
                            <a href="#">3</a>
                        </li>
                        <li>
                            <a href="#">4</a>
                        </li>
                        <li>
                            <a href="#">5</a>
                        </li>
                        <li>
                            <a href="#">&raquo;</a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /.row -->


            <hr>





        </div>
        <!--- end of container--->






        <?php get_footer(); ?>
