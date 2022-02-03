<?php 
 /*echo('hallo het is Even');
 echo('lol');*/
?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <link rel="stylesheet" href="css/navbarstyle.css?v=6">
     <link rel="stylesheet" href="css/mainstyle2.css">
     
     <title>Document</title>
 </head>
 <body>
    <div class="mainbody">
        <nav>
            <?php require_once("includes/menu.inc.php") ?>
        </nav>
        <div class="middiv">
                <canvas id="canvas">
                </canvas>
        </div>
        <div class="lowerdiv"></div>
        </div>
    </div>
    
    
    <script src='./js/game.js'></script>
 </body>
 </html
