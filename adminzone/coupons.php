<?php 
		include('../horizontalios-zaliuzes/adminzone/config.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Coupons</title>
		<link rel="stylesheet" type="text/css" href="https://www.solemlux.lt/eshop/horizontalios-zaliuzes/adminzone/css/bootstrap.modal.css?v=<?php echo rand(999,9999); ?>">
		<link rel="stylesheet" type="text/css" href="https://www.solemlux.lt/eshop/horizontalios-zaliuzes/adminzone/css/style.css?v=<?php echo rand(999,9999); ?>">
		<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style type="text/css">
			#tooltip1 {
				position: relative;
			}
			#tooltip1 a span {
				display: none;
				color: #FFFFFF;
			}
			#tooltip1 a:hover span {
				display: block;
				position: fixed;
				width: 400px;
				height: 400px;
				left:400px;
				top: 50px;
				color: #FFFFFF;
				padding: 0 5px;
			}
		</style>


	</head>
	<body>
<!-- <h1>Manage tables</h1> -->
<?php 
	include('../header_admin.php');
?>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
	$(document).ready(function(){
		$('#from_date').datepicker({dateFormat: "yy-mm-dd"});
		$('#to_date').datepicker({dateFormat: "yy-mm-dd"});
	});
	</script>


<?php 

	$newvari = 1;
	$conn = new mysqli($servername, $username, $password, $dbname);
	mysqli_set_charset($conn,'utf8');
		@header('Content-Type: text/html; charset=utf-8');
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}   
	
		
	if(isset($_REQUEST['disableid'])){
		$sql = "UPDATE coupons SET status=0 WHERE id='".$_REQUEST['disableid']."'";

		mysqli_query($conn, $sql);
?>
		<script type="text/javascript">
			window.location.href = "coupons.php";
		</script>
<?php 
	 
	}
	
	if(isset($_REQUEST['enableid'])){
		$sql = "UPDATE coupons SET status=1 WHERE id='".$_REQUEST['enableid']."'";

		mysqli_query($conn, $sql);
?>
		<script type="text/javascript">
			window.location.href = "coupons.php";
		</script>
<?php 
	 
	}
 
 
 
?>


<div class="action-container" style="margin-top:100px;">
<?php 
	$sqql = "SELECT * FROM coupons where id = '".$_GET['editid']."'";
	$resultt=mysqli_query($conn, $sqql);
    $roww = mysqli_fetch_array($resultt); 
	if($_GET['tables'] == 'couponsadd' || $_GET['editid'] != '' ){
?>
      <table class="main-table" style="margin-top:80px;" width="100%" border="1">
    <tbody>
          <tr>
        <td class="content-area" valign="top"><div class="action-container">
            <h3 class="action-title">Add new voucher</h3>
            <form method="post" action="" enctype="multipart/form-data">
              <table style="border-collapse: collapse;" class="table" border="1">
                
                <tbody>  
				
					<tr>
						<td>Voucher name</td>
						<td><input class="text-input" type="text" name="name" value="<?php echo $roww['name'];  ?>" ></td>
					</tr>
					<tr>
						<td>Voucher codename</td>
						<td><input class="text-input" type="text" name="codename" value="<?php echo $roww['codename'];  ?>" ></td>
					</tr>
					<tr>
						<td>Number available</td>
						<td><input class="text-input" type="text" name="available" value="<?php echo $roww['available'];  ?>" ></td>
					</tr>
					<tr>
						<td>Amount</td>
						<td>
							<input class="text-input" type="text" name="amount" value="<?php echo $roww['amount'];  ?>" style="width:396px;">
							
							<select name="type" class="text-input"   style="width:100px;">
								<option value="0" <?php if($roww['type']==0)echo 'selected="selected"';?>>%</option>
								<option value="1" <?php if($roww['type']==1)echo 'selected="selected"';?>>eur</option>
							</select>
						</td>
					</tr>
					
					<tr>
						<td>
							Limited to products:
						</td>
						<td>
						<?php $limit_products = explode(',',$roww['limit_products']);?>

							<input type="checkbox" name="limit_products[]" value="" <?php if(!$roww['limit_products'])echo 'checked="checked"';?>>All PRODUCTS<br/>
							<input type="checkbox" name="limit_products[]" value="1" <?php if(in_array(1,$limit_products))echo 'checked="checked"';?>>PLISUOTOS ŽALIUZĖS - UŽSAKYMAS<br/>
							<input type="checkbox" name="limit_products[]" value="2" <?php if(in_array(2,$limit_products))echo 'checked="checked"';?>>ROLETAI DIENA NAKTIS - UŽSAKYMAS<br/>
							<input type="checkbox" name="limit_products[]" value="3" <?php if(in_array(3,$limit_products))echo 'checked="checked"';?>>ROLETAI PLASTIKINIAMS LANGAMS - UŽSAKYMAS<br/>
							<input type="checkbox" name="limit_products[]" value="4" <?php if(in_array(4,$limit_products))echo 'checked="checked"';?>>HORIZONTALIOS ŽALIUZĖS - UŽSAKYMAS<br/>
							<input type="checkbox" name="limit_products[]" value="5" <?php if(in_array(5,$limit_products))echo 'checked="checked"';?>>TINKLELIAI RĖMELIAI - UŽSAKYMAS<br/>
							<input type="checkbox" name="limit_products[]" value="6" <?php if(in_array(6,$limit_products))echo 'checked="checked"';?>>TINKLELIAI ROLETAI - UŽSAKYMAS<br/>
							<input type="checkbox" name="limit_products[]" value="7" <?php if(in_array(7,$limit_products))echo 'checked="checked"';?>>TINKLELIAI DURIMS - UŽSAKYMAS<br/>

						
						</td>
					</tr>
					<tr>
						<td>
							Other limitations:
						</td>
						<td>
							<input class="text-input" type="checkbox" name="discounted_products" value="1"style="width:50px;" <?php if($roww['discounted_products']==1)echo 'checked="checked"';  ?>/> Not for discounted products
							<br/>
							<input class="text-input" type="text" name="cart_amount" value="<?php echo $roww['cart_amount'];  ?>" style="width:100px;"> from cart amount only
							<br/><br/>
								Valid thru date FROM
							<input class="text-input" type="text" name="from_date" value="<?php echo $roww['from_date'];  ?>" style="width:150px;" id="from_date">
								TO
							<input class="text-input" type="text" name="to_date" value="<?php echo $roww['to_date'];  ?>" style="width:150px;" id="to_date">
							<br/>
							<input class="text-input" type="checkbox" name="one_time" value="1"style="width:50px;" <?php if($roww['one_time']==1)echo 'checked="checked"';  ?>/> One time only coupon
							<br/>
							<input class="text-input" type="checkbox" name="shipping" value="1"style="width:50px;" <?php if($roww['shipping']==1)echo 'checked="checked"';  ?>/> Not applied for shipping, only for products in cart
							<br/>
						</td>
					</tr>
                  

                </tbody>
              </table>
              <br>
              <br>
            <?php if($_GET['editid'] == '' ){ ?>
              <input class="action-btn submit-btn ml-1" type="submit" name="Save" value="Save">
              <?php } else{ ?>
               <input class="action-btn submit-btn ml-1" type="submit" name="Update" value="Update">
             <?php } ?>
              <a class="action-btn edit-btn" href="coupons.php">Cancel</a>
            </form>
            
          </div></td>
      </tr>
        </tbody>
  </table>
  <?php } else { ?>

                                
	<a class="action-btn submit-btn pull-right" href="coupons.php?tables=couponsadd" style="margin-bottom: 20px; margin-right: 27px;">Add new voucher</a><br>
    <table style="border-collapse: collapse;" class="table" border="1" >
		<tbody>
			<tr>
				<td colspan="5"><b>Coupons in store</b></td>
			</tr>
			<tr>
				<th>Voucher name</th>
				<th>Used</th>
				<th>Valid thru date  </th>
				<th>Status  </th>
				
				<th colspan="2">Action</th>
			</tr>
<?php 
	$sql = "SELECT * FROM coupons where 1 ORDER by id DESC";
	$result=mysqli_query($conn, $sql);
    while($row = mysqli_fetch_array($result)) {  
?>
			<tr>
				<td class="contenteditable" onblur="saveToDatabase(this,'tooltip','13','coupons')" contenteditable="true"><?php echo $row["name"]; ?></td>
				<td class="contenteditable"><?php echo $row["used"];?></td>
				<td class="contenteditable"><?php echo $row["from_date"]; ?> - <?php echo $row["to_date"]; ?></td>
				<td class="contenteditable"><?php echo $row["status"]?'enabled':'disabled';?></td>
			   
				<td>
				<?php if($row["status"] == 1){ ?>
				<a class="action-btn edit-btn" href="coupons.php?disableid=<?php echo $row["id"];?>" style="display: inline-block; margin: 5px 0px; background-color:#ff0000;">Disable</a> 
				<?php } else { ?>
				<a class="action-btn edit-btn" href="coupons.php?enableid=<?php echo $row["id"];?>" style="display: inline-block; margin: 5px 0px; background-color:#009900;">Enable</a> 
				<?php } ?>
				
				
				<a class="action-btn edit-btn" href="coupons.php?editid=<?php echo $row["id"];?>" style="display: inline-block; margin: 5px 0px;">Edit</a> 
				<a class="action-btn delete-btn" href="coupons.php?deleteid=<?php echo $row["id"];?>" style="display: inline-block; margin: 5px 0px;">Delete</a></td>
			</tr>
 <?php } ?>
		</tbody>
	</table>
   
<?php } ?>
<?php 
	if(isset($_REQUEST['Save'])){
		$sql = "INSERT INTO coupons (name,codename,available,type,amount,one_time,shipping,limit_products,discounted_products,cart_amount,from_date,to_date,created) VALUES ('".$_REQUEST['name']."','".$_REQUEST['codename']."','".$_REQUEST['available']."','".$_REQUEST['type']."','".$_REQUEST['amount']."','".$_REQUEST['one_time']."','".$_REQUEST['shipping']."','".$_REQUEST['limit_products']."','".$_REQUEST['discounted_products']."','".$_REQUEST['cart_amount']."','".$_REQUEST['from_date']."','".$_REQUEST['to_date']."','".date('Y-m-d H:i:s',time())."')";

		mysqli_query($conn, $sql);
?>
		<script type="text/javascript">
			window.location.href = "coupons.php";
		</script>
<?php	 
	 
	}
 
 
	if(isset($_REQUEST['Update'])){

		$sql = "UPDATE coupons SET name='".$_REQUEST['name']."',codename='".$_REQUEST['codename']."',available='".$_REQUEST['available']."',type='".$_REQUEST['type']."',amount='".$_REQUEST['amount']."',one_time='".$_REQUEST['one_time']."',shipping='".$_REQUEST['shipping']."',limit_products='".implode(',',$_REQUEST['limit_products'])."',discounted_products='".$_REQUEST['discounted_products']."',cart_amount='".$_REQUEST['cart_amount']."',from_date='".$_REQUEST['from_date']."',to_date='".$_REQUEST['to_date']."' WHERE id='".$_REQUEST['editid']."'";

		mysqli_query($conn, $sql);
?>
		<script type="text/javascript">
			window.location.href = "coupons.php";
		</script>
<?php 
	 
	}
	

 

 if(isset($_REQUEST['deleteid'])){
	$sql = "DELETE FROM coupons WHERE id='".$_REQUEST['deleteid']."'";
	mysqli_query($conn, $sql);
?>
	<script type="text/javascript">
		window.location.href = "coupons.php";
	</script>
<?php
 
 }
 
 
 ?> 
  
    </div>

