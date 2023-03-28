<?php
// Nhập giá trị number bằng phương thức post
// (int)$_POST['number']   -----> convert $_POST['number'] to integer
$number = isset($_POST['number']) ? (int)$_POST['number'] : false;
 
// Kiểm tra number có lớn hơn 0 hay không
// var_dump(!$number)   --> true if $_POST['number'] = 0
// if(!0)  ---> true
// if(!(int)('abc'))  ---> true
if (!$number){
    die ('<h1>Vui lòng nhập một số lớn hơn 0</h1>');
}
  
// Lặp từ 1 tới number để in ra màn hình
for ($i = 1; $i <= $number; $i++){
    echo '<li>Số: ' . $i . '</li>';
}
?>