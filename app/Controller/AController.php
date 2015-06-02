<?php
class AController extends AppController {
var $helpers = array('Html', 'Form','Js');
public $components = array(
'Paginator',
'Session','Cookie','RequestHandler'
);


var $name = 'A';


function webroot_path() {
	$this->loadmodel('info_helper');
	$conditions=array("id" => 1);
	$resultwebroot_path=$this->info_helper->find('all',array('conditions'=>$conditions));
	return $resultwebroot_path[0]['info_helper']['path'];
}

function index(){
	$this->layout='session';
	
	$this->loadmodel('terms_condition');
	$this->set('result_terms_conditions',$this->terms_condition->find('all'));
}

function save_form(){
	$this->layout=null;
	$prepared_for=$_POST["prepared_for"];
	$no_of_guest=$_POST["no_of_guest"];
	$email_contect=$_POST["email_contect"];
	$no_of_room=$_POST["no_of_room"];
	$date=$_POST["date"];
	$trial_duration=$_POST["trial_duration"];
	$prepared_by=$_POST["prepared_by"];
	$travel_date=$_POST["travel_date"];
	$email_address=$_POST["email_address"];
	$booking_status=$_POST["booking_status"];
	$per_adult=$_POST["per_adult"];
	$total=$_POST["total"];
	$summernote1=$_POST["summernote1"];
	$summernote2=$_POST["summernote2"];
	$summernote3=$_POST["summernote3"];
	$itinerary=$_POST["itinerary"];
	$itinerary = json_decode($itinerary);
	$hotel=$_POST["hotel"];
	$hotel = json_decode($hotel);
	
	
	
	$this->loadmodel('tour');
	$this->tour->save(array('prepared_for' => $prepared_for,'no_of_guest' => $no_of_guest,'email_contect' => $email_contect,'no_of_room' => $no_of_room,'date' => $date,'trial_duration' => $trial_duration,'prepared_by' => $prepared_by,'travel_date' => $travel_date,'email_address' => $email_address,'booking_status' => $booking_status,'per_adult' => $per_adult,'total' => $total,'t_c' => $summernote1,'middel' => $summernote2,'last' => $summernote3));
	$LastInsertID=(int)$this->tour->getLastInsertID();
	$r_no=$LastInsertID+1000;
	$this->tour->updateAll(array('reference_number'=>$r_no),array('id'=>$LastInsertID));
	
	$a=0;
	foreach($itinerary as $data){
		$a++;
		$file_name="";
		if(isset($_FILES['file'.$a])){
			$file_name=$_FILES['file'.$a]['name'];
			$file_tmp_name=$_FILES['file'.$a]['tmp_name'];
			$target = "tour/";
			$target=@$target.basename($file_name);
			move_uploaded_file($file_tmp_name,@$target);
		}
		$this->loadmodel('tour_info');
		$this->tour_info->saveAll(array('date_itinary' => $data[0],'arrive' => $data[1],'text1' => $data[2],'text2' => $data[3],'text3' => $data[4],'tour_id' => $LastInsertID,'file' => $file_name));
	}
	$b=0;
	foreach($hotel as $data2){
		$b++;
		$file_name="";
		if(isset($_FILES['hotel_file'.$b])){
			$file_name=$_FILES['hotel_file'.$b]['name'];
			$file_tmp_name=$_FILES['hotel_file'.$b]['tmp_name'];
			$target = "hotel/";
			$target=@$target.basename($file_name);
			move_uploaded_file($file_tmp_name,@$target);
		}
		$this->loadmodel('hotel');
		$this->hotel->saveAll(array('place' => $data2[0],'place_title' => $data2[1],'place_des' => $data2[2],'place_email' => $data2[3],'tour_id' => $LastInsertID,'file' => $file_name));
	}
	echo $LastInsertID;
}

function pdf_test(){
	$this->layout="blank";
	$q=$this->request->query['q'];
	
	$this->loadmodel('tour');
	$conditions=array("id" => $q);
	$result_tour=$this->tour->find('all',array('conditions'=>$conditions));
	$this->set('result_tour',$result_tour);

	$this->set('q',$q);
	
	$this->loadmodel('tour_info');
	$conditions=array("tour_id" => $q);
	$result_tour_info=$this->tour_info->find('all',array('conditions'=>$conditions));
	$this->set('result_tour_info',$result_tour_info);
	
	$this->loadmodel('hotel');
	$conditions=array("tour_id" => $q);
	$result_hotel=$this->hotel->find('all',array('conditions'=>$conditions));
	$this->set('result_hotel',$result_hotel);
	
	
}



function koncierge_billing(){
	$this->layout='session';
	
	
	$this->loadmodel('company');
	$result_company=$this->company->find('all');
	$this->set('result_company',$result_company);
	
	$this->loadmodel('service');
	$result_service=$this->service->find('all');
	$this->set('result_service',$result_service);
	
	$this->loadmodel('car_type');
	$result_car_type=$this->car_type->find('all');
	$this->set('result_car_type',$result_car_type);
}

function koncierge_billing_add_row(){
	$this->layout='blank';
	
	$q=$this->request->query['q'];
	$this->set('q',$q);
	
	$this->loadmodel('service');
	$result_service=$this->service->find('all');
	$this->set('result_service',$result_service);
	
	$this->loadmodel('car_type');
	$result_car_type=$this->car_type->find('all');
	$this->set('result_car_type',$result_car_type);
}

function save_koncierge_billing(){
	$this->layout=null;

	$title=$_POST["title"]; 
	$company=(int)$_POST["company"];
	$first_name=$_POST["first_name"];
	$middle_name=$_POST["middle_name"];
	$last_name=$_POST["last_name"];
	$hotel_name=$_POST["hotel_name"];
	$room_no=(int)$_POST["room_no"];
	$service_from=$_POST["service_from"];
	$service_from=date('Y-m-d', strtotime($service_from));
	$service_to=$_POST["service_to"];
	$service_to=date('Y-m-d', strtotime($service_to));
	$no_of_pax=(int)$_POST["no_of_pax"];
	
	$service_details=$_POST["service_details"];
	
	
	
	
	$toll_tax=(int)$_POST["toll_tax"];
	$parking=(int)$_POST["parking"];
	$driver_allowance=$_POST["driver_allowance"];
	$total=(int)$_POST["total"];
	$service_tax=(int)$_POST["service_tax"];
	$grand_total=(int)$_POST["grand_total"];
	
	$driver_name=$_POST["driver_name"];
	$driver_mobile=$_POST["driver_mobile"];
	
	$current_date=date("Y-m-d");
	$current_time=date('h:i:a',time()); 
	
	
	
	$this->loadmodel('billing');
	$this->billing->saveAll(array('title' => $title,'company_id' => $company,'first_name' => $first_name,'middle_name' => $middle_name,'last_name' => $last_name,'hotel_name' => $hotel_name,'room_no' => $room_no,'service_period_from' => $service_from,'service_period_to' => $service_to,'no_of_pax' => $no_of_pax,'toll_tax' => $toll_tax,'parking' => $parking,'driver_allowance' => $driver_allowance,'total' => $total,'service_tax' => $service_tax,'grand_total' => $grand_total,'driver_name' => $driver_name,'driver_mobile' => $driver_mobile,'current_date' => $current_date,'current_time' => $current_time));
	$LastInsertID=(int)$this->billing->getLastInsertID();
	
	
	$service_details = json_decode($service_details, true);
	foreach($service_details as $child){
		$service_type=(int)$child[0];
		$car_type=(int)$child[1];
		$car_no=$child[2];
		$amount=$child[3];
		
		$this->loadmodel('billing_service');
		$this->billing_service->saveAll(array('service_type' => $service_type,'car_type' => $car_type,'car_no' => $car_no,'amount' => $amount,'billing_id' => $LastInsertID));
	}
	
	echo $LastInsertID;
		
	
}

function koncierge_billing_view($id=null){
	$this->layout='session';
	$this->set('id',$id);
	
	$this->loadmodel('billing');
	$condition=array('id'=>$id);
	$result_billing = $this->billing->find('all',array('conditions'=>$condition));
	$this->set('result_billing',$result_billing);
	
	$this->loadmodel('billing_service');
	$condition=array('billing_id'=>$id);
	$result_service = $this->billing_service->find('all',array('conditions'=>$condition));
	$this->set('result_service',$result_service);
}



function fetch_company_name_via_id($id) 
{
$this->loadmodel('company');
$conditions=array("id" => $id);
$result_com=$this->company->find('all',array('conditions'=>$conditions));
return $result_com[0]["company"]["company_name"];
}

function fetch_service_name_via_id($id) 
{
$this->loadmodel('service');
$conditions=array("id" => $id);
$result_service=$this->service->find('all',array('conditions'=>$conditions));
return $result_service[0]["service"]["name"];
}

function fetch_car_name_via_id($id) 
{
$this->loadmodel('car_type');
$conditions=array("id" => $id);
$result_car_type=$this->car_type->find('all',array('conditions'=>$conditions));
return $result_car_type[0]["car_type"]["name"];
}

}?>