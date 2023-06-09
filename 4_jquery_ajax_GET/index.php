<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
        <script language="javascript">
            // function load_ajax() {
            //     $.ajax({
            //         url : "result.php",                 // gửi ajax đến file result.php
            //         type : "get",                       // chọn phương thức gửi là get
            //         dateType: "text",                   // dữ liệu trả về dạng text
            //         data : {                            // Danh sách các thuộc tính sẽ gửi đi
            //             number : $('#number').val()
            //         },
            //         success : function (result){
            //             // Sau khi gửi và kết quả trả về thành công thì gán nội dung trả về
            //             // đó vào thẻ div có id = result
            //             $('#result').html(result);
            //         }
            //     });
            // } 

            // function load_ajax() {
            //     // URL
            //     var url = "result.php";
            
            //     // Data
            //     var data = {
            //         number : $('#number').val()
            //     };
            
            //     // Success Function
            //     var success = function (result){
            //         $('#result').html(result);
            //     };
            
            //     // Result Type
            //     var dataType = 'text';
            
            //     // Send Ajax
            //     $.get(url, data, success, dataType);
            // }

            function load_ajax() {
                // URL có kèm tham số number
                var url = "result.php?number=" + $('#number').val();
            
                // Data lúc này cho bằng rỗng
                var data = {};
            
                // Success Function
                var success = function(result) {
                    $('#result').html(result);
                };
            
                // Result Type
                var dataType = 'text';
            
                // Send Ajax
                $.get(url, data, success, dataType);
            }
     
        </script>
    </head>
    <body>
        <div id="result">
            Nội dung ajax sẽ được load ở đây
        </div>
        <br/>
        <input type="text" value="" id="number"/>
        <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
    </body>
</html>
