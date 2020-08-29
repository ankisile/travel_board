<?php
  session_start();
  $conn=mysqli_connect("localhost", "root", "111111", "board");

  $id=$_POST['id'];
  $title=$_POST['title'];
  $description = $_POST['description'];

  $sql = "
  UPDATE board SET title='{$title}', description='{$description}', created= NOW() where id='$id'";

  $result = mysqli_query($conn,$sql)  or die(mysqli_error($conn));

  if($result) {
    ?>
    <script>alert("수정되었습니다.");
    location.replace("./view?id=<?=$id?>");</script>

<?php } ?>
