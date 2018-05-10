<?php
$link=mysql_connect('localhost','root','');
if (!$link)  {
  die('Could not connect: '. mysql_error());
}
mysql_select_db("db",$link);
ob_start();
session_start();
//error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Веб хандалтад хичээлийн хуваарь зохиох програм</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
  </head>
  <body>
  <div class="container">
    <div class="col-md-3 sidebar">
      <div class="col-md-12 profile">        
        <div class="col-md-4">
          <center><img src="../images/2.jpg" class="profile-image" /></center>
        </div>
        <div class="col-md-8">
          <div class="user-title">
            <span><b>Гонгор Уранчимэг</b></span></br>
            <span>Сургалтын албаны мэргэжилтэн</span>
          </div>
        </div>
      </div>
      <div class="drop-menu-btn">Үндсэн цэс<span class="glyphicon glyphicon-menu-hamburger" style="float:right;"></span></div>
      <div class="col-md-12 menu">
        <ul>
          <li><a href="#"><img src="../images/icon-1.png" class="icon">Хувийн мэдээлэл</a></li>
          <li class="active"><a href="register.php"><img src="../images/icon-2.png" class="icon">Бүртгэл</a></li>
          <li><a href="#"><img src="../images/icon-3.png" class="icon">Хичээл сонголт</a></li>
          <li><a href="#"><img src="../images/icon-4.png" class="icon">Хичээлийн хуваарь</a></li>
          <li><a href="#"><img src="../images/icon-5.png" class="icon">Танилцуулга</a></li>
          <li><a href="#"><img src="../images/icon-6.png" class="icon">Тайлан</a></li>
        </ul>
      </div>    
    </div>
    <div class="col-md-9 content">      
      <div class="col-md-12 content-header-line">
      <div class="col-md-8 head-title"><b>Веб хандалтад хичээлийн хуваарь зохиох програм</b></div>
      <div class="col-md-4 head-settings text-right">
        15:27 <span class="silvertxt">AM &nbsp;&nbsp;|&nbsp;&nbsp;</span> 12 <span class="silvertxt">3-Сар 2015</span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <input type="submit" value="Settings" name="" title="Тохиргоо" class="Set_icon" />
        <input type="submit" value="LogOut" name="" title="Гарах" class="Log_icon" />
      </div>
      </div>

      <div class="col-md-12 content-profile">
        <div class="col-md-2">
          <img src="../images/2.jpg" class="profile-image-content" />
        </div>
        <div class="col-md-10">
           <div class="user-title-pro">
            <span class="user-title-pro-s1">Гонгор Уранчимэг</span></br>
            <span class="user-title-pro-s2">Албан тушаал &nbsp;&nbsp;&nbsp;<b>Сургалтын албаны мэргэжилтэн</b></span></br>
            <span class="user-title-pro-s3">Монгол Улсын Их Сургууль</span></br>
          </div>
        </div>