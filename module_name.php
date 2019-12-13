 <?php 
	if (strpos($key['imgsrc'], 'horizontalios-zaliuzes') !== false)
	{
		$module_name = "horizontalios-zaliuzes";
		
	}
	else
	if (strpos($key['imgsrc'], 'tinkleliai-remeliai') !== false)
	{
		$module_name = "tinkleliai-remeliai";
		
	}
	else
	if (strpos($key['imgsrc'], 'roletai-plastikiniams-langams') !== false)
	{
		$module_name = "roletai-plastikiniams-langams";
		
	}
	else
	if (strpos($key['imgsrc'], 'plisuotos-zaliuzes') !== false)
	{
		$module_name = "plisuotos-zaliuzes";
		
	}
	else
	if (strpos($key['imgsrc'], 'roletai-diena-naktis') !== false)
	{
		$module_name = "roletai-diena-naktis";
		
	}
	else
	if (strpos($key['imgsrc'], 'tinkleliai-durims') !== false)
	{
		$module_name = "tinkleliai-durims";
		
	}
	else
	if (strpos($key['imgsrc'], 'tinkleliai-roletai') !== false)
	{
		$module_name = "tinkleliai-roletai";
		
	}
	
	
	
	?>
        <?= $key['table']; ?>
             
        <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:-5px;position: absolute; margin-bottom: 5px;">
        	<tr>
            <td class="module_name_order">
                <a href="javascript:;" onclick="edit_order(event, <?php echo $key['item_id'];?>, '<?php echo $module_name;?>')" style="text-transform:uppercase; color:#737070; margin-right:15px; text-decoration:none; font-size:13px;">
              <img src="../roletai-plastikiniams-langams/upload/edit.png">
                	<span>KOREGUOTI užsakymą</span>
            	</a>
                 <a href="javascript:;" onclick="remove_cart(<?php echo $key['item_id'];?>, '<?php echo $module_name;?>')" style=" text-decoration:none; text-transform:uppercase; color:#737070; font-size:13px;">
                 	<img src="../roletai-plastikiniams-langams/upload/delete.png">
                 	<span>IŠTRINTI užsakymą</span>
             	</a>
            </td>
            </tr>
        </table>     