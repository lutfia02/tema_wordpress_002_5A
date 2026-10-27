
<?php get_header(); ?>

<main>
    <section class="page-banner">
        <div class="container">
            <h1><?php bloginfo( 'name' ); ?></h1>
            <p><?php bloginfo( 'description' ); ?></p>
        </div>
    </section>

    <section class="section">
        <div class="container">

            <?php if ( have_posts() ) : ?>

                <div class="post-grid">
                    <?php while ( have_posts() ) : the_post(); ?>

                        <article <?php post_class( 'post-card' ); ?>>

                            <?php if ( has_post_thumbnail() ) : ?>
                                <a class="post-thumbnail"
                                   href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail( 'large' ); ?>
                                </a>
                            <?php endif; ?>

                            <div class="post-card-content">
                                <div class="post-meta">
                                    <?php echo esc_html( get_the_date() ); ?>
                                </div>

                                <h2>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>

                                <p><?php echo esc_html( get_the_excerpt() ); ?></p>

                                <a class="read-more"
                                   href="<?php the_permalink(); ?>">
                                    Baca selengkapnya &rarr;
                                </a>
                            </div>

                        </article>

                    <?php endwhile; ?>
                </div>

                <nav class="pagination"
                     aria-label="<?php esc_attr_e( 'Navigasi halaman', 'silfiedu' ); ?>">
                    <?php the_posts_pagination(); ?>
                </nav>

            <?php else : ?>

                <div class="empty-state">
                    <h2>Konten belum tersedia</h2>
                    <p>Silakan tambahkan artikel melalui dashboard WordPress.</p>
                </div>

            <?php endif; ?>

        </div>
    </section>
</main>

<?php get_footer(); ?>
