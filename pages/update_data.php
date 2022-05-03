<?php

require_once('classes/Car.php');

if (isset($_POST['update'])) {
    $car_id_to_update = $_POST['car_id'];

    $sql = "SELECT * FROM cars WHERE id = '$car_id_to_update'";
    $result = mysqli_fetch_assoc(mysqli_query($connection, $sql));
}

if (isset($_POST['update_data'])) {
    $car_id = $_POST['same_car_id'];
    $updated_car_data = new Car($_POST['car']);

    $updated_brand = $updated_car_data->getBrand();
    $updated_model = $updated_car_data->getModel();
    $updated_year = $updated_car_data->getYear();


    $sql = "UPDATE cars SET brand = '$updated_brand', model = '$updated_model', year = '$updated_year' WHERE id = '$car_id'";

    mysqli_query($connection, $sql);
    header('Location: index.php?action=cars_list');
}
?>

<div class="container">
    <form action="#" method="POST">
        <label for="">Brand</label><br>
        <input type="hidden" name="car['same_car_id']" value="<?php echo $result['id'] ?? null ?>">

        <input type="text" name="car['brand']" value="<?php echo $result['brand'] ?? null ?>"><br>
        <label for="">Model</label><br>
        <input type="text" name="car['model']" value="<?php echo $result['model'] ?? null ?>"><br>
        <label for="">Year</label><br>
        <input type="text" name="year" value="<?php echo $result['year'] ?? null ?>"><br>
        <input type="submit" name="update_data" value="Update data"><br>
    </form>
</div>