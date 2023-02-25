<?php 
    include_once('functions.php');

    $usernamecheck =new DB_con();

    $uname = $_POST['username'];

    $sql = $usernamecheck->usernameavailable($uname);

    $num = mysqli_num_rows($sql);

    if ($num > 0) {
        echo "<span style='color: red; '>Have username in account.</span>";
        echo "<script>$('#submit').prop('disable', true);</script>";
    } else {
        echo "<span style='color: red; '>Username available.</span>";
        echo "<script>$('#submit').prop('disable', false);</script>";
    }

   ?>