<div style="width:96%;border:solid 1px #ccc;margin: auto;background-color: #fff;">
	<div style="overflow:auto;">
		<div class="pull-left"><h3>KONCIERGE SOLUTIONS</h3></div>
		<div class="pull-right">
			<b>Koncierge Solutions</b><br>
			<span style="color:blue;">www.konciergesolutions.com</span><br>
			<span>Bill No. : 15/0001</span><br>
			<span>Date : 30-05-2015</span>
		</div>
	</div>
	<hr>
	<?php foreach($result_billing as $data){
		$title=$data["billing"]["title"];
		$company_id=$data["billing"]["company_id"];
		$first_name=$data["billing"]["first_name"];
		$middle_name=$data["billing"]["middle_name"];
		$last_name=$data["billing"]["last_name"];
		$hotel_name=$data["billing"]["hotel_name"];
		$room_no=$data["billing"]["room_no"];
		$service_period_from=$data["billing"]["service_period_from"];
		$service_period_to=$data["billing"]["service_period_to"];
		$no_of_pax=$data["billing"]["no_of_pax"];
	} ?>
	
	<table width="100%" border="0">
		<tr>
			<td><?php echo $title; ?></td>
		</tr>
		<tr>
			<td><?php echo $company_id; ?></td>
		</tr>
		<tr>
			<td width="10%">Guest Name: </td>
			<td width="50%" colspan="3">
			<?php echo $first_name.' '.$middle_name.' '.$last_name; ?>
			</td>
		</tr>
		
		<tr>
			<td>Hotel Name </td>
			<td><?php echo $hotel_name; ?></td>
			<td>Room No. :</td>
			<td><?php echo $room_no; ?></td>
		</tr>
		
		<tr>
			<td>Service Period </td>
			<td colspan="3">
			<?php echo $service_period_from; ?>-
			<?php echo $service_period_to; ?>
			</td>
		</tr>
		<tr>
			<td>No. of Pax</td>
			<td colspan="3">
			<?php echo $no_of_pax; ?>
			</td>
		</tr>
	</table>
	
</div>