<section class="content-content">
    <div class="container">

        <div class="content-content__wrap">
            <?php
            if (have_posts() ) {
                while (have_posts()) : the_post();
                    echo the_content();
                endwhile;
            }
            ?>
        </div>

    </div>
</section>