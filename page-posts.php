<?php get_header(); ?>

    <div class="container">
        <h1>Posts page</h1>
    <!--// echo and var_dump are different
            // $posts=get_posts(); var_dump($posts) -->

           <?php foreach ($posts=get_posts() as $post): ?> 

                <h2>Title Posts</h2>
                <a href="page-<?php $post->post_title; ?>">Click me!</a>
                <h1><?php $post->post_title; ?></h1>
            <?php endforeach; ?>
            
            

    </div>

    

<?php get_footer(); ?>