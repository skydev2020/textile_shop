<?php
session_start();
error_reporting(0);
$pageTitle  = "Order Complete";
?>
<script type="text/javascript">
function close_checkout() {
        // body...
         document.getElementById("successtyuasdwq_2").style.display="none";
		 window.location.href = "https://www.solemlux.lt/eshopdev/";
    }
	</script> 
    
    <?php
		if($_SESSION["order_complete"]=='')
		{
			?>
            <script type="text/javascript">
				 window.location.href = "https://www.solemlux.lt/eshopdev/";
			</script>
            <?php	
			exit;
		}
	?>
<?php include 'roletai-plastikiniams-langams/header.php'; ?>


    
    <?php include 'terms&conditions.php' ?>
    
<style>
@media (max-width: 535px){
    a.splite_sideEnquiry.on_mobile {
    max-width: 36%;
    min-width: 36%;
}
.greeting.jx_ui_Label {
    display:none!important;
}
.pop-img {
    width:100px;
}
}

</style>