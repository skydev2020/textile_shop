<?php 
 session_start();
 include("header_top_main.php");
 //echo '<pre>';
//print_r($_SESSION['cart']['product_details']);
//echo '</pre>';

$propricesum = 0;
if ($_SESSION['cart']['product_details']) {
    foreach($_SESSION['cart']['product_details'] as $proditels){
        $propricesum = $propricesum + ($proditels['priceValue'] * $proditels['quantity']);
    }    
}

//echo '################# '.$propricesum.' ################# ';




//echo $_SESSION['priceSection']['priceValue'];
 // echo $edit_data['priceSection'];
 if(empty($_SESSION['cart']['product_details']))
 {
 	?>
    <script type="text/javascript">
		window.location.href = "https://www.solemlux.lt/eshopdev/<?php echo $producturl;?>/";
	</script>
    <?php
	exit;
 }else
 if($_REQUEST['page_step']!='step2')
 {
 	?>
    <script type="text/javascript">
		window.location.href = "https://www.solemlux.lt/eshopdev/<?php echo $producturl;?>/";
	</script>
    <?php
	exit;
 }
  
 
  
 ?>
 <style>
    #apply_voucher{

      padding: 10px 25px;
        background-color: #808080;
        color: #fff;
        box-shadow: none;
        border: 0;
        max-width: 100%;
        text-align: center;
        text-decoration: none;
        text-transform: uppercase;
        margin-top: 5px;
        transition: all .3s cubic-bezier(0.76, 1.52, 0.58, 1);
        border-radius: 5px !important;
        
    }
    #apply_voucher:hover {
        transform: scale(1.1, 1.1);
    }
  </style>  
 <script>
$(document).ready(function(){


    $("#apply_voucher").click(function() {
        //$("#myform2").submit();
        // checking whether coupon is valid or not

        // add apply_voucher click event
        var code=$("#voucher_code").val().trim();
        if (code == "") {
            $("#voucher_msg").html("Kupono kodas įvestas klaidingai arba kuponas nebegalioja.");
            return;
        }
        else {
            $("#voucher_msg").html("")   ;
        }

        $.ajax({
        url : 'https://www.solemlux.lt/eshopdev/check_voucher.php',
        type : 'post',
        data : {code:$("#voucher_code").val(), shipping_price: $("input[name='shipping_method']:checked").data('value')},
        success : function(response)
        {
            if (response == "0") {
                $("#voucher_msg").html("Kupono kodas įvestas klaidingai arba kuponas nebegalioja.");
            }
            else {
                $("#voucher_code").val("");
                $("#voucher_msg").html("Panaudotas kuponas: " + code + " (" + response +")");
            }
        }
        });
    });


    $('#country').on('change', function() {
		
      if (this.value == 'Lietuva')
      {
		  
        $("#takeaway").show();
	    $("#abroad").hide();
      }
      else
      {
		  $("#abroad").show();
          $("#takeaway").hide();
		
		
      }
   
	
    });
});
</script>

<script type="text/javascript">

 function findprice()
			{

			    var mechanism ='';
                var width = $("#width").val();
                var height = $("#height").val();
                var guiding = $("#guiding").val();
                var additional_choices = $("#additional_choices").val();
                var control_side_2 = $("#control_side_2").val();
                var management_mechanism = $("#management_mechanism").val();
                var remote_control = $("#remote_control").val();
                var itemIdx = $("#itemIdx").val()
                 var quantity_val = $("#quantity").val();

                 var colorFabric = $("input[name='colorFabric']:checked").val();

				 if(colorFabric!='')
				{
					colorFabricFinal = colorFabric;
				}
				else
				 if(itemIdx != -1 && colorFabricFinal == '') {
                    var newId = "colorwicml" + itemIdx;
                    var newId2 = "colormwicml" + itemIdx;
                    $("#" +newId).attr("checked", "checked")
                    $("#" +newId2).attr("checked", "checked")
                    colorFabricFinal = itemIdx;
                }
                if(additional_choices == 'Rankinis valdymas') {

                }
                else {
                    addOns.push(management_mechanism);
                    var index = addOns.indexOf('3');
                    if (index > -1) {
                      addOns.splice(index, 1);
                    }
                    var index = addOns.indexOf('4');
                    if (index > -1) {
                      addOns.splice(index, 1);
                    }
                    var index = addOns.indexOf('5');
                    if (index > -1) {
                      addOns.splice(index, 1);
                    }
                    addOns.push(remote_control);
                    var index = addOns.indexOf(control_side_2);
                    if (index > -1) {
                      addOns.splice(index, 1);
                    }
                }
                var colorFabric = colorFabricFinal;

                //colorFabric = colorFabric.replace("Vienspalvės","");
                //colorFabric = colorFabric.replace("- (","",colorFabric);
                //colorFabric = colorFabric.replace(")","",colorFabric);
                addOns = unique(addOns);
                //console.log(addOns);

				//var values = $('#selectMaterial').val();

				cat_val = $('#selectMaterial').val();

				audins_val = $("#MEDŽIAGŲ-PASIRINKIMAS").html();

				var chk_arr =  document.getElementsByName("safe_child[]");
				var chklength = chk_arr.length;

				addon_val = "";
				u=1;
				for(k=0;k< chklength;k++)
				{
					if(chk_arr[k].checked)
					{
						if(u==2)
						{
							addon_val += ",";
						}
						addon_val += chk_arr[k].value;
						u++;
					}
				}


				 $.ajax({
                    url : 'https://www.solemlux.lt/eshopdev/<?php echo $producturl;?>/get_namelist.php',
                    type : 'post',
                    data : {checkbox_val:addon_val},
                    success : function(response)
					{
						$('#child_safe_id').html(response);
					}
					})

                $.ajax({
                    url : 'https://www.solemlux.lt/eshopdev/<?php echo $producturl;?>/calculate_price.php',
                    type : 'post',
                    data : {width:width,height:height,guiding:guiding,colorFabric:colorFabric,addOns:addOns,additional_choices:additional_choices,mechanism:mechanism,cat_val:cat_val, audins_val:audins_val, checkbox_val:addon_val, quantity_val:quantity_val},
                    success : function(response) {
                        response = JSON.parse(response);
                        var quantity = 0;
                        var unitPrice = 0;
                        //console.log(response)
                        if(isNaN(response.price)) {

                            $("#calculated-price").html(response.price);
                            $("#calculated-price-with-vat").html("N/A");
                            if(response.price != response.price_original) {
                                $("#calculated-price-discount").html(response.price);
                                $("#calculated-price-with-vat-discount").html("N/A");
                                $(".discount").show();
                            } else {
                                $(".discount").hide();
                            }
                            $(".currency").hide();
                        }
                        else {


                           display_price = (parseFloat(response.price)).toFixed(2);

							vat_21_per = ((21/100) * (display_price));
							price_show  = display_price - vat_21_per;
							price_show  = (parseFloat(price_show)).toFixed(2);
							$("#calculated-price").html("&nbsp;"+(price_show));

							//  $("#calculated-price").html("&nbsp;"+(parseFloat(response.price)).toFixed(2));
                            $("#calculated-price-with-vat").html("&nbsp;"+(parseFloat(response.price)).toFixed(2));
                            if(response.price != response.price_original) {
                                $("#calculated-price-discount").html("&nbsp;"+(parseFloat(response.price_original)).toFixed(2));
                                $("#calculated-price-with-vat-discount").html("&nbsp;"+(parseFloat(response.price_original)).toFixed(2));
                                $(".discount").show();
                            } else {
                                $(".discount").hide();
                            }
                            $(".currency").show();
                            quantity = parseInt($("#quantity_tr").text());
                            unitPrice = parseFloat(response.price);
                        }
                        $("#unitPriceValue").val(unitPrice);
                        var totalAmount = unitPrice * quantity;
                        $("#display_kaina_tr").html(totalAmount.toFixed(2)+" €");
                    }
                });

			}
			
 function edit_order(e, idx, module_name) {

            e.preventDefault();

            var chk_arr =  document.getElementsByName("safe_child[]");
				var chklength = chk_arr.length;

				addon_val = "";
				u=1;
				for(k=0;k< chklength;k++)
				{
					if(chk_arr[k].checked)
					{
						if(u==2)
						{
							addon_val += ",";
						}
						addon_val += chk_arr[k].value;
						u++;
					}
				}


			var url = "firstname="+ $("#firstname").val() + "&";
            url += "lastname="+ $("#lastname").val() + "&";
            url += "email="+ $("#email").val() + "&";
            url += "phone="+ $("#phone").val() + "&";
            url += "firm="+ $("#firm").val() + "&";
            url += "companycode="+ $("#company_code").val() + "&";
            url += "optradio="+ $("input[name='optradio']:checked").val() + "&";
            url += "vatno="+ $("#vat_no").val() + "&";
            url += "address="+ $("#address").val() + "&";
            url += "city="+ $("#city").val() + "&";
            url += "postcode="+ $("#postcode").val() + "&";
            url += "country="+ $("#country").val() + "&";
			 url += "safe_child_val="+ addon_val + "&";
            url += "shippingmethod="+ $("input[name='shipping_method']:checked").val() + "&";
            url += "paymentmethod="+ $("input[name='payment_method']:checked").val() + "&";
            url += "item=" + idx;



            //window.location.href = "./?" + url;
			window.location.href = "https://www.solemlux.lt/eshopdev/"+module_name+"/?" + url;
			return false;


        }

	$(document).ready(function() {
               	$('#step2').click(function(e) { 
					$("#step-1-select").html("");
					$("#step-4-select").html("");
					$("#step-5-select").html("");
				});
				     $('#step3').click(function(e) {


			 var first_name = $("#firstname").val();
            var last_name = $("#lastname").val();
            var email = $("#email").val();
            var phone = $("#phone").val();
            var firm = $("#firm").val();
            var company_code = $("#company_code").val();
            var activity_type = $("input[name='optradio']:checked").val();
            var vat_no = $("#vat_no").val();
            var address = $("#address").val();
            var city = $("#city").val();
            var postcode = $("#postcode").val();
            var country = $("#country option:selected").val();
            var state = $("#state").val();
            var shipping_method = $("input[name='shipping_method']:checked").val();
            var payment_method = $("input[name='payment_method']:checked").val();
            var qty = $("#qty").val();

			gethtml = $('#total_sum').html();


			if(first_name=='' || last_name=='' || email=='' || phone=='' || address=='' || city=='' || postcode=='' || gethtml=='')
			{

			   
			      $('ul.setup-panel li a[href="#step-2"]').trigger('click');
                $("#step-1").css("display", "block !important");
                $("#step-2").css("display", "none !important");
                $("#step-3").css("display", "none !important");   
				
				$("#step-1-select").html("<ffff></ffff>");
				$("#step-4-select").html("");
				$("#step-5-select").html("");
			 }


            });
			});
			</script>
            
<style>

.top_margin_class
{
	margin-top:84px !important;
}

.desktop_div
{
	display:block;
}

.mobile_div
{
	display:none;
}

@media(min-width: 300px) and (max-width: 1000px){

 .col-xs-12 p img
{
	width:100% !important;
	height:auto !important;
}

.top_margin_class
{
	margin-top:63px !important;
}

.mobile_div
{
	display:block;
}

.desktop_div
{
	display:none;
}

}

.top_margin_class
{
	margin-top:84px !important;
}

  @media(min-width: 769px) and (max-width: 1200px){

.top_margin_class
{
	margin-top:114px !important;
}

.float_right
{
	float:none !important;
}
}
</style>      
<?php //print_r($_SESSION); ?>  
    <!-- TABS -- Ends -->

        <!--for desktops-->
        <div class="row setup-content options" id="step-1" style="display:none;">
            <form id="myform1" method="post">
                <div class="col-xs-12">

                    <div class="well clearfix" style="padding: 0px">
                        <div class="clearfix">
                            <div class="col-md-6 col-sm-6 c1" style="margin-top: 28px;">
                                <div class="hide_desktop check_form">
                                    <div class="col-md-12" style="margin-top: 20px;">
                                        <h3 style="text-transform: uppercase;margin-top: 0px;">
                                            Horizontalios žaliuzės - UŽSAKYMAS
                                        </h3>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="p1">
                                            Pasirinkite produkto parametrus ir spauskite PRIDĖTI Į KREPŠELĮ
                                        </p>
                                    </div>
                                </div>
                                <div class="parent" id="window-image" style="position:relative;">
                                    <?php

                                    if (isset($edit_data)) {
                                            echo str_replace('<div id="demesio">Dėmesio: kainos galioja tik užsakant gaminius iš interneto parduotuvės. vaizdas tikrovėje gali skirtis.</div>', '',  $edit_data['windowImage']);

                                        } else {
                                                echo'
                                                 <figure class="singleImage" style="position:relative;">
                                                    <img src="https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/materials/HZ_2.jpg" class="img-respom">
                                                    <div class="childImage"></div>

                                                </figure>';

                                        }
                                    ?>

                                </div>
                              	<div id="demesio">Dėmesio: kainos galioja tik užsakant gaminius iš interneto parduotuvės. vaizdas tikrovėje gali skirtis.</div>

                                <span id="calculated-price-section" style="color: red;">
                                    <?php
                                        if(isset($edit_data)) {
                                            echo $edit_data['priceSection'];
                                        } else {
                                            echo '<br />
                                           <div style="display:none;"> <label>Kaina : </label><span id="calculated-price">&nbsp;0.00</span> <span class="currency">&#128;</span><span class="discount"><span id="calculated-price-discount">&nbsp;0.00</span> <span class="currency">&#128;</span></span><br /></div>
                                            <label>Kaina su PVM : </label><span id="calculated-price-with-vat">&nbsp;0.00</span> <span class="currency">&#128;</span><span class="discount"><span id="calculated-price-with-vat-discount">&nbsp;0.00</span> <span class="currency">&#128;</span></span>';
                                        }
                                    ?>
                                </span>
                            </div>
                            <div class="width-600 col-md-6 col-sm-6 c2 check_form">
                                <div class="form-group clearfix">
                                    <div class="hide_mobile">
                                        <div class="col-md-12" style="margin-top: 20px;">
                                            <h3 style="text-transform: uppercase;margin-top: 0px;">
                                                Horizontalios žaliuzės - UŽSAKYMAS
                                            </h3>
                                        </div>
                                        <div class="col-md-12">
                                            <p class="p1">
                                                Pasirinkite produkto parametrus ir spauskite PRIDĖTI Į KREPŠELĮ
                                            </p>
                                        </div>
                                    </div>

                                    <div class="col-md-12 no-padd" style="margin-bottom: 10px;">
                                        <label class="selectMaterial" for="selectMaterial">JUOSTELĖS IR SPALVOS PASIRINKIMAS</label>
                                        <select  name="selectMaterial[]" multiple="multiple" id="selectMaterial" class="form-control" style="float: left; width: 75%;">
                                     <!--   <select  name="selectMaterial[]" multiple="multiple" id="selectMaterial" class="form-control" style="float: left; width: 75%;"> -->
    <?php
        include('horizontalios-zaliuzes/config.php');
		 $sql = "SELECT * FROM  hz_spalvos WHERE discount >0 and audinys != '' and status = 'Enable' ";

            $result_item = mysqli_query($conn, $sql);

		    $count_discount_item = mysqli_num_rows($result_item);


			if($count_discount_item>0)
			{
				$catName = "AKCIJA";

				 print "<option value='AKCIJA' selected>&nbsp;&nbsp;$catName ($count_discount_item) </option>";

			}

        $result = mysqli_query($conn, "SELECT * FROM hz_category where id in (1,2)");
        while ($row = mysqli_fetch_object($result)) {
            $cnt++;
            $sql = "SELECT * FROM  hz_spalvos WHERE category_id = '$row->id' and audinys != '' and status = 'Enable' ";
            $result_item = mysqli_query($conn, $sql);
            $item = mysqli_num_rows($result_item);

            if($cnt == 1) {
                if(isset($edit_data)) {
                    $key = array_search($row->id, $edit_data['selection_category']);
                    $selected = ((string)$key != 'false')? 'selected' : '';
                    print "<option value='$row->id' ".$selected.">&nbsp;&nbsp;$row->category_name ($item) </option>";
                } else {
                    if($count_discount_item!=0)
				   {
				    print "<option value='$row->id'>&nbsp;&nbsp;$row->category_name ($item) </option>";
				   }
				   else
				   {
				   	  print "<option value='$row->id' selected>&nbsp;&nbsp;$row->category_name ($item) </option>";
				   }
                }
            }
            else {
                if(isset($edit_data)) {
                    $key = array_search($row->id, $edit_data['selection_category']);
                    $selected = $key != false? 'selected' : '';
                    print "<option value='$row->id' ".$selected.">&nbsp;&nbsp;$row->category_name ($item) </option>";
                } else {
                    print "<option value='$row->id'>&nbsp;&nbsp;$row->category_name ($item) </option>";
                }
            }
            # code...
        }
    ?>
                                            <!-- <option value="vienspalves" >Vienspalvės
                                            </option>
                                            <option value="vienspalves-su-rastu" >Vienspalvės su raštu
                                            </option>
                                            <option value="margos" >Margos medžiagos
                                            </option>
                                            <option value="Prestizine-vokiska-kolekcija" >Prestižinė vokiška kolekcija
                                            </option> -->
                                        </select>
                                        <!--<a class="perzi" style="display: block; font-weight: normal; float: left; margin-left: 18px; margin-top: 15px;" href="#" onclick="openFabricModal(); return false;">Peržiūrėti visus audinius
                                        </a>-->
                                        <div class="clearfix"></div>
                                    </div>
                                    <hr class="new4" style="backgound-color:red;">
                                    <div class="col-md-12 colorFabricbox" id="dynamic_category_image" ></div>

                                    <div class="col-md-12 colorFabricbox" id="vienspalves" >

                                    </div>
                                    <div class="col-md-12 colorFabricbox" id="vienspalves-su-rastu">

                                    </div>
                                    <div class="col-md-12 colorFabricbox" id="margos">

                                    </div>
                                  <!--   <div class="col-md-12 colorFabricbox" id="Prestizine-vokiska-kolekcija">

                                    </div>-->
                                </div>
                            </div>
                            <div class="clearfix"></div>

                            <div class="col-md-6 col-sm-6 c2 check_form pull-right colorbottom">
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <!--<div class="col-md-12 no-padd">
                                        <h3><span>Mechanizmo spalva</span></h3>
                                    </div>
                                    <div class="col-md-12 no-padd">
                                    <select style="float: left; width: 65%" name="mechanism" id="mechanism" class="form-control" onchange="showoptions(this.value);" >
                                            <option value="Balta (1)" datasrc="materials/mechanism/1.jpg" <?php if(isset($edit_data) && $edit_data['color_mech'] == 'Balta (1)') { echo 'selected'; }?>>Balta</option>
                                            <option value="Ruda (7)" datasrc="materials/mechanism/7.jpg" <?php if(isset($edit_data) && $edit_data['color_mech'] == 'Ruda (7)') { echo 'selected'; }?>>Ruda</option>
                                            <option value="Antracitas(23)" datasrc="materials/mechanism/23.jpg" <?php if(isset($edit_data) && $edit_data['color_mech'] == 'Antracitas(23)') { echo 'selected'; }?>>Antracitas</option>
                                            <option value="Auksinis azuolas (9)" datasrc="materials/mechanism/9.jpg" <?php if(isset($edit_data) && $edit_data['color_mech'] == 'Auksinis azuolas (9)') { echo 'selected'; }?>>Auksinis ąžuolas</option>
                                            <option value="Sidabrine (3)" datasrc="materials/mechanism/3.jpg" <?php if(isset($edit_data) && $edit_data['color_mech'] == 'Sidabrine (3)') { echo 'selected'; }?>>Sidabrinė</option>
                                            <option value="Rudonmedis (5)" datasrc="materials/mechanism/5.jpg" <?php if(isset($edit_data) && $edit_data['color_mech'] == 'Rudonmedis (5)') { echo 'selected'; }?>>Rudonmedis</option>
                                            <option value="Riesutas(6)" datasrc="materials/mechanism/6.jpg" <?php if(isset($edit_data) && $edit_data['color_mech'] == 'Riesutas(6)') { echo 'selected'; }?>>Riešutas</option>
                                            <option value="Sviesus azuolas (8)" datasrc="materials/mechanism/8.jpg" <?php if(isset($edit_data) && $edit_data['color_mech'] == 'Sviesus azuolas (8)') { echo 'selected'; }?>>Šviesus ąžuolas</option>
                                        </select>
                                      <a class="rodyti" style="display: block;float: left;font-weight: normal;margin-top: 15px; margin-left: 18px" href="#" onclick="openmechanismModal(); return false;">Rodyti visas</a>
                                    </div>-->
                                    <div class="clearfix"></div>
                                    <div class="col-md-12 no-padd vmech_colr" style="padding-top:1px; position: relative;text-align:right;">

                                        <div class="col-md-8 no-padd">
                                            <div id="color_mch" style="" onmouseover="amarimgdekhao();" onmouseout="soriyedao();">
                                            <?php
                                                /*if(isset($edit_data) && $edit_data['color_mech'] != 'Balta (1)') {
                                                    $temp = explode('(', $edit_data['color_mech']);
                                                    $value = explode(')', $temp[1]);
                                                    echo '<img src="materials/mechanism/'.$value[0].'.jpg" style="height:200px;width:200px;">';
                                                }*/
                                            ?>
                                            </div>
                                        </div>
                                      <!--  <div class='hoverImgz' style="left: 66%;height: 200px;width: 200px;position: absolute;top: -50px;z-index: 9999;display: none;"></div> -->
                                    </div>
                                </div>
                                <!---->
                                <!--<div class="form-group clearfix">
                                    <div class="col-md-12 no-padd" data-id="51" data-name="Type of Installation" class="option">
                                        <h3>
                                            <span>Montavimo tipas</span>
                                        </h3>
                                    </div>
                                    <div class="col-md-12 no-padd">
                                        <select name="installationtype" id="installationtype" class="form-control" onchange="image_change(this)" >
                                            <option value="lange" selected>Lange</option>
                                        </select>
                                    </div>
                                </div>-->
                                <div class="form-group clearfix">
                                    <div class="col-md-12 no-padd padd-15">
                                        <h3>
                                           <!-- <span class="info" data-html="true" data-toggle="popover" data-trigger="hover" data-content="<img src='popover.png' style='width: 400px'>">Produkto matmenys</span>-->
                                            <span class="">Produkto matmenys</span>
                                        </h3>
                                    </div>
                                    <div class="col-md-12 no-padd" >
                                        <div class="row" >
                                            <div class="col-md-6" >
                                                <label class="control-label" for="width">Plotis, mm
                                                </label>
                                                <?php
                                                if ((isset($_SESSION['width']) && $_SESSION['width'] != '') && !isset($edit_data)) {
                                                    ?>
                                                    <input type="number" name="width" id="width" class="form-control" value="<?php echo $_SESSION['width']; ?>" min="1" max="10000">
                                                    <?php
                                                } else if(isset($edit_data)){
                                                    ?>
                                                    <input type="number" name="width" id="width" class="form-control" value="<?php echo $edit_data['width']; ?>">
                                                    <?php
                                                } else {
                                                    ?>
                                                    <input type="number" name="width" id="width" class="form-control" value="">
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                            <div class="col-md-6 textbox-22" >
                                                <label class="control-label" for="height">Aukštis, mm
                                                </label>
                                                <?php
                                                if (isset($_SESSION['height']) && $_SESSION['height'] != '') {
                                                    ?>
                                                    <input type="number" id="height" name="height" class="form-control" value="<?php echo $_SESSION['height']; ?>" c>
                                                    <?php
                                                } else if(isset($edit_data)){
                                                    ?>
                                                    <input type="number" name="height" id="height" class="form-control" value="<?php echo $edit_data['height']; ?>">
                                                    <?php
                                                } else {
                                                    ?>
                                                    <input type="number" id="height" name="height" class="form-control" value="">
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                   <?php
								   /*

                                    <div class="col-md-6 no-padd" style="margin-top: 15px">
                                        <label class="control-label" for="width_fabric">Audinio plotis, mm
                                        </label>
                                        <?php
                                        if (isset($_SESSION['widthzz_fabric']) && $_SESSION['widthzz_fabric'] != '') {
                                            ?>
                                            <input type="number" id="widthzz_fabric" name="widthzz_fabric" class="form-control" value="<?php echo $_SESSION['widthzz_fabric']; ?>" min="1" max="10000">
                                            <?php
                                        } else if(isset($edit_data)){
                                            ?>
                                            <input type="number" name="widthzz_fabric" id="widthzz_fabric" class="form-control" value="<?php echo $edit_data['fabric']; ?>">
                                            <?php
                                        } else {
                                            ?>
                                            <input type="number" id="widthzz_fabric" name="widthzz_fabric" class="form-control" value="">
                                            <?php
                                        }
                                        ?>
                                    </div>
									*/?>
                                    <!---->
                                    <div class="col-md-6 no-padd youtube-links" style="margin-top:7px !important;">
                                        <div onclick="openInNewTab('https://youtu.be/C7IdORHME9E');" style="margin-bottom: 3px; cursor: pointer;">
                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                            <span class="small-texte">Horizontalių žaliuzių plastikiniams langams matavimo instrukcija</span>
                                        </div>
                                       <!-- <div onclick="openInNewTab('https://www.youtube.com/watch?v=sThIjLgR0ts');" style="cursor: pointer;">
                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                            <span class="small-texte">Raletų plastikiniams langams montavimas SolemluX</span>
                                        </div>-->
                                    </div>
                                    <style>
                                        .small-texte{
                                            font-size: 12px;
                                        }
                                        #window-append{
                                            -webkit-box-shadow: inset 0px 5px 10px 0px rgba(0,0,0,0.33);
                                            -moz-box-shadow: inset 0px 5px 10px 0px rgba(0,0,0,0.33);
                                            box-shadow: inset 0px 5px 10px 0px rgba(0,0,0,0.33);
                                        }
                                    </style>
                                    <!---->
                                </div>
                                <!---->
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <div class="col-md-12 no-padd">
                                        <h3 style="margin-bottom: 0px;"><span style="color: #000000;">Papildomi pasirinkimai</span></h3>
                                       <!-- <h3 style="margin-top: 0px;">Valdymas</h3>-->
                                    </div>
                                    <div class="col-md-8 no-padd">
                                        <!--<select name="additional_choices" id="additional_choices" class="form-control">
                                            <option value="Rankinis valdymas" <?php if(isset($edit_data) && $edit_data['additional_choices'] == 'Automatinis valdymas') { echo 'selected'; } else if(!isset($edit_data)) { echo 'selected'; }?>>Rankinis valdymas</option>
                                            <option value="Automatinis valdymas" <?php if(isset($edit_data) && $edit_data['additional_choices'] == 'Automatinis valdymas') { echo 'selected'; }?>>Automatinis valdymas</option>
                                        </select>-->
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div id="manual_control">
                                    <div class="form-group" style="<?php if(isset($edit_data) && $edit_data['additional_choices'] == 'Automatinis valdymas') { echo 'display: none !important;'; }?>">
                                        <div class="col-md-12 no-padd">
                                            <h3><span>Valdymo tipas</span></h3>
                                        </div>
                                        <div class="col-md-8 no-padd">
                                            <select name="control_side_2" id="control_side_2" class="form-control" onchange="my_control_side_2(this);">
                                                <option value="Su grandinėle">Su grandinėle</option>
                                            </select>
                                        </div>

                                         <div class="clearfix"></div>
                                         <div class="col-md-12 no-padd">
                                            <h3><span>Valdymo pusė</span></h3>
                                        </div>
                                        <div class="col-md-8 no-padd">

                                            <select name="control_side_2" id="control_side_2" class="form-control" onchange="my_control_side_2(this);">
                                                <option value="kaire" <?php if(isset($edit_data) && $edit_data['control_side_2'] == 'kaire') { echo 'selected'; } else if(!isset($edit_data)){echo 'selected';}?>>kairė</option>
                                                <option value="desine" <?php if(isset($edit_data) && $edit_data['control_side_2'] == 'desine') { echo 'selected'; }?>>dešinė</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div id="kreiptions" class="form-group clearfix" style="margin-bottom: 0px !important;" >
                                        <div class="col-md-12 no-padd">
                                            <!--<h3><span class="info" data-html="true" data-toggle="popover" data-trigger="hover" data-content="Roletai plastikiniams langams montuojami kartu su specialiomis kreipiančiosiomis, kurios užtikrina, kad roleto medžiaga visuomet išliks prie stiklo varstant ir atidarinėjant langą.">Kreipiančioji</span></h3>-->
                                        </div>
                                        <div class="col-md-8 no-padd">
                                            <!--<select name="guiding" id="guiding" class="form-control" onchange="javascript: $('#guiding_td').html(this.options[this.selectedIndex].text)">
                                                <option value="1" <?php if(isset($edit_data) && $edit_data['guiding'] == '1') { echo 'selected'; }?>>33 mm balta (1)</option>
                                                <option value="2" <?php if(isset($edit_data) && $edit_data['guiding'] == '2') { echo 'selected'; }?>>36 mm balta (1)</option>
                                                <option value="3" <?php if(isset($edit_data) && $edit_data['guiding'] == '3') { echo 'selected'; }?>>33 mm suapvalintom stiklasjuostem balta(1)</option>
                                            </select>-->
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group" style="margin-top: 15px; margin-bottom: 0px;<?php if(isset($edit_data) && $edit_data['additional_choices'] == 'Automatinis valdymas') { echo 'display: none !important;'; }?>">

                                          <?php


										   $query = mysqli_query($conn, "SELECT * FROM hz_Priedai order by tooltip desc");
        									while ($row_data = mysqli_fetch_object($query))
											{

												?>
                                                <div class="col-md-12 no-padd">
                                                <?php

												?>
                                                <?php
												$checked =  '';

												if($_REQUEST['safe_child_val']!='')
												{
													$arr_data = explode(",",$_REQUEST['safe_child_val']);

													if (in_array($row_data->id, $arr_data))
  													{
														$checked =  'checked';
													}
													else
													{
														$checked =  '';
													}
												}
												?>

                                            <label for="safe_child"><input type="checkbox" name="safe_child[]" id="safe_child" value="<?php echo $row_data->id;?>" onclick="findprice();" <?php if(!empty($checked)){?> checked="checked"<?php }?> />


                                           <span class="info" data-html="true"  <?php if($row_data->tooltip!="") { ?> data-toggle="popover" data-trigger="hover" data-content="<?php echo stripslashes($row_data->tooltip);?>"<?php }?>><?php echo stripslashes($row_data->identificator);?> <?php
										  if($row_data->tooltip!="")
										  {
										  ?> <img src="toltp.png" style="margin-top:-3px;" /><?php
                                           }
										   ?></span><!--  Grandinėlės fiksatorius "Saugus vaikas", vnt--></label>
                                        </div>
                                                <?php
											}
											?>


                                    </div>
                                    <div class="clearfix"></div>
                                    <!--<div class="form-group" style="<?php if(isset($edit_data) && $edit_data['additional_choices'] == 'Automatinis valdymas') { echo 'display: none !important;'; }?>">
                                        <div class="col-md-12 no-padd">
                                            <label for="matel_chain"><input type="checkbox" name="matel_chain" id="matel_chain" value="1" onclick="javascript: if(this.checked){$('#metal_chain_td').html('Taip')  }else{ $('#metal_chain_td').html('Ne') }"  <?php if(isset($edit_data) && $edit_data['matel_chain'] == 'true') { echo 'checked'; }?>/> Metalinė grandinėlė, vnt</label>
                                        </div>
                                    </div>-->
                                    <div class="clearfix"></div>
                                </div>
                                <div id="automatic_control" style="display: none; <?php if(isset($edit_data) && $edit_data['additional_choices'] == 'Automatinis valdymas') { echo 'display: block !important;'; }?>">
                                    <div class="form-group" >
                                        <div class="col-md-12 no-padd">
                                            <h3><span>Valdymo mechanizmas</span></h3>
                                        </div>
                                        <div class="col-md-8 no-padd">
                                            <select name="management_mechanism" id="management_mechanism" class="form-control" onchange="javascript: $('#management_mechanism_td').html(this.value)" >
                                                <option value="2">Varikliai su radijo imtuvu ir baterija, vnt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="form-group" >
                                        <div class="col-md-12 no-padd">
                                            <h3><span>Pultelis</span></h3>
                                        </div>
                                        <div class="col-md-8 no-padd">
                                            <select name="remote_control" id="remote_control" onchange="javascript: $('#remote_control_td').html(this.value)" class="form-control" >
                                                <option value="3" <?php if(isset($edit_data) && $edit_data['remote_control'] == '3') { echo 'selected'; }?>>1 kanalo DC115A</option>
                                                <option value="4" <?php if(isset($edit_data) && $edit_data['remote_control'] == '4') { echo 'selected'; }?>>5 kanalo DC115A</option>
                                                <option value="5" <?php if(isset($edit_data) && $edit_data['remote_control'] == '5') { echo 'selected'; }?>>15 kanalo DC115A</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="col-md-6 c1 col-sm-6 pull-left windowbottom">
                                <div id="window-model" style="background-size: 76% 76%; background-position: 50% 25%;">
                                    <img class="hidden" src="" title="window-model"/>
                                </div>
                                <div class="col-md-12 no-padd onframe" id="onframe" style="display:none;">
                                    <?php
                                        if(isset($edit_data) && $edit_data['typeofinstall'] == 'onwall') {
                                            echo $edit_data['imgsrc'];
                                        } else {
                                            echo '
                                                <div class="singleImage" >
                                                    <img src="https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/installation/ant-nisos.png1" class="img-respom" style="height:300px;margin-left:10px;">
                                                    <div class="frame" style="position:absolute;height:180px;width:225px;top:10px;left:50px;">
                                                    </div>
                                                </div>';
                                        }
                                    ?>
                                </div>
                                <div class="col-md-12 no-padd onwall" id="onwall" style="display:none;">
                                    <?php
                                        if(isset($edit_data) && $edit_data['typeofinstall'] == 'onwall') {
                                            echo $edit_data['imgsrc'];
                                        } else {
                                            echo '
                                                <div class="singleImage" >
                                                    <img src="https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/installation/ant-remo.png" class="img-respom" style="height:300px;margin-left:-18px;">
                                                    <div class="frame" style="position:absolute;height:155px;width:165px;top:34px;left:50px;">
                                                    </div>
                                                </div>';
                                        }
                                    ?>
                                </div>
                                <div class="col-md-12 no-padd inwindow" id="inwindow" style="display:none;">
                                    <?php
                                        if(isset($edit_data) && $edit_data['typeofinstall'] == 'inwindow') {
                                            echo $edit_data['imgsrc'];
                                        } else {
                                            echo '
                                                <div class="singleImage" >
                                                    <!-- <img src="installation/i-nisa.png" class="img-respom" style="height:300px;margin-left:10px;"> -->
                                                    <img src="https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/installation/ant-remo_new.png" class="img-respom" style="height:300px;margin-left:10px;">
                                                    <div class="frame" style="position:absolute;height:180px;width:225px;top:10px;left:50px;">
                                                    </div>
                                                </div>';
                                        }
                                    ?>
                                </div>

                                 <div class="table-responsive" id="addPro" style="display:none;" >
                                   <?php 
									 if(!isset($edit_data)) { 
									 ?>
                                        <h3 class="step2h4">Produkto nustatymai. Horizontalios žaliuzės</h3>
                                     <?php
									 }
									 ?>
                                    
                                   
                                        <?php
                                        if(!isset($edit_data)) {
                                            echo '


                                                <tr>
                                                    <td>Plotis
                                                    </td>
                                                    <td id="width" class="td">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Aukštis
                                                    </td>
                                                    <td id="height" class="td">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Spalva</td>
                                                    <td id="MEDŽIAGŲ-PASIRINKIMAS"></td>
                                                </tr>
                                                <tr>
                                                    <td>Gamybos terminas</td>
                                                    <td id="manufacture_time"></td>
                                                </tr>


                                                <tr class="classic_option_tr">
                                                    <td>Valdymo tipas</td>
                                                    <td>Su grandinėle</td>
                                                </tr>

												 <tr class="classic_option_tr">
                                                    <td>Valdymo pusė</td>
                                                    <td id="control_side_td">kairė</td>
                                                </tr>

                                             <tr class="classic_option_tr">
                                                    <td>Priedai</td>
                                                    <td id="child_safe_id">Ne</td>
                                                </tr>



                                                <tr class="automatic_option_tr" style="display: none;">
                                                    <td>Valdymo mechanizmas</td>
                                                    <td id="management_mechanism_td">Varikliai su radijo imtuvu ir baterija, vnt</td>
                                                </tr>
                                                <tr class="automatic_option_tr" style="display: none;">
                                                    <td>Pultelis</td>
                                                    <td id="remote_control_td">1 kanalo DC115A</td>
                                                </tr>
                                                <tr>
                                                    <td>Pastabos</td>
                                                    <td id="notes_tr" class="notes_tr"></td>
                                                </tr>
                                                <tr>
                                                    <td>Kiekis</td>
                                                    <td id="quantity_tr">1</td>
                                                </tr>
                                                <tr>
                                                    <td style="font-weight:bold;color: #4a4545;"><span style="color:black;">Kaina</span> su PVM</td>
                                                    <td id="display_kaina_tr" class="display_kaina_tr" style="color: #4a4545;font-weight: bold;"></td>
                                                </tr>

                                        ';
                                        } else {
                                            echo $edit_data['table'];
                                        }

                                        ?>
                                    
                                </div>

                                <div class="form-group check_form" >
                                    <div class="col-md-12 no-padd">
                                        <h3><span>Pastabos</span></h3>
                                    </div>
                                    <div class="col-md-8 no-padd">
                                        <textarea onchange="changeNotes(this.value)" class="form-control" name="notes" id="notes"><?php if(isset($edit_data)) { echo $edit_data['notes']; }?></textarea>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group check_form" >
                                    <div class="col-md-12 no-padd">
                                        <h3><span>Kiekis</span></h3>
                                    </div>
                                    <div class="col-md-8 no-padd">
                                        <input class="form-control" value="<?php if(isset($edit_data)) { echo $edit_data['quantity']; } else { echo '1'; }?>" type="number" name="quantity" onchange="changeQuantity(this.value); updateTotalAmount(this.value);" id="quantity" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="next_prev">
                            <div class="nextbtn" style="margin-top: 10px;">
                                <button type="submit" name="submit1" id="submit1" style="margin-bottom:15px; background-color: #000; text-transform: uppercase;" data-next="2"><?php if(!isset($edit_data)) { echo 'dėti į krepšelį'; } else { echo 'IŠSAUGOTI UŽSAKYMĄ'; } ?></button></button>
                                <button type="button" class="next-btn" data-next="2" id="showPleaseAdded" style="display:none">
                                    Checkout
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    <!----><!----><!---->


    <div class="row setup-content options" id="step-2" style="display:block;">
        <form id="myform2"  method="post" >
            <div class="col-xs-12" id="amardivrelo">
                <?php
                if (isset($_SESSION['cart']['product_details'])) {
                    ?>
                    <div class="clearfix well">
                        <div class="row">
                            <div class="width-600 col-md-6 soitan " style="background:white;">
                                <div class="clearfix" id="cart_user">
                                    <div class="col-md-12 pt-0" style="padding-top:20px;border-bottom:1px solid #cccccc;">
                                        <h3 style="font-size:18px;font-weight:bold;">
                                            <img src="jquery/if_group_171280.png" height="30" style="height:30px;">&nbsp;&nbsp;&nbsp;
                                                Asmeninė informacija
                                        </h3>
                                    </div>
                                    <div class="col-md-12" style="margin-top:15px;">
                                        <div class="form-group row">
                                            <label for="firstname" class="col-sm-4 col-form-label col-form-labels">Vardas
                                            </label>
                                            <div class="col-sm-8">
                                                <?php
                                                    if (isset($_GET['firstname'])) {
                                                        echo '<input type="text" class="form-control" value="'.$_GET['firstname'].'" placeholder="Vardas" name="firstname" id="firstname">';
                                                        unset($_GET['firstname']);
                                                    } else if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') {
                                                        echo '<input type="text" class="form-control" value="'.$_SESSION['cart']['user_details']['first_name'].'" placeholder="Vardas" name="firstname" id="firstname">';
                                                    }  else {
                                                        echo '<input type="text" class="form-control" value="" placeholder="Vardas" name="firstname" id="firstname">';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="lastname" class="col-sm-4 col-form-label col-form-labels">Pavardė
                                            </label>
                                            <div class="col-sm-8">
                                                <?php
                                                    if (isset($_GET['lastname'])) {
                                                        echo '<input type="text" class="form-control" value="'.$_GET['lastname'].'"  placeholder="Pavardė" name="lastname" id="lastname">';
                                                        unset($_GET['lastname']);
                                                    } else if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') {
                                                        echo '<input type="text" class="form-control" value="'.$_SESSION['cart']['user_details']['last_name'].'"  placeholder="Pavardė" name="lastname" id="lastname">';
                                                    } else {
                                                        echo '<input type="text" class="form-control" value=""  placeholder="Pavardė" name="lastname" id="lastname">';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-4 col-form-label col-form-labels">El. Paštas
                                            </label>
                                            <div class="col-sm-8">
                                                <?php
                                                    if (isset($_GET['email'])) {
                                                        echo '<input type="email" class="form-control" value="'.$_GET['email'].'"  placeholder="El. Paštas" name="email" id="email">';
                                                        unset($_GET['email']);
                                                    } else if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') {
                                                        echo '<input type="email" class="form-control" value="'.$_SESSION['cart']['user_details']['email'].'"  placeholder="El. Paštas" name="email" id="email">';
                                                    } else {
                                                        echo '<input type="email" class="form-control" value=""  placeholder="El. Paštas" name="email" id="email">';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="col-md-12">
                                        <div class="row">
                                            <label for="email" class="col-sm-4 col-form-label col-form-labels">
                                                Telefono numeris
                                            </label>
                                            <div class="col-sm-8">
                                                <?php
                                                    if (isset($_GET['phone'])) {
                                                        echo '<input type="text" class="form-control" value="'.$_GET['phone'].'"  placeholder="Telefono numeris" name="phone" id="phone">';
                                                        unset($_GET['phone']);
                                                    } else if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') {
                                                        echo '<input type="text" class="form-control" value="'.$_SESSION['cart']['user_details']['phone'].'"  placeholder="Telefono numeris" name="phone" id="phone">';
                                                    } else {
                                                        echo '<input type="text" class="form-control" value=""  placeholder="Telefono numeris" name="phone" id="phone">';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="col-md-12 pt-0" style="padding-top:20px;border-bottom:1px solid #cccccc;">
                                        <h3 style="font-size:18px;font-weight:bold;">
                                            <img src="jquery/if_map-marker_322462.png" height="30" style="height:30px;">&nbsp;&nbsp;&nbsp;Jūsų pristatymo adresas</h3>
                                    </div>
                                    <div class="col-md-12" style="margin-top:15px;">
                                        <div class="form-group row">
                                            <label for="firm" class="col-sm-4 col-form-label">Įmonės pavadinimas
                                            </label>
                                            <div class="col-sm-8">
                                                <?php
                                                    if (isset($_GET['firm'])) {
                                                        echo '<input type="text" class="form-control" value="'.$_GET['firm'].'"  placeholder="Įmonės pavadinimas" name="firm" id="firm">';
                                                        unset($_GET['firm']);
                                                    } else if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') {
                                                        echo '<input type="text" class="form-control" value="'.$_SESSION['cart']['user_details']['firm'].'"  placeholder="Įmonės pavadinimas" name="firm" id="firm">';
                                                    } else {
                                                        echo '<input type="text" class="form-control" value=""  placeholder="Įmonės pavadinimas" name="firm" id="firm">';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="company_code" class="col-sm-4 col-form-label col-form-labels">Įmonės kodas
                                            </label>
                                            <div class="col-sm-8">
                                                <?php
                                                    if (isset($_GET['companycode'])) {
                                                        echo '<input type="text" class="form-control" value="'.$_GET['companycode'].'"  placeholder="Įmonės kodas" name="company_code" id="company_code">';
                                                        unset($_GET['companycode']);
                                                    } else if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') {
                                                        echo '<input type="text" class="form-control" value="'.$_SESSION['cart']['user_details']['company_code'].'"  placeholder="Įmonės kodas" name="company_code" id="company_code">';
                                                    } else {
                                                        echo '<input type="text" class="form-control" value=""  placeholder="Įmonės kodas" name="company_code" id="company_code">';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="col-md-12">
                                        <fieldset class="form-group row">
                                            <label for="company_code" class="col-sm-4 col-form-label col-form-labels" id="activity_type">Veiklos tipas
                                            </label>
                                            <div class="col-sm-8">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <?php
                                                            if ((isset($_GET['optradio']) && $_GET['optradio'] == 'yes') || (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details']['activity_type'] == 'yes')) {
                                                                echo '<input class="form-check-input" type="radio" name="optradio" id="gridRadios1" value="yes" checked>';
                                                                unset($_GET['optradio']);
                                                            } else {
                                                                echo '<input class="form-check-input" type="radio" name="optradio" id="gridRadios1" value="yes">';
                                                            }
                                                        ?>
                                                        PVM mokėtojas
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <label class="form-check-label" style="margin-bottom: 0px;">
                                                        <?php
                                                            if ((isset($_GET['optradio']) && $_GET['optradio'] == 'no') || (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details']['activity_type'] == 'no')) {
                                                                echo '<input class="form-check-input" type="radio" name="optradio" id="gridRadios2" value="no" checked>';
                                                                unset($_GET['optradio']);
                                                            } else {
                                                                if(!(isset($_GET['optradio'])) && !(isset($_SESSION['cart']['user_details']))) {
                                                                    echo '<input class="form-check-input" type="radio" name="optradio" id="gridRadios2" value="no" checked>';
                                                                } else {
                                                                    echo '<input class="form-check-input" type="radio" name="optradio" id="gridRadios2" value="no">';
                                                                }
                                                            }
                                                        ?>
                                                        Ne PVM mokėtojas
                                                    </label>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="vat_no" class="col-sm-4 col-form-label">
                                                PVM mokėtojo kodas
                                            </label>
                                            <div class="col-sm-8">
                                                <?php
                                                    if (isset($_GET['vatno'])) {
                                                        echo '<input type="text" class="form-control" value="'.$_GET['vatno'].'"  placeholder="PVM mokėtojo kodas" name="vat_no" id="vat_no">';
                                                        unset($_GET['vatno']);
                                                    } else if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') {
                                                        echo '<input type="text" class="form-control" value="'.$_SESSION['cart']['user_details']['vat_no'].'"  placeholder="PVM mokėtojo kodas" name="vat_no" id="vat_no">';
                                                    } else {
                                                        echo '<input type="text" class="form-control" value=""  placeholder="PVM mokėtojo kodas" name="vat_no" id="vat_no">';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="Address" class="col-sm-4 col-form-label col-form-labels">Adresas
                                            </label>
                                            <div class="col-sm-8">
                                                <?php
                                                    if (isset($_GET['address'])) {
                                                        echo '<input type="text" class="form-control" value="'.$_GET['address'].'"  placeholder="Adresas" name="address" id="address">';
                                                        unset($_GET['address']);
                                                    } else if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') {
                                                        echo '<input type="text" class="form-control" value="'.$_SESSION['cart']['user_details']['address'].'"  placeholder="Adresas" name="address" id="address">';
                                                    } else {
                                                        echo '<input type="text" class="form-control" value=""  placeholder="Adresas" name="address" id="address">';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="city" class="col-sm-4 col-form-label col-form-labels">Miestas
                                            </label>
                                            <div class="col-sm-8">
                                                <?php
                                                    if (isset($_GET['city'])) {
                                                        echo '<input type="text" class="form-control" value="'.$_GET['city'].'"  placeholder="Miestas" name="city" id="city">';
                                                        unset($_GET['city']);
                                                    } else if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') {
                                                        echo '<input type="text" class="form-control" value="'.$_SESSION['cart']['user_details']['city'].'"  placeholder="Miestas" name="city" id="city">';
                                                    } else {
                                                        echo '<input type="text" class="form-control" value=""  placeholder="Miestas" name="city" id="city">';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="postcode" class="col-sm-4 col-form-label col-form-labels">Pašto indeksas
                                            </label>
                                            <div class="col-sm-8" id="div-postcode">
                                                <?php
                                                    if (isset($_GET['postcode'])) {
                                                        echo '<input type="text" class="form-control" value="'.$_GET['postcode'].'"  placeholder="Pašto indeksas" name="postcode" id="postcode" onclick="getPostCode()">';
                                                        unset($_GET['postcode']);
                                                    } else if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') {
                                                        echo '<input type="text" class="form-control" value="'.$_SESSION['cart']['user_details']['postcode'].'"  placeholder="Pašto indeksas" name="postcode" id="postcode" onclick="getPostCode()">';
                                                    } else {
                                                        echo '<input type="text" class="form-control" value=""  placeholder="Pašto indeksas" name="postcode" id="postcode" onclick="getPostCode()">';
                                                    }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="clearfix">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label for="country" class="col-sm-4 col-form-label col-form-labels">Šalis
                                            </label>
                                            <div class="col-sm-8">
                                                <select name="country" id="country" class="form-control">
                                                    <option value="<?php echo (isset($_GET['country']))? $_GET['country'] : ''; ?>" selected="selected">
                                                        <?php
                                                            if (isset($_GET['country'])) {
                                                                echo $_GET['country'];
                                                            } else if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') {
                                                                echo $_SESSION['cart']['user_details']['country'];
                                                            } else {
                                                                echo 'Choose Country';
                                                            }
                                                        ?>
                                                    </option>
                                                    <option value="United States">United States
                                                    </option>
                                                    <option value="United Kingdom">United Kingdom
                                                    </option>
                                                    <option value="Afghanistan">Afghanistan
                                                    </option>
                                                    <option value="Albania">Albania
                                                    </option>
                                                    <option value="Algeria">Algeria
                                                    </option>
                                                    <option value="American Samoa">American Samoa
                                                    </option>
                                                    <option value="Andorra">Andorra
                                                    </option>
                                                    <option value="Angola">Angola
                                                    </option>
                                                    <option value="Anguilla">Anguilla
                                                    </option>
                                                    <option value="Antarctica">Antarctica
                                                    </option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda
                                                    </option>
                                                    <option value="Argentina">Argentina
                                                    </option>
                                                    <option value="Armenia">Armenia
                                                    </option>
                                                    <option value="Aruba">Aruba
                                                    </option>
                                                    <option value="Australia">Australia
                                                    </option>
                                                    <option value="Austria">Austria
                                                    </option>
                                                    <option value="Azerbaijan">Azerbaijan
                                                    </option>
                                                    <option value="Bahamas">Bahamas
                                                    </option>
                                                    <option value="Bahrain">Bahrain
                                                    </option>
                                                    <option value="Bangladesh">Bangladesh
                                                    </option>
                                                    <option value="Barbados">Barbados
                                                    </option>
                                                    <option value="Belarus">Belarus
                                                    </option>
                                                    <option value="Belgium">Belgium
                                                    </option>
                                                    <option value="Belize">Belize
                                                    </option>
                                                    <option value="Benin">Benin
                                                    </option>
                                                    <option value="Bermuda">Bermuda
                                                    </option>
                                                    <option value="Bhutan">Bhutan
                                                    </option>
                                                    <option value="Bolivia">Bolivia
                                                    </option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina
                                                    </option>
                                                    <option value="Botswana">Botswana
                                                    </option>
                                                    <option value="Bouvet Island">Bouvet Island
                                                    </option>
                                                    <option value="Brazil">Brazil
                                                    </option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory
                                                    </option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam
                                                    </option>
                                                    <option value="Bulgaria">Bulgaria
                                                    </option>
                                                    <option value="Burkina Faso">Burkina Faso
                                                    </option>
                                                    <option value="Burundi">Burundi
                                                    </option>
                                                    <option value="Cambodia">Cambodia
                                                    </option>
                                                    <option value="Cameroon">Cameroon
                                                    </option>
                                                    <option value="Canada">Canada
                                                    </option>
                                                    <option value="Cape Verde">Cape Verde
                                                    </option>
                                                    <option value="Cayman Islands">Cayman Islands
                                                    </option>
                                                    <option value="Central African Republic">Central African Republic
                                                    </option>
                                                    <option value="Chad">Chad
                                                    </option>
                                                    <option value="Chile">Chile
                                                    </option>
                                                    <option value="China">China
                                                    </option>
                                                    <option value="Christmas Island">Christmas Island
                                                    </option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands
                                                    </option>
                                                    <option value="Colombia">Colombia
                                                    </option>
                                                    <option value="Comoros">Comoros
                                                    </option>
                                                    <option value="Congo">Congo
                                                    </option>
                                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The
                                                    </option>
                                                    <option value="Cook Islands">Cook Islands
                                                    </option>
                                                    <option value="Costa Rica">Costa Rica
                                                    </option>
                                                    <option value="Cote D'ivoire">Cote D'ivoire
                                                    </option>
                                                    <option value="Croatia">Croatia
                                                    </option>
                                                    <option value="Cuba">Cuba
                                                    </option>
                                                    <option value="Cyprus">Cyprus
                                                    </option>
                                                    <option value="Czech Republic">Czech Republic
                                                    </option>
                                                    <option value="Denmark">Denmark
                                                    </option>
                                                    <option value="Djibouti">Djibouti
                                                    </option>
                                                    <option value="Dominica">Dominica
                                                    </option>
                                                    <option value="Dominican Republic">Dominican Republic
                                                    </option>
                                                    <option value="Ecuador">Ecuador
                                                    </option>
                                                    <option value="Egypt">Egypt
                                                    </option>
                                                    <option value="El Salvador">El Salvador
                                                    </option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea
                                                    </option>
                                                    <option value="Eritrea">Eritrea
                                                    </option>
                                                    <option value="Estonia">Estonia
                                                    </option>
                                                    <option value="Ethiopia">Ethiopia
                                                    </option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)
                                                    </option>
                                                    <option value="Faroe Islands">Faroe Islands
                                                    </option>
                                                    <option value="Fiji">Fiji
                                                    </option>
                                                    <option value="Finland">Finland
                                                    </option>
                                                    <option value="France">France
                                                    </option>
                                                    <option value="French Guiana">French Guiana
                                                    </option>
                                                    <option value="French Polynesia">French Polynesia
                                                    </option>
                                                    <option value="French Southern Territories">French Southern Territories
                                                    </option>
                                                    <option value="Gabon">Gabon
                                                    </option>
                                                    <option value="Gambia">Gambia
                                                    </option>
                                                    <option value="Georgia">Georgia
                                                    </option>
                                                    <option value="Germany">Germany
                                                    </option>
                                                    <option value="Ghana">Ghana
                                                    </option>
                                                    <option value="Gibraltar">Gibraltar
                                                    </option>
                                                    <option value="Greece">Greece
                                                    </option>
                                                    <option value="Greenland">Greenland
                                                    </option>
                                                    <option value="Grenada">Grenada
                                                    </option>
                                                    <option value="Guadeloupe">Guadeloupe
                                                    </option>
                                                    <option value="Guam">Guam
                                                    </option>
                                                    <option value="Guatemala">Guatemala
                                                    </option>
                                                    <option value="Guinea">Guinea
                                                    </option>
                                                    <option value="Guinea-bissau">Guinea-bissau
                                                    </option>
                                                    <option value="Guyana">Guyana
                                                    </option>
                                                    <option value="Haiti">Haiti
                                                    </option>
                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands
                                                    </option>
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)
                                                    </option>
                                                    <option value="Honduras">Honduras
                                                    </option>
                                                    <option value="Hong Kong">Hong Kong
                                                    </option>
                                                    <option value="Hungary">Hungary
                                                    </option>
                                                    <option value="Iceland">Iceland
                                                    </option>
                                                    <option value="India">India
                                                    </option>
                                                    <option value="Indonesia">Indonesia
                                                    </option>
                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of
                                                    </option>
                                                    <option value="Iraq">Iraq
                                                    </option>
                                                    <option value="Ireland">Ireland
                                                    </option>
                                                    <option value="Israel">Israel
                                                    </option>
                                                    <option value="Italy">Italy
                                                    </option>
                                                    <option value="Jamaica">Jamaica
                                                    </option>
                                                    <option value="Japan">Japan
                                                    </option>
                                                    <option value="Jordan">Jordan
                                                    </option>
                                                    <option value="Kazakhstan">Kazakhstan
                                                    </option>
                                                    <option value="Kenya">Kenya
                                                    </option>
                                                    <option value="Kiribati">Kiribati
                                                    </option>
                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of
                                                    </option>
                                                    <option value="Korea, Republic of">Korea, Republic of
                                                    </option>
                                                    <option value="Kuwait">Kuwait
                                                    </option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan
                                                    </option>
                                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic
                                                    </option>
                                                    <option value="Latvia">Latvia
                                                    </option>
                                                    <option value="Lebanon">Lebanon
                                                    </option>
                                                    <option value="Lesotho">Lesotho
                                                    </option>
                                                    <option value="Liberia">Liberia
                                                    </option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya
                                                    </option>
                                                    <option value="Liechtenstein">Liechtenstein
                                                    </option>
                                                    <option value="Lietuva" <?php echo (isset($_GET['country']) == false)? 'selected' : ''; ?>>Lietuva
                                                    </option>
                                                    <option value="Luxembourg">Luxembourg
                                                    </option>
                                                    <option value="Macao">Macao
                                                    </option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of
                                                    </option>
                                                    <option value="Madagascar">Madagascar
                                                    </option>
                                                    <option value="Malawi">Malawi
                                                    </option>
                                                    <option value="Malaysia">Malaysia
                                                    </option>
                                                    <option value="Maldives">Maldives
                                                    </option>
                                                    <option value="Mali">Mali
                                                    </option>
                                                    <option value="Malta">Malta
                                                    </option>
                                                    <option value="Marshall Islands">Marshall Islands
                                                    </option>
                                                    <option value="Martinique">Martinique
                                                    </option>
                                                    <option value="Mauritania">Mauritania
                                                    </option>
                                                    <option value="Mauritius">Mauritius
                                                    </option>
                                                    <option value="Mayotte">Mayotte
                                                    </option>
                                                    <option value="Mexico">Mexico
                                                    </option>
                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of
                                                    </option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of
                                                    </option>
                                                    <option value="Monaco">Monaco
                                                    </option>
                                                    <option value="Mongolia">Mongolia
                                                    </option>
                                                    <option value="Montserrat">Montserrat
                                                    </option>
                                                    <option value="Morocco">Morocco
                                                    </option>
                                                    <option value="Mozambique">Mozambique
                                                    </option>
                                                    <option value="Myanmar">Myanmar
                                                    </option>
                                                    <option value="Namibia">Namibia
                                                    </option>
                                                    <option value="Nauru">Nauru
                                                    </option>
                                                    <option value="Nepal">Nepal
                                                    </option>
                                                    <option value="Netherlands">Netherlands
                                                    </option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles
                                                    </option>
                                                    <option value="New Caledonia">New Caledonia
                                                    </option>
                                                    <option value="New Zealand">New Zealand
                                                    </option>
                                                    <option value="Nicaragua">Nicaragua
                                                    </option>
                                                    <option value="Niger">Niger
                                                    </option>
                                                    <option value="Nigeria">Nigeria
                                                    </option>
                                                    <option value="Niue">Niue
                                                    </option>
                                                    <option value="Norfolk Island">Norfolk Island
                                                    </option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands
                                                    </option>
                                                    <option value="Norway">Norway
                                                    </option>
                                                    <option value="Oman">Oman
                                                    </option>
                                                    <option value="Pakistan">Pakistan
                                                    </option>
                                                    <option value="Palau">Palau
                                                    </option>
                                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied
                                                    </option>
                                                    <option value="Panama">Panama
                                                    </option>
                                                    <option value="Papua New Guinea">Papua New Guinea
                                                    </option>
                                                    <option value="Paraguay">Paraguay
                                                    </option>
                                                    <option value="Peru">Peru
                                                    </option>
                                                    <option value="Philippines">Philippines
                                                    </option>
                                                    <option value="Pitcairn">Pitcairn
                                                    </option>
                                                    <option value="Poland">Poland
                                                    </option>
                                                    <option value="Portugal">Portugal
                                                    </option>
                                                    <option value="Puerto Rico">Puerto Rico
                                                    </option>
                                                    <option value="Qatar">Qatar
                                                    </option>
                                                    <option value="Reunion">Reunion
                                                    </option>
                                                    <option value="Romania">Romania
                                                    </option>
                                                    <option value="Russian Federation">Russian Federation
                                                    </option>
                                                    <option value="Rwanda">Rwanda
                                                    </option>
                                                    <option value="Saint Helena">Saint Helena
                                                    </option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis
                                                    </option>
                                                    <option value="Saint Lucia">Saint Lucia
                                                    </option>
                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon
                                                    </option>
                                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines
                                                    </option>
                                                    <option value="Samoa">Samoa
                                                    </option>
                                                    <option value="San Marino">San Marino
                                                    </option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe
                                                    </option>
                                                    <option value="Saudi Arabia">Saudi Arabia
                                                    </option>
                                                    <option value="Senegal">Senegal
                                                    </option>
                                                    <option value="Serbia and Montenegro">Serbia and Montenegro
                                                    </option>
                                                    <option value="Seychelles">Seychelles
                                                    </option>
                                                    <option value="Sierra Leone">Sierra Leone
                                                    </option>
                                                    <option value="Singapore">Singapore
                                                    </option>
                                                    <option value="Slovakia">Slovakia
                                                    </option>
                                                    <option value="Slovenia">Slovenia
                                                    </option>
                                                    <option value="Solomon Islands">Solomon Islands
                                                    </option>
                                                    <option value="Somalia">Somalia
                                                    </option>
                                                    <option value="South Africa">South Africa
                                                    </option>
                                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands
                                                    </option>
                                                    <option value="Spain">Spain
                                                    </option>
                                                    <option value="Sri Lanka">Sri Lanka
                                                    </option>
                                                    <option value="Sudan">Sudan
                                                    </option>
                                                    <option value="Suriname">Suriname
                                                    </option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen
                                                    </option>
                                                    <option value="Swaziland">Swaziland
                                                    </option>
                                                    <option value="Sweden">Sweden
                                                    </option>
                                                    <option value="Switzerland">Switzerland
                                                    </option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic
                                                    </option>
                                                    <option value="Taiwan, Province of China">Taiwan, Province of China
                                                    </option>
                                                    <option value="Tajikistan">Tajikistan
                                                    </option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of
                                                    </option>
                                                    <option value="Thailand">Thailand
                                                    </option>
                                                    <option value="Timor-leste">Timor-leste
                                                    </option>
                                                    <option value="Togo">Togo
                                                    </option>
                                                    <option value="Tokelau">Tokelau
                                                    </option>
                                                    <option value="Tonga">Tonga
                                                    </option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago
                                                    </option>
                                                    <option value="Tunisia">Tunisia
                                                    </option>
                                                    <option value="Turkey">Turkey
                                                    </option>
                                                    <option value="Turkmenistan">Turkmenistan
                                                    </option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands
                                                    </option>
                                                    <option value="Tuvalu">Tuvalu
                                                    </option>
                                                    <option value="Uganda">Uganda
                                                    </option>
                                                    <option value="Ukraine">Ukraine
                                                    </option>
                                                    <option value="United Arab Emirates">United Arab Emirates
                                                    </option>
                                                    <option value="United Kingdom">United Kingdom
                                                    </option>
                                                    <option value="United States">United States
                                                    </option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands
                                                    </option>
                                                    <option value="Uruguay">Uruguay
                                                    </option>
                                                    <option value="Uzbekistan">Uzbekistan
                                                    </option>
                                                    <option value="Vanuatu">Vanuatu
                                                    </option>
                                                    <option value="Venezuela">Venezuela
                                                    </option>
                                                    <option value="Viet Nam">Viet Nam
                                                    </option>
                                                    <option value="Virgin Islands, British">Virgin Islands, British
                                                    </option>
                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.
                                                    </option>
                                                    <option value="Wallis and Futuna">Wallis and Futuna
                                                    </option>
                                                    <option value="Western Sahara">Western Sahara
                                                    </option>
                                                    <option value="Yemen">Yemen
                                                    </option>
                                                    <option value="Zambia">Zambia
                                                    </option>
                                                    <option value="Zimbabwe">Zimbabwe
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <input type="hidden" class="form-control"  placeholder="Regionas" value="<?php echo (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') ? $_SESSION['cart']['user_details']['state'] : ''; ?>" name="state" id="state">
                            </div>
                            <div class="width-600 col-md-6 cart right ar-col-cart">
							<div class="row">
                                <div class="col-md-12 no-padd">
                                      <h4 class="list-group-item-heading bgGreyBorder" style="">Pristatymo būdas</h4>
								 <tabff></tabff>
                            
                                    <div class="col-md-12 no-padd" style="margin-top:15px;">
                                 
                                      
                                        <div id="takeaway">
                                        <?php $mystrings = $_SESSION['cart']['user_details']['shipping_method'];
										$mystring = $mystrings;

$parts = explode(",",$mystring);
$mystring = $parts['1'];

$sql = "SELECT * FROM take_away_shipping where s_type = 1 ORDER by id ASC";
$result=mysqli_query($conn, $sql);?>
      <?php while($row = mysqli_fetch_array($result)) {  ?>
                                        <div class="ship_method">
                                            <input type="radio" name="shipping_method" data-name="<?php echo $row["id"]; ?>" data-value="<?php echo number_format((float)$row["delivery_price"], 2, '.', '');?>" value="<?php echo $row["id"]; ?>" style="margin-top:5px;" <?php if($mystring == $row["id"]){?>checked="checked"<?php } ?>>&nbsp;
                                            <font class="pay" style="font-size: 15px;vertical-align: inherit;"><strong><?php  echo stripslashes($row["s_name"]); ?></strong>
                                            </font>
                                            <span class="price" style="float:right;margin-top:10px;padding-right:20px;">
                                                    <font style="vertical-align: inherit;"><?php echo number_format((float)$row["delivery_price"], 2, '.', '');?>€</font>
                                            </span>
                                            <div class="clearfix"></div>
                                        </div>
                                        <?php } ?>
                                         <?php 
										 mysqli_set_charset($link, 'utf8');
										 $sql = "SELECT * FROM take_away_shipping where s_type = 2 ORDER by id ASC";
//echo $sql;exit;
//echo $mystring;
$result=mysqli_query($conn, $sql);?>
      <?php while($row = mysqli_fetch_array($result)) {  ?>
                                        <div class="ship_method" >
                                            <input type="radio" name="shipping_method" data-name="<?php echo $row["d_name"]; ?>" data-value="<?php if($propricesum >= $row["d_free_delivery_from"]) { echo "0.00"; }else{  echo number_format((float)$row["d_price"], 2, '.', ''); }?>" value="<?php echo $row["id"]; ?>" style="margin-top:5px;" <?php if($mystring == $row["id"]){?>checked="checked"<?php } if($mystring =='' ||$mystring == NULL){?>checked="checked"<?php } ?>>&nbsp;
                                            <font class="pay" style="vertical-align: inherit;font-size: 15px;"><strong><?php  echo $row["d_name"]; ?></strong>
                                            </font>
                                           <span style="font-size:11px">
                                            <span class="price" style="float:right;margin-top:10px;padding-right:20px;">
                                                    <font  style="vertical-align: inherit;"><?php if($propricesum >= $row["d_free_delivery_from"]) { echo "0.00"; }else{  echo number_format((float)$row["d_price"], 2, '.', ''); }?>€</font>
                                            </span><br />
                                            &nbsp;&nbsp;&nbsp; <font class="pay" style="vertical-align:inherit; font-size:15px;margin-left: 18px;"> Nemokamas pristatymas nuo&nbsp<?php echo $row["d_free_delivery_from"]; ?>€ </font>
                                            <br/>&nbsp;&nbsp;&nbsp;&nbsp; <font class="pay" style="vertical-align: inherit;font-size: 15px; margin-left: 18px;">Pristatymo terminas:&nbsp<?php echo $row["d_duration"]; ?>	</font></span>
                                            <div class="clearfix"><br></div>
                                        </div>
                                        <?php } ?>
                                        </div>
                                        <div id="abroad" style="display:none;">
                                         <font style="vertical-align: inherit;font-weight:bold;"><!--Deliver by courier-->
                                                </font>
                                         <?php 
										 $mystrings = $parts['0'];
										 mysqli_set_charset($link, 'utf8');
										  $sql = "SELECT * FROM take_away_shipping where s_type = 2 ORDER by id ASC";
//echo $sql;exit;

$result=mysqli_query($conn, $sql);?>
      <?php while($row = mysqli_fetch_array($result)) {  ?>
                                        <div class="ship_method">
                                            <input type="radio" name="shipping_method" data-name="<?php echo $row["d_name"]; ?>" data-value="<?php if($propricesum < $row["abroad_free_delivey"]) {  echo number_format((float)$row["abroad_price"], 2, '.', ''); }else{ echo "0.00";  }?>" value="<?php echo $row["id"]; ?>" style="margin-top:5px;" <?php if($mystrings == $row["abroad_price"]){?>checked="checked"<?php } ?>>&nbsp;
                                            <font class="pay" style="vertical-align: inherit;font-size: 15px;"><?php echo $row["d_name"]; ?>
                                            </font>
                                           
                                            <span class="price" style="float:right;margin-top:10px;padding-right:20px;">
                                                    <font style="vertical-align: inherit;"><?php if($propricesum < $row["abroad_free_delivey"]) {  echo number_format((float)$row["abroad_price"], 2, '.', ''); }else{ echo "0.00";  }?><?php //echo number_format((float)$row["abroad_price"], 2, '.', '');?>€</font>
                                            </span><br />
                                            &nbsp;&nbsp;&nbsp; <font class="pay" style="font-size: 15px;vertical-align:inherit;margin-left: 18px;"> Nemokamas pristatymas nuo&nbsp<?php echo $row["abroad_free_delivey"]; ?>€ </font>
                                            <br/>&nbsp;&nbsp;&nbsp;&nbsp; <font class="pay" style="vertical-align: inherit;font-size: 15px; margin-left: 18px;">Pristatymo terminas:&nbsp<?php echo $row["abroad_duration"]; ?>	</font>
                                             <?php /*?>(Pristatymo terminas:<?php echo $row["abroad_duration"]; ?>&nbsp;<?php echo $row["	d_free_delivery_from"]; ?>&nbsp;Nemokamas pristatymas nuo&nbsp<?php echo $row["abroad_free_delivey"]; ?>)	<?php */?>
                                            <div class="clearfix"></div>
                                        </div>
                                        <?php } ?>
                                        </div>
                                  </div>
                                </div>
                            </div>
                             <div class="row">   
                                <div class="col-md-12 no-padd">
                                     <h4 class="list-group-item-heading bgGreyBorder" style="">Mokėjimo būdas</h4>
								 <tabff></tabff>                   
                                
                                    <div class="col-md-12 no-padd" style="margin-top:10px;">
               
										              <div class="ship_method">
                                            <input type="radio" data-value="0" name="payment_method" value="Elektroninė bankininkystė" style="margin-top:5px;" <?php 
											if($_SESSION['cart']['user_details']['payment_method'] == 'Elektroninė bankininkystė'){ echo  'checked';} else { echo '';}?>>&nbsp;
                                            <span style="display:none;"><input type="radio" name="payment_method" value="no" style="margin-top:5px; " >&nbsp;</span>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;"><strong>Elektroninė bankininkystė</strong><br>
											<span style="font-size:14px">	Pasirinkę šį mokėjimo būdą, automatiškai būsite nukreipti į savo banką mokėjimo patvirtinimui.</span>
                                                </font>
                                            </font>
                                        </div>
                         
                                        <div class="ship_method">
                               <input type="radio" data-value="2" name="payment_method" value="Mokėti kurjeriui grynaisiais" style="margin-top:5px;" <?php if($_SESSION['cart']['user_details']['payment_method'] == 'Mokėti kurjeriui grynaisiais'){ echo  'checked';} else { echo '';}?>>&nbsp;
                                            <span style="display:none;"><input type="radio" name="payment_method" value="no" style="margin-top:5px; " >&nbsp;</span>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;"><strong>Mokėti kurjeriui grynaisiais</strong><br>
											<span style="font-size:14px">		Atsiimdami prekes  iš kurjerio galite atsiskaityti grynaisiais pinigais ir banko kortele.
Šis atsiskaitymo būdas Jums papildomai kainuos 2,00 Eur.</span>
                                                </font>
                                            </font>
                                        </div>
                                        <div class="ship_method">
                                            <input type="radio" data-value="0" name="payment_method" value="Mokėti atsiimant mūsų salonuose" style="margin-top:5px; " <?php 
											if($_SESSION['cart']['user_details']['payment_method'] == 'Mokėti atsiimant mūsų salonuose'){ echo  'checked';} else { echo '';}?>>&nbsp;
                                            
                                            <span style="display:none;"><input type="radio" name="payment_method" value="no" style="margin-top:5px; " >&nbsp;</span>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;"><strong>Mokėti atsiimant mūsų salonuose</strong><br>
											<span style="font-size:14px">		Atsiimdami prekes  Alytaus ir Kauno salonuose atsiskaityti galite tik grynaisiais. Vilniuje esančiame salone galima atsiskaityti ir banko kortele. </span>
                                                </font>
                                            </font>
                                        </div>
										               <div class="ship_method">
                                  				 <input type="radio" data-value="0" name="payment_method" value="Mokėti bankiniu pavedimu" style="margin-top:5px; "							 <?php 
											if($_SESSION['cart']['user_details']['payment_method'] == 'Mokėti bankiniu pavedimu'){ echo  'checked';} else { echo '';}?>>&nbsp;
                                            <span style="display:none;"><input type="radio" name="payment_method" value="no" style="margin-top:5px; " >&nbsp;</span>
                                            <font style="vertical-align: inherit;">
                                                <font style="vertical-align: inherit;"><strong>Mokėti bankiniu pavedimu</strong><br>
<span style="font-size:14px">	Pasirinkę šį mokėjimo būdą, Jūs turėsite savarankiškai prisijungti prie savo banko sąskaitos ir į mūsų sąskaitą pervesti užsakymo vertės pinigų sumą. Taip pat šią sumą galėsite sumokėti bet kuriame banko skyriuje ar mokėjimo terminale parduotuvėje. Pavedimui reikalingi duomenys bus atsiųsti Jūsų nurodytu  el. paštu. </span>
                                                </font>
                                            </font>
                                        </div>
                                        
                          
										<br/>
		
                                    </div>
                                </div>
                              </div>  
							  
							  <div class="row">   
                                <div class="col-md-12 no-padd">
                                     <h4 class="list-group-item-heading bgGreyBorder" style="">Nuolaidos kodas</h4>
                                    <div class="col-md-12 no-padd" style="margin-top:10px;">
										<div class="form-group row">
                                            <div class="col-sm-8">
												<input type="text" class="form-control" value=""  placeholder="Įveskite kupono kodą" name="voucher_code" id="voucher_code">
                                            </div>
                                            <div class="col-sm-4">
                                                <button type="button" id="apply_voucher" name="apply_voucher">
                                                    PATEIKTI
                                                </button>                                     
                                            </div>
                                        </div>
									</div>
                                </div>
                                <div class="col-md-12"> <div class="col-md-12 no-padd" style="margin-top:10px; color: red;" id="voucher_msg">
                                    <?php 
                                    if ($_SESSION['cart']['user_details']['voucher_code']) {
                                        echo "Panaudotas kuponas: " . $_SESSION['cart']['user_details']['voucher_code'] . " (" . $_SESSION['cart']['user_details']['voucher_name'] .")";
                                    }
                                    ?>
                                </div></div>
                                </div> 	
                            </div>
                            <?php
                                unset($_GET['paymentmethod']);
                                unset($_GET['shippingmethod']);
                                unset($_GET['country']);
                            ?>
                            <div class="clearfix"></div>
                            <div class="col-md-12 no-padd cart_outer" id="amardivrelocart">
                                     <a style="padding: 0;margin: 0;">
                        <h4 class="list-group-item-heading ar-main-heading" style="position: absolute;width: 93%;background: #808080;padding: 0 12px;color: #fff;border-radius: 9px 0 0 9px;text-transform: uppercase;line-height: 54px;letter-spacing: 0.6px">Prekių krepšelis</h4>
                         <eeee></eeee>
                    </a>  <br />      
                                   
                                    <div>  <div class="table-responsive" style="padding: 15px 0;">
                                    
                                    
                                                     <?php
                        $cart_details = $_SESSION['cart']['product_details'];
                    $i = 1;
                    foreach ($cart_details as $key) {
                        ?>
                           <div class="cart_tab ar-cart_tab">

                            <div class="row">
                                <div class="col-md-3 colss_2">
                                    <?php echo $key['imgsrc']; ?>
                                </div>
                                <div class="col-md-9">
                                    <div class="clearfix">

                                        <div class="col-md-12 colss" >
                                            <div class="table-responsive">
                                                <?php include("module_name.php");?>
                                                <!-- <table class="table table-bordered">
                                                </table> -->
                                            </div>
                                            <p>&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div> 
                        <?php ++$i;
                    } ?>
                                    </div>


                                    </div>
                                </div>
                        </div>
                       <br /> 
                        <div class="row">
                            <div class="col-md-12">
                                <div class="next_prev" style="margin-top: 10px;">
                                    <div class="nextbtn">
                                        <button type="submit" name="submit2"  data-next="3">Užsakymas</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                } else {
                    ?>
                    <div class="col-md-12" style="text-align:center;background:#CCCCCC;padding:21px;">
                        <p>Nėra produktų krepšelyje
                        </p>
                    </div>
                    <?php
                }
                ?>
            </div>
        </form>
    </div>
    <?php
	if($goToUrl=='plisuotos-zaliuzes')
	{
		$result_cat = mysqli_query($conn, "SELECT * FROM content where id = '4' AND type = 'pz'");	
	}
	else
	if($goToUrl=='roletai-diena-naktis')
	{
		$result_cat = mysqli_query($conn, "SELECT * FROM content where id = '2' AND type = 'rdn'");	
	}
	else
	if($goToUrl=='roletai-plastikiniams-langams')
	{
		$result_cat = mysqli_query($conn, "SELECT * FROM content where id = '3' AND type = 'rpl'");
	}
	else
	if($goToUrl=='tinkleliai-remeliai')
	{
		$result_cat = mysqli_query($conn, "SELECT * FROM content where id = '5' AND type = 'trem'");	
	}
	else
	if($goToUrl=='tinkleliai-roletai')
	{
		$result_cat = mysqli_query($conn, "SELECT * FROM content where id = '7' AND type = 'tr'");
	}
	else
	if($goToUrl=='tinkleliai-durims')
	{
		$result_cat = mysqli_query($conn, "SELECT * FROM content where id = '6' AND type = 'td'");	
	}
	else
	{
		$result_cat = mysqli_query($conn, "SELECT * FROM content where id = '1' AND type = 'hz'");
	}
	
	
	$row_info  = mysqli_fetch_assoc($result_cat);
	if($row_info)
	{
		$content_db  = html_entity_decode(stripslashes($row_info['product_identificator']));
		$content_db2  = html_entity_decode(stripslashes($row_info['content']));


	}

?> 
     <div class="row setup-content" id="step-4">
     <div class="col-xs-12">
     	<?php echo $content_db;?>
       </div>
     </div>
      <div class="row setup-content" id="step-5">
      <div class="col-xs-12">
     	<?php
		if($content_db2!='')
		{


			$content_db2 = str_replace("https://youtu.be/", "https://www.youtube.com/embed/", $content_db2);
			$content_db2 = str_replace("watch?v=", "embed/", $content_db2);
			preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $content_db2, $match);

			$array_get = $match[0];
			if(empty($array_get))
			{
				$array_get = array();
			}

			for($t=0;$t<sizeof($array_get);$t++)
			{
				$youtube_link = $array_get[$t];

				$iframe_link = '<iframe allow="autoplay; encrypted-media" allowfullscreen="" src="'.$youtube_link.'" width="100%" height="480" frameborder="0"></iframe>';

				 $content_db2 = str_replace($youtube_link, $iframe_link, $content_db2);


			}

		}

			echo $content_db2;
		?>


       </div>
     </div>

    <div class="row setup-content" id="step-3">
        <form id="myform3" method="post" action="https://www.solemlux.lt/eshopdev/order_sub.php?product_name=hz">
            <div class="col-xs-12" id="amardivrelocheckkorlo">
                <input type="hidden" name="myform3_val" value="myform3_val">
                <input type="hidden" name="addonvals" id="addonvals" value="" />
                <?php
                if (isset($_SESSION['cart']['product_details'])) {
                    ?>

                <div class="clearfix well">
                    <div class="row">
                        <?php
                        $cart_details = $_SESSION['cart']['product_details'];

                    $i = 1;
                    foreach ($cart_details as $key) {
                        ?>
                            <div class="col-md-12">

                            <div class="row">
                                <?php
                                ?>
                                <div class="col-md-3 colss_2 third_cart">
                                    <a  href="javascript:void();" class="checktab_img_check">
                                        <?php echo $key['imgsrc']; ?>
                                    </a>
                                </div>
                                <div class="col-md-9 third_cart_info">
                                    <div class="clearfix">

                                        <div class="col-md-12 colss" >
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <?= $key['table']; ?>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <?php ++$i;
                    } ?>
                            <div class="total_summary_seaction cart_uu" >
                                <div class="no-padd-side col-md-6 col-md-offset-3" style="padding:15px 0px;">
                                    <table class="table table-bordered table_fixed">
                                        <tr>
                                        <th>Produktų kaina is viso su PVM:</th>
                                        <td style="width: 150px">
                                        <span id="total_sum"></span>
                                        </td>
                                        </tr>
                                        <tr>
                                        <th>Pristatymo kaina:</th>
                                        <td style="width: 150px">
                                        <span id="pristatymo_kaina_selected"></span>
                                        </td>
                                        </tr>
                                        <tr>
                                        <th>Viso su PVM:</th>
                                        <td style="width: 150px">
                                        <span id="visu_so_pvm"></span>
                                        </td>
                                        </tr>
                                        </table>
                                </div>
                            </div>

                            <div class="col-md-6 clearfix cart_uu" id="cart_user">
                                <div class="no-padd pt-0" style="padding-top:20px;border-bottom:1px solid #cccccc;">
                                    <h3 style="font-size:18px;font-weight:bold;">
                                        <img src="https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/jquery/if_group_171280.png" height="30" style="height:30px;">&nbsp;&nbsp;&nbsp;
                                        Informacija apie užsakymą
                                    </h3>
                                </div>
                                <?php
                                ?>
                                <div class="no-padd-side" style="padding:15px 0px;">
                                    <table class="table table-bordered table_fixed">
                                        <tr>
                                        <td>Vardas Pavardė:</td>
                                        <td>
                                        <span><?php echo (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') ? $_SESSION['cart']['user_details']['first_name'] : ''; ?>&nbsp;<?php echo (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') ? $_SESSION['cart']['user_details']['last_name'] : ''; ?></span>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>
                                        El. Paštas:
                                        </td>
                                        <td>
                                        <span><?php echo (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') ? $_SESSION['cart']['user_details']['email'] : ''; ?></span>
                                        </td>
                                        </tr>
                                        <tr>
                                        <td>Telefono nr:</td>
                                        <td>
                                        <span><?php echo (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') ? $_SESSION['cart']['user_details']['phone'] : ''; ?></span>
                                        </td>
                                        </tr>

                                        <tr>
                                        <td>Pristatymas:</td>
                                        <td>
                                        <span><?php echo $_SESSION['cart']['user_details']['shipping_method']; ?></span>
                                        </td>
                                        </tr>

                                        <tr>
                                        <td>Mokėjimas:</td>
                                        <td>
                                        <span><?php echo $_SESSION['cart']['user_details']['payment_method']; ?></span>
                                        </td>
                                        </tr>

                                        </table>
                                </div>
                            </div>
                            <div class="col-md-6 cart_uu clearfix">
                                <div class="no-padd pt-0" style="padding-top:20px;border-bottom:1px solid #cccccc;">
                                    <h3 style="font-size:18px;font-weight:bold;">
                                        <img src="https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/jquery/if_map-marker_322462.png" height="30" style="height:30px;">&nbsp;&nbsp;&nbsp;Jūsų pristatymo adresas
                                    </h3>
                                </div>
                                <div class="no-padd-side" style="padding:15px 0px;">
                                    <table class="table table-bordered table_fixed1">
                                        <?php
                                        if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details']['firm'] != '') {
                                            ?>
                                            <tr>
                                                <td>Įmonės pavadinimas:</td>
                                                <td>
                                                    <span><?php echo (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') ? $_SESSION['cart']['user_details']['firm'] : ''; ?></span>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                        <?php
                                        if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details']['company_code'] != '') {
                                            ?>
                                            <tr>
                                                <td>Įmonės kodas:</td>
                                                <td>
                                                    <span><?php echo (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') ? $_SESSION['cart']['user_details']['company_code'] : ''; ?></span>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details']['activity_type'] == '') {
                                            ?>
                                            <tr>
                                                <td>Veiklos tipas:</td>
                                                <td>
                                                    <span><?php echo (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details']['activity_type'] == 'yes') ? 'PVM-mokėtojas' : 'Ne PVM-mokėtojas'; ?></span>
                                                </td>
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                        <?php
                                        if(isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details']['vat_no'] != '') {
                                            ?>
                                        <tr>
                                            <td>PVM mokėtojo kodas :</td>
                                            <td>
                                                 <span><?php echo (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') ? $_SESSION['cart']['user_details']['vat_no'] : ''; ?></span>
                                            </td>
                                        </tr>
                                        <?php
                                        }
                                        ?>
                                        <tr>
                                            <td>Adresas:</td>
                                            <td>
                                                <span><?php echo (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') ? $_SESSION['cart']['user_details']['address'] : ''; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Miestas:</td>
                                            <td>
                                                <span><?php echo (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') ? $_SESSION['cart']['user_details']['city'] : ''; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Pašto indeksas:</td>
                                            <td>
                                                <span><?php echo (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') ? $_SESSION['cart']['user_details']['postcode'] : ''; ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Šalis:</td>
                                            <td>
                                                <span><?php echo (isset($_SESSION['cart']['user_details']) && $_SESSION['cart']['user_details'] != '') ? $_SESSION['cart']['user_details']['country'] : 'Choose Country'; ?></span>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <input type="hidden" id="hidden_final_price_table" name="hidden_final_price_table" value="" />
                            <div class="clearfix"></div>
                            <div id="termsAndConditions" class="col-md-12" style="text-align: center; padding: 25px;">
                                <input type="checkbox" id="termsAgreement" style="margin-right: 5px" onclick="agreeTerms()">
                                Besąlygiškai sutinku su pirkimo-pardavimo sąlygomis -
                                <a href="#termsAndConditions" onclick="openTermsModal()">
                                SKAITYTI
                                </a>
                            </div>
                            <div class="col-md-12" style="text-align:right;">
                                <div class="next_prev">
                                    <div class="nextbtn">
                                        <button type="submit" name="submit2"  data-next="3" id="btn_submit_order" class="submit_order" disabled>Patvirtinti užsakymą</button>
                                    </div>
                                </div>
                            </div>


                                <br>

                            </div>
                    </div>
                </div>
                <?php
                } else {
                    ?>
                    <div class="col-md-12" style="text-align:center;background:#CCCCCC;padding:21px;">
                        <p>PRAŠOME PRIDĖTI KORTELĘ!</p>
                    </div>
                    <?php
                }
                ?>
            </div>


        </form>
    </div>


    <?php 
	
	include 'horizontalios-zaliuzes/terms&conditions.php' ?>
    </div>
    <div id="successtyuasdwq" class="modal" role="dialog">
        <div class="modal-dialog ar-modal-css" style="width: 100%; max-width: 1000px; margin: auto;">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body" style="text-align: center; padding:0px">
                    <h3 class="something ar-something" style="text-align: left"><img src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/upload/arrow-right.jpg"> PASIRINKITE
 <img src="https://www.solemlux.lt/eshopdev/roletai-plastikiniams-langams/upload/arrow-left.jpg"></h3>
                    <div class="modal_btn" style="border: 2px solid #e3e3e3; padding: 7px 0 43px 8px; border-radius: 5px;">
                        <a style="padding: 0;margin: 0 0 10px 0; float:left;" class="ar-active" data-dismiss="modal" onclick="add_more();">
                         <h4 class="list-group-item-heading" style="position: absolute; background: #808080;padding: 9.5px 9px;color: #fff; border-radius:5px; text-align:center; text-transform:uppercase;font-size: 13px;">Pridėti papildomą produktą</h4>
                         <tabmodal></tabmodal>
                    </a>
                    <!-- onclick="on_checkout();" -->
                    <a style="padding: 0;margin: 0 0 30px 0; float:left; cursor:pointer;" class="checkout-pop" >
                         <h4 class="list-group-item-heading" style="position: absolute ;padding: 9.5px 9px;color: #4a4545; border-radius:5px; text-align:center; text-transform:uppercase;font-size: 14px;">Vykdyti užsakymą</h4>

                    </a>

                        <?php
							if(isset($_SESSION['cart']['product_details']))
							{
								$index = sizeof($_SESSION['cart']['product_details']);
							}
							else
							{
								$index = 0;
							}

						?>

                        <a style="padding: 0;margin: 0 0 30px 0; float:left; cursor:pointer;"  onclick="edit_order(event, <?php echo $index;?>, '<?php echo $producturl;?>')" class="">
                         <h4 class="list-group-item-heading" style="position: absolute; width: 100%; ;padding: 9.5px 9px;color: #4a4545; border-radius:5px; text-align:left; text-transform:uppercase;font-size: 14px;" >Redaguoti užsakymą</h4>

                    </a>

                    </div>
                    <div id="product-table"></div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    <div id="removePro" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body" style="text-align: center;">
                    <div style="padding:50px;">
                        <h2 class="message"></h2>
                    </div>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti</button>
                </div>
            </div>

        </div>
    </div>
    <div id="exsdff" class="modal " role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body" style="text-align: center; padding: 0px">
                    <div style="padding:50px;">
                        <h2 class="message">Užsakymas patvirtintas</h2>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>


<div id="successtyuasdwq" class="modal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content" >
            <div class="modal-body" style="text-align: center; padding: 0px">

                <div style="padding:0 50px;">
                    <h2 class="something">Prekė įtraukta į krepšelį...
                    </h2>
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal" onclick="add_more();">Pridėti daugiau prekių
                </button>
                <button type="button" class="btn btn-default checkout" onclick="on_checkout();">Užsakymas
                </button>
            </div>
        </div>
    </div>
</div>
<div id="removePro" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body" style="text-align: center;">
                <div style="padding:50px;">
                    <h2 class="message">
                    </h2>
                </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Uždaryti
                </button>
            </div>
        </div>
    </div>
</div>
</div>
<div id="myModal" class="modal mat_mod">
    <div class="modal-content">
    <span class="close">&times;
    </span>
        <div id="modal-body">Kraunasi audinius...
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<?php include 'footer_3.php'; ?>

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
    <?php
        if ((isset($_SESSION['step']) && $_SESSION['step'] == 'step') && $count != 0) {
            ?>
            <script type="text/javascript">
            $(document).ready(function() {
                

            });


            </script>
        <?php
        } elseif ($count == 0) {
            if (isset($_SESSION['cart'])) {
                unset($_SESSION['cart']);
            }
            if (isset($_SESSION['step'])) {
                unset($_SESSION['step']);
            } ?>
            <script type="text/javascript">
            $(document).ready(function() {
               $('ul.setup-panel li a[href="#step-1"]').trigger('click');
                $("#step-1").css("display", "block !important");
                $("#step-2").css("display", "none !important");
                $("#step-3").css("display", "none !important");

            });
            </script>
        <?php
        }
    ?>

    <script type="text/javascript">
      

        function my_control_side_2(selectObject) {
            var x = selectObject.options[selectObject.selectedIndex].text;
            document.getElementById("control_side_td").innerHTML = x;
        }

        function agreeTerms() {
            /*if(this.checked) {
                $("#btn_submit_order").removeAttr("disabled");
            } else {
                $("#btn_submit_order").attr("disabled", "true");
            }*/
            $("#btn_submit_order").prop("disabled", ($("#termsAgreement").prop("checked") == false));
        }


	    window.colorFabricFinal = '';
        window.addOns = [];

        $(document).ready(function() {

			
           history.pushState(null, '', './');
            $("#step2").click(function() {
                $("#idx").val("-1")
                $("#submit1").html("Pridėti į krepšelį");
                history.pushState(null, '', './');
            })

		

            $("#width,#height").on('blur',function() {
			    var mechanism ='';
                var width = $("#width").val();
                var height = $("#height").val();
                var guiding = $("#guiding").val();
                var additional_choices = $("#additional_choices").val();
                var control_side_2 = $("#control_side_2").val();
                var management_mechanism = $("#management_mechanism").val();
                var remote_control = $("#remote_control").val();
                var itemIdx = $("#itemIdx").val();
				 var quantity_val = $("#quantity").val();



                 if(itemIdx != -1 && colorFabricFinal == '') {
                    var newId = "colorwicml" + itemIdx;
                    var newId2 = "colormwicml" + itemIdx;
                    $("#" +newId).attr("checked", "checked")
                    $("#" +newId2).attr("checked", "checked")
                    colorFabricFinal = itemIdx;
                }


                if(additional_choices == 'Rankinis valdymas') {

                }
                else {
                    addOns.push(management_mechanism);
                    var index = addOns.indexOf('3');
                    if (index > -1) {
                      addOns.splice(index, 1);
                    }
                    var index = addOns.indexOf('4');
                    if (index > -1) {
                      addOns.splice(index, 1);
                    }
                    var index = addOns.indexOf('5');
                    if (index > -1) {
                      addOns.splice(index, 1);
                    }
                    addOns.push(remote_control);
                    var index = addOns.indexOf(control_side_2);
                    if (index > -1) {
                      addOns.splice(index, 1);
                    }
                }
              var colorFabric = colorFabricFinal;


                //colorFabric = colorFabric.replace("Vienspalvės","");
                //colorFabric = colorFabric.replace("- (","",colorFabric);
                //colorFabric = colorFabric.replace(")","",colorFabric);
                addOns = unique(addOns);
                //console.log(addOns);

				//var values = $('#selectMaterial').val();

				cat_val = $('#selectMaterial').val();

				audins_val = $("#MEDŽIAGŲ-PASIRINKIMAS").html();








				var chk_arr =  document.getElementsByName("safe_child[]");
				var chklength = chk_arr.length;

				addon_val = "";
				u=1;
				for(k=0;k< chklength;k++)
				{
					if(chk_arr[k].checked)
					{
						if(u==2)
						{
							addon_val += ",";
						}
						addon_val += chk_arr[k].value;
						u++;
					}
				}


				 $.ajax({
                    url : 'https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/get_namelist.php',
                    type : 'post',
                    data : {checkbox_val:addon_val},
                    success : function(response)
					{
						$('#child_safe_id').html(response);
					}
					})


			/*	x = document.getElementById("safe_child").checked;
				if(x)
				{
					checkbox_val  = 1;
				}
				else
				{
					checkbox_val  = '';
				}*/

                $.ajax({
                    url : 'https://www.solemlux.lt/eshopdev/horizontalios-zaliuzes/calculate_price.php',
                    type : 'post',
                    data : {width:width,height:height,guiding:guiding,colorFabric:colorFabric,addOns:addOns,additional_choices:additional_choices,mechanism:mechanism,cat_val:cat_val, audins_val:audins_val, checkbox_val:addon_val, quantity_val: quantity_val},
                    success : function(response) {
                        response = JSON.parse(response);
                        var quantity = 0;
                        var unitPrice = 0;
                        //console.log(response)
                        if(isNaN(response.price)) {

                            $("#calculated-price").html(response.price);
                            $("#calculated-price-with-vat").html("N/A");
                            if(response.price != response.price_original) {
                                $("#calculated-price-discount").html(response.price);
                                $("#calculated-price-with-vat-discount").html("N/A");
                                $(".discount").show();
                            } else {
                                $(".discount").hide();
                            }
                            $(".currency").hide();
                        }
                        else {
                             display_price = (parseFloat(response.price)).toFixed(2);

							vat_21_per = ((21/100) * (display_price));
							price_show  = display_price - vat_21_per;
							price_show  = (parseFloat(price_show)).toFixed(2);
							$("#calculated-price").html("&nbsp;"+(price_show));

							// $("#calculated-price").html("&nbsp;"+(parseFloat(response.price)).toFixed(2));
                            $("#calculated-price-with-vat").html("&nbsp;"+(parseFloat(response.price)).toFixed(2));
                            if(response.price != response.price_original) {
                                $("#calculated-price-discount").html("&nbsp;"+(parseFloat(response.price_original)).toFixed(2));
                                $("#calculated-price-with-vat-discount").html("&nbsp;"+(parseFloat(response.price_original)).toFixed(2));
                                $(".discount").show();
                            } else {
                                $(".discount").hide();
                            }
                            $(".currency").show();
                            quantity = parseInt($("#quantity_tr").text());
                            unitPrice = parseFloat(response.price);
                        }
                        $("#unitPriceValue").val(unitPrice);
                        var totalAmount = unitPrice * quantity;
                        $("#display_kaina_tr").html(totalAmount.toFixed(2)+" €");
                    }
                });
            });


            $("#guiding,#remote_control,#management_mechanism,#selectMaterial,#mechanism").on('change',function() {
                $("#width").trigger('blur');
            });
            $('body').on("click",".thumb-images",function() {
                /*$("[name='colorFabric']").trigger('change');
                setTimeout(function(){
                    $("#width").trigger('blur');
                },500);*/
            });
            $('#matel_chain').on('change',function() {
                var object = $(this);
                if($(object).is(':checked')) {
                    addOns.push('1');
                }
                else {
                    var index = addOns.indexOf('1');
                    if (index > -1) {
                      addOns.splice(index, 1);
                    }
                }
                $("#width").trigger('blur');
            });
		 

            $("#additional_choices").on('change',function() {
                if($(this).val() != 'Rankinis valdymas') {
                    $('#safe_child').prop('checked', false);
                    $('#matel_chain').prop('checked', false);
                    $('#safe_child').trigger('change');
                    $('#matel_chain').trigger('change');
                    addOns = [];
                }
                else {
                    addOns = [];
                    $("#width").trigger('blur');
                }
            });
        });


        $("#myform3").on("submit",function(e) {
            e.preventDefault();
            $("#hidden_final_price_table").val($(".total_summary_seaction").html());
            if($("#hidden_final_price_table").val()!='')
                $("#myform3")[0].submit();
            // $("#myform3").submit();

        });
        function unique(list) {
          var result = [];
          $.each(list, function(i, e) {
            if ($.inArray(e, result) == -1 && e!='') result.push(e);
          });
          return result;
        }
        function updateTotalAmount(quantity) {
            var price = $("#unitPriceValue").val();
            var unitPrice = parseFloat(price) * 1;
            var totalAmount = unitPrice * quantity;
            if(quantity < 1) {
                $("#display_kaina_tr").html(unitPrice.toFixed(2)+" €");
                $("#quantity_tr").text(1);
                $("#quantity").val(1);

            } else {
                $("#display_kaina_tr").html(totalAmount.toFixed(2)+" €");
            }
        }
		
		
		 $('body').on('click', '.checkout-pop', function(e){
            e.preventDefault();
            e.stopPropagation();

            setTimeout(function(){
                $('body').find('.topMenu-arrow #step4').attr('class', 'active');
                $('#step-4-select').append('<dddd></ddd>');
            }, 1000);
                on_checkout();
        });
    </script>
