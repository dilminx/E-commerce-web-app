<?php
   
   session_start();

   if (isset($_SESSION['user'])) {
    # code...


   if (isset($_POST['addcart'])) {


    //    session_destroy();
   
    echo   $Product_name= $_POST['Pname'];
    echo   $Product_price= $_POST['Pprice'];
    echo   $Product_quntity= $_POST['Pqun'];
    
    // $check_product = array_column($_SESSION['cart'],'productname');
    // if (in_array($Product_name,$check_product)) {
    //     echo "
    //     <script>
    //     alert ('alredy aded this one..');
    //     window.location.href='index.php';
    //     </script>
        
    //     ";}else{
    $_SESSION['cart'][] = array('productname'=>$Product_name, 
    'productprice'=>$Product_price,
    'productquntity'=>$Product_quntity);
    print_r($_SESSION['cart']);
    // header('location:Viewcart.php');
    //  print_r('cart');
  
   }
// }

        //remove buttons
// session_start();
        if (isset($_POST['delete'])) {
            foreach($_SESSION['cart'] as $key => $value) {
                if($value['productname'] === $_POST['item']){
                    unset($_SESSION['cart'][$key]);
                    $_SESSION['cart'] = array_values($_SESSION['cart']);
                            header('location:Viewcart.php');
                }
            }
        }

       //update cart
        // if (isset($_POST['update'])) {
        //     foreach($_SESSION['cart'] as $key => $value) {
        //         if($value['productname'] === $_POST['item']){
        //             $_SESSION['cart'][$key] = array('productquntity'=>$Product_quntity,
        //                                             'productprice'=>$Product_price,
        //                                             'productname'=>$Product_name);
        //                     header('location:Viewcart.php');
        //         } 
        //     }
        // }
    }else{
        header('location:form/userlogin.php');
    }
    ?>
<script>window.location.href='Viewcart.php';</script>