<?php /* Template Name: Custom Mma Page Template */ ?>
    <?php get_header(); ?>








        <div class="container-fluid allslider">

            <div class="row">

                <div class="col-xs-12 col-sm-10 col-md-10 col-sm-offset-1">



                    <div class="bg-ivory hide-title" id="tribeca-loft">
                        <h5 class="text-left">TriBeCa Loft, 2007</h5>

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
                    Welcome to Multimedia Arts
                </h1>
                </div>

                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>About</h3>
                        </div>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
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
                                $the_query = new WP_Query( array( 'cat' => 17, 'posts_per_page' => 5) ); ?>

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
