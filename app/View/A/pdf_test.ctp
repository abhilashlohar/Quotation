<?php 
App::import('Vendor','xtcpdf');  
$tcpdf = new XTCPDF(); 
$textfont = 'freesans'; // looks better, finer, and more condensed than 'dejavusans' 

$tcpdf->SetAuthor("KBS Homes & Properties at http://kbs-properties.com"); 
$tcpdf->SetAutoPageBreak( true ); 
//$tcpdf->setHeaderFont(array($textfont,'',40)); 
$tcpdf->xheadercolor = array(255,255,255); 
$tcpdf->xheadertext = ''; 
$tcpdf->xfootertext = 'Fusion Tours'; 

// add a page (required with recent versions of tcpdf) 
$tcpdf->AddPage(); 

// Now you position and print your page content 
// example:  
$tcpdf->SetTextColor(0, 0, 0); 
$tcpdf->SetFont($textfont,'N',12); 


$img_file = APP . 'webroot/as/fb.jpg';
$TCPDF->Image($img_file, 0, 0, 225, 305, '', '', '', false, 300, '', false, false, 0);
		
$toolcopy = '<table>';
$toolcopy .= '<tr><td><h1>LOGO</h1> </td><td align="right">FB</td></tr>';
$toolcopy .= '</table>';

$toolcopy .= '<div><span style="color:rgb(86, 86, 86);">Quotation prepared for</span><span style="color:rgb(242, 141, 42);"> <b>Fusion Tours</b></span></div>';

$toolcopy .= '<table border="1" cellpadding="5">';
$no_of_guest=$result_tour[0]["tour"]["no_of_guest"];
$email_contect=$result_tour[0]["tour"]["email_contect"];
$no_of_room=$result_tour[0]["tour"]["no_of_room"];
$date=$result_tour[0]["tour"]["date"];
$trial_duration=$result_tour[0]["tour"]["trial_duration"];
$prepared_by=$result_tour[0]["tour"]["prepared_by"];
$travel_date=$result_tour[0]["tour"]["travel_date"];
$email_address=$result_tour[0]["tour"]["email_address"];
$booking_status=$result_tour[0]["tour"]["booking_status"];
$per_adult=$result_tour[0]["tour"]["per_adult"];
$total=$result_tour[0]["tour"]["total"];
$t_c=$result_tour[0]["tour"]["t_c"];
$last=$result_tour[0]["tour"]["last"];
$toolcopy .= '<tr><td>Reference Number: </td><td>4234</td><td>No. of guest: </td><td>'.$no_of_guest.'</td></tr>';
$toolcopy .= '<tr><td>Email contact: </td><td>'.$email_contect.'</td><td>No. of rooms: </td><td>'.$no_of_room.'</td></tr>';
$toolcopy .= '<tr><td>Date: </td><td>'.$date.'</td><td>Trip Duration: </td><td>'.$trial_duration.'</td></tr>';
$toolcopy .= '<tr><td>Prepared by: </td><td>'.$prepared_by.'</td><td>Intended Travel Date: </td><td>'.$travel_date.'</td></tr>';
$toolcopy .= '<tr><td>Email address: </td><td>'.$email_address.'</td><td>Booking Status: </td><td>'.$booking_status.'</td></tr>';

$toolcopy .= '</table>';

$tcpdf->writeHTML($toolcopy);
$tcpdf->addpage();


$i=0;
foreach($result_tour_info as $data) {
$i++;
	$date_itinary=$data["tour_info"]["date_itinary"];
	$arrive=$data["tour_info"]["arrive"];
	$text1=$data["tour_info"]["text1"];
	$text2=$data["tour_info"]["text2"];
$toolcopy2 = '<table border="0" cellpadding="2">';
$toolcopy2 .= '<tr><td><div style="background-color:orange;color:White;padding:5px;">'.$date_itinary.'</div></td><td><div style="background-color:orange;color:White;padding:2px;">'.$arrive.'</div></td></tr>';
$toolcopy2 .= '<tr><td><div>image<br/>image<br/>image<br/>image<br/>image<br/>image<br/>image<br/>image<br/></div></td><td><div style="border-bottom:solid 1px orange;">'.$text1.'</div><b style="color:rgb(213, 211, 209);">'.$text2.'</b></td></tr>';
$toolcopy2 .= '</table>';
$toolcopy2 .= '<div style="height:10px;"></div>';
$tcpdf->writeHTML($toolcopy2);
if($i==4 or $i==8 or $i==12){
	$tcpdf->addpage();
}
}

$tcpdf->addpage();

$toolcopy3 = '<div style="color:blue;">LAND PRICE PER PERSON:</div>';
$toolcopy3 .= '<table border="1" cellpadding="2">';
$toolcopy3 .= '<tr><td style="color:blue;">Per adult</td><td>'.$per_adult.'</td></tr>';
$toolcopy3 .= '<tr style="background-color:orange;color:white;"><td>TOTAL COST </td><td>'.$total.'</td></tr>';
$toolcopy3 .= '</table>';
$tcpdf->writeHTML($toolcopy3);

$tcpdf->writeHTML($t_c);

$tcpdf->addpage();


$i=0;
foreach($result_hotel as $data2) {
$i++;
	$place=$data2["hotel"]["place"];
	$place_title=$data2["hotel"]["place_title"];
	$place_des=$data2["hotel"]["place_des"];
	$place_email=$data2["hotel"]["place_email"];
$toolcopy2 = '<div style="background-color:orange;color:White;padding:5px;" align="center">'.$place.'</div>';
$toolcopy2 .= '<table border="0" cellpadding="2">';
$toolcopy2 .= '<tr><td><div>image<br/>image<br/>image<br/>image<br/>image<br/>image<br/>image<br/>image<br/></div></td><td><div style="color:blue;">'.$place_title.'</div><b style="color:#000;">'.$place_des.'</b><br/><b style="color:blue;">'.$place_email.'</b></td></tr>';
$toolcopy2 .= '</table>';
$toolcopy2 .= '<div style="height:10px;"></div>';
$tcpdf->writeHTML($toolcopy2);
if($i==4 or $i==8 or $i==12){
	$tcpdf->addpage();
}
}

$tcpdf->addpage();
$tcpdf->writeHTML($last);



// ... 
// etc. 
// see the TCPDF examples  

echo $tcpdf->Output('filename.pdf', 'D'); 

?>