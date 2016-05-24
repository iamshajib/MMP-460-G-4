<?php /* Template Name: Custom Vat Page Template */ ?>
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
                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/vat3.jpg">
                    </div>

                    <div class="item">
                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/vat2.jpg"></div>

                    <div class="item">
                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/vat1.jpg"></div>

                    <div class="item">
                        <img class="img-responsive" src="http://group.bmcc.is/g4_sp16/wp-content/uploads/2016/05/vat5.jpg"></div>

                </div>
            </div>


        </div>
        <!-- end of container -->



        <div class="container" id="vat">


            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                    Welcome to Video Arts and Technology</h1>
                </div>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>About</h3>
                        </div>
                        <div class="panel-body">
                            <p>The Video Arts and Technology Program provides a dynamic education in video, audio and television production. The program prepares students for positions in the entertainment industry, electronic journalism, audiovisual production companies, broadcast networks, and corporate communications departments. It combines extensive hands-on experience in state of the art television studios, audio studio, and postproduction laboratories with theoretical coursework. Students learn the entire process for creating professional video and audio programs from writing a script and creating a budget, to shooting a scene and editing a final cut.The Video Arts and Technology Program provides a dynamic education in video, audio and television production. The program prepares students for positions in the entertainment industry, electronic journalism, audiovisual production companies, broadcast networks, and corporate communications departments. It combines extensive hands-on experience in state of the art television studios, audio studio, and postproduction laboratories with theoretical coursework. Students learn the entire process for creating professional video and audio programs from writing a script and creating a budget, to shooting a scene and editing a final cut.</p>
                            <a href="http://www.bmcc.cuny.edu/media-arts/vat_program.jsp" target="_blank" class="btn btn-default">Learn More</a>
                        </div>
                    </div>
                </div>



            </div>



            <!-- Team Members -->
            <div class="row">

                <div class="col-lg-12">
                    <h1 class="page-header">Students Works</h1>
                </div>



                <?php
                                $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
                                $the_query = new WP_Query( array( 'category_name' => 'vat', 'posts_per_page' => 12, 'paged' => $paged ) ); ?>

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

            <hr>





        </div>
        <!--- end of container--->






        <?php get_footer(); ?>
