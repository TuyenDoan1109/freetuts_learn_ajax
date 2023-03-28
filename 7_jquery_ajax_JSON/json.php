<?php 
    // Connect Database
    $conn = mysqli_connect('localhost', 'root', '', 'test_1') or die('Can not connect to mysql');
    
    // Get List Member
    $query = mysqli_query($conn, 'select * from member');
    
    // Biến result
    // $result = array();
    $result = [];
    
    if(mysqli_num_rows($query) > 0) {
        while($row = mysqli_fetch_assoc($query)) {
            $result[] = [
                'username' => $row['username'],
                'email' => $row['email']
            ];
        }
    }

    // echo json_encode($result);
    die(json_encode($result));
?>