<?php
include "./admin/model/pdo.php";
include "./admin/model/sanpham.php";
include "./admin/model/danhmuc.php";
include "./view/header.php";

if(isset($_GET['act'])&&($_GET['act']!="")){
    $act = $_GET['act'];
    switch($act){
        case 'sanpham':
            if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
                $kyw = $_POST['kyw'];
            }else{
                $kyw ="";
            }

            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm = $_GET['iddm'];    
                
            }else{
                $iddm = 0;
            }
                $listsanpham = loadall_sanpham($kyw,$iddm);
                $tendm = load_ten_dm($iddm);
                include "view/sanpham.php";
            break;
		}
	}

include "./view/home.php";
include "./view/footer.php";
