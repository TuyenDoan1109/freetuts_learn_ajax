<?php
    // Thiết lập font chữ UTF8 để khỏi bị lỗi font
    //header('Content-Type: text/html; charset=utf-8');
    
    // Kết nối database
    $conn = mysqli_connect('localhost', 'root', '', 'test_1') or die('Can not connect to mysql');
    
    // Lấy danh sách thành viên
    $query = mysqli_query($conn, 'select * from member');

    // print_r($query);
    // var_dump($query);
    
    // Kiểm tra có dữ liệu không
    if (mysqli_num_rows($query) > 0)
    {
        echo '<table border="1" cellspacing="0" cellpadding="10">';
        echo '<tr>';
        echo '<td>';
            echo '<b>Username</b>';
        echo '</td>';
        echo '<td>';
                echo '<b>Email</b>';
        echo '</td>';
        echo '<tr>';
        
        // Lặp danh sách và hiển thị dạng table
        while($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
            echo '<tr>';
                echo '<td>';
                    echo $row['username'];
                echo '</td>';
                echo '<td>';
                    echo $row['email'];
                echo '</td>';
            echo '<tr>';
        }
        echo '</table>';
    }
?>