<?php
//로그인 했을때만 작성하도록 코드작성
  session_start();
  $conn=mysqli_connect("localhost", "root", "111111", "board");

  $id=$_GET['id'];
  $sql = "select title, description, created, writer from board where id='$id'";
  $result = mysqli_query($conn,$sql)  or die(mysqli_error($conn));
  $row = mysqli_fetch_array($result);
  $writer = $row['writer'];
  if(!isset($_SESSION['user_id'])){
    echo "<script>alert('로그인이 필요합니다');location.href='./login.php';</script>";
  }
  else if($_SESSION['user_id']!=$writer){
    echo "<script>alert('작성자가 다르므로 접근할수 없습니다.');history.back();</script>";
  }
  else{
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>후기게시판 글수정</title>
    <style>
      table{
        border-spacing: 10px;
      }
      #txt{
        height: 20pt;
      }
    </style>
  </head>

  <body>
    <form action="update_process.php" method="post">
        <table align="center">
          <tr>
            <td colspan="2"><h1>글수정</h1></td>
          </tr>
          <tr>
            <td><h3>제목</h3></td><td><input id="txt" type="text" name="title" value="<?=$row['title']?>" size="60"></td>
          </tr>
          <tr>
            <td><h3>내용</h3></td><td><textarea id="desc" name="description" rows="20" cols="100"><?=$row['description']?></textarea></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <small>※음란물, 차별, 비하, 혐오 및 초상권, 저작권 침해 게시물은 민, 형사상의 책임을 질 수 있습니다.※</small><br><br>
              <input type="hidden" name="id" value="<?=$id?>">
              <input type=button value="취소" onclick="location.href='index.php'">&nbsp;&nbsp;
              <button type="submit">등록</button></td>
          </tr>
      </table>
    </form>
  </body>
</html>
<?php } ?>
