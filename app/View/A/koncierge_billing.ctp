<?php 
$webroot_path=$this->requestAction(array('controller' => 'A', 'action' => 'webroot_path'));
?>
<style>
.text_box{
	border: none !important;
	border-bottom: solid 1px #ccc !important;
}
</style>
<div style="width:96%;border:solid 1px #ccc;margin: auto;background-color: #fff;">
<form method="post" style="margin:0;">
<div style="padding: 5px;">
	<div style="overflow:auto;">
		<div class="pull-left"><h3>KONCIERGE SOLUTIONS</h3></div>
		<div class="pull-right">
			<b>Koncierge Solutions</b><br/>
			<span style="color:blue;">www.konciergesolutions.com</span><br/>
			<span>Bill No. : 15/0001</span><br/>
			<span>Date : <?php echo date("d-m-Y"); ?></span>
		</div>
	</div>
	<hr>
	<table width="100%" border="0">
		<tr>
			<td>Title</td>
			<td colspan="3"><input type="text" placeholder="Title" class="m-wrap span3 text_box" name="title"></td>
		</tr>
		<tr>
			<td>Company</td>
			<td colspan="3">
			<select class="span3 m-wrap text_box" name="company" data-placeholder="Choose a Category" tabindex="1">
				<option value="">Select Company</option>
				<?php foreach($result_company as $data){ 
					$company_id=$data["company"]["id"];
					$company_name=$data["company"]["company_name"];  ?>
					<option value="<?php echo $company_id; ?>"><?php echo $company_name; ?></option>
				<?php } ?>
			</select>
			</td>
		</tr>
		<tr>
			<td width="10%">Guest Name </td>
			<td width="50%" colspan="3">
			<input type="text" placeholder="First Name" class="m-wrap span2 text_box" name="first_name">-
			<input type="text" placeholder="Middle Name" class="m-wrap span2 text_box" name="middle_name">-
			<input type="text" placeholder="Last Name" class="m-wrap span2 text_box" name="last_name">
			</td>
		</tr>
		
		<tr>
			<td>Hotel Name </td>
			<td><input type="text" placeholder="Hotel Name" name="hotel_name" class="m-wrap span5 text_box"></td>
			<td>Room No. :</td>
			<td><input type="text" placeholder="Room No." name="room_no" class="m-wrap span5 text_box"></td>
		</tr>
		
		<tr>
			<td>Service Period   </td>
			<td colspan="3">
			<input type="text" placeholder="Service From" name="service_from" class="m-wrap span2 text_box date-picker" data-date-format="dd-mm-yyyy">-
			<input type="text" placeholder="Service To" name="service_to" class="m-wrap span2 text_box date-picker" data-date-format="dd-mm-yyyy">
			</td>
		</tr>
		<tr>
			<td>No. of Pax</td>
			<td colspan="3">
			<input type="text" placeholder="No. of Pax" name="no_of_pax" class="m-wrap span3 text_box">
			</td>
		</tr>
	</table>
	
	
<a href="#" class="btn red mini pull-right add_row" role="button">Add Row</a>
<table width="100%" class="table table-striped table-hover">
<thead>
	<tr>
		<th width="5%" >Sr. No.</th>
		<th width="25%">Service</th>
		<th width="25%">Car Type</th>
		<th width="25%">Car No.</th>
		<th width="20%" >Amount</th>
	</tr>
</thead>
</table>
<table width="100%" class="table table-bordered" id="service_tbl">
	<tr>
		<td width="5%" >1</td>
		<td width="25%">
			<select class="span12 m-wrap text_box" name="service_type" data-placeholder="Choose a Category" tabindex="1" sr_id="1">
				<option value="">Service</option>
				<?php foreach($result_service as $data2){ 
					$id=$data2["service"]["id"];
					$Service_name=$data2["service"]["name"];
					$Service_amount=$data2["service"]["amount"]; ?>
					<option value="<?php echo $id; ?>" s_amount="<?php echo $Service_amount; ?>"><?php echo $Service_name; ?></option>
				<?php } ?>
			</select>
		</td>
		<td width="25%">
			<select class="span12 m-wrap text_box" name="car_type" data-placeholder="Choose a Category" tabindex="1">
				<option value="">Car</option>
				<?php foreach($result_car_type as $data3){ 
					$id=$data3["car_type"]["id"];
					$car_type_name=$data3["car_type"]["name"];  ?>
					<option value="<?php echo $id; ?>"><?php echo $car_type_name; ?></option>
				<?php } ?>
			</select>
		</td>
		<td width="25%"><input type="text" placeholder="Car No." name="car_no" class="m-wrap span12 text_box"></td>
		<td width="20%" ><input type="text" placeholder="Amount" name="amount" readonly class="m-wrap span12 text_box"></td>
	</tr>
</table>
<table width="100%" border="0">
	<tr>
		<td width="75%" style=" text-align: right; ">Toll Tax</td>
		<td width="25%"><input type="text" placeholder="Toll Tax" name="toll_tax" class="m-wrap span12 text_box"></td>
	</tr>
	<tr>
		<td width="75%" style=" text-align: right; ">Parking</td>
		<td width="25%"><input type="text" placeholder="Parking" name="parking" class="m-wrap span12 text_box"></td>
	</tr>
	<tr>
		<td width="80%" style=" text-align: right; ">Driver Allowance</td>
		<td width="20%"><input type="text" placeholder="Driver Allowance" name="driver_allowance" class="m-wrap span12 text_box"></td>
	</tr>
	<tr>
		<td width="80%" style=" text-align: right; ">Total</td>
		<td width="20%"><input type="text" placeholder="Total" readonly name="total" class="m-wrap span12 text_box"></td>
	</tr>
	<tr>
		<td width="80%" style=" text-align: right; ">Service Tax @ 5.6%</td>
		<td width="20%"><input type="text" placeholder="Service Tax" readonly name="service_tax" class="m-wrap span12 text_box"></td>
	</tr>
	<tr>
		<td width="80%" style=" text-align: right; "><b>Grand Total</b></td>
		<td width="20%"><input type="text" placeholder="Grand Total" readonly name="grand_total" class="m-wrap span12 text_box"></td>
	</tr>
</table>

Driver Details
<table width="100%" border="0">
	<tr>
		<td width="5%">Name</td>
		<td width="45%"><input type="text" placeholder="Driver Name" name="driver_name" class="m-wrap span4 text_box"></td>
		<td width="5%">Mobile</td>
		<td width="45%"><input type="text" placeholder="Driver Mobile" name="driver_mobile" class="m-wrap span4 text_box"></td>
	</tr>
</table>	



<div style="padding: 13px; background-color: #F0EFEF; text-align: center;">
<button type="submit" class="btn blue">Submit</button>
</div>
<div id="wait" style="display:none;" align="center">Please Wait...</div>
</form>

</div>
</div>


<script>
$(document).ready(function() {
	$('form').submit( function(ev){
		ev.preventDefault();
		$("#wait").show();
		var m_data = new FormData();
		m_data.append('title',$('input[name=title]').val());
		m_data.append('company',$('select[name=company]').val());
		m_data.append('first_name',$('input[name=first_name]').val());
		m_data.append('middle_name',$('input[name=middle_name]').val());
		m_data.append('last_name',$('input[name=last_name]').val());
		m_data.append('hotel_name',$('input[name=hotel_name]').val());
		m_data.append('room_no',$('input[name=room_no]').val());
		m_data.append('service_from',$('input[name=service_from]').val());
		m_data.append('service_to',$('input[name=service_to]').val());
		m_data.append('no_of_pax',$('input[name=no_of_pax]').val());
		
		var count = $("#service_tbl tr").length;
		var ar = [];
		for(var i=1;i<=count;i++)
		{
			var n=$("#service_tbl tr:nth-child("+i+") select[name=service_type]").val();
			var w=$("#service_tbl tr:nth-child("+i+") select[name=car_type]").val();
			var f=$("#service_tbl tr:nth-child("+i+") input[name=car_no]").val();
			var e=$("#service_tbl tr:nth-child("+i+") input[name=amount]").val();
		
			ar.push([n,w,f,e]);
		}
		var myJsonString = JSON.stringify(ar);
		
		
		m_data.append('service_details',myJsonString);
		
		m_data.append('toll_tax',$('input[name=toll_tax]').val());
		m_data.append('parking',$('input[name=parking]').val());
		m_data.append('driver_allowance',$('input[name=driver_allowance]').val());
		m_data.append('total',$('input[name=total]').val());
		m_data.append('service_tax',$('input[name=service_tax]').val());
		m_data.append('grand_total',$('input[name=grand_total]').val());
		
		m_data.append('driver_name',$('input[name=driver_name]').val());
		m_data.append('driver_mobile',$('input[name=driver_mobile]').val());
		
		$.ajax({
			url: "<?php echo $webroot_path; ?>A/save_koncierge_billing",
			data: m_data,
			processData: false,
			contentType: false,
			type: 'POST',
		}).done(function(response) {
			$("#wait").html(response);
			$("#wait").show();
			window.open("koncierge_billing_view/"+response);
		});
		
	});
	
	
	
	
	$(".add_row").bind('click',function(){
		$(this).text('adding...');
		var count = $("#service_tbl tr").length;
		count++;
		
		$.ajax({
			url: "koncierge_billing_add_row?q="+count,
		}).done(function(response) {
			$('#service_tbl').append(response);
			$(".add_row").text('Add Row');
		});
		
	 });
	 
	 
	 $("select[name=service_type]").live('change',function(){
		var a=$('option:selected', this).attr('s_amount');
		var c=$(this).attr('sr_id');
		$("#service_tbl tr:nth-child("+c+") td:nth-child(5) input").val(a);
	 });
	 
	 $("input[name=toll_tax],input[name=parking],input[name=driver_allowance]").live('keyup',function(){
		calculate();
	 });
	 $("select[name=service_type]").live('change',function(){
		calculate();
	 });
	 
	 
	 
	 function calculate(){
	 var count = $("#service_tbl tr").length;
		var total_sm=0;
		for(var i=1;i<=count;i++)
		{
			var am=$("#service_tbl tr:nth-child("+i+") input[name=amount]").val();
			if(am!=""){
			total_sm=eval(total_sm)+eval(am);
			}
		}
		var toll_tax=$("input[name=toll_tax]").val();
		if(toll_tax!=""){
		total_sm=eval(total_sm)+eval(toll_tax);
		}
		
		
		var parking=$("input[name=parking]").val();
		if(parking!=""){
		total_sm=eval(total_sm)+eval(parking);
		}
		
		
		var driver_allowance=$("input[name=driver_allowance]").val();
		if(driver_allowance!=""){
		total_sm=eval(total_sm)+eval(driver_allowance);
		}
		
		$("input[name=total]").val(total_sm);
		
		var service_tax=(total_sm*5.6)/100;
		var service_tax = Math.round(service_tax).toFixed(2);
		$("input[name=service_tax]").val(service_tax);
		
		
		var g_total=eval(service_tax)+eval(total_sm);
		$("input[name=grand_total]").val(g_total);
	 }
});
</script>