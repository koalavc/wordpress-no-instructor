<?php 
    $allUsers = get_users();
    function getUsername($id, $users){
        $display_name = null;
        foreach($users as $user){
            if($user->ID == $id){
                $display_name = $user->display_name;
            }
        }

        return $display_name;
    }
?>

<?php get_header(); ?>

    <div class="container">
        <h1>Posts page</h1>
    <!--// echo and var_dump are different
            // $posts=get_posts(); var_dump($posts) -->

            <?php foreach ($posts=get_posts() as $post): ?> 
                
                <a href="page-<?php echo $post->post_title; ?>"><?php echo $post->post_title ?></a>
                <p>Author: <?php echo getUsername($post->post_author, $allUsers); ?></p>
                <p>Published: <?php echo $post->post_date?></p>
            <?php endforeach; ?>
    </div>
    
<?php get_footer(); ?>