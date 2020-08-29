<?php
//hidden type form 태그의 value값은 id이고 confirm을 이용하여 삭제하도록 만든다.
  session_start();
  $conn=mysqli_connect("localhost", "root", "111111", "board");

  $id=$_POST['id'];

  $sql = "delete from board where id='$id'";

  $result = mysqli_query($conn,$sql)  or die(mysqli_error($conn));

  if($result) {
    ?>
    <script>alert("삭제되었습니다.");
    location.replace("index.php");</script>

<?php } ?>
 ?>
