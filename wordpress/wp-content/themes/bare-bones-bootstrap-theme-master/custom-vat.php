<?php /* Template Name: Custom Vat Page Template */ ?>
    <?php get_header(); ?>








<div class="container-fluid">


                <div id="myCarousel" class="carousel slide">
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>
                    <!-- Carousel items -->


                    <div class="carousel-inner">
                        <div class="active item carousel-fade">
                            <h2>Slide 1</h2>
                            <div class="carousel-caption">
                                <h3>First slide label</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                            </div>
                        </div>
                        <div class="item carousel-fade">
                            <h2>Slide 2</h2>
                            <div class="carousel-caption">
                                <h3>Second slide label</h3>
                                <p>Aliquam sit amet gravida nibh, facilisis gravida odio.</p>
                            </div>
                        </div>
                        <div class="item carousel-fade">
                            <h2>Slide 3</h2>
                            <div class="carousel-caption">
                                <h3>Third slide label</h3>
                                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                            </div>
                        </div>
                    </div>


                    <!-- Carousel nav -->
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
 </div>



<div class="container" id="vat">


        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome to Video Arts & Technology
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



                <div class="col-md-12">



                        <div class="col-md-3 text-center">
                            <div class="thumbnail">



                               <?php
                                $the_query = new WP_Query( array( 'cat' => 8 ) ); ?>

                            <?php if ( $the_query->have_posts() ) : ?>

                                <!-- pagination here -->

                                <!-- the loop -->
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <!-- check if the post has a Post Thumbnail assigned to it. -->
                                    <?php if ( has_post_thumbnail() ) : ?>
                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                            <?php  the_post_thumbnail( 'post-medium', array( 'class' => 'img-responsive' ) );?>
                                        </a>
                                        <?php endif; ?>
                                        <h2><?php the_title(); ?></h2>
                                       <h5> <?php echo get_cat_name(3);?></h5>

                                            <?php endwhile; ?>
                                                <!-- end of the loop -->

                                                <!-- pagination here -->

                                                <?php wp_reset_postdata(); ?>


                                                    <?php else : ?>
                                                        <p>
                                                            <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
                                                        </p>
                                                        <?php endif; ?>


                            </div>
                        </div>






                    <!-- end of students list-->


                </div>

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



            <!-- Footer -->
            <footer>
                <div class="row">
                    <div class="col-lg-12">
                        <p>Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
            </footer>

        </div>
        <!--- end of container--->






        <?php get_footer(); ?>
