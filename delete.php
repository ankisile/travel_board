<?php
//hidden type form 태그의 value값은 id이고 confirm을 이용하여 삭제하도록 만든다.
  session_start();
  $conn=mysqli_connect("localhost", "root", "111111", "board");

  $id=$_GET['id'];
  $sql = "select writer from board where id='$id'";
  $result = mysqli_query($conn,$sql)  or die(mysqli_error($conn));
  $row = mysqli_fetch_array($result);
  $writer = $row['writer'];
  
  if(!isset($_SESSION['user_id'])){
    echo "<script>alert('로그인이 필요합니다');location.href='./login.php';</script>";
  }
  else if($_SESSION['user_id']!=$writer){
    echo "<script>alert('작성자가 다르므로 접근할수 없습니다.');
    history.back();</script>";
  }
  else{

  $sql = "delete from board where id='$id'";

  $result = mysqli_query($conn,$sql)  or die(mysqli_error($conn));

  if($result) {
    ?>
    <script>alert("삭제되었습니다.");
    location.replace("index.php");</script>

<?php }
} ?>
