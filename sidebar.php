
<aside class="sidebar" aria-label="<?php esc_attr_e( 'Sidebar artikel', 'silfiedu' ); ?>">

    <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

        <?php dynamic_sidebar( 'sidebar-1' ); ?>

    <?php else : ?>

        <section class="widget">
            <h3>Tentang SilfiEdu</h3>
            <p>
                SilfiEdu adalah website pendidikan untuk berbagi
                informasi, pengetahuan, dan inspirasi belajar.
            </p>
        </section>

        <section class="widget">
            <h3>Kategori Artikel</h3>
            <ul>
                <?php
                wp_list_categories(
                    array(
                        'title_li' => '',
                        'show_count' => true,
                    )
                );
                ?>
            </ul>
        </section>

        <section class="widget">
            <h3>Artikel Terbaru</h3>
            <ul>
                <?php
                wp_get_archives(
                    array(
                        'type'  => 'postbypost',
                        'limit' => 5,
                    )
                );
                ?>
            </ul>
        </section>

    <?php endif; ?>

</aside>
