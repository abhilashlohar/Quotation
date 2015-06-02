<tr>
		<td width="5%" ><?php echo $q; ?></td>
		<td width="25%">
			<select class="span12 m-wrap text_box" name="service_type"  data-placeholder="Choose a Category" tabindex="1" sr_id="<?php echo $q; ?>">
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