<html>
<head>
    <h1 class="awal">Silahkan Masukan Data dan File Photo </h1>
    <title> Koversi File Photo</title>
    
</head>
<body>
    <form action = "save.php" method = "POST" name = "postform" enctype="multipart/form-data">
    <table weidh = "50%" border = "0";>
        <tr>
            <th> Nama File </th>
            <td><input type = "text" name = "nama_file" sizee = "30"/></td>
        </tr>
        <tr>
            <th class="top"> Photo </th>
            <td><input type = "file" name = "photo" size = "30"/></td>
        </tr>
       
        <tr>
            <th><input type = "submit" name = "submit" value = "Submit"/></th>
            <td><a href = " viewdata.php"></a></td>
        </tr>
    </table>
    </form> 
</body>
</html>