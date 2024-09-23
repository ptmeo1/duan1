<?php
include "model/pdo.php";
include "header.php";

if(isset($_GET['act'])){
    $act = $_GET['act'];
    switch($act){
        /* CONTROLLER DANH MỤC */ 
        case 'adddm':
        //kiểm tra xem người dùng có click vào nút add không
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $catename = $_POST['category_name'];
               $sql="insert into categories(category_name) values('$catename')";
               pdo_execute($sql);
                $thongbao = "Thêm thành công";
            }
            
            include "category/add.php";
            break;

            case 'listdm':
                $sql="select * from categories order by category_name";
                $listcate=pdo_query($sql);
                include"category/list.php";
        }
        }else{
            include "home.php";
        }


include "footer.php";




