<div style="width:96%;border:solid 1px #ccc;margin: auto;background-color: #fff;padding:10px;">
	<div style="overflow:auto;">
		<div class="pull-left"><h3>KONCIERGE SOLUTIONS</h3></div>
		<div class="pull-right">
			<b>Koncierge Solutions</b><br>
			<span style="color:blue;">www.konciergesolutions.com</span><br>
			<span>Bill No. : 15/00<?php echo $id; ?></span><br>
			<span>Date : 30-05-2015</span>
		</div>
	</div>
	<hr>
	<?php foreach($result_billing as $data){
		$title=$data["billing"]["title"];
		$company_id=$data["billing"]["company_id"];
		$company_name=$this->requestAction(array('controller' => 'A', 'action' => 'fetch_company_name_via_id'), array('pass' => array($company_id)));
		$first_name=$data["billing"]["first_name"];
		$middle_name=$data["billing"]["middle_name"];
		$last_name=$data["billing"]["last_name"];
		$hotel_name=$data["billing"]["hotel_name"];
		$room_no=$data["billing"]["room_no"];
		$service_period_from=$data["billing"]["service_period_from"];
		$service_period_from=date('d-m-Y',strtotime($service_period_from));
		$service_period_to=$data["billing"]["service_period_to"];
		$service_period_to=date('d-m-Y',strtotime($service_period_to));
		$no_of_pax=$data["billing"]["no_of_pax"];
		$toll_tax=$data["billing"]["toll_tax"];
		$parking=$data["billing"]["parking"];
		$driver_allowance=$data["billing"]["driver_allowance"];
		$driver_name=$data["billing"]["driver_name"];
		$driver_mobile=$data["billing"]["driver_mobile"];
		$total=$data["billing"]["total"];
		$service_tax=$data["billing"]["service_tax"];
		$grand_total=$data["billing"]["grand_total"];
	} ?>
	
	<table width="100%" border="0">
		<tr>
			<td colspan="4"><h4><?php echo $title; ?></h4></td>
		</tr>
		<tr>
			<td colspan="4"><span style="font-weight: 600;"><?php echo $company_name; ?></span></td>
		</tr>
		<tr>
			<td width="10%">Guest Name: </td>
			<td width="50%" colspan="3">
			<span style="font-weight: 600;"><?php echo $first_name.' '.$middle_name.' '.$last_name; ?></span>
			</td>
		</tr>
		<tr>
			<td>Hotel Name : </td>
			<td width="20%"><span style="font-weight: 600;"><?php echo $hotel_name; ?></span></td>
			<td width="10%">Room No. :</td>
			<td><span style="font-weight: 600;"><?php echo $room_no; ?></span></td>
		</tr>
		
		<tr>
			<td>Service Period </td>
			<td colspan="3">
			<?php echo $service_period_from; ?> - 
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
	
	
	
	<br/>
	<div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Sr. No.</th>
					<th>Service</th>
					<th>Car Type</th>
					<th>Car No.</th>
					<th>Amount</th>
				</tr>
			</thead>
			<tbody>
			<?php
				$q=0;
				foreach($result_service as $service) {
				$q++;
				$service_type=$service["billing_service"]["service_type"];
				$service_name=$this->requestAction(array('controller' => 'A', 'action' => 'fetch_service_name_via_id'), array('pass' => array($service_type)));
				$car_type=$service["billing_service"]["car_type"];
				$car_name=$this->requestAction(array('controller' => 'A', 'action' => 'fetch_car_name_via_id'), array('pass' => array($car_type)));
				$car_no=$service["billing_service"]["car_no"];
				$amount=$service["billing_service"]["amount"];
			?>
				<tr>
					<td><?php echo $q; ?></td>
					<td><?php echo $service_name; ?></td>
					<td><?php echo $car_name; ?></td>
					<td><?php echo $car_no; ?></td>
					<td><?php echo $amount; ?></td>
				</tr>
			<?php } ?>
				<tr>
					<td colspan="4" style=" text-align: right; ">Toll Tax</td>
					<td><?php echo $toll_tax; ?></td>
				</tr>
				<tr>
					<td colspan="4" style=" text-align: right; ">Parking</td>
					<td><?php echo $parking; ?></td>
				</tr>
				<tr>
					<td colspan="4" style=" text-align: right; ">Driver Allowance</td>
					<td><?php echo $driver_allowance; ?></td>
				</tr>
				<tr>
					<td colspan="4" style=" text-align: right; ">Total</td>
					<td><?php echo $total; ?></td>
				</tr>
				<tr>
					<td colspan="4" style=" text-align: right; ">Service Tax @ 5.6%</td>
					<td><?php echo $service_tax; ?></td>
				</tr>
				<tr>
					<td colspan="4" style=" text-align: right; "><b>Grand Total</b></td>
					<td><?php echo $grand_total; ?></td>
				</tr>
			</tbody>
		</table>
	</div>
	
	
	<br/>
	<div>
	Driver Details<br/>
	<table border="0" width="100%">
		<tr>
			<td width="8%">Name : </td>
			<td width="35%"><?php echo $driver_name; ?></td>
			<td width="8%">Mobile : </td>
			<td><?php echo $driver_mobile; ?></td>
		</tr>
	</table>
	</div>
	
	
</div>