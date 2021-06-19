<?php
include "../koneksi.php";

if(!empty($_POST["forgot-password"])){
    $condition = "";
    if(!empty($_POST["user-email"])) {
        if(!empty($condition)) {
            $condition = " and ";
        }
        $condition = " customer_email = '" . $_POST["user-email"] . "'";
    }

    if(!empty($condition)) {
        $condition = " where " . $condition;
    }

    $sql = "Select * from customer " . $condition;
    $result = mysqli_query($koneksi,$sql);
    $user = mysqli_fetch_array($result);

    if(!empty($user)) {
        require_once("forgot-password-recovery-mail.php");
    } else {
        $error_message = 'No User Found';
    }
}
?>