<?php
sleep(2);
session_start(); 
require_once('libwebtopay/WebToPay.php');

$newvari = 1;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  


 function siunciam($id_insert)
                {
                        $to = clean_data($_SESSION['cart']['user_details']['email']);
                        $from = "vadyba@solemlux.lt";
                        $subject = 'Nauja kainos užklausa '.$id_insert;
                        $body = file_get_contents("https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/email_order.php?order_details=".$id_insert);
                        $mail = new ZFmail($to,$from,$subject,$body);
                        $mail->send();
                        
                }

                function siunciam_second($id_insert)
                {
                        $to = "ramunas@solemlux.lt";
                        $from = "vadyba@solemlux.lt";
                        $subject = 'Nauja kainos užklausa '.$id_insert;
                        $body ='<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                             </head><body>';
                        $body .="<p><a href='https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/view_order.php?order_details=".$id_insert;
                        $body .="'>Peržiūrėti užklausos ".$id_insert." informaciją</a> </p>";
                        $body .='</body></html>';
                        $mail = new ZFmail($to,$from,$subject,$body);
                        $mail->send();
                  
                        
                }  

                function siunciam_third($id_insert)
                {
                        $to = "vadyba@solemlux.lt";
                        $from = "vadyba@solemlux.lt";
                        $subject = 'Nauja kainos užklausa '.$id_insert;
                        $body ='<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
                             </head><body>';
                        $body .="<p><a href='https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/view_order.php?order_details=".$id_insert;
                        $body .="'>Peržiūrėti užklausos ".$id_insert." informaciją</a> </p>";
                        $body .='</body></html>';
                        $mail = new ZFmail($to,$from,$subject,$body);
                        $mail->send();
                  
                        
                }  


 class ZFmail{
        var $to = null;
        var $from = null;
        var $subject = null;
        var $body = null;
        var $headers = null;
        function ZFmail($to,$from,$subject,$body){
            $this->to      = $to;
            $this->from    = $from;
            $this->subject = $subject;
            $this->body    = $body;
        }        
        function send(){
            $crlf = chr(10) . chr(13);
            $boundary = md5(uniqid(time()));
            $this->addHeader('From: '.$this->from."\r\n");
            $this->addHeader('Reply-To: '.$this->from."\r\n");
            $this->addHeader('Return-Path: '.$this->from."\r\n");
            $this->addHeader('MIME-Version: 1.0'."\r\n");
            $this->addHeader('Content-type: text/html; charset=UTF-8' . "\r\n");
            //$this->addHeader('X-Mailer: PHP/' . phpversion() . $crlf."\r\n");
            //$this->addHeader('-- Pranešimo id ' . $boundary . "--\r\n\n");
            mail($this->to,$this->subject,$this->body,$this->headers);
        }        
        function addHeader($header){
            $this->headers .= $header;
        }

    }
        function clean_data($data)
          {
           $data = trim($data);
            $data = stripslashes($data);
            $data = strip_tags($data);
            $data = str_replace("#", "nsbp", $data);
            $data = str_replace("=", "", $data);
            $data = str_replace(";", "", $data);
            $data = str_replace(">", "", $data);
            $data = str_replace("<", "", $data);
            $data = str_replace("}", "", $data);
            $data = str_replace("{", "", $data);
            $data = str_replace("]", "", $data);
            $data = str_replace("[", "", $data);
            $data = str_replace("'", "", $data);
            $data = str_replace("`","``",$data);
           // $data = str_replace("-","nsbp",$data);

            if(strlen($data) < 1)
            {
             $data= "  ";  
            }
            return $data;
          }  
 


              
if($_REQUEST['status']=='complete')
{
	$qry_check = mysqli_query($conn, "update reseller_user_details set status = 'Paid'  where rud_id = '".$_SESSION['order_id']."' AND (status = 'uncompleted' OR status = 'Unpaid')");
	
	siunciam($_SESSION['order_id']);
	siunciam_second($_SESSION['order_id']);
	siunciam_third($_SESSION['order_id']);
	
	  session_destroy ();
             session_start();
    $_SESSION["order_complete"]="success";
	 ?>
        <script type="text/javascript">
        
        window.location.href = "https://www.solemlux.lt/eshopdev/order-completed";
        </script>
<?php
	exit;
}
else
if($_REQUEST['status']=='cancel')
{
	 ?>
        <script type="text/javascript">
        alert("Payment status is cancelled ");
        window.location.href = "https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/";
        </script>
<?php
}
else
if($_REQUEST['status']=='callback')
{
	$qry_check = mysqli_query($conn, "update reseller_user_details set status = 'Paid'  where rud_id = '".$_SESSION['order_id']."' AND (status = 'uncompleted' OR status = 'Unpaid')");
	
	siunciam($_SESSION['order_id']);
	siunciam_second($_SESSION['order_id']);
	siunciam_third($_SESSION['order_id']);
	
	  session_destroy ();
             session_start();
    $_SESSION["order_complete"]="success";
	 ?>
        <script type="text/javascript">
        
        window.location.href = "https://www.solemlux.lt/eshopdev/order-completed";
        </script>
<?php
	exit;
}
 
    $conn->close();  
 ?>