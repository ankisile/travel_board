<html>
 <head>
 <title>JOIN</title>
 </head>

 <body>
 <center>
 <form action=join_process.php method=post name=frmjoin>
 <table cellpadding=2 cellspacing=2>
 <tr>
  <td colspan=2 align=center><b> 회 &nbsp;원&nbsp; 가 &nbsp;입</td></b>
 </tr>
 <tr>
  <td align=center>ID</td>
  <td><input type=text name=userid maxlength=15></td>
 </tr>
 <tr> 
  <td align=center>비밀번호</td>
  <td><input type=password name=userpw maxlength=20></td>
 </tr>
 <tr>
  <td align=center>비밀번호 확인</td>
  <td><input type=password name=userpw2 maxlength=20></td>
 </tr>
 <tr>
  <td align=center> E-Mail</td>
  <td><input type=text name=usermail maxlength=30></td>
 </tr>
 <tr> <td colspan=2 align=center><input type=submit value="JOIN">&nbsp;&nbsp;
  <input type=reset value="RESET">&nbsp;&nbsp;
  <input type=button value="BACK" onclick="history.back();">/////////
 </td>
 </tr>
 </table>
 </form>
 </body>
</html>
