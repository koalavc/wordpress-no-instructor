<?php 
    $search = $_GET['search'];

    $url = "http://api.giphy.com/v1/gifs/search?q={$search}&api_key=&limit=25";

    $results = json_decode(file_get_contents($url));
?>

<?php get_header(); ?>

<div class="container">
    <h1>PHP GIPHY API Search</h1>
    <form action="">
        <div class="form-group">
            <input type="text" class="form-control" name="search" placeholder="Search here!">
        </div>
        <button type="submit" class="btn btn-primary mb-3">Search all the gifs!</button>

        <?php $image = '/assets/Poweredby_100px-Black_VertLogo.png';  ?>
        <img src="<?php echo $image;?>">

    </form>
</div>

<div class="container-fluid card-columns">
    <?php foreach ($results->data as $item): ?>
        <div class="card">
        <a href="<?php echo $item->images->fixed_height->url; ?>">
            <img class="card-img-top" src="<?php echo $item->images->fixed_height->url; ?>" alt="">
        </a>
        </div>
    <?php endforeach; ?>
</div>
    
<?php get_footer(); ?>