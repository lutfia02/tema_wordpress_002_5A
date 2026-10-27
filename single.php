
<?php get_header(); ?>

<main>
    <section class="page-banner">
        <div class="container">
            <p><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Beranda</a> / Artikel</p>
            <h1>Detail Artikel</h1>
        </div>
    </section>

    <section class="section">
        <div class="container content-layout">

            <div class="content-main">
                <?php while ( have_posts() ) : the_post(); ?>

                    <article <?php post_class( 'article-content' ); ?>>

                        <div class="post-meta">
                            <?php echo esc_html( get_the_date() ); ?>
                            · <?php the_author(); ?>
                        </div>

                        <h1 class="post-title"><?php the_title(); ?></h1>

                        <?php if ( has_post_thumbnail() ) : ?>
                            <div class="article-featured-image">
                                <?php the_post_thumbnail( 'large' ); ?>
                            </div>
                        <?php endif; ?>

                        <div class="article-body">
                            <?php
                            the_content();

                            wp_link_pages(
                                array(
                                    'before' => '<div class="page-links">Halaman: ',
                                    'after'  => '</div>',
                                )
                            );
                            ?>
                        </div>

                        <p class="post-meta">
                            Kategori:
                            <?php the_category( ', ' ); ?>
                        </p>

                    </article>

                    <nav class="article-navigation"
                         aria-label="<?php esc_attr_e( 'Navigasi artikel', 'silfiedu' ); ?>">
                        <div><?php previous_post_link( '%link', '&larr; Artikel sebelumnya' ); ?></div>
                        <div><?php next_post_link( '%link', 'Artikel berikutnya &rarr;' ); ?></div>
                    </nav>

                    <?php
                    if ( comments_open() || get_comments_number() ) {
                        comments_template();
                    }
                    ?>

                <?php endwhile; ?>
            </div>

            <?php get_sidebar(); ?>

        </div>
    </section>
</main>

<?php get_footer(); ?>
