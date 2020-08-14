<?php
  $conn=mysqli_connect("localhost", "root", "111111", "board");

  $title=$_POST['title'];
  $description = $_POST['description'];
  $writer = 'user'; //user의 id를 어떻게 연관시켜야 될지 감이 안와서 일단 이렇게 함

  $sql = "
  INSERT INTO board
  (title, description, created, writer)
  VALUES(
    '{$title}','{$description}',NOW(),'{$writer}'
    )";

  $result = mysqli_query($conn,$sql);
  if($result===false || !$title){
    echo '<script>alert("저장하는 과정에서 문제가 생겼습니다. 이전 페이지로 돌아갑니다.");
    history.back();</script>';
  }
  else{
    echo '<script>alert("저장이 완료되었습니다.");
    location.replace("./index.php");</script>'; //location.replace 쓴 이유
  }
?>
