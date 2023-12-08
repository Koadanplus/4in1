<?php 
ob_start();
//require_once('../model/db.php');
// require_once('../model/sp.php');
// require_once('../model/user.php');
// require_once('../model/catalog.php');
require_once('public/head.php');
require_once('public/nav.php');
//require_once('public/home.php');

 if(isset($_GET['page'])){
    switch($_GET['page']){
//         case 'home':
//             require_once('public/home.php');
//             break;
//             case 'del':
//                 if(isset($_GET['id'])&&($_GET['id']>0)){
//                     $id=$_GET['id'];
//                     $tb=delete_catalog($id);
//                 }
//                 $cataloglist=get_catalog();
//                 require_once('public/categories.php');
                
//                 break;
        case 'categories':
            //$cataloglist=get_catalog();
            require_once('public/categories.php');
            break;
//             case 'add_dm':
//                 if(isset($_POST['btnadd'])){
//                     $name=$_POST['name'];
//                     add_catalog($name);
//                 }
//                 $cataloglist=get_catalog();
//                 require_once('public/categories.php');
//                 break;
//         case 'updatedmform':
//             if(isset($_GET['id'])&&($_GET['id']>0)){
//                 $id=$_GET['id'];
//                 $catalogone=get_catalog_one($id);
//                 require_once('public/updatedmform.php');
//             }else{
//                 require_once('public/404.php');
//             }
//             break;
//             case 'update':
//                 if  (isset($_POST['btnupdate'])&&($_POST['btnupdate'])){
//                     if(isset($_POST['id'])&&($_POST['id']>0)){
//                         $id=$_POST['id'];
//                         $name=$_POST['name'];
//                         set_catalog($id,$name);
//                         $cataloglist=get_catalog();
//                         require_once('public/categories.php');
//                     }else{
//                         require_once('public/404.php');
//                     }
//                 } 
                
            
//             break;
//     case 'delproduct':
//             if(isset($_GET['id'])&&($_GET['id']>0)){
//                 $cataloglist=get_catalog();
//                     $id=$_GET['id'];
//                    // kiểm tra sp có hình không cos hinh thì xóa
//                 $ten_file_hinh="../img".get_ten_file_hinh($id);
//                 if(file_exists($ten_file_hinh)){
//                     unlink($ten_file_hinh);
//                 }
//                    // xóa sp trong db
//                    $tb=delete_product($id);
//                 }
//                 // load dssp
//                 $productlist=getproduct();
//                 header('location: index.php?page=products');
//                 break;  
//         case 'updatespform':
//             if(isset($_GET['id'])&&($_GET['id']>0)){
//                 $cataloglist=get_catalog();
//                 $id=$_GET['id'];
//                 $productone= getproductdetail($id);
//                 require_once('public/updatespform.php');
//             }else{
//                 require_once('public/404.php');
//             }
//             break;  
            
//             case 'updatesp':
//                 // lấy dữ liệu từ form
//                 if  (isset($_POST['btnupdate'])&&($_POST['btnupdate'])){
//                 $id=$_POST['id'];
//                 $name=$_POST['name'];
//                 $price=$_POST['price'];
//                 $idcatalog=$_POST['idcatalog'];
//         // lấy hình vê
//         $ten_file_hinh=$_FILES['img']['name'];
//                 if($ten_file_hinh!=""){
                
                
//                 //upload lên host
//                 $target_file="../img".basename($_FILES["img"]["name"]);
//                 move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
//                 // xóa hình cũ
//                 $hinh_cu="../".$_POST['hinhcu'];
//                 if(file_exists($hinhcu)) unlink($hinhcu);
                
                
//                 }
//             //   else{
//             //     $img="";
//             //   }
//                 //cập nhật databise
//                 update_product($id,$idcatalog,$ten_file_hinh,$name,$price);
//             }
//                 $productlist=getproduct();
//                 header('location: index.php?page=products');
            
//                 break;  
//                 case  'addproduct':
//                     // lấy dữ liệu từ form
//                     if  (isset($_POST['btnadd'])&&($_POST['btnadd'])){
                  
//                     $name=$_POST['name'];
//                     $price=$_POST['price'];
//                     $idcatalog=$_POST['idcatalog'];
//             // lấy hình vê
//             $ten_file_hinh=$_FILES['img']['name'];
//                     if($ten_file_hinh!=""){
                    
                    
//                     //upload lên host
//                     $target_file="../img".basename($_FILES["img"]["name"]);
//                     move_uploaded_file($_FILES["img"]["tmp_name"],$target_file);
                    
                    
                    
//                     }
//                 //   else{
//                 //     $img="";
//                 //   }
//                     //thêm vào databise
//                     add_product($idcatalog,$ten_file_hinh,$name,$price);
//                 }
//                     $productlist=getproduct();
//                     header('location: index.php?page=products');
                
//                     break;  
                    
          
        case 'products':
            //loadsp
            // $cataloglist=get_catalog();
           // $productlist=getproduct();
            require_once('public/products.php');
            break;
        case 'users':
            require_once('public/users.php');
            break;
        default:
            require_once('public/404.php');
    }
    }else{
         require_once('public/home.php');
    }

    require_once('public/footer.php');
    // }
// ?>