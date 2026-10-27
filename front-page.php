
<?php get_header(); ?>

<main>
    <section class="hero">
        <div class="container hero-grid">

            <div>
                <span class="eyebrow">Ruang Belajar Digital</span>

                <h1>Belajar Hari Ini, Berkembang Setiap Hari.</h1>

                <p>
                    Selamat datang di SilfiEdu, website pendidikan
                    untuk berbagi informasi, pengetahuan, dan inspirasi
                    belajar melalui teknologi digital.
                </p>

                <a class="button"
                   href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ?: home_url( '/' ) ); ?>">
                    Jelajahi Artikel
                </a>

                <a class="button button-secondary"
                   href="#artikel-terbaru">
                    Artikel Terbaru
                </a>
            </div>

            <div class="hero-visual">
                <div class="hero-icon" aria-hidden="true">📚</div>
                <h2>SilfiEdu</h2>
                <p>Belajar, Berbagi, dan Berinovasi.</p>
            </div>

        </div>
    </section>

    <section class="section" id="artikel-terbaru">
        <div class="container">

            <div class="section-heading">
                <span class="eyebrow">Wawasan Pendidikan</span>
                <h2>Artikel Terbaru</h2>
                <p>Temukan informasi dan pengetahuan terbaru di SilfiEdu.</p>
            </div>

            <?php
            $silfiedu_posts = new WP_Query(
                array(
                    'post_type'           => 'post',
                    'post_status'         => 'publish',
                    'posts_per_page'      => 3,
                    'ignore_sticky_posts' => true,
                )
            );
            ?>

            <?php if ( $silfiedu_posts->have_posts() ) : ?>
                <div class="post-grid">

                    <?php while ( $silfiedu_posts->have_posts() ) : ?>
                        <?php $silfiedu_posts->the_post(); ?>

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

                                <h3>
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>

                                <p><?php echo esc_html( get_the_excerpt() ); ?></p>

                                <a class="read-more"
                                   href="<?php the_permalink(); ?>">
                                    Baca selengkapnya &rarr;
                                </a>
                            </div>

                        </article>

                    <?php endwhile; ?>

                </div>

            <?php else : ?>

                <div class="empty-state">
                    <h3>Belum ada artikel</h3>
                    <p>
                        Silakan tambahkan artikel melalui menu
                        Pos → Tambah Pos di dashboard WordPress.
                    </p>
                </div>

            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

        </div>
    </section>
</main>

<?php get_footer(); ?>
