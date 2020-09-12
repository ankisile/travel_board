<?php
  session_start();
  header('Content-Type: text/html; charset=utf-8');
  $db = new mysqli("localhost","root","111111","board");
  if($db->connect_error) {
    die('데이터베이스 연결에 문제가 있습니다.\n관리자에게 문의 바랍니다.');
  }
  $db->set_charset("utf8");

  function mq($sql)
  {
    global $db;
    return $db->query($sql);
  }
  $id = $_GET['id'];
  if(!empty($id) && empty($_COOKIE['board_free_' . $bNo])) {
      $sql = 'update board_free set hit = hit + 1 where id = ' . $id;
      $result = $db->query($sql);
      if(empty($result)) {
         ?>
         <script>
            alert('오류가 발생했습니다.');
            history.back();
         </script>
         <?php
      } else {
         setcookie('board' . $id, TRUE, time() + (60 * 60 * 24), '/');
      }
   }

  $sql = 'select title, description, date, hit, writer from board where id = ' . $id;
  $result = $db->query($sql);
  $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <title>자유게시판</title>
  <link rel="stylesheet" href="./css/normalize.css" />
  <link rel="stylesheet" href="./css/board.css" />
</head>
<body>
  <article class="Articleboard">
    <h3>자유게시판 글쓰기</h3>
    <div id="boardView">
      <h3 id="boardTitle"><?php echo $row['title']?></h3>
      <div id="boardInfo">
        <span id="boardID">작성자: <?php echo $row['id']?></span>
        <span id="boardDate">작성일: <?php echo $row['date']?></span>
        <span id="boardHit">조회: <?php echo $row['hit']?></span>
      </div>
      <div id="boardContent"><?php echo $row['description']?></div>
      <div class="btnSet">
            <a href="./write.php?id=<?php echo $id?>">수정</a>
            <a href="./delete.php?id=<?php echo $id?>">삭제</a>
            <a href="./">목록</a>
    </div>
  </article>
</body>
</html>
