<?php
$sql = "SELECT * FROM cars";
$data = mysqli_query($connection, $sql);

if (isset($_POST['delete'])) {
    $car_id_to_delete = $_POST['car_id'];

    $sql = "DELETE FROM cars WHERE id = '$car_id_to_delete'";
    mysqli_query($connection, $sql);
    header('Location: index.php?action=cars_list');
}
?>
<table class="cars_list">
    <tr>
        <th>Id</th>
        <th>Brand</th>
        <th>Model</th>
        <th>Year</th>
        <th>Action</th>
    </tr>
    <?php while ($result = mysqli_fetch_array($data)) { ?>
        <tr>
            <td><?php echo $result['id'] ?></td>
            <td><?php echo $result['brand'] ?></td>
            <td><?php echo $result['model'] ?></td>
            <td><?php echo $result['year'] ?></td>
            <td>
                <form action="index.php?action=update_data" method="POST">
                    <input type="hidden" name="car_id" value="<?php echo $result['id'] ?>">
                    <input id="updateBtn" type="submit" name="update" value="Update">
                </form>
                <form action="#" method="POST">
                    <input type="hidden" name="car_id" value="<?php echo $result['id'] ?>">
                    <input id="deleteBtn" type="submit" name="delete" value="Delete">
                </form>
            </td>
        </tr>
    <?php } ?>
</table>