<?php
session_start();
ob_start();
if(!isset($_SESSION['idGroup'])||$_SESSION['idGroup']!=4) {
    header('location: ../site/DangNhap.php');
}
