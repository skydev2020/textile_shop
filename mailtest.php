<?php

	
	
	$status_receive_bank = 'Maloniai pranešame, kad Jūsų užsakymas priimtas ir bus vykdomas tik po apmokėjimo.<br/>
					Apmokėti sąskaitą galite per 2 d.d. nuo užsakymo pateikimo dienos.<br/>
					Svarbu – mokėjimo paskirtyje būtinai nurodykite užsakymo numerį.<br/><br/>

					Apmokėti užsakymą galite šiais rekvizitais:<br/>
					UAB ,,Solemlux“<br/>
					Įmonės kodas – 3018443597<br/>
					PVM mok. Kodas LT100004937718<br/>
					Smiltynų kel. 3, Smiltynų I km. Kauno raj. LT-54400<br/>
					UAN ,,Paysera LT“, kodas 35000<br/>
					Atsiskaitomoji sąskaita: LT3500 0100 0103 8346<br/>
					Bendra užsakymo suma: X eur<br/>
					Užsakymo numeris: #XXX';
					
	$status_receive = 'Maloniai pranešame, kad Jūsų užsakymas - priimtas ir yra apdorojamas.<br/> Sekančiu laišku, informuosime Jus apie užsakymo patvirtinimą arba atšaukimą.';
	$status_cancel = 'Informuojame , kad Jūsų užsakymas  : #XXX – atšauktas.';
	$status_confirm = 'Maloniai pranešame, kad Jūsų užsakymas patvirtintas ir yra gaminamas.';
	$status_shipped_courier = 'Maloniai pranešame, kad Jūsų užsakymas #XXX pagamintas ir yra perduotas kurjerių tarnybai. <br/>Dėl pristatymo  laiko kurjeris susisieks su Jumis  asmeniškai, paskambinęs Jūsų nurodytu telefono numeriu.';
	$status_shipped = 'Maloniai pranešame, kad Jūsų užsakymas #XXX pagamintas ir yra pristatytas į mūsų saloną.<br/> Jūsų pasirinktas $SHIPPING_NAME Salono darbo laiką rasite pateiktoje nuorodoje laiško apačioje.';
		
		
		
	
	$shipping[11] = 'Pristatymas kurjeriu, nurodytu adresu';
	$shipping[12] = 'Atsiėmimas Kaune (PC Ermitažas Raudondvario pl. 131)';
	$shipping[13] = 'Atsiėmimas Vilniuje (P. Lukšio g. 34 PC„Banginis“)';
	$shipping[14] = 'Atsiėmimas Alytuje (Jazminų g. 3 (Jazminų Turgus))';
	$shipping[15] = 'Atsiėmimas Alytuje (Prekybos centras „Senukai“ Statybininkų g. 71A / Likiškėlių g. 72)';
	
	
		

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }  
        $sql1="SELECT * FROM `reseller_product_details` where 1 = 1 And  rpd_order_d =".$order_id;

        $sql2="SELECT * FROM `reseller_user_details` where  1 = 1 And   rud_id =".$order_id;
		
		$coupon = '';
		
		
		if($result2=mysqli_query($conn,$sql2)){
			$row2=mysqli_fetch_assoc($result2);
			
			$shipping_name = $shipping[$row2['rud_shipping_method']];
			
			
			if($result1=mysqli_query($conn,$sql1)){
				$qty = 0;
				$total = 0;
				while ($prod = mysqli_fetch_object($result1)) {
					//print_r($prod);
					$qty += $prod->rpd_quantity;
					$total += $prod->rpd_quantity * $prod->rpd_priceValue;
				}
				
				if($cstatus == 'receive_bank'){
					$status = str_replace('XXX',$row2['rud_id'],$status_receive_bank);
					$status = str_replace('X eur',$total.' eur',$status);
				}
				
				if($cstatus == 'receive'){
					$status = $status_receive;
				}
				if($cstatus == 'cancel'){
					$status = str_replace('XXX',$row2['rud_id'],$status_cancel);
				}
				if($cstatus == 'confirm'){
					$status = $status_confirm;
				}

				if($cstatus == 'shipped'){
					if($row2['rud_shipping_method'] == 11){
						$status = str_replace('XXX',$row2['rud_id'],$status_shipped_courier);
					}else{
						$status = str_replace('XXX',$row2['rud_id'],$status_shipped);
						$status = str_replace('$SHIPPING_NAME',$shipping_name,$status);
					}
				}
				
				
echo '<meta http-equiv="content-type" content="text/html;charset=UTF-8"><meta charset="utf-8">';
			 
			 
$body = '<div style="width:750px;font-size:20px;margin:auto;text-align:left;background-image: url(https://www.solemlux.lt/eshopdev/mbg.jpg);">
				<img src="https://www.solemlux.lt/eshopdev/mlogo.jpg" style="width:500px;"/>
				
				<div class="date" style="padding:3px 10px;margin:5px 0;">Visi langų uždengimai neišeinant iš namų!</div>
				<br/>

				<div class="date" style="padding:3px 10px;margin:5px 0;">'.date('Y.m.d',time()).' '.date('H:i',time()).'</div>
				
				<div class="name" style="font-size:30px;padding:3px 10px;margin:5px 0;">Sveiki, '.$row2['rud_first_name'].', '.$row2['rud_last_name'].'</div>

				<div class="date" style="padding:3px 10px;margin:5px 0; font-style: italic;">Prašome išsaugoti šį laišką, nes tai - atlikto užsakymo patvirtinimas.</div>
				
				<div class="orderid" style="font-size:30px;padding:3px 10px;margin:5px 0;"><b>Unikalus užsakymo numeris:</b> <span style="font-size:34px;font-weight:bold;color:#ff2424;">#'.$row2['rud_id'].'</span></div>
				
				<div class="orderstatus" style="font-size:26px;padding:3px 10px;margin:5px 0;">'.$status.'</div>
				
				<div class="orderinfo">					
					<table style="width: 100%; background:#e6e7e8; font-size:26px; padding:3px 10px;">
						<tr>
							<td style="font-weight:bold;">Užsakymo informacija:</td>
						</tr>	
						<tr>
							<td>Jūsų užsakymo numeris: #<span style="font-weight: bold;">'.$row2['rud_id'].'</span></td>
						</tr>
						<tr>
							<td>Prekių kiekis: <span style="font-weight: bold;">'.$qty.'</span></td>
						</tr>
						<tr>
							<td>Prekių vertė: <span style="font-weight: bold;">'.$total.' eur</span></td>
						</tr>
						<tr>
							<td>Panaudotas nuolaidos kuponas ir nuolaida: <span style="font-weight: bold;">'.$coupon.'</span></td>
						</tr>
						<tr>
							<td>Pasirinktas pristatymo būdas:</td>
						</tr>
						<tr>
							<td style="font-weight:bold;">Pasirinktas pristatymo būdas: '.$shipping_name.'</td>
						<tr/>
					</table>
				</div><br/>';
				
					$p = 0;
					if($result1=mysqli_query($conn,$sql1)){
						while ($prod = mysqli_fetch_object($result1)) {
							$p++;
							
							$pn = explode('</h3>',$prod->rpd_table);
							$product_name = strip_tags($pn[0]);

							$body .= '<div class="orderinfo" >

								<table style="width:100%; background:#e6e7e8;margin:2px 0;font-size:26px;padding:3px 10px;">
								<tr>
									<td style="vertical-align: top; width: 20%; font-size:26px;">Gaminys '.$p.':</td>
									<td style="vertical-align: top;font-size:26px; font-weight:bold;">
							
								'.$product_name.'<br/>
								size - '.$prod->rpd_width.'x'.$prod->rpd_height.' mm<br/>
								color_mech - '.$prod->rpd_color_mech.'<br/>
								
							
								</td></tr>
							</table>
							<br/>
							</div>';

						}
					}
					

				
				$body .= '<br/><div style="font-size:26px;padding:3px 10px;">
							Jeigu turite klausimų ar pastabų, maloniai prašome susisiekite su mumis tel. +370 600 00400  arba el.paštu: info@solemlux.lt.<br/><br/>
							Svarbu: prieš atsiimant gaminį, patikrinkite, ar pakuotė ir produktai nėra pažeisti !<br/><br/>
							Svarbu: norėdami atšaukti užsakymą, informuokite mus el.paštu: <a href="mailto:info@solemlux.lt">info@solemlux.lt</a>, per 6 valandas nuo užsakymo patvirtinimo.<br/><br/>
							<br/>
							<b>Salonų darbo laikas:</b><br/>
							https://www.solemlux.lt/kontaktai-2/<br/>
							<br/>
							<b>Pristatymo ir grąžinimo sąlygos:</b><br/>
							https://www.solemlux.lt/eshop/pristatymo-ir-grazinimo-salygos<br/>
							<br/><br/>
							

							AČIŪ, KAD RENKATĖS MUS! Lauksime Jūsų sugrįžtant  <b>solemlux.lt/eshop/</b><br/><br/>
							
							<div class="productinfo" style="background:#ff2424;margin:1px 0;padding:2px 0;"></div><br/>
							Su mumis galite susiekti darbo dienomis nuo 8:00 iki 17:00 val. +370 600 00400, info@solemlux.lt
						</div>
				
				
				
				
			</div>';
//echo $body;



			}
		}


//die();


//$email = $row2['rud_email'];
// $email = 'rokas@debian.lt';



$headers = 'From: info@solemlux.lt' . "\r\n" .
    'MIME-Version: 1.0' . "\r\n" .
    'Content-Type:text/html;charset=utf-8' . "\r\n" .
    'Reply-To: info@solemlux.lt' . "\r\n";


// if cstatus = "receive", send mail to client again
$subject="";
if ($cstatus == "receive_bank"){
	$subject = 'Užskymas priimtas - laukiama apmokėjimo';
}
else if ($cstatus == "receive") {
	$subject = 'Užsakymas priimtas';	
}
else if ($cstatus == "cancel") {
	$subject = 'Užsakymas atšauktas';	
}
else if ($cstatus == "confirm") {
	$subject = 'žsakymas patvirtintas';	
}
else if ($cstatus == "shipped") {
	$subject = 'Užsakymas perduotas kurjeriui';//else: Užsakymas paruoštas atsiėmimui parduotuvėje
}

if ($cstatus=="receive" || $cstatus=="receive_bank") {
	


	$subject = 'Nauja kainos užklausa '.$order_id;
	
	if (mail($to_email,$subject,$body,$headers)) {
		echo 'Order Received Mail sent successfully';
	} 	
	else {
		echo 'Order Received Mail failure';
	}
	

}
else {
	$email = 'skyteam2019@outlook.com, rokas@debian.lt';
	$subject = 'Order status changed';
	
	if (mail($email,$subject,$body,$headers)) echo 'Mail sent successfully';
	else               echo 'Mail failure';
}

echo "Please wait for debugging, check you email";
	die();
