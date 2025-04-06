<?php get_header(); ?>

<main>
    <h2>Últimas Entradas</h2>
    <div class="post-grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article class="post-card">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
            </article>
        <?php endwhile; endif; ?>
    </div>
</main>

<?php get_footer(); ?>
