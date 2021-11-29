<!DOCTYPE html>
<html>
<?php
include_once('defaults/head.php');
?>

<body>


    <?php
    include_once('defaults/header.php');
    include_once('defaults/menu.php');
    include_once('defaults/pictures.php');
    global $categories;
    ?>
    <div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/home">Home</a></li>
            <li class="breadcrumb-item"><a href="/categories">Categories</a></li>
        </ol>
    </nav>


    <div class="row gy-3 ">
    <?php
        foreach($categories as $data) {
            echo "
            <div class=' card col-sm-3 col-md3'>
            <div card-body text-center>
            <a href='/categories/$data->id'>
                <img class='product-img img-responsive center-block' src='/img/categories/$data->image'/>
            </a>
            <div class='card-title mb-3'>$data->name</div>
            </div>
            </div>
            ";
        }?>
    </div>




   <?php
    include_once('defaults/footer.php');
   include_once('defaults/head.php');
    ?>
</div>

</body>
</html>

