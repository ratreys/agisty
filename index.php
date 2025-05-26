<?php
/**
 * The main template file. It is required in all themes.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 * @link https://developer.wordpress.org/themes/basics/template-files/
 *
 * @package Agisty
 */

get_header();
?>
<div class="is-layout-constrained grow wrapper-site__main">
    <main id="main" class="alignwide width-wide agisty-main__index" tabindex="-1">
        <div class="is-layout-constrained is-layout-flex pb-3" data-layout="with-sidebar">
            <section aria-label="article list">
                <h1 class="visually-hidden"><?php echo esc_html( get_bloginfo( 'name' ) ) ?></h1>
                <ul class="entry-card__wrapper" data-role="list">
                    <?php
                    while ( have_posts() ) :
                        the_post()
                        ?>
                        <li class="entry-card">
                            <?php
                            // Display post content.
                            the_title( '<h2 class="entry-card__heading"><a class="entry-card__link" href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                            ?>
                            <section aria-label="article snippet" class="entry-card__excerpt">
                                <?php the_excerpt() ?>
                            </section>
                        </li>
                        <?php
                    endwhile;
                    ?>
                </ul>
            </section>
            <aside class="main-index__aside" data-sidebar="main-sidebar">

            </aside>
        </div>
    </main>
</div>
<?php get_footer() ?>
