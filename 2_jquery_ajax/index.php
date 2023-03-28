<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
        <script language="javascript">
            function load_ajax(){
                $.ajax({
                    url : "result.php",     // đường dẫn đến file lấy kết quả
                    type : "post",          // một trong hai phương thức POST hoặc GET
                    dataType: "text",       // kiểu dữ liệu trả về, có thể là json, xml, script hoặc text
                    data : {
                         
                    },
                    success : function (result){          // là hàm xử lý kết quả trả về, nó có tham số lưu trữ kết quả trả về đó là result. 
                        $('#result').html(result);        // Như trong ví dụ trên tôi đã xử lý kết quả trả về bằng cách đổ nó vào trong 
                    }                                     // thẻ div#result
                });
            }
        </script>
    </head>
    <body>
        <div>
            <h1>Nội dung ajax sẽ được load ở đây: <span id="result"></span></h1>
        </div>
        <input type="button" name="clickme" id="clickme" onclick="load_ajax()" value="Click Me"/>
    </body>
</html>