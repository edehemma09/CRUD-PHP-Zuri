<?php
if (!empty($_GET['id'])) {
    // require connection
    require_once 'dbcon.php';

    $student_id = $_GET['id'];
    $del_query = "DELETE FROM `studentdb` WHERE id = '" . $student_id . "'";
    $result = mysqli_query($conn, $del_query);
    if ($result) {
        header('location:index.php?msg=del');
    }
}
