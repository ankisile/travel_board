<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>후기게시판 글쓰기</title>
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
    <form action="write_process.php" method="post">
        <table align="center">
          ??
          <tr>
            <td><h3>제목</h3></td><td><input id="txt" type="text" name="title" size="60" placeholder="제목을 입력하세요."></td>
          </tr>
          <tr>
            <td><h3>내용</h3></td><td><textarea id="desc" name="description" rows="20" cols="100"></textarea></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><button type="submit">등록</button></td>
          </tr>
      </table>
    </form>
  </body>
</html>
