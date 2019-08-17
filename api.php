<?php
// connectiontodatabase
$conn = new mysqli("localhost", "root", "", "guestbook");
 
// checkconnection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$out = array('error' => false);

$req = 'read';


if(isset($_GET['req'])){
	$req = $_GET['req'];
}
// read/fetching

if($req == 'read'){
	$sql = "select * from visitors";
	$query = $conn->query($sql);
	$guests = array();

	while($row = $query->fetch_array()){
		array_push($guests, $row);
	}

	$out['guests'] = $guests;
}

if($req == 'create'){

	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$comment = $_POST['comment'];

	$sql = "insert into visitors (name, phone, email, address, comment) values ('$name', '$phone', '$email', '$address', '$comment')";
	$query = $conn->query($sql);

	if($query){
		$out['message'] = "Guest Added Successfully";
	}
	else{
		$out['error'] = true;
		$out['message'] = "Could not add Guest";
	}
	
}

if($req == 'update'){

	$id = $_POST['id'];
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$comment = $_POST['comment'];

	$sql = "update visitors set name='$name', phone='$phone',
	 email='$email', address='$address', comment='$comment' where id='$id'";
	$query = $conn->query($sql);

	if($query){
		$out['message'] = "Guest Information Update Successfull";
	}
	else{
		$out['error'] = true;
		$out['message'] = "Could not update Guest Information";
	}
	
}



if($req == 'delete'){

	$id = $_POST['id'];

	$sql = "delete from visitors where id='$id'";
	$query = $conn->query($sql);

	if($query){
		$out['message'] = "Guest Deleted Successfully";
	}
	else{
		$out['error'] = true;
		$out['message'] = "Could not delete Guest";
	}
	
}


$conn->close();

header("Content-type: application/json");
echo json_encode($out);
die();


?>