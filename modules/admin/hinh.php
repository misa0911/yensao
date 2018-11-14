<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hình</title>
</head>
<body>
    <div class="admin-hinh">
        <div class="hinh-header">
            <h1>Hình</h1>
        </div>
       <form action="admin.php?page=hinh" method = "post">
            Thêm hình
            <div class="hinh-body">
                    <table>
                        <tr>
                            <input type="file" name="hinh"></td>
                        </tr>
                        <tr>
                            <td>Tên hình</td>
                            <td><input type="text" name="ten"></td>
                        </tr>
                        <tr colspan="2">
                        <td>  <input type="submit" name="add" value="add"></td>
                        </tr>
                    
                    </table>
                </div>
       </form>

        <hr>
       <form action="admin.php?page=hinh" method = "post">
       update hình
        <div class="hinh-body">
                <table>
                    <tr>
                        <input type="file" name="hinh"></td>
                    </tr>
                    <tr>
                        <td>Tên hình</td>
                        <td><input type="text" name="ten"></td>
                    </tr>
                    <tr colspan="2">
                    <td>  <input type="submit" name="update" value="update"></td>
                    </tr>
                
                </table>
            </div>
       </form>



        <div class="hinh-show">
            <table border="1">
                <tr> 
                    <td>Hình</td>
                    <td>Mã hình</td>                  
                    <td>Tên hình</td>
                </tr>
                <tr>
                    <td>PHP here</td>
                    <td>PHP here</td>
                    <td>PHP here</td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>