<?php 
		include('../horizontalios-zaliuzes/adminzone/config.php');
		
		
?>

<!DOCTYPE html>
<html>
<head>
	 <title>Order List</title>
	<link rel="stylesheet" type="text/css" href="https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/adminzone/css/bootstrap.modal.css?v=<?php echo rand(999,9999); ?>">
	<link rel="stylesheet" type="text/css" href="https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/adminzone/css/style.css?v=<?php echo rand(999,9999); ?>">
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
		#tooltip1 { position: relative; }
#tooltip1 a span { display: none; color: #FFFFFF; }
#tooltip1 a:hover span { display: block; position: fixed; width: 400px;  height: 400px; left:400px; top: 50px; color: #FFFFFF; padding: 0 5px; }
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
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}  

	function getdataB($strStart, $strEnd, $text){
	
		for ($i=0;$i<=strlen($text);$i++)
		{
	
			if (substr($text,$i,strlen($strStart))==$strStart) 
			{
				$st=$i;
				$k=$i;
				while (substr($text,$k,strlen($strEnd))!=$strEnd)
				{
					$k++;
				}
				$k=$k+strlen($strEnd);
				$start=$st;
				$tmpstr= substr($text,$start,$k-$start);
				
			}
		}
		return $tmpstr;
	}

function getdataA($strStart, $strEnd, $text){
				
		for ($i=0;$i<=strlen($text);$i++)
		{
	
			if (substr($text,$i,strlen($strStart))==$strStart) 
			{
				$st=$i;
				$k=$i;
				while (substr($text,$k,strlen($strEnd))!=$strEnd)
				{
					$k++;
				}
				$en=$k+strlen($strEnd);
				$start=$st+strlen($strStart);
				$tmpstr= substr($text,$start,$k-$start);
				
			}
		}
		return $tmpstr;
	}
	
if($_REQUEST['status']!='' && $_REQUEST['order_id']!='')
{
	 $sql = mysqli_query($conn, "SELECT status FROM reseller_user_details where rud_id = '". $_REQUEST['order_id']."'");
	 $row_check = mysqli_fetch_assoc($sql);
	 if($row_check)
	 {
	 	$status_before = $row_check['status'];
		$case = 0;
		if($status_before=='Confirm')
		{
			?>
            <script type="text/javascript">
				alert("Your order status already confirm you cannot changed again.");
				window.location.href = "order_list.php";
			</script>
            <?php
			exit;
		}
		else
		if($_REQUEST['status']=='Delete')
		{
			
			mysqli_query($conn,"Delete from reseller_user_details where rud_id = '".$_REQUEST['order_id']."'");
			mysqli_query($conn,"Delete from rpd_order_id  where rud_id = '".$_REQUEST['order_id']."'");
			$case = 1;
			
		}
		else
		if($_REQUEST['status']=='Confirm')
		{
			
			$order_id = $_REQUEST['order_id'];
			$cstatus = 'confirm';
			include('../mailtest.php');
			
			mysqli_query($conn,"Update reseller_user_details set status = 'Confirm' where rud_id = '".$_REQUEST['order_id']."'");
			$case = 1;
			
		}
			else
		if($_REQUEST['status']=='Shipped')
		{


			$order_id = $_REQUEST['order_id'];
			$cstatus = 'shipped';
			include('../mailtest.php');

mysqli_query($conn,"Update reseller_user_details set status = 'Shipped' where rud_id = '".$_REQUEST['order_id']."'");
				?>
				
				
					<script type="text/javascript">
						window.location.href = "order_list.php";
					</script>
				
				<?
			
		}
		
		
		else
		if($_REQUEST['status']=='Cancel')
		{
			$order_id = $_REQUEST['order_id'];
			$cstatus = 'cancel';
			include('../mailtest.php');
			
			mysqli_query($conn, "Update reseller_user_details set status = 'Cancel' where rud_id = '".$_REQUEST['order_id']."'");
			$case = 1;
			
		}
		
			if($case == 1)
			{
		?>
            <script type="text/javascript">
				window.location.href = "order_list.php";
			</script>
            <?php
			exit;
			}
	 }
	 else
	 {
	 	
	 }
	 
}
?>
 			 
	<table border="1" style="border-collapse: collapse; margin-top:80px;" class="table">
		 
		<tr>
		 
			<th width="6%">OrderID</th>
            <th width="16%">Date</th>
            <th width="20%">Vardas Pavarde</th>
            <th width="6%">Suma</th>
            <th width="10%">Status</th>
            <th width="40%">Action</th>
		</tr>
        
		<?php
		
		
		
	$showRecordPerPage = 100;
if(isset($_GET['page']) && !empty($_GET['page'])){
$currentPage = $_GET['page'];
}else{
$currentPage = 1;
}
$startFrom = ($currentPage * $showRecordPerPage) - $showRecordPerPage;
if($_REQUEST['statusfind']=='uncompleted')
{
	$sql = "SELECT * FROM reseller_user_details where status ='uncompleted'  ORDER BY rud_id desc";	
}
else
{
	$sql = "SELECT * FROM reseller_user_details where status !='uncompleted'  ORDER BY rud_id desc";
}

$result = mysqli_query($conn, $sql);
$total_order = mysqli_num_rows($result);
$lastPage = ceil($total_order/$showRecordPerPage);
$firstPage = 1;
$nextPage = $currentPage + 1;
$previousPage = $currentPage - 1;
if($_REQUEST['statusfind']=='uncompleted')
{
	$orderSQL = "SELECT * FROM reseller_user_details where  status ='uncompleted' ORDER BY rud_id desc LIMIT $startFrom, $showRecordPerPage";
}
else
{
	$orderSQL = "SELECT * FROM reseller_user_details where  status !='uncompleted' ORDER BY rud_id desc LIMIT $startFrom, $showRecordPerPage";
}


$result = mysqli_query($conn, $orderSQL);

	
	/* $sql = "SELECT * FROM reseller_user_details   ORDER BY rud_id desc ";
		$result = mysqli_query($conn,$sql);*/
		while($row = mysqli_fetch_array($result)){
			
			$sql_q = "SELECT rpd_price_summary_table FROM reseller_product_details where  rpd_order_d = '".$row['rud_id']."' limit 1";
			$result_info = mysqli_query($conn,$sql_q);
			$row_data = mysqli_fetch_assoc($result_info);
			if($row_data)
			{
				 $price_html = $row_data['rpd_price_summary_table'];
				
				$price = strip_tags(getdataB('<span id="visu_so_pvm">','</span>',$price_html));  
			}
		 
			
			?>
			<tr>
				  
					<td><?php echo stripslashes($row['rud_id']); ?></a>
                    <td><?php echo stripslashes($row['rud_current_time']); ?></a>
                    <td><?php echo stripslashes($row['rud_first_name'])." ".stripslashes($row['rud_last_name']); ?></a>
                    <td><?php echo $price;?></a>
                    <td><?php echo stripslashes($row['status']); ?></a>
					<td><a class="action-btn edit-btn" href="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/view_order.php?order_details=<?php echo $row['rud_id'];?>" style="display: inline-block; margin: 5px 0px;">View</a> 
                    <a class="action-btn " href="order_list.php?order_id=<?php echo $row['rud_id'];?>&status=Delete" onClick="return confirm('Are you sure you want to Delete this order?')" style="display: inline-block; margin: 5px 0px; background-color:#ff0057;">Delete</a> 
                    <a class="action-btn" href="order_list.php?order_id=<?php echo $row['rud_id'];?>&status=Cancel" onClick="return confirm('Are you sure you want to Cancel this order?')"  style="display: inline-block; margin: 5px 0px; background-color:#ff0057;">Cancel</a> 
                    <a class="action-btn edit-btn" href="order_list.php?order_id=<?php echo $row['rud_id'];?>&status=Confirm" onClick="return confirm('Are you sure you want to Confirm this order?')"  style="display: inline-block; margin: 5px 0px; background-color:#009900;">Confirm</a>
<a class="action-btn edit-btn" href="order_list.php?order_id=<?php echo $row['rud_id'];?>&email=<?php echo $row['rud_email'];?>&status=Shipped" onClick="return confirm('Are you sure you want to change order status to Shipped?')"  style="display: inline-block; margin: 5px 0px; background-color:#009900;">Shipped</a>
					</td></tr>
					<?php  
			?>
		
		<?php
	}
	?>
    
    
</table>

<nav aria-label="Page navigation" style="text-align:center; width:100%">
<ul class="pagination">
<?php if($currentPage != $firstPage) { ?>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $firstPage ?>" tabindex="-1" aria-label="Previous">
<span aria-hidden="true">First</span>
</a>
</li>
<?php } ?>
<?php if($currentPage >= 2) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $previousPage ?>"><?php echo $previousPage ?></a></li>
<?php } ?>
<li class="page-item active"><a class="page-link" href="?page=<?php echo $currentPage ?>"><?php echo $currentPage ?></a></li>
<?php if($currentPage != $lastPage) { ?>
<li class="page-item"><a class="page-link" href="?page=<?php echo $nextPage ?>"><?php echo $nextPage ?></a></li>
<li class="page-item">
<a class="page-link" href="?page=<?php echo $lastPage ?>" aria-label="Next">
<span aria-hidden="true">Last</span>
</a>
</li>
<?php } ?>
</ul>
</nav>
	<!-- End of table management -->
	<?php  
	?>
	<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
	<script type="text/javascript">
		$(document).ready(function() {
		
		$(".cat").on('change',function() {
			var editableObj = $(this);
			var cat_id = $(editableObj).val();
			var column_name = $('#column_name').val();
			var table_name = $('#table_name').val();
			var row_id = $(editableObj).find(':selected').data('rowid');


			$(editableObj).css("background","beige url(loaderIcon.gif) no-repeat right");
			$.ajax({
				url: "save_inline_edit.php",
				type: "POST",
				data:'table='+table_name+'&column='+column_name+'&editval='+cat_id+'&id='+row_id,
				success: function(data){
					$(editableObj).css("background","#FFF");
				}        
		   });
			
		});

		
	});
    

		function chooseImage(id) {
			$('#image_'+id).trigger('click');
			
		}
		// function formsubmit(id) {
			
		// }
		$('.image').change(function() {
			var id = $(this).data('id');
			$('#form_'+id).submit();
		})
		
		$('.img-form').on('submit', function(e){
			
			e.preventDefault();
			var id = $(this).data('id');
			var fileInput = document.getElementById('image_'+id);
			 var file = fileInput.files[0];
			 var table = $('#table_name').val();
			 var column = 'image';
			  var formData = new FormData();
			  formData.append('file', file);
			  formData.append('table', table);
			  formData.append('column', column);
			  formData.append('id', id);
			//var formData = new FormData($(this));
			//$(editableObj).css("background","beige url(loaderIcon.gif) no-repeat right");
			$.ajax({
				url: "save_inline_edit_image.php",
				type: "POST",
			   	data:  formData,
			   	cache:false,
            	contentType: false,
            	processData: false,
				success: function(data){
					//$(editableObj).css("background","#FFF");
					$('#td_img_'+id+" img").attr("src", "images/"+data);
				}        
		   });
		});
	</script>