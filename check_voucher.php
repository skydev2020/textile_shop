<?php

    
    session_start();
    extract($_POST);
  
    $newvari = 1;
    $conn = new mysqli($servername, $username, $password, $dbname);
    mysqli_set_charset($conn,'utf8');
    @header('Content-Type: text/html; charset=utf-8');
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }   

    // calculate total product pricees
    $products=$_SESSION['cart']['product_details'];
    $total=0;
    $shipping_price = $_POST['shipping_price'];
    
    foreach ($products as $_product) {
        $total=$total+$_product['priceValue'] * $_product['quantity'];
    };    

    $result = mysqli_query($conn, "SELECT * FROM coupons where codename='".$_POST['code']."' and status=1 and available>0 and from_date <= CURDATE()  AND TO_DATE >= CURDATE() limit 1"); 

    // determine number of rows result set 
    $row_cnt = $result->num_rows;
    // var_dump($row_cnt);
    if ($row_cnt < 1) {
        echo 0; // reply 0
        return;
    }

    $obj = mysqli_fetch_object($result);

    echo $obj->name;
    $_SESSION['cart']['user_details']['voucher_code'] = $_POST['code'];
    $_SESSION['cart']['user_details']['voucher_name'] = $obj->name;
    return;

    // value should be valuated only in step 3
 
    // if ($obj->type == 0 && $obj->cart_amount < $total) {
    //     echo $obj->name;
    //     $_SESSION['cart']['user_details']['voucher_code'] = $_POST['code'];
    //     $_SESSION['cart']['user_details']['voucher_name'] = $obj->name;
    //     return;
    // }

    // if ($obj->type == 1 && $obj->shipping==1 && $obj->cart_amount < $total) {
    //     echo $obj->name;
    //     $_SESSION['cart']['user_details']['voucher_code'] = $_POST['code'];
    //     $_SESSION['cart']['user_details']['voucher_name'] = $obj->name;
    //     return;
    // }

    // if ($obj->type == 1 && $obj->shipping==0 && (float)$obj->cart_amount < $total + $shipping_price) {
    //     echo $obj->name;
    //     $_SESSION['cart']['user_details']['voucher_code'] = $_POST['code'];
    //     $_SESSION['cart']['user_details']['voucher_name'] = $obj->name;
    //     return;
    // }

    // echo 0; // reply 0
    // return;

?>