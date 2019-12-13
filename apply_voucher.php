<?php

	// error_reporting(0);

    // get product_id: modulename
    function getProductId($str) {
        if (strpos($str, 'plisuotos-zaliuzes') !== false)
        {
            return 1;
            
        }
        elseif (strpos($str, 'roletai-diena-naktis') !== false)
        {
            return 2;
            
        }
        elseif (strpos($str, 'roletai-plastikiniams-langams') !== false)
        {
            return 3;
        }
        elseif (strpos($str, 'horizontalios-zaliuzes') !== false)
        {
            return 4;
            
        }
        elseif (strpos($str, 'tinkleliai-remeliai') !== false)
        {
            return 5;
            
        }
        elseif (strpos($str, 'tinkleliai-roletai') !== false)
        {
            return 6;
            
        }
        elseif (strpos($str, 'tinkleliai-durims') !== false)
        {
            return 7;
            
        }
    }

	session_start();
    extract($_POST);
	
	$servername = "localhost";
	$username = "reseller_eshopdev";
	$password = "GsKm72hgW29G7KYm";
	$dbname = "reseller_eshopdev";

	$newvari = 1;
	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_set_charset($conn,'utf8');
    @header('Content-Type: text/html; charset=utf-8');
	
    if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}   
			
	
    // get the parameters
    // $code = $_REQUEST['code'];
    $code = "Discount_10_RPL"; // just for demo purpose;
    //$price = $_REQUEST['price']; // total cart price
    $price = 1000; // assuming as demo purpose
    // $product_id = $_REQUEST['product_id'];
    // $discounted = $_REQUEST['discounted'];
	
    // check code exists in the db

	if(!empty($code)) {  

        // var_dump("SELECT * FROM coupons where codename='Discount_10_RPL' and status=1 and available>0 and amount < $price and from_date <= CURDATE()  AND TO_DATE >= CURDATE() limit 1");
        //retrieve coupon        
        $result = mysqli_query($conn, "SELECT * FROM coupons where codename='Discount_10_RPL' and status=1 and available>0 and amount < $price and from_date <= CURDATE()  AND TO_DATE >= CURDATE() limit 1"); 


        // determine number of rows result set 
        $row_cnt = $result->num_rows;
        // var_dump($row_cnt);
        if ($row_cnt < 1) {
            echo "0"; // reply 0
            return;
        }

        // fetch the object
        $coupon = mysqli_fetch_object($result);
        // if ( $coupon->cart_amount < $price)==1){
        //     echo "0"; // reply 0
        //     return;   
        // }

        // apply the coupon
        if ($coupon->type ==0 ) {
            // apply the coupon by percentage to circulating all products

            //iterate the products in products
            $products=$_SESSION['cart']['product_details'];

            // prepare array of price, discount_price
            $pricePairs = array();
            $_index=0;

            foreach ($products as $_product) {
                // if( !empty($products[$x]['table'])){
                // }    
                var_dump($_product);
                $product_id = getProductId($_product['imgsrc']);
                $_product['couponPrice'] = $_product['priceValue'];

                if (strpos($coupon->limit_products, (string)$product_id) !== false) {                    
                    $_product['couponPrice'] = $_product['priceValue'] * (100-$coupon->amount) / 100;
                }
                else {                    
                }

                $pricePairs[$_index] = array();
                $pricePairs[$_index]['couponPrice'] = $_product['couponPrice'];
                $pricePairs[$_index]['priceValue'] = $_product['priceValue'];

                $_index++;
            }
            // echo (json_encode($pricePairs));
            die();

        }
        else if ($row->type ==1 ) {
            // apply the amount to total cart amount
            $price=$price-$coupon->amount;
        }


        die();
		// $result = mysqli_query($conn, "SELECT * FROM coupons  where codename='$code' and status=1 and available>0 and cart_amount < $price and ( limit_products = '' or limit_products like '%$product_id%') and CURDATE() between from_date and end_date limit 1"); 

 
 		
 		
		
	}
	
	// if($name=='')
	// {
	// 	$name = "Ne";
	// }
	
	// $_SESSION['checkbox_name_val'] = $name;
	
	var_dump($name);
?>