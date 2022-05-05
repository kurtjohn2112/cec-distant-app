<?php 

include 'connection.php';

#---- general queries

#_______________________ dynamic queries

function show($table_name)
{
    $conn = connect();
    $sql = "SELECT  * FROM $table_name ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row  = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return FALSE;
    }
}
function destroy($id, $pk, $table_name)
{
    $conn = connect();
    $sql = "DELETE FROM $table_name WHERE $pk = '$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
}
function show_data($table_name, $pk, $id)
{
    $conn = connect();
    $sql = "SELECT * FROM $table_name WHERE $pk = '$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        return $result->fetch_assoc();
    }
}

function upload_img($img_name,$id)
{
    $conn = connect();
    $sql = "UPDATE users SET img = '$img_name' WHERE id ='$id'";
    $result = $conn->query($sql);

    if ($result == TRUE) {
        return 1;
    } else {
        die('ERROR: ' . $conn->error);
    }
}

function show_uploaded_images($id, $label)
{
    $conn = connect();
    $sql = "SELECT * FROM images WHERE img_src_id = '$id' AND label  = '$label'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row  = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return FALSE;
    }
}

function show_data_multiple($table_name, $pk, $id)
{
    $conn = connect();
    $sql = "SELECT * FROM $table_name WHERE $pk = '$id'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row  = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return FALSE;
    }
}

#----------general function

function register($fname,$address,$email,$password,$contact){
    $conn = connect();
    $sql = "INSERT INTO users(fullname,address,email,password,contact)VALUES('$fname','$address','$email','$password','$contact')";
    $result = $conn->query($sql);

    if($result){
        login($email,$password);
    }else{
        die("ERROR ". $conn->error);
    }

}
function add_user_admin($fname,$address,$email,$password,$contact){
    $conn = connect();
    $sql = "INSERT INTO users(fullname,address,email,password,contact)VALUES('$fname','$address','$email','$password','$contact')";
    $result = $conn->query($sql);

    if($result){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>User added successfully</strong> 
              </div>';
        
      
       
        
    }else{
        die("ERROR ". $conn->error);
    }

}
function add_driver_admin($fname,$address,$contact,$email){
    $conn = connect();
    $sql = "INSERT INTO drivers(fullname,address,contact,email)VALUES('$fname','$address','$contact','$email')";
    $result = $conn->query($sql);

    if($result){
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <strong>Driver added successfully</strong> 
              </div>';
        
      
       
        
    }else{
        die("ERROR ". $conn->error);
    }

}
function login($email,$password){
    $conn = connect();
    $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    if($result->num_rows == 1){
       $row = $result->fetch_assoc();
       $_SESSION['fullname'] = $row['fullname'];
       $_SESSION['id'] = $row['id'];
       $_SESSION['address'] = $row['address'];
       $_SESSION['contact'] = $row['contact'];
       $_SESSION['img'] = $row['img'];
       if($row['role'] == 'U'){
           header('location: user-views/dash.php');
       }else{
            header('location: admin-views/admin-dashboard.php');
       }
       
    }else{
        die("ERROR ". $conn->error);
    }
}





#------------- user function
function send_parcel($name,$address,$contact,$sender_id,$weight,$rate,$track_id){
    $conn = connect();
    $sql = "INSERT INTO parcels(fullname,address,contact,sender_id,weight,rate,tracking_id)VALUES('$name','$address','$contact','$sender_id','$weight','$rate','$track_id')";
    $result = $conn->query($sql);

    if($result){
        header('location: parcel-status.php');
    }else{
        die('ERROR: '. $conn->error);
    }

}
function admin_update_parcel($pickup,$driver,$est,$status,$parcel_id,$location){
    $conn = connect();
    $sql = "UPDATE parcels SET pick_up ='$pickup', driver = '$driver', est = '$est', status = '$status', parcel_location = '$location' WHERE id = '$parcel_id'";
    $result = $conn->query($sql);

    if($result){
       header('location: manage-load-entry.php ');
    }else{
        die('ERROR: '. $conn->error);
    }

}

function get_load(){
    $conn = connect();
    $sql = "SELECT * FROM parcels WHERE status = 'on the way' OR status = 'to be picked up' OR status = 'delivered'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $rows = array();
        while ($row  = $result->fetch_assoc()) {
            $rows[] = $row;
        }
        return $rows;
    } else {
        return FALSE;
    }
}

function weight($weight){

    if($weight > 0 AND $weight < 10 ){
        return 250;
    }elseif($weight > 11 AND $weight <= 20 ){
        return 500;
    }elseif($weight > 20 AND $weight <= 30 ){
        return 750;
    }elseif($weight > 30 AND $weight <= 40 ){
        return 1000;
    }else{
        return 0;
    }
    
}

?>
