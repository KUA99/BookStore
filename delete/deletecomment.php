<?php include '../php/connectdb.php';
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM binhluan WHERE mabl=$id";
    var_dump($sql);
    exit();
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo '<h1>Xoá Thành công</h1> <a href="./admin.php">Trở lại</a>';
    }else {
        echo '<h1>Xoá Không Thành công</h1> <a href="./admin.php">Trở lại</a>';
    }
}
?>

