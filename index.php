<?php
include 'structure/header.php';
?>
<div class="main-container">
    <?php
    if($action === 'home' or $action === null){
        include 'pages/welcome.php';
    } elseif($action === 'cars_list'){
        include 'pages/show_cars.php';
    } elseif($action === 'add_car'){
        include 'pages/add_car.php';
    } elseif($action === 'update_data'){
        include 'pages/update_data.php';
    }
    ?>
</div>
<?php
include 'structure/footer.php';
?>
