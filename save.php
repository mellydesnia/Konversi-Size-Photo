<?php
if (isset($_POST['submit']))
{ 
    $nama=$_POST['nama_file'];
    $photo=$_FILES['photo'];
    

    $nama_foto = 'XXX_'.str_replace(" ","",$photo['name']);

    move_uploaded_file($photo['tmp_name'],'aplod/'.$nama_foto);
} 
?>
<html>
<head>
<title>Number Helper</title>
</head>

<body>
    <h1> Konversi File Photo</h1>
<table border="1">
    <tr>
        <td>NAMA FILE</td>
        <td><?php echo $nama ?></td>
    </tr>
    <tr>
        <td>PHOTO</td>
        <td><img src="aplod/<?= $nama_foto?>" width=300 /> </td>
    </tr>
    <tr>
        <td>UKURAN </td>
        <td><?=($photo['size'] / 1024 * 1024  )?> KB</td>
    </tr>
   

   
    
</table>
</body>

<br>
<br>
    <a href="index.php" ><button class="add">Kembali</button></a><br/><br/>
    </br> 
    </br>
   
</html>



