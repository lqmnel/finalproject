<?php
    include '../connection.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id='$id'";
    $datas = $conn->query($sql);

    if (mysqli_affected_rows($conn) > 0) {
        header("Location:dashboard.php");
    } else {
        $_SESSION['error'] = "Menghapus data gagal!";
    }
?>