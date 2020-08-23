<?php
  //보안 필요!
  session_start();
  $conn=mysqli_connect("localhost", "root", "111111", "board");

  $title=$_POST['title'];
  $description = $_POST['description'];
  $writer = $_SESSION['user_id'];

  $sql = "
  INSERT INTO board
  (title, description, created, writer, hit)
  VALUES(
    '{$title}','{$description}',NOW(),'{$writer}',0
    )";

  $result = mysqli_query($conn,$sql);

  if($result===false){ //title이 없을 경우 저장하는 과정에서 문제 생김 나오게 만들기
    echo '<script>alert("저장하는 과정에서 문제가 생겼습니다. 이전 페이지로 돌아갑니다.");
    history.back();</script>';
  }
  else{
    echo '<script>alert("저장이 완료되었습니다.");
    location.replace("./index.php");</script>'; //location.replace 쓴 이유
    //index.php로 이동하지 말고 그 작성한 페이지로 이동하는 방법을 생각해보자
  }
?>
