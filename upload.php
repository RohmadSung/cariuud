<?php
include ('header.php');
?>
<html>
<title>Form Upload</title>
<body>
<form enctype="multipart/form-data" method="POST" action="hasil_upload.php">
<strong>File yang di upload : </strong><br>
<input type="file" name="fupload"><br>
<strong>Deskripsi File : </strong><br>
<textarea name="deskripsi" rows="5" cols="40"></textarea><br>
<input type=submit value=Upload>
</form>
<?php
include ('footer.php');
?>