<html>
 <head>
 <title>JOIN</title>
 </head>

 <body>
 <center>
   <p><a href="index.php">HOME</a></p>
 <form action=join_process.php method=post name=frmjoin>
 <table cellpadding=2 cellspacing=2>
   <caption><b> 회 &nbsp;원&nbsp; 가 &nbsp;입</b></caption>
 <tr>
  <td align=center>ID</td>
  <td><input type=text name=user_id maxlength=15></td>
 </tr>
 <tr>
  <td align=center>비밀번호</td>
  <td><input type=password name=user_pw maxlength=20></td>
 </tr>
 <tr>
  <td align=center>비밀번호 확인</td>
  <td><input type=password name=user_pw2 maxlength=20></td>
 </tr>
 <tr>
  <td align=center> E-Mail</td>
  <td><input type="email" name=email maxlength=30></td>
 </tr>
 <tr> <td colspan=2 align=center><input type=submit value="JOIN">&nbsp;&nbsp;
  <input type=reset value="RESET">&nbsp;&nbsp;
  <input type=button value="BACK" onclick="history.back();">
 </td>
 </tr>
 </table>
 </form>
 </body>
</html>
