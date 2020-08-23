<?php
  session_start();

 ?>
<!DOCTYPE html>
<html>
    <head>
        <tiltle>페이지이름</title>
        <meta charset="utf-8">
        <style>
            h1{
                border-bottom:1px solid black;
                margin:0;
                padding:20px;
            }
            ol{
                border-right:1px solid black;
                width:100px;
                margin:0;
                padding:20px;
            }
        </style>
    </head>

    <body>
        <h1>웹페이지이름</h1>
        <?php if(isset($_SESSION['user_id'])){ ?>
        <form action="logout_process.php" method="post">
          <input type="submit" value="logout">
        </form>

        <?php }
        else{?>
          룰루
        <?php } ?>

        <div>
            <ol>
                <li><a href="menu1.html" class="menus">1. MENU1</a></li>
                <li><a href="menu2.html" class="menus">2. MENU2</a></li>
             </ol>
            <div>
                <p>메인페이지</p>
                <img src="">
            </div>
        </div>
    </body>
</html>
