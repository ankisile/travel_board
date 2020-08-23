<?php
  //보안 필요!!
  $conn=mysqli_connect("localhost", "root", "111111", "board");

  $user_id=$_POST['user_id'];
  if($_POST['user_pw']!=$_POST['user_pw2']){
    echo "<script>alert('비밀번호가 다릅니다. 다시 입력해주세요');
    history.back();</script>";
  }
  else{
    $user_pw = password_hash($_POST['user_pw'], PASSWORD_DEFAULT);
  }
  $email = $_POST['email'];

  $id_check = "select * from member where user_id='$user_id'";
  $result = mysqli_query($conn,$id_check) or die(mysqli_error($conn));
  $row = mysqli_fetch_array($result);
  if($row>0){ //user_id와 중복되는 것이 있다면 row의 개수는 1보다 클거임
    echo "<script>alert('아이디가 중복됩니다. 다른 아이디를 입력하세요');history.back();</script>";
  }
  else{
    $sql = "insert into member(user_id, user_pw, email) values('{$user_id}','{$user_pw}','{$email}')";

    $join = mysqli_query($conn, $sql) or die(mysqli_error($conn));

    if($join === TRUE){
      echo "<script>alert('회원가입 되었습니다.');
      location.replace('./login.php');</script>"; //login페이지로 이동
    }
  }

 ?>
