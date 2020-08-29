<html>
 <head>
  <title>LOGIN</title>
  <style>
  fieldset{
    text-align: center;
  }
  </style>
 </head>
 <body align="center">
   <p><a href="index.php">HOME</a></p>
   <center>
    <fieldset id="login_box" style="width:250px;">
            <legend>LOGIN</legend>
                <form method='post' action='login_process.php'>
                    <p>id : <input name='id' type='text' placeholder="Enter Your Email"></p>
                    <p>pw : <input name='pw' type='password' placeholder="Enter Your Password"> </p>
       <tr>
            <td colspan=2 align=center>
                         <input type='submit' value="LOGIN">
                         <input type='reset' value='RESET'>
                         <input type=button value="JOIN" onclick="location.href='join.php'">
                       </td>
                    </tr>
                </form>
    </center>
  </div>
 </body>
</html>
