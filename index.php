<?php get_header(); 
global $post;
$slug = $post->post_name;
if(is_front_page()):
?>
<!-- slider start -->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-content">
            <div class="optimis">
                <p>O  P  T  I  M  I  S</p>
            </div>       
            <div class="isioptimis">
                <p><span style="color:yellow">O</span>  -  O  P  T  I  M  A  L</p>
                <P><span style="color:yellow">P</span>  -  P  O  S  I  T  I  F</P>
                <P><span style="color:yellow">T</span>  -  T  O  L  E  R  A  N  S  I</P>
                <P><span style="color:yellow">I</span>   -  I  N  I  S  I  A  T  I  F</P>
                <P><span style="color:yellow">M</span>  -  M  A  N  D  I  R  I</P>
                <P><span style="color:yellow">I</span>   -  I  N  O  V  A  T  I  F</P>
                <P><span style="color:yellow">S</span>  -  S  A  N  T  U  N</P>
            </div>  
    </div>
        <<div class="carousel-item active" data-bs-interval="5000">
            <img src=<?= get_template_directory_uri() . "/compressed/main.jpg" ?> class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <img src=<?= get_template_directory_uri() . "/compressed/sub.jpg" ?> class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item" data-bs-interval="5000">
            <img src=<?= get_template_directory_uri() . "/compressed/last.jpg" ?> class="d-block w-100" alt="...">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div><!-- end of slider  -->

<div class="row">
    <div class="column" style="width:30%; background-color:chocolate; margin: 10px 0px;">
        <ul>
            <li>Membangun generasi yang unggul dan berkualitas</li>
            <li>Berprestasi-Berkreasi-Berinovasi-Mandiri</li>
            <li>Menghasilkan alumni-alumni yang berkompeten di bidangnya</li>
        </ul>
    </div>
    <div class="column" style="width:70%;">
        <img src=<?= get_template_directory_uri() ."/compressed/visimisi.png" ?> alt="" style="width:100%;">
    </div>
</div>

<div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">
    <div class="row">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
                    <h1><?php the_title(); ?></h1>
                    <h4>Posted on <?php the_time('F jS, Y') ?></h4>
                    <p><?php the_content(__('(more...)')); ?></p>
                </div>
            <?php endwhile;
        else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
</div>

<?php 
else:
    $post = get_post(40); 
    $content = apply_filters('the_content', $post->post_content); 
    echo $content;  
endif;?>


<?php get_sidebar(); ?>
<?php get_footer(); ?>
<!-- daari husna -->

