<?php 
		include('../horizontalios-zaliuzes/adminzone/config.php');
		
		
?>

<!DOCTYPE html>
<html>
	<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Shipping Methods</title>
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
 <?php 

$newvari = 1;
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
mysqli_set_charset($conn,'utf8');
	@header('Content-Type: text/html; charset=utf-8');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}   ?>


<div class="action-container" style="margin-top:100px;">
<?php $sqql = "SELECT * FROM take_away_shipping where id = '".$_GET['editid']."'";
//echo $sql;exit;

$resultt=mysqli_query($conn, $sqql);?>
      <?php $roww = mysqli_fetch_array($resultt);  ?>
<?php if($_GET['tables'] == 'shippingadd' || $_GET['editid'] != '' ){ ?>
      <table class="main-table" style="margin-top:80px;" width="100%" border="1">
    <tbody>
          <tr>
        <td class="content-area" valign="top"><div class="action-container">
            <h3 class="action-title">Add record for shipping method</h3>
            <form method="post" action="" enctype="multipart/form-data">
              <table style="border-collapse: collapse;" class="table" border="1">
                
                <tbody>
                  <tr>
                  <td>Type</td>
                  <td>
							<select name="shipping_method" class="text-input"  id="purpose" >
                           
								<option value="1"<?php if ($roww['s_type'] == '1') echo ' selected="selected"'; ?>>Take away in store</option><option value="2"<?php if ($roww['s_type'] == '2') echo ' selected="selected"'; ?>>Deliver by courier</option>						</select>
						</td>
                        
                  </tr>
                   <tr <?php if ($roww['s_type'] == '2') {?>style="display:none;" <?php } ?> id='bbbusinesss'>
                    <td>Name</td>
                    <td><input class="text-input" type="text" name="s_name" value="<?php echo $roww['s_name'];  ?>" ></td>
                  </tr>
                  <tr <?php if ($roww['s_type'] == '2') {?>style="display:none;" <?php } ?> id='bbbbbusinesss'>
                    <td>Price</td>
                    <td><input class="text-input" type="text" name="delivery_price" value="<?php echo $roww['delivery_price'];  ?>" ></td>
                  </tr>
                   <tr <?php if ($roww['s_type'] == '2') {?>style="display:none;" <?php } ?> id='bbbbusinesss'>
                    <td>Country</td>
                    <td><input class="text-input" type="text" name="country" value="<?php echo $roww['country'];  ?>"  ></td>
                  </tr>
                 
                  <tr  <?php if ($roww['s_type'] != '2') {?>style="display:none;" <?php } ?><?php //if($roww['d_name'] == NULL || $roww['d_name'] == NULL ){echo 'style="display:none;';} ?> id='cname'>
                    <td>Name</td>
                    <td><input class="text-input" type="text" name="cname" value="<?php echo $roww['d_name'];  ?>" ></td>
                  </tr>
                 <tr <?php if ($roww['s_type'] != '2') {?>style="display:none;" <?php } ?>  id='business'>
                    <td>Price</td>
                    <td><input class="text-input" type="text" name="price_duu" value="<?php echo $roww['d_price'];  ?>" ></td>
                  </tr>
                  <tr <?php if ($roww['s_type'] != '2') {?>style="display:none;" <?php } ?> id='dbusiness'>
                    <td>Duration</td>
                    <td><input class="text-input" type="text" name="delivery_du" value="<?php echo $roww['d_duration'];  ?>" ></td>
                  </tr>
                  <tr <?php if ($roww['s_type'] != '2') {?>style="display:none;" <?php } ?> id='fbusinesss'>
                    <td>Free delivery from</td>
                    <td><input class="text-input" type="text" name="delivery_from" value="<?php echo $roww['d_free_delivery_from'];  ?>" ></td>
                  </tr>
                  <tr <?php if ($roww['s_type'] != '2') {?>style="display:none;" <?php } ?> id='abo'>
                  
                    <td><b>Abroad</b></td>
                    
                  </tr>
                  
                   <tr <?php if ($roww['s_type'] != '2') {?>style="display:none;" <?php } ?> id='cprice'>
                  
                    <td>Price</td>
                    <td><input class="text-input" type="text" name="cprice" value="<?php echo $roww['abroad_price'];  ?>" ></td>
                  </tr>
                  <tr <?php if ($roww['s_type'] != '2') {?>style="display:none;" <?php } ?> id='cduration'>
                  
                    <td>Duration</td>
                    <td><input class="text-input" type="text" name="cduration" value="<?php echo $roww['abroad_duration'];  ?>" ></td>
                  </tr>
                   <tr <?php if ($roww['s_type'] != '2') {?>style="display:none;" <?php } ?> id='cdurations'>
                  
                    <td>Free delivery from</td>
                    <td><input class="text-input" type="text" name="abroad_free_dlee" value="<?php echo $roww['abroad_free_delivey'];  ?>" ></td>
                  </tr>
                  </div>
                </tbody>
              </table>
              <br>
              <br>
            <?php if($_GET['editid'] == '' ){ ?>
              <input class="action-btn submit-btn ml-1" type="submit" name="Save" value="Save">
              <?php } else{ ?>
               <input class="action-btn submit-btn ml-1" type="submit" name="Update" value="Update">
             <?php } ?>
              <a class="action-btn edit-btn" href="shippingmethods.php">Cancel</a>
            </form>
            
          </div></td>
      </tr>
        </tbody>
  </table>
  <?php } else { ?>
  <!--<select name="shipping_method" class="text-input" id="listpurpose" required>
                           
								<option value="3">Take away in store</option><option value="4">Deliver by courier</option>						</select>-->
                                
<a class="action-btn submit-btn pull-right" href="shippingmethods.php?tables=shippingadd" style="margin-bottom: 20px;
    margin-right: 27px;">Add record to Shipping Method</a><br>
      <table style="border-collapse: collapse;" class="table" border="1" >
    <tbody>
          <tr>
          
          <td colspan="4"><b>Take away in store</b></td>
       
      </tr>
          <tr>
          
        
        <th>Name</th>
        <th>Price</th>
        <th>Country </th>
        
        <th colspan="2">Action</th>
      </tr>
      <?php $sql = "SELECT * FROM take_away_shipping where s_type = 1 ORDER by id ASC";
//echo $sql;exit;

$result=mysqli_query($conn, $sql);?>
      <?php while($row = mysqli_fetch_array($result)) {  ?>

      <tr >
        
       
        <td class="contenteditable" onblur="saveToDatabase(this,'tooltip','13','pz_priedai')" contenteditable="true"><?php echo $row["s_name"]; ?></td>
        <td class="contenteditable" onblur="saveToDatabase(this,'unit_price','13','pz_priedai')" contenteditable="true"><?php echo number_format((float)$row["delivery_price"], 2, '.', '');?></td>
         <td class="contenteditable" onblur="saveToDatabase(this,'unit_price','13','pz_priedai')" contenteditable="true"><?php echo $row["country"]; ?></td>
       
        <td><a class="action-btn edit-btn" href="shippingmethods.php?editid=<?php echo $row["id"];?>" style="display: inline-block; margin: 5px 0px;">Edit</a> <a class="action-btn delete-btn" href="shippingmethods.php?deleteid=<?php echo $row["id"];?>" style="display: inline-block; margin: 5px 0px;">Delete</a></td>
       
      </tr>
 <?php } ?>
  </tbody>
  </table>
   <table style="border-collapse: collapse;" class="table" border="1"  >
    <tbody>
          <tr>
            
          <td colspan="9"><b>Deliver by courier</b></td>
        
      </tr>
      <tr>
     
       
        <th>Name</th>
         <th>Price</th>
        <th>Duration </th>
        <th>Free delivery from </th>
        <th>Price(Abroad)</th>
        <th>Duration(Abroad)</th>
         <th>Free delivery from(Abroad) </th>
        <th colspan="2">Action</th>
      </tr>
      <?php $sql = "SELECT * FROM take_away_shipping where s_type = 2 ORDER by id ASC";
//echo $sql;exit;

$result=mysqli_query($conn, $sql);?>
      <?php while($row = mysqli_fetch_array($result)) {  ?>

      <tr >
         
       
        <td class="contenteditable" onblur="saveToDatabase(this,'tooltip','13','pz_priedai')" contenteditable="true"><?php echo $row["d_name"]; ?></td>
        <td class="contenteditable" onblur="saveToDatabase(this,'unit_price','13','pz_priedai')" contenteditable="true"><?php echo number_format((float)$row["d_price"], 2, '.', '');?></td>
         <td class="contenteditable" onblur="saveToDatabase(this,'unit_price','13','pz_priedai')" contenteditable="true"><?php echo $row["d_duration"]; ?></td>
                  <td class="contenteditable" onblur="saveToDatabase(this,'unit_price','13','pz_priedai')" contenteditable="true"><?php echo $row["d_free_delivery_from"]; ?></td>

         <td class="contenteditable" onblur="saveToDatabase(this,'unit_price','13','pz_priedai')" contenteditable="true"><?php echo number_format((float)$row["abroad_price"], 2, '.', '');?></td>

         <td class="contenteditable" onblur="saveToDatabase(this,'unit_price','13','pz_priedai')" contenteditable="true"><?php echo $row["abroad_duration"]; ?></td>
          <td class="contenteditable" onblur="saveToDatabase(this,'unit_price','13','pz_priedai')" contenteditable="true"><?php echo $row["abroad_free_delivey"]; ?></td>

       
        <td><a class="action-btn edit-btn" href="shippingmethods.php?editid=<?php echo $row["id"];?>" style="display: inline-block; margin: 5px 0px;">Edit</a> <a class="action-btn delete-btn" href="shippingmethods.php?deleteid=<?php echo $row["id"];?>" style="display: inline-block; margin: 5px 0px;">Delete</a></td>
       
      </tr>
 <?php } ?>
          <!--<tr>
        <td>13</td>
        <td class="contenteditable" onblur="saveToDatabase(this,'identificator','13','pz_priedai')" contenteditable="true">Baterijų įkroviklis</td>
        <td class="contenteditable" onblur="saveToDatabase(this,'tooltip','13','pz_priedai')" contenteditable="true"><br></td>
        <td class="contenteditable" onblur="saveToDatabase(this,'unit_price','13','pz_priedai')" contenteditable="true">20</td>
         <td class="contenteditable" onblur="saveToDatabase(this,'unit_price','13','pz_priedai')" contenteditable="true">20</td>
       
        <td><a class="action-btn edit-btn" href="edit.php?table=pz_priedai&amp;id=13#" style="display: inline-block; margin: 5px 0px;">Edit</a> <a class="action-btn delete-btn" href="delete.php?table=pz_priedai&amp;id=13#" style="display: inline-block; margin: 5px 0px;">Delete</a></td>
      </tr>-->
        </tbody>
  </table>
  <?php } ?>
 <?php if(isset($_REQUEST['Save'])){
	//print_r($_REQUEST);exit;
	$sql = "INSERT INTO take_away_shipping (s_type,s_name,delivery_price,country,d_name,d_price,d_duration,d_free_delivery_from,abroad_price,abroad_duration,abroad_free_delivey)
VALUES ('".$_REQUEST['shipping_method']."','".$_REQUEST['s_name']."','".$_REQUEST['delivery_price']."','".$_REQUEST['country']."','".$_REQUEST['cname']."','".$_REQUEST['price_duu']."','".$_REQUEST['delivery_du']."','".$_REQUEST['delivery_from']."','".$_REQUEST['cprice']."','".$_REQUEST['cduration']."','".$_REQUEST['abroad_free_dlee']."')";
//echo $sql;exit;
mysqli_query($conn, $sql);
?>
<script type="text/javascript">
				window.location.href = "shippingmethods.php";
			</script>
<?php	 
	 
 }
 
 
 if(isset($_REQUEST['Update'])){
	//print_r($_REQUEST);exit;
	$sql = "UPDATE take_away_shipping SET s_type='".$_REQUEST['shipping_method']."',s_name='".$_REQUEST['s_name']."',delivery_price='".$_REQUEST['delivery_price']."',country='".$_REQUEST['country']."',d_name='".$_REQUEST['cname']."',d_price='".$_REQUEST['price_duu']."',d_duration='".$_REQUEST['delivery_du']."',d_free_delivery_from='".$_REQUEST['delivery_from']."',abroad_price='".$_REQUEST['cprice']."',abroad_duration='".$_REQUEST['cduration']."',abroad_free_delivey='".$_REQUEST['abroad_free_dlee']."' WHERE id='".$_REQUEST['editid']."'";
//echo $sql;exit;
mysqli_query($conn, $sql);
	?>
    <script type="text/javascript">
				window.location.href = "shippingmethods.php";
			</script>
    <?php 
	 
 }
 
 

 if(isset($_REQUEST['deleteid'])){
	//print_r($_REQUEST);exit;
	$sql = "DELETE FROM take_away_shipping WHERE id='".$_REQUEST['deleteid']."'";
//echo $sql;exit;
mysqli_query($conn, $sql);
?>
<script type="text/javascript">
				window.location.href = "shippingmethods.php";
			</script>
<?php

	 
	 
 }
 
 
 ?> 
  
    </div>

<script>
$(document).ready(function(){
	
    $('#purpose').on('change', function() {
      if ( this.value == '2')
      {
		  
        $("#business").show(); 
		$("#fbusinesss").show();
		$("#cname").show();
		$("#cprice").show();
		$("#cduration").show();
		$("#dbusiness").show();
		$("#cdurations").show();
		$("#cname").show();
		
		$("#abo").show();	
		$("#businessss").show();
		 $("#bbusinesss").hide();
		  $("#bbbusinesss").hide();
		  $("#bbbbusinesss").hide();
		  $("#bbbbusinesss").hide();
		   $("#bbbbbusinesss").hide();
      }
      else
      {
        $("#business").hide();
		 $("#businesss").hide();
		 $("#businessss").hide();
		 $("#cname").hide();
		$("#cprice").hide();
		$("#fbusinesss").hide();
		$("#cduration").hide();
		$("#cname").hide();
		$("#abo").hide();
		 $("#bbusinesss").show();
		  $("#bbbusinesss").show();
		  $("#bbbbusinesss").show();
		  $("#bbbbusinesss").show();
		  $("#bbbbbusinesss").show();
		  $("#cdurations").hide();
		  $("#dbusiness").hide();
      }
   
	
    });
});
</script>
<script>
$(document).ready(function(){
    $('#listpurpose').on('change', function() {
      if ( this.value == '3')
      {
        $("#takeawayy").show();
		$("#takeawayss").show(); 
	   $("#bycourier").hide();
      }
      else
      {
		  $("#bycourier").show();
        $("#takeawayy").hide();
		$("#takeawayss").hide();
		
      }
   
	
    });
});
</script>