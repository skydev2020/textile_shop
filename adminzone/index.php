<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<?php 
	include('../horizontalios-zaliuzes/adminzone/config.php');
	if($_SESSION['login_session']=="Yes")
	{
		?>
                <script type="text/javascript">
					window.location.href = "https://www.solemlux.lt/eshop/horizontalios-zaliuzes/adminzone";
				</script>
                <?php
				exit;
	}
	
	if(isset($_REQUEST['submitb']))
	{
		if($_REQUEST['username']=='')
		{
			$error_msg  = "Please enter your username <br>";
		}
		else
		if($_REQUEST['password']=='')
		{
			$error_msg  = "Please enter your password <br>";
		}
		else
		{
			
			
			$result_cat = mysqli_query($conn, "SELECT * FROM tbl_login where username = '". addslashes($_REQUEST['username']) ."' AND password =  '". addslashes(md5($_REQUEST['password'])) ."'");
			
			if(mysqli_num_rows($result_cat)>0)
			{
				$row = mysqli_fetch_assoc($result_cat);
				 
				
				$_SESSION['login_session'] = 'Yes';
				$_SESSION['username'] = $row['username'];
				$_SESSION['id'] = $row['id'];
				
				?>
                <script type="text/javascript">
					window.location.href = "https://www.solemlux.lt/eshop/horizontalios-zaliuzes/adminzone";
				</script>
                <?php
				exit;
			}
			else
			{
				$error_msg  = "Please enter valid username and password <br>";
			}
		}
	} 
?>

<!------ Include the above in your HEAD tag ---------->

<!--
    you can substitue the span of reauth email for a input with the email and
    include the remember me checkbox
    -->
    <div class="" style="width:100%;">
         
          <div class="card3 card3-container3" style="" >
           <p style="color:#FF0000; font-weight:bold; margin-left:15px;"><?php echo $error_msg;?></p>
<br>
            <img id="profile-img" class="profile-img-card3" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
            <p id="profile-name" class="profile-name-card3"></p>
          
 
            
            <form class="form-signin" method="post" action="">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="text" id="inputEmail" class="mobileinput form-control3" placeholder="Username" name="username" style="padding-left:10px;" required autofocus>
                <input type="password" id="inputPassword" class="mobileinput form-control3" name="password" placeholder="Password" style="padding-left:10px;" required>
                <div id="remember" class="checkbox">
                    <label>
                       
                    </label>
                </div>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="submitb" style="cursor:pointer;">Sign in</button>
              
            </form>
            
            <!-- /form -->
           
        </div><!-- /card3-container -->
    </div><!-- /container -->
    <style>
/*
 * Specific styles of signin component
 */
/*
 * General styles
 */
body, html {
	height:100%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
}

.card3-container3.card3 {
    max-width: 400px;
	min-height: 370px;
    padding: 40px 40px;
}

.btn {
    font-weight: 700;
    height: 36px;
    -moz-user-select: none;
    -webkit-user-select: none;
    user-select: none;
    cursor: default;
}

/*
 * card3 component
 */
.card3 {
    background-color: #F7F7F7;
    /* just in case there no content*/
    padding: 20px 25px 30px;
    margin: 0 auto 25px;
    margin-top: 50px;
     box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
}

.profile-img-card3 {
    width: 96px;
    height: 96px;
    margin: 0 auto 10px;
    display: block;
    border-radius: 50%;
}

/*
 * Form styles
 */
.profile-name-card3 {
    font-size: 16px;
    font-weight: bold;
    text-align: center;
    margin: 10px 0 0;
    min-height: 1em;
}

.reauth-email {
    display: block;
    color: #404040;
    line-height: 2;
    margin-bottom: 10px;
    font-size: 14px;
    text-align: center;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
   
    box-sizing: border-box;
}

.form-signin #inputEmail,
.form-signin #inputPassword {
    direction: ltr;
    height: 44px;
    font-size: 16px;
}

.form-signin input[type=email],
.form-signin input[type=password],
.form-signin input[type=text],
.form-signin button {
    width: 100%;
    display: block;
    margin-bottom: 10px;
    z-index: 1;
    position: relative;
   
    box-sizing: border-box;
}

.form-signin .form-control3:focus {
    border-color: rgb(104, 145, 162);
    outline: 0;
    box-shadow: inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgb(104, 145, 162);
}

.btn.btn-signin {
    /*background-color: #4d90fe; */
    background-color: rgb(104, 145, 162);
    /* background-color: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
    padding: 0px;
    font-weight: 700;
    font-size: 14px;
    height: 36px;
   
    border-radius: 3px;
    border: none;
   
}

.btn.btn-signin:hover,
.btn.btn-signin:active,
.btn.btn-signin:focus {
    background-color: rgb(12, 97, 33);
}

.forgot-password {
    color: rgb(104, 145, 162);
}

.forgot-password:hover,
.forgot-password:active,
.forgot-password:focus{
    color: rgb(12, 97, 33);
}

 
@media (max-width: 800px) {
 .card3-container3.card3 {
    
	width:90% !important;
	padding: 40px 40px;
}

body, html {
	height:98%;
    background-repeat: no-repeat;
    background-image: linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));
}
}
</style>