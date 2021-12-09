<?php require('./lib/config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>
    <link rel="stylesheet" href="./asset/css/style.css">
    <link rel="stylesheet" href="./asset/css/page.css">
    <link rel="shortcut icon" href="./asset/img/home/logo.png" type="image/x-icon">
    <script src="./asset/js/main.js"></script>
    <!-- <link rel="stylesheet" href="font-awesome/css/font-awesome.css"> -->
    <!-- <link rel="stylesheet" href="./asset/css/styleSecond.css"> -->
</head>
<body>
<div class="container">
        <!-- Begin Header -->
        <div class="header">
            <a href="index.php"><div class="logo"></div></a>
            <div class="menu">
                <ul class="root">
                    <?php 
                        $str = "select * from theloai";
                        $query = $conn -> query($str);
                        $str_tl = '';
                        while ($r = $query -> fetch_assoc()) { 
                            $str_tl .= '<li><a href="category.php?theloai='.$r['tittle'].'">'.$r['tittle'].'</a></li> ';
                        }
                        echo $str_tl;
                    ?>  
                </ul>
            </div>
            <form action="index.php?key=key" class="search" method="get">
                <input type="text" name = "key" value="">
                <input type="submit" class="btn-hover" value="Search">
            </form>
            <div class="login">
                <button style="btn-dangnhap" ><a href="http://localhost:81/doancuoimon/admin/login.php"  style= "text-decoration: none;">Admin Login</a> </button>
            </div>
        </div>
        <!-- <div class="header2">
            <a href="index.php"><div class="logo"></div></a>
            <div class="menu">
                <ul class="root">
                    <?php 
                        // $str = "select * from theloai";
                        // $query = $conn -> query($str);
                        // $str_tl = '';
                        // while ($r = $query -> fetch_assoc()) { 
                        //     $str_tl .= '<li><a href="category.php?theloai='.$r['tittle'].'">'.$r['tittle'].'</a></li> ';
                        // }
                        // echo $str_tl;
                    ?>  
                </ul>
            </div>
            <form action="index.php?key=key" class="search" method="get">
                <input type="text" name = "key" value="">
                <input type="submit" class="btn-hover" value="Search">
            </form>
            <div class="login">
                <button style="btn-dangnhap" ><a href="http://localhost:81/doancuoimon/admin/login.php"  style= "text-decoration: none;">Đăng nhập</a> </button>
            </div>
        </div> -->