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

function upload_img($img_name, $img_src_id, $label)
{
    $conn = connect();
    $sql = "INSERT INTO images(img_name,img_src_id,label)VALUES('$img_name','$img_src_id','$label')";
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
       if($row['role'] == 'U'){
           header('location: user-views/dash.php');
       }else{
            header('location: admin-views/dash.php');
       }
       
    }else{
        die("ERROR ". $conn->error);
    }
}





#------------- user function
function send_parcel($name,$address,$contact,$sender_id){
    $conn = connect();
    $sql = "INSERT INTO parcels(fullname,address,contact,sender_id)VALUES('$name','$address','$contact','$sender_id')";
    $result = $conn->query($sql);

    if($result){
        header('location: parcel-status.php');
    }else{
        die('ERROR: '. $conn->error);
    }

}


?>