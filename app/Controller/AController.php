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

}?>