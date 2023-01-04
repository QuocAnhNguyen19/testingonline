``<!doctype html>
<html lang="vi">
<?php 
  include("../../conn.php");
  include("query/countData.php");
 ?>


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta http-equiv="Content-Language" content="en"> -->
    <meta http-equiv="Content-Type" content="text/html; "/>
    <title>TRANG QUẢN LÝ CTU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
     
    <!-- MAIN CSS NIYA -->
    <link href="./main.css" rel="stylesheet">
    <link href="css/sweetalert.css" rel="stylesheet">
    <link href="css/facebox.css" rel="stylesheet">
</head>
<body id="body">
    <hr style="color:red;width:100%;">
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow" >
            <div class="app-header__logo" style="background-image: linear-gradient(120deg, #89f7fe 100%, #66a6ff 0%) !important;">
                <div class="logo-src"></div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    <div class="app-header__content" style="background-image: linear-gradient(120deg, #89f7fe 100%, #66a6ff 0%) !important;"> 
                <div class="app-header-left">
                   
                          </div>
                           
                                <marquee style="color: blue;font-size: larger;font-weight: 500;">Chào mừng bạn đến với WEBSITE kiểm tra trực tuyến!</marquee>
                            
                <div class="app-header-right">
                    
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <?php
                                $adminId = $_SESSION['admin']['admin_id'];
                                $seladminData = $conn->query("SELECT * FROM admin_acc WHERE admin_id='$adminId' ")->fetch(PDO::FETCH_ASSOC); 
                                ?>
                                    <div class="widget-content-left">
                                        <div class="btn-group">
                                            <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn" style="color:red;">
                                            <?php 
                                                echo strtoupper($seladminData['admin_user']);
                                             ?>
                                                <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                            </a>
                                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                                <a href="home.php?page=account"  class="dropdown-item">Admin Account</a>
                                                <div tabindex="-1" class="dropdown-divider"></div>
                                                <a href="/nienluan_CNTT/" target="_blank" class="dropdown-item">LOGIN STUDENT</a>
                                                <a href="query/logoutExe.php" class="dropdown-item">LOG OUT</a>
                                                
                                            </div>
                                        </div>
                                    </div>

                                
                            </div>
                        </div>
                    </div>        </div>
            </div>
            
        </div>  
        