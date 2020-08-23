<?php
 //로그인은 세션 이용
  session_start();
  $conn=mysqli_connect("localhost", "root", "111111", "board");

  $id=$_POST['id'];
  $pw=$_POST['pw'];

  $sql = "select * from member where user_id='$id'";
  $result = mysqli_query($conn,$sql)  or die(mysqli_error($conn));
  $member = mysqli_fetch_array($result);
  if($member>0){//중복되는 것이 있으면 이것은 id가 있다는 것
    $hash_pw=$member['user_pw'];
    if(password_verify($pw,$hash_pw)){
      $_SESSION['user_id']=$id;
      $_SESSION['user_pw']=$pw;
      echo "<script>alert('로그인되었습니다.');
      location.replace('./index.php');</script>";
    }
    else{
      echo "<script>alert('아이디 혹은 비밀번호를 확인하세요');
      history.back();</script>";
    }
  }else{
    echo "<script>alert('아이디 혹은 비밀번호를 확인하세요');
    history.back();</script>";
  }

 ?>
