<?php
get_header();
?>
<div class="row tm-row tm-mb-45">
    <div class="col-12">
 
        <hr class="tm-hr-primary tm-mb-55">
        <?php the_post_thumbnail(); ?>
 
    </div>
</div>
<div class="row tm-row tm-mb-40">
    <div class="col-12">
        <div class="mb-4">
 
            <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title"> <?php the_title(); ?></h2>
            <p>
                <?php the_content(); ?>
            </p>
 
 
        </div>
    </div>
</div>
<div class="extreme">
    <div class="row tm-row tm-mb-120">
        <div class="col-lg-4 tm-about-col">
            <div class="tm-bg-gray tm-about-pad">
                <div class="text-center tm-mt-40 tm-mb-60">
                    <i class="fas fa-bezier-curve fa-4x tm-color-primary"></i>
                </div>
                <h2 class="mb-3 tm-color-primary tm-post-title"><?php the_field('title1'); ?></h2>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('content1'); ?>
                </p>
            </div>
        </div>
        <div class="col-lg-4 tm-about-col">
            <div class="tm-bg-gray tm-about-pad">
                <div class="text-center tm-mt-40 tm-mb-60">
                    <i class="fas fa-users-cog fa-4x tm-color-primary"></i>
                </div>
                <h2 class="mb-3 tm-color-primary tm-post-title"><?php the_field('title2'); ?></h2>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('content2'); ?>
                </p>
            </div>
        </div>
        <div class="col-lg-4 tm-about-col">
            <div class="tm-bg-gray tm-about-pad">
                <div class="text-center tm-mt-40 tm-mb-60">
                    <i class="fab fa-creative-commons-sampling fa-4x tm-color-primary"></i>
                </div>
                <h2 class="mb-3 tm-color-primary tm-post-title"><?php the_field('title3'); ?></h2>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('content3'); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<div class="row tm-row tm-mb-60">
    <div class="col-12">
        <hr class="tm-hr-primary  tm-mb-55">
    </div>
    <div class="col-lg-6 tm-mb-60 tm-person-col">
        <div class="media tm-person">
            <img src="<?php the_field('member_image1'); ?>" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
                <h2 class="tm-color-primary tm-post-title mb-2"><?php the_field('member_name1'); ?></h2>
                <h3 class="tm-h3 mb-3"><?php the_field('position1'); ?></h3>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('about1'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 tm-mb-60 tm-person-col">
        <div class="media tm-person">
            <img src="<?php the_field('member_image2'); ?>" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
                <h2 class="tm-color-primary tm-post-title mb-2"><?php the_field('member_name2'); ?></h2>
                <h3 class="tm-h3 mb-3"><?php the_field('position2'); ?></h3>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('about2'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 tm-mb-60 tm-person-col">
        <div class="media tm-person">
            <img src="<?php the_field('member_image3'); ?>" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
                <h2 class="tm-color-primary tm-post-title mb-2"><?php the_field('member_name3'); ?></h2>
                <h3 class="tm-h3 mb-3"><?php the_field('position3'); ?></h3>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('about3'); ?>
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 tm-mb-60 tm-person-col">
        <div class="media tm-person">
            <img src="<?php the_field('member_image4'); ?>" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
                <h2 class="tm-color-primary tm-post-title mb-2"><?php the_field('member_name4'); ?></h2>
                <h3 class="tm-h3 mb-3"><?php the_field('position3'); ?></h3>
                <p class="mb-0 tm-line-height-short">
                    <?php the_field('about4'); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>


