
<div class="myOwl owl-carousel owl-theme" id="myOwl" style="opacity: 1;display: block;">
<?php

//include_once($_POST['name'].'.php');
$item = isset($_GET['colorFabric'])? $_GET['colorFabric'] : null;
if(isset($item) && isset($_SESSION['cart']['product_details'])) {
    $edit_data = $_SESSION['cart']['product_details'][$item];
}

?>
    
            <?php
            /*$site_url = "https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/materials/".$_POST['name']."/thumbs/";
            $dir = $_SERVER['DOCUMENT_ROOT']."/eshopdev/roletai-plastikiniams-langams/materials/".$_POST['name']."/thumbs/";
            $handle = opendir($dir);
            while($file = readdir($handle)){
              if($file !== '.' && $file !== '..'){
                $path_parts = pathinfo($file);
                //print thumbs file name without extension
                //print $path_parts['filename'];;
                ?>
                <label for="colorwicml1">
                        <input type="radio" id="colorwicml1" name="colorFabric" value="<?php echo $path_parts['filename']; ?>"><span><img src="<?php echo $site_url."/".$file; ?>" alt=""  class="thumb-images"></span></label>
                <?php
              }
            } */

            extract($_POST);
            include('../adminzone/config.php');
            $site_url = "https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/materials";
            $dir = $_SERVER['DOCUMENT_ROOT']."/eshopdev/roletai-plastikiniams-langams/materials/";
			
			//$site_url = "materials";
           // $dir = "materials/";
            
            $i = 0;
            if(!empty($category)){
                $sql = "SELECT * FROM  roletai_pl_FiksuotaKainaPagalKodoGr WHERE audinys != '' and status = 'Enable' and ( ";
                foreach($category as $val)
                {
                    $i++;
                    //if($i == 1)
                       // $sql .= " WHERE ";
                    if($val=='AKCIJA')  
					 {
                    		$sql .= " discount >0"; 
					 }
					 else
					 {
						if($i>1)
                        $sql .= ' OR ';
                    	
						$sql .= " (category_id = '$val') ";  
					 }  
                }
                $sql .= " ) ORDER BY discount desc ";
            }
            else
            {
                $sql = "SELECT * FROM  roletai_pl_FiksuotaKainaPagalKodoGr WHERE 1 != 1 ";
            }

            
            //print $sql;
            $i=0;
            $element = 0;
			$last_item = 0;
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_object($result)){
                $i++;
                $element++;
                if($element == 1){
					$last_item = 0;
                    print '<div class="owl-item">
                        <div class="item">';
                }
                
                $fullImage = $row->audinys.'.jpg';
                $thumbImage = 'thumbs_'.$row->audinys.'.jpg';
                if(file_exists($dir.$fullImage) && file_exists($dir.$thumbImage) ) { 
              //if($file !== '.' && $file !== '..'){
                $path_parts = pathinfo($file);
                $audinys = $row->audinys;

                $result_cat = mysqli_query($conn, "SELECT * FROM category WHERE id = '$row->category_id' ");
                $row_cat = mysqli_fetch_object($result_cat);
				
				//-for window image----------------------
				$identificator1 = $row->identificator;
				$identificator1 = explode(']', $identificator1);
				$fname1 = explode(' ', trim($identificator1[1]));
				$audinys1 = str_replace('-','_',$fname1[0]);

                ?>
                <label for="colorwicml<?php echo $row->audinys; ?>">
                        
                        <input type="radio" id="colorwicml<?php echo $row->audinys ?>" name="colorFabricM" value="<?php echo $row->audinys; ?>" <?php if(isset($colorFabric) && $row->audinys == $colorFabric) { echo 'checked'; }?>><span class="indiv"><img src="<?php echo $site_url."/".$thumbImage; ?>" alt=""  id="<?php echo $audinys1 ?>" class="thumb-images" width=96 height=96 "><input type="hidden" class="category_name" value="<?php echo $row_cat->category_name; ?>" ><input type="hidden" class="allowPreview" value="<?php echo $row->preview ?>" ><?php if($row->discount != 0) echo '<span style="position: absolute; top:2px; left: 5px;color: #fff;text-shadow: #000 0px 1px 5px;z-index: 2; height: 0px; width: 0px;">-'.$row->discount.'%</span>'?></span>
                    </label>
                <?php
              }

              if($element == 12){
                $element=0;
				$last_item = 1;
                print '</div>
                        </div>';
              }

            }

            if($last_item == 0 ){
                print '</div>
                        </div>';
              }
            ?>


            

        <div class="owl-controls clickable"></div>
        
</div>
<div class='hoverImgAll' style="align: center;display:none;"></div>
<div style="text-align: center; padding: 15px; text-decoration: underline">

</div>
<div class="modal colorFabricbox colorFabricboxM" id="viewAllModal">
        <div class="modal-content" style="width: 100%; padding: 5px;">
            <button type="button" class="close" onclick="closeViewAllModal()" style="text-shadow: 2px 2px 1px #fff;color: #000;font-size: 50px;position: fixed;z-index: 100;right: 10px;top: -5px;opacity: 0.75; background: unset; border: unset;">&times;</button>
            <div class="modal-body" style="padding: 5px;">
                <?php
                $site_url = "https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/materials";
                $dir = $_SERVER['DOCUMENT_ROOT']."/eshopdev/roletai-plastikiniams-langams/materials/";

                $sqlCategories = "SELECT * FROM category";
                $categories = mysqli_query($conn, $sqlCategories);

                while($category = mysqli_fetch_object($categories)){
                    print '<h4 class="modal-category-title">'.$category->category_name.'</h4>';
                    $i = 0;
                    if(!empty($category)){
                        $sql = "SELECT * FROM  roletai_pl_FiksuotaKainaPagalKodoGr WHERE audinys != '' and status = 'Enable' and ( ";
                        foreach($category as $val)
                        {
                            $i++;
                            //if($i == 1)
                            // $sql .= " WHERE ";
                            if($i>1)
                                $sql .= ' OR ';
                            $sql .= " category_id = '$val' "; 
                        }
                        $sql .= " ) ORDER BY CHAR_LENGTH(audinys), audinys ";
                    }
                    else
                    {
                        $sql = "SELECT * FROM  roletai_pl_FiksuotaKainaPagalKodoGr WHERE 1 != 1 ";
                    }

                    //print $sql;
                    $i=0;
                    $element = 0;
                    $last_item = 0;
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_object($result)){
                        $i++;
                        $element++;
                        if($element == 1){
                            $last_item = 0;
                            print '<div class="myfab fab-carousel fab-theme vinespalves">';
                        }
                        
                        $fullImage = $row->audinys.'.jpg';
                        $thumbImage = 'thumbs_'.$row->audinys.'.jpg';
                        if(file_exists($dir.$fullImage) && file_exists($dir.$thumbImage) ) { 
                            //if($file !== '.' && $file !== '..'){
                            $path_parts = pathinfo($file);
                            $audinys = $row->audinys;

                            $result_cat = mysqli_query($conn, "SELECT * FROM category WHERE id = '$row->category_id' ");
                            $row_cat = mysqli_fetch_object($result_cat);

                            ?>
                                <label for="colormwicml<?php echo $row->audinys; ?>">
                                    <input type="radio" id="colormwicml<?php echo $row->audinys ?>" name="colorFabric" value="<?php echo $row->audinys; ?>"><span><img src="<?php echo $site_url."/".$thumbImage; ?>" alt="" class="thumb-images" onmouseover="getprev(this)" onmouseout="remprev(this)"><input type="hidden" class="category_name" value="<?php echo $row_cat->category_name; ?>" ><input type="hidden" class="allowPreview" value="<?php echo $row->preview ?>" ><?php if($row->discount != 0) echo '<span style="position: absolute; top:2px; left: 5px;color: #fff;text-shadow: #000 0px 1px 5px;z-index: 2; height: 0px; width: 0px;">-'.$row->discount.'%</span>'?></span>
                                </label>
                            <?php
                        }
                    }
                    print '</div>';
                }
                ?>
            </div>
        </div>
</div>

<script>
    function closeViewAllModal() {
        $('#viewAllModal').hide();
    }
    function viewAllModal() {
        $('#viewAllModal').show();
    }

    function getprev(e)
    {
        var category_name = $(e).next().val();
        var discount = $(e).next().next().next().html();
        if(discount == "" || discount == undefined) {
            discount = "";
        } 
        var srcImg = $(e).attr('src');
        var imageName = srcImg.substr((srcImg.lastIndexOf('_') + 1));
        imageName = imageName.replace('.jpg','');
        var fullImage = srcImg.replace('thumbs_','');
        var fileExtension = srcImg.substr((srcImg.lastIndexOf('/') + 1));//thumbs_name.jpg
        var fileExtension1 = srcImg.replace(/\/thumbs*/, '');// fda/sdaf/thumbs_name.jpg
        var ok =  fileExtension1.replace(fileExtension,'');
        var fullname = ok+imageName;

        var domRect = e.getBoundingClientRect();
        var positionY = Math.ceil(domRect.top - 300);
        var positionX = Math.ceil(domRect.left - (window.innerWidth/2) + 100);
        if((positionX + 450 + 100) >= (window.innerWidth/2)){
            positionX = Math.ceil(positionX - 450 - 100)
            $(".hoverImgAll").css({
                'left':positionX + 'px',
                'top':positionY + 'px',
                'right':'auto'
            })
        }else{
            $(".hoverImgAll").css({
                'left':positionX + 'px',
                'top':positionY + 'px',
                'right':'auto'
            })
        }
        
        
        $(".hoverImgAll").show();
        $(".hoverImgAll").html("<img src='"+fullImage+"'><div style='position: absolute; top:15px; left: 20px;color: #fff;text-shadow: #000 0px 1px 5px;z-index:2;font-size: 25px'>"+discount+"</div><div style='font-size:14px;position: absolute;top: 95%;left: 10%;width:340px;background-color: white;color:black;text-align:center'>"+ category_name+' ('+imageName+")</div>");
    }

    function remprev(){
    $(".hoverImgAll").hide();
    }

    rad2 = document.getElementsByName('colorFabric'); 
    var prev2 = null;
    for(var i = 0; i < rad2.length; i++) {
        rad2[i].addEventListener('change', function() {
            (prev2)? console.log(prev2.value):null;
            if(this !== prev2) {
                $(prev2).prop("checked", false);
                prev2 = this;
            }
            var colorFabricInputId = $(this).attr('id');
            if(colorFabricInputId.indexOf("colorwicml") == -1) {
                var strarr = colorFabricInputId.split("colormwicml")
                var newId = "colorwicml" + strarr[1];
                $("#" +newId).prop("checked", true)
                $("#" +colorFabricInputId).prop("checked", true)
                //alert("modal")
            } else {
                var strarr = colorFabricInputId.split("colorwicml")
                var newId = "colormwicml" + strarr[1];
                $("#" +newId).prop("checked", true)
                $("#" +colorFabricInputId).prop("checked", true)
                //alert("screen")
            }

            let selectmat = document.getElementById('selectMaterial');
            let material = selectmat.options[selectmat.options.selectedIndex].innerText.trim();
            //$('#colowicml'+prev)
            $('#viewAllModal').hide();
            //var category_name = $("#"+value).find("label span").find('.category_name').val();
            //alert(category_name)
			$.ajax({
                    type: 'post',
                    url: 'config/getCategory.php',
                    data: {
						audinys:this.value
                    }
                    ,
                    success: function (response) {
                        $("#MEDŽIAGŲ-PASIRINKIMAS").html(response )
                    }
                }
            );
            $.ajax({
                    type: 'post',
                    url: 'config/getManufacturingTime.php',
                    data: {
						audinys:this.value
                    }
                    ,
                    success: function (response) {
                        if(response != "") {
                            $("#manufacture_time").parent().show();
                            $("#manufacture_time").html(response)
                        } else {
                            $("#manufacture_time").parent().hide();
                            $("#manufacture_time").html(response)
                        }
                    }
                }
            );
            //var material_text = material.split("(");
           //$("#MEDŽIAGŲ-PASIRINKIMAS").html(material_text[0] + " - (" + this.value + ")")
            
        });
    }

    rad = document.getElementsByName('colorFabricM'); 
    var prev = null;
    for(var i = 0; i < rad.length; i++) {
        rad[i].addEventListener('change', function() {
            (prev2)? console.log(prev2.value):null;
            if(this !== prev2) {
                $(prev2).prop("checked", false);
                prev2 = this;
            }
            var colorFabricInputId = $(this).attr('id');
            if(colorFabricInputId.indexOf("colorwicml") == -1) {
                var strarr = colorFabricInputId.split("colormwicml")
                var newId = "colorwicml" + strarr[1];
                $("#" +newId).prop("checked", true)
                $("#" +colorFabricInputId).prop("checked", true)
                //alert("modal")
            } else {
                var strarr = colorFabricInputId.split("colorwicml")
                var newId = "colormwicml" + strarr[1];
                $("#" +newId).prop("checked", true)
                $("#" +colorFabricInputId).prop("checked", true)
                //alert("screen")
            }

            let selectmat = document.getElementById('selectMaterial');
            let material = selectmat.options[selectmat.options.selectedIndex].innerText.trim();
            $('#viewAllModal').hide();
            //var category_name = $("#"+value).find("label span").find('.category_name').val();
            //alert(category_name)
			$.ajax({
                    type: 'post',
                    url: 'config/getCategory.php',
                    data: {
						audinys:this.value
                    }
                    ,
                    success: function (response) {
                        $("#MEDŽIAGŲ-PASIRINKIMAS").html(response )
                    }
                }
            );
            $.ajax({
                    type: 'post',
                    url: 'config/getManufacturingTime.php',
                    data: {
						audinys:this.value
                    }
                    ,
                    success: function (response) {
                        if(response != "") {
                            $("#manufacture_time").parent().show();
                            $("#manufacture_time").html(response)
                        } else {
                            $("#manufacture_time").parent().hide();
                            $("#manufacture_time").html(response)
                        }
                    }
                }
            );
            //var material_text = material.split("(");
           //$("#MEDŽIAGŲ-PASIRINKIMAS").html(material_text[0] + " - (" + this.value + ")")
            
        });
    }
</script>