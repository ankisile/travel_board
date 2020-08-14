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
    <!--login안하면 접근 못하게 필요-->

    <form action="write_process.php" method="post">
        <table align="center">
          <tr>
            <td colspan="2"><h1>글쓰기</h1></td>
          </tr>
          <tr>
            <td><h3>제목</h3></td><td><input id="txt" type="text" name="title" size="60"></td>
          </tr>
          <tr>
            <td><h3>내용</h3></td><td><textarea id="desc" name="description" rows="20" cols="100"></textarea></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
              <small>※음란물, 차별, 비하, 혐오 및 초상권, 저작권 침해 게시물은 민, 형사상의 책임을 질 수 있습니다.※</small><br><br>
              <button type="submit">등록</button></td>
          </tr>
      </table>
    </form>
  </body>
</html>
