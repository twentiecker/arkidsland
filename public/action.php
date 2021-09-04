<?php

//action.php

// local connection database
$connect = new PDO("mysql:host=localhost;dbname=arkidsland", "root", "");

// certain server connection database (example)
// $connect = new PDO("mysql:host=sql208.epizy.com;dbname=epiz_29176098_ambulan", "epiz_29176098", "2XKPfcvIvHd");

$received_data = json_decode(file_get_contents("php://input"));
$data = array();
// sortby without any option selected
if($received_data->action == 'sortdata' && $received_data->sortby == null)
{    
 $query = "
 SELECT * FROM tbl_sample 
 ORDER BY id DESC
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}

// sortby an options
if($received_data->action == 'sortdata' && $received_data->sortby != null)
{    
 $query = "
 SELECT * FROM tbl_sample 
 WHERE hobby = '".$received_data->sortby."'
 ORDER BY id DESC
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}

// fetchall action
if($received_data->action == 'fetchall')
{
 $query = "
 SELECT * FROM tbl_sample 
 ORDER BY id DESC
 ";
 $statement = $connect->prepare($query);
 $statement->execute();
 while($row = $statement->fetch(PDO::FETCH_ASSOC))
 {
  $data[] = $row;
 }
 echo json_encode($data);
}

// signup action
if($received_data->action == 'signup')
{
 $data = array(
  ':first' => $received_data->first,
  ':last' => $received_data->last,
  ':email' => $received_data->email,
  ':pass' => $received_data->pass
 );
 
 $query = "
 SELECT * FROM user 
 WHERE email = '".$received_data->email."'
 ";
 $statement = $connect->prepare($query);

 $statement->execute();

 $row_count = $statement->rowCount();
 
 if ($row_count > 0) {
    $output = array(
        'message' => 'Email is already taken'
    );
 } else {
    $query = "
    INSERT INTO user 
    (first, last, email, pass) 
    VALUES (:first, :last, :email, :pass)
    ";
   
    $statement = $connect->prepare($query);
   
    $statement->execute($data);
   
    $output = array(
     'message' => 'Sign up succesfull'
    );
   
 }
 echo json_encode($output);
}

// login action
if($received_data->action == 'login')
{
 $query = "
 SELECT * FROM user 
 WHERE email = '".$received_data->email."'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $row_count = $statement->rowCount();
 
 if ($row_count > 0) {
    $result = $statement->fetchAll();

    foreach($result as $row)
    {
        $data['id'] = $row['id'];
        $data['first'] = $row['first'];
        $data['last'] = $row['last'];
        $data['email'] = $row['email'];
        $data['pass'] = $row['pass'];
    }
    
    if ($received_data->pass == $data['pass']) {
        $output = array(
            'user' => $data
        );
        echo json_encode($output);
    } else {
        $output = array(
            'message' => 'Password incorrect'
        );    
        echo json_encode($output);
    }
 } else {
    $output = array(
        'message' => 'Email is not found'
    );    
    echo json_encode($output);
 }
}

// fetchSingle action
if($received_data->action == 'fetchSingle')
{
 $query = "
 SELECT * FROM tbl_sample 
 WHERE id = '".$received_data->id."'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $result = $statement->fetchAll();

 foreach($result as $row)
 {
  $data['id'] = $row['id'];
  $data['first_name'] = $row['first_name'];
  $data['last_name'] = $row['last_name'];
  $data['gender'] = $row['gender'];
  $data['hobby'] = $row['hobby'];
 }

 echo json_encode($data);
}

// update action
if($received_data->action == 'update')
{
 $data = array(
  ':first_name' => $received_data->firstName,
  ':last_name' => $received_data->lastName,
  ':gender' => $received_data->gender,
  ':hobby' => $received_data->hobby,
  ':id'   => $received_data->hiddenId
 );

 $query = "
 UPDATE tbl_sample 
 SET first_name = :first_name, 
 last_name = :last_name,
 gender = :gender,  
 hobby = :hobby  
 WHERE id = :id
 ";

 $statement = $connect->prepare($query);

 $statement->execute($data);

 $output = array(
  'message' => 'Data Updated'
 );

 echo json_encode($output);
}

// delete action
if($received_data->action == 'delete')
{
 $query = "
 DELETE FROM tbl_sample 
 WHERE id = '".$received_data->id."'
 ";

 $statement = $connect->prepare($query);

 $statement->execute();

 $output = array(
  'message' => 'Data Deleted'
 );

 echo json_encode($output);
}

?>