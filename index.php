<?php
session_start();
include "./admin/model/pdo.php";
include "./admin/model/sanpham.php";
include "./admin/model/danhmuc.php";
include "./admin/model/taikhoan.php";
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

            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email = $_POST['email'];
                    $user = $_POST['user'];
                    $pass = $_POST['pass'];
                    $tel = $_POST['tel'];
                    $address = $_POST['address'];
                    insert_taikhoan($email,$user,$pass,$tel,$address);
                    $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng";
                }
                include "view/taikhoan/dangky.php";
                break;
            case 'dangnhap':
             
                    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                        $user = $_POST['user'];
                        $pass = $_POST['pass'];
                        $checkuser = checkuser($user,$pass);
                        if(is_array($checkuser)){
                            $_SESSION['user']= $checkuser;
                            //$thongbao ="Bạn đã đăng nhập thành công" ;
                            header('location: index.php');
                        }else{
                            $thongbao ="Tài khoản không tồn tại vui lòng kiểm tra lại hoặc đăng ký!";
                        }
                     
                    }
                 else{
                    include "view/taikhoan/dangnhap.php";
                 }
                    break;
                    case 'edit_taikhoan':
                        if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                            $user = $_POST['user'];
                            $pass = $_POST['pass'];
                            $email = $_POST['email'];
                            $address = $_POST['address'];
                            $tel = $_POST['tel'];
                            $id = $_POST['id'];
                            
                            capnhat_taikhoan($id,$user,$pass,$email,$address,$tel);
                            $_SESSION['user']= checkuser($user,$pass);
                            header('location: index.php?act=edit_taikhoan');
                            
                        }
                        include "view/taikhoan/edit_taikhoan.php";
                        break;
            case 'quenmk':
                            if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                                
                                $email = $_POST['email'];
                                
                                $checkemail = checkemail($email);
                                if(is_array($checkemail)){
                                    $thongbao = "Mật khẩu của bạn là: ".$checkemail['pass'];
                                }else{
                                    $thongbao = "Email không tồn tại";
                                }
                                
                            }
                            include "view/taikhoan/quenmk.php";
                            break;
         
		}
        
        
	}else{
        include "./view/home.php";
    }

include "./view/footer.php";
