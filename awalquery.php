<?php
include ('header.php');
?>
<html>
<title>Form Upload</title>
<body>
<form enctype="multipart/form-data" method="post" action="querytf2.php">
    <div class="input-group">
      <input type="text" class="form-control" size="30" placeholder="Cari Kata" required name="katakunci" id="kata">
      <div class="input-group-btn">
        <button type="submit" class="btn btn-danger" name="submit" value="submit">Cari</button>
      </div>
    </div>
  </form>
<?php
include ('footer.php');
?>