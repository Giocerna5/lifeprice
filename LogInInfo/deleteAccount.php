<?php
include 'index.html';

?>
<!DOCTYPE html>
<html>
    <head>
        <title>LifePrice</title>
        <style rel="stylesheet" href="../static/stylesLog.css" type="text/css"></style>
    </head>
<body>
    
    <h1>Delete Account</h1>
    <div class="menu">
        <form class="signinArea" action="includesphp/del.php" method="post">
          Username:<input type="text" name="email" placeholder="enter username"/> <br/><br/>
          Password:<input type="password" name="passwordU" placeholder="enter password" /><br/><br/>
          <button class="sub" name="signDel">Delete</button>
        </form>
        
    </div>    
        <style type="text/css">
                .sub{
                    color: #FFF !important;
                    text-transform: uppercase;
                    background: #60a3bc;
                    padding: 20px;
                    border-radius: 50px;
                    display: inline-block;
                    border: none;
                }
                .sub:hover {
                    text-shadow: 0px 0px 6px rgba(255, 255, 255, 1);
                    -webkit-box-shadow: 0px 5px 40px -10px rgba(0, 181, 204, 1);
                    -moz-box-shadow: 0px 5px 40px -10px rgba(0, 181, 204, 1);
                    transition: all 0.4s ease 0s;
                }
        </style>
    </body>
    <script type="text/javascript"></script>
</html>