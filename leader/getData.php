<?php
$servername = "localhost:3306";
$username = "com12310";
$password = "5x5pz9_Y";
$db = "com12310_Songkhla";
// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$conn->set_charset("utf8");

$requestData= $_REQUEST;
 
//ฟิลด์ที่จะเอามาแสดงและค้นหา
$columns = array( 
// datatable column index  => database column name
	0 =>'score', 
	1 => 'name',
	2=> 'phone',
	3=> 'save'
);

$search = "";
if( !empty($requestData['search']['value']) ) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
	$search.=" AND ( ";
	$i = 0;
	foreach($columns as $columnname)
	{
		$search.= $i==0 ? "" : " OR ";
		$search.= $columnname." LIKE '%".$requestData['search']['value']."%' ";
		$i++;
	}
	$search.=")";
}
// getting total number records without any search
$query = "SELECT COUNT(DISTINCT name) AS scores  ";
$query.=" FROM scores WHERE 1=1".$search;

$getRes = $conn->query($query);
$row = $getRes->fetch_assoc();
$totalData = $row['scores'];
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.
 
$query = "SELECT ".implode(",",$columns);
$query.=" FROM scores WHERE 1=1 ".$search;
$query.=" ORDER BY ". $columns[$requestData['order'][0]['column']]." ".$requestData['order'][0]['dir']."  
		LIMIT ".$requestData['start'].",".$requestData['length']." ";
$getRes = $conn->query($query);
 
$data = array();
while($row = $getRes->fetch_assoc())
{
	$nestedData=array(); 
	foreach($columns as $columnname)
	{
		$nestedData[] = $row[$columnname];
	}	
	$data[] = $nestedData;
}
 
 
 
$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);
 
echo json_encode($json_data);  // send data as json format

?>