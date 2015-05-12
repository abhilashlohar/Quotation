<?php 
$webroot_path=$this->requestAction(array('controller' => 'A', 'action' => 'webroot_path'));
?>
<form method="post">
<div style="border: solid 1px #ccc; margin: auto; width: 80%; padding:10px; background-color: #fff;">
	<img src="<?php echo $webroot_path; ?>as/fusion.jpg" />
	<br/>
	<div class="control-group">
		<span style="font-size:15px;COLOR:blue;">Quotation prepared for</span>
		<input type="text" class="span5 m-wrap" name="prepared_for" placeholder="Fusion Tours">
	</div>
	<table width="100%" border="1" BORDERCOLOR="#eee">
		<tr>
			<td width="25%">Reference Number:</td>
			<td width="25%">Auto-fetch</td> 
			<td width="25%">No. of guest:</td>
			<td width="25%"><input type="text" class="span12 m-wrap" name="no_of_guest" placeholder="No. of guest"></td>
		</tr>
		<tr>
			<td width="25%">Email contact: </td>
			<td width="25%"><input type="text" class="span12 m-wrap" name="email_contect" placeholder="Email contact"></td>
			<td width="25%">No. of rooms:</td>
			<td width="25%"><input type="text" class="span12 m-wrap" name="no_of_room" placeholder="No. of rooms"></td>
		</tr>
		<tr>
			<td width="25%">Date: </td>
			<td width="25%"><input type="text" class="span12 m-wrap date-picker" data-date-format="dd-mm-yyyy" name="date" placeholder="Date"></td>
			<td width="25%">Trip Duration:</td>
			<td width="25%"><input type="text" class="span12 m-wrap" name="trial_duration" placeholder="Trip Duration"></td>
		</tr>
		<tr>
			<td width="25%">Prepared by:</td>
			<td width="25%"><input type="text" class="span12 m-wrap" name="prepared_by" placeholder="Prepared by"></td>
			<td width="25%">Intended Travel Date: </td>
			<td width="25%"><input type="text" class="span12 m-wrap" name="travel_date" placeholder="Intended Travel Date"></td>
		</tr>
		<tr>
			<td width="25%">Email address: </td>
			<td width="25%"><input type="text" class="span12 m-wrap" name="email_address" placeholder="Email address"></td>
			<td width="25%">Booking Status: </td>
			<td width="25%"><input type="text" class="span12 m-wrap" name="booking_status" placeholder="Booking Status"></td>
		</tr>
	</table>
	
	<h3>SUGGESTED ITINERARY</h3>
	<div id="url_main">
		<div style="border:solid 1px #ccc;" class="sub">
		<table width="100%">
			<tr>
				<td width="30%"><input type="text" class="span12 m-wrap" name="date_itinary" placeholder="eg. Day 01 : 08 Jun (Mon)"></td>
				<td width="70%"><input type="text" class="span12 m-wrap" name="arrive" placeholder="eg. ARRIVE SINGAPORE"></td>
			</tr>
			<tr>
				<td>
					<div class="controls">
						<div class="fileupload fileupload-new" data-provides="fileupload">
						<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
						<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
						</div>
						<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
						<div>
						<span class="btn btn-file"><span class="fileupload-new">Select image</span>
						<span class="fileupload-exists">Change</span>
						<input type="file" class="default" name="file1"></span>
						<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
						</div>
						</div>
					</div>
				</td>
				<td valign="top">
				<textarea class="span12 m-wrap" name="text1" placeholder="eg. Description"></textarea>
				<br/><input type="text" class="span12 m-wrap" name="text3" placeholder="eg. Meals: Breakfast" value="Meals: ">
				<br/><input type="text" class="span12 m-wrap" name="text2" placeholder="eg. Hotel name" value="Hotel: "></td>
			</tr>
		</table>
		</div>
	</div>
	<a href="#" class="btn blue" id="add_row" role="button"><i class="icon-plus"></i> Add row</a>
	
	
	
	
	<h3>QUOTATION</h3>
	<h4>LAND PRICE PER PERSON:</h4>
	<table width="100%" border="1" BORDERCOLOR="#eee">
		<tr>
			<td width="50%">Per adult</td>
			<td width="50%"><input type="text" class="span12 m-wrap" name="per_adult" placeholder="Amount"></td>
		</tr>
		<tr>
			<td width="50%">TOTAL COST</td>
			<td width="50%"><input type="text" class="span12 m-wrap" name="total" placeholder="Amount"></td>
		</tr>
	</table>
	
	<div class="summernote" id="summernote1"><?php echo $result_terms_conditions[0]["terms_condition"]["code"]; ?> </div>
	<div class="summernote" id="summernote2"><?php echo $result_terms_conditions[1]["terms_condition"]["code"]; ?> </div>
	
	
	
	<h3>HOTEL DESCRIPTIONS</h3>
	<div id="url_main_2">
		<div style="border:solid 1px #ccc;" class="sub_2">
			<input type="text" class="span12 m-wrap" name="place" placeholder="eg. SINGAPORE">
			<table width="100%" border="1" BORDERCOLOR="#eee">
				<tr>
					<td width="50%">
						<div class="controls">
								<div class="fileupload fileupload-new" data-provides="fileupload">
								<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;">
								<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
								</div>
								<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
								<div>
								<span class="btn btn-file"><span class="fileupload-new">Select image</span>
								<span class="fileupload-exists">Change</span>
								<input type="file" class="default" name="hotel_file1"></span>
								<a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a>
								</div>
								</div>
							</div>	
					</td>
					<td width="50%">
					<input type="text" class="span12 m-wrap" name="place_title" placeholder="eg. V Hotel Lavender"><br/>
					<textarea class="span12 m-wrap" name="place_des" placeholder="eg. Description"></textarea><br/>
					<input type="text" class="span12 m-wrap" name="place_email" placeholder="Email">
					</td>
				</tr>
			</table>
		</div>
	</div>
	<a href="#" class="btn blue" id="add_row_2" role="button"><i class="icon-plus"></i> Add row</a>
	
	
	
	<h3>WHY CHOOSE US</h3>
	<div class="summernote" id="summernote3"><?php echo $result_terms_conditions[2]["terms_condition"]["code"]; ?> </div>
	
	<DIV ALIGN="CENTER"><button type="submit" class="btn red form_post" name="submit">GENERATE PDF </button></DIV>
	<div style="display:none;" id="wait">
		<div class="alert alert-block alert-info fade in">
		<h4 class="alert-heading"><img src="/Housingmatters/as/fb_loading.gif">  Info!</h4>
		<p>
		Please wait a while, Pdf is preparing...
		</p>
		</div>
	</div>
</div>
</form>


<script>
$(document).ready(function(){
	 $("#add_row").bind('click',function(){
		var count = $("#url_main div.sub").length;
		count++;
		$("#url_main").append('<div style="border:solid 1px #ccc;overflow:auto;" class="sub" id=sub_div'+count+'><table width="100%"><tr><td width="30%"><input type="text" class="span12 m-wrap" name="date_itinary" placeholder="eg. Day 01 : 08 Jun (Mon)"></td><td width="70%"><input type="text" class="span12 m-wrap" name="arrive" placeholder="eg. ARRIVE SINGAPORE"></td></tr><tr><td><div class="controls"><div class="fileupload fileupload-new" data-provides="fileupload"><div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""></div><div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div><div><span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" class="default" name="file'+count+'"></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a></div></div></div></td><td valign="top"><textarea class="span12 m-wrap" name="text1" placeholder="eg. Description"></textarea><br/><input type="text" class="span12 m-wrap" name="text3" placeholder="eg. Meals: Breakfast" value="Meals: "><br/><input type="text" class="span12 m-wrap" name="text2" placeholder="eg. Hotel name" value="Hotel: "></td></tr></table><a href="#" role="button" id='+count+' class="btn black mini delete pull-right"><i class="icon-remove-sign"></i> Delete row</a></div>');
	 });
	 
	 $("#add_row_2").bind('click',function(){
		var count = $("#url_main_2 div.sub_2").length;
		count++;
		$("#url_main_2").append('<div style="border:solid 1px #ccc;" class="sub_2" id=sub_div2'+count+'><input type="text" class="span12 m-wrap" name="place" placeholder="eg. SINGAPORE">	<table width="100%" border="1" BORDERCOLOR="#eee"><tr><td width="50%"><div class="controls"><div class="fileupload fileupload-new" data-provides="fileupload"><div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt=""></div><div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div><div><span class="btn btn-file"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" class="default" name="hotel_file'+count+'"></span><a href="#" class="btn fileupload-exists" data-dismiss="fileupload">Remove</a></div></div></div></td><td width="50%"><input type="text" class="span12 m-wrap" name="place_title" placeholder="eg. V Hotel Lavender"><br/><textarea class="span12 m-wrap" name="place_des" placeholder="eg. Description"></textarea><br/><input type="text" class="span12 m-wrap" name="place_email" placeholder="Email"></td></tr></table><a href="#" role="button" id='+count+' class="btn black mini delete2 pull-right"><i class="icon-remove-sign"></i> Delete row</a></div>');
	 });
	 
	 $(".delete").live('click',function(){
		var id = $(this).attr("id");
		$('#sub_div'+id).fadeOut(500);
		var delay = 500;
		setTimeout(function() {
			$('#sub_div'+id).remove();
		}, delay);
		
	 });
	 
	 $(".delete2").live('click',function(){
		var id = $(this).attr("id");
		$('#sub_div2'+id).fadeOut(500);
		var delay = 500;
		setTimeout(function() {
			$('#sub_div2'+id).remove();
		}, delay);
		
	 });
	 
	 
});
</script>
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
<link href="<?php echo $webroot_path ; ?>summernote.css" rel="stylesheet">
<script src="<?php echo $webroot_path ; ?>summernote.min.js"></script>

<script>
$(document).ready(function() {
$('.summernote').summernote({
  height: 300,   
});
});
</script>
<script>
$(document).ready(function() {
	$('form').submit( function(ev){
		ev.preventDefault();
		var m_data = new FormData();
		m_data.append('prepared_for',$('input[name=prepared_for]').val());
		m_data.append('no_of_guest',$('input[name=no_of_guest]').val());
		m_data.append('email_contect',$('input[name=email_contect]').val());
		m_data.append('no_of_room',$('input[name=no_of_room]').val());
		m_data.append('date',$('input[name=date]').val());
		m_data.append('trial_duration',$('input[name=trial_duration]').val());
		m_data.append('prepared_by',$('input[name=prepared_by]').val());
		m_data.append('travel_date',$('input[name=travel_date]').val());
		m_data.append('email_address',$('input[name=email_address]').val());
		m_data.append('booking_status',$('input[name=booking_status]').val());
		m_data.append('per_adult',$('input[name=per_adult]').val());
		m_data.append('total',$('input[name=total]').val());
		m_data.append('summernote1',$('#summernote1').code());
		m_data.append('summernote2',$('#summernote2').code());
		m_data.append('summernote3',$('#summernote3').code());
		
		var count = $("#url_main div.sub").length;
		var ar = [];
		for(var i=1;i<=count;i++){
			var q=$("#url_main div.sub:nth-child("+i+") input[name=date_itinary]").val();
			var w=$("#url_main div.sub:nth-child("+i+") input[name=arrive]").val();
			var r=$("#url_main div.sub:nth-child("+i+") textarea[name=text1]").val();
			var t=$("#url_main div.sub:nth-child("+i+") input[name=text2]").val();
			var y=$("#url_main div.sub:nth-child("+i+") input[name=text3]").val();
			m_data.append( 'file'+i, $('input[name=file'+i+']')[0].files[0]);
			ar.push([q,w,r,t,y]);
		}
		var myJsonString = JSON.stringify(ar);
		
		var count2 = $("#url_main_2 div.sub_2").length;
		var ar2 = [];
		for(var c=1;c<=count2;c++){
			var q=$("#url_main_2 div.sub_2:nth-child("+c+") input[name=place]").val();
			var w=$("#url_main_2 div.sub_2:nth-child("+c+") input[name=place_title]").val();
			var r=$("#url_main_2 div.sub_2:nth-child("+c+") textarea[name=place_des]").val();
			var t=$("#url_main_2 div.sub_2:nth-child("+c+") input[name=place_email]").val();
			m_data.append( 'hotel_file'+c, $('input[name=hotel_file'+c+']')[0].files[0]);
			ar2.push([q,w,r,t]);
		}
		var myJsonString2 = JSON.stringify(ar2);
		
		m_data.append( 'itinerary',myJsonString);
		m_data.append( 'hotel',myJsonString2);
		
		//$(".form_post").addClass("disabled");
		$("#wait").show();
		
		$.ajax({
		url: "<?php echo $webroot_path; ?>A/save_form",
		data: m_data,
		processData: false,
		contentType: false,
		type: 'POST',
		}).done(function(response) {
			$("#wait").hide();
			//alert(response);
			window.open("http://52.74.43.53/pdf/pdf_new.php?q="+response);
			//window.location.replace("http://localhost/pdf/pdf.php?q="+response.report);
		});
		
	});
});
</script>