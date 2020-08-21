<?php
  //보안 필요!!
  $conn=mysqli_connect("localhost", "root", "111111", "board");

  //폼의 name이 어떻게 되는지에 따라 바뀌어야 됨. 수정 필요!!
  $user_id=$_POST['user_id'];
  $user_pw = password_hash($_POST['user_pw'], PASSWORD_DEFAULT);
  $email = $_POST['email'];

  $id_check = "select * from member where id='$user_id'";
  $result = mysqli_query($conn,$id_check);
  $row = mysqli_fetch_array($result);
  if($row>0){ //user_id와 중복되는 것이 있다면 row의 개수는 1보다 클거임
    echo "<script>alert('아이디가 중복됩니다. 다른 아이디를 입력하세요');history.back();</script>"
  }
  else{
    $sql = "
    INSERT INTO member
    (user_id, user_pw, email)
    VALUES(
      '{$user_id}','{$user_pw}','{$email}',
      )";

    $result = mysqli_query($conn,$sql);

    if($result === TRUE){
      echo "<script>alert('회원가입 되었습니다.');
      location.replace('./index.php');</script>"
      //login페이지로 이동하도록 만들자
      //<meta http-equiv="refresh" content="20 ; http://tistory.com"> 이걸 사용해볼지 고민
    }
    else{
      echo "<script>alert('오류발생');</script>"
    }
  }

 ?>
