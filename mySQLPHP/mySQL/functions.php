<?php 
include "db.php";

function showAllData(){
    global $connection;
//Pairnoyme plhrofories apo ta queries xwris ayta den mporoyme na exoyme prosvash sthn vash
$query = "SELECT * FROM users";
$result = mysqli_query($connection , $query);
if (!$result){
    die("Query failed" . mysqli_error($connection));
}

while($row = mysqli_fetch_assoc($result)){
    $id = $row['id'];
   echo "<option value='$id'>$id</option>";
} 
}

function updateUsers(){
    if(isset($_POST['update'])){
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username',";
    $query .= "password = '$password'";
    $query .= "WHERE id = $id"; 

    $result = mysqli_query($connection,$query);
    if(!$result){
        die("Query Failed". mysqli_error($connection));
    }else {
        echo "User updated";
    }
}
}


function createUsers(){
    if (isset($_POST['create'])) {
    global $connection;

    $username = $_POST['username'];
    $password = $_POST['password'];


$query = "INSERT INTO users(username,password)";
$query .= "VALUES ('$username' , '$password') ";

$result = mysqli_query($connection , $query);

if (!$result){
    die("Query failed" . mysqli_error($connection));
}else {
    echo "'$username' created";
}
}
}


function readAllData(){
    global $connection;
//Pairnoyme plhrofories apo ta queries xwris ayta den mporoyme na exoyme prosvash sthn vash
$query = "SELECT * FROM users";
$result = mysqli_query($connection , $query);
if (!$result){
    die("Query failed" . mysqli_error($connection));
}

while($row = mysqli_fetch_assoc($result)){
   

    
        print_r($row);

} 
}

function deleteUsers(){
    if(isset($_POST['delete'])){
    global $connection;

    $id = $_POST['id'];
    

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id";
    

    $result = mysqli_query($connection,$query);

    if(!$result){
        die("Query Failed". mysqli_error($connection));
    }else {
        echo "$id Deleted";
    }
}
}