<?php

require_once 'classes/Car.php';

if (isset($_POST['save'])){
    $newCar = new Car($_POST['brand'], $_POST['model'], $_POST['year']);
    $sql = "INSERT INTO cars(brand, model, year) VALUES ('".$newCar->getBrand()."', '".$newCar->getModel()."', '".$newCar->getYear()."')";
    mysqli_query($connection, $sql);
    header('Location: index.php?action=cars_list');
}

?>


<div class="container">
<form action="#" method="POST">
    <label for="">Brand</label><br>
    <input type="text" name="brand"><br>
    <label for="">Model</label><br>
    <input type="text" name="model"><br>
    <label for="">Year</label><br>
    <input type="text" name="year"><br>
    <input type="submit" name="save" value="Save"><br>
</form>
</div>