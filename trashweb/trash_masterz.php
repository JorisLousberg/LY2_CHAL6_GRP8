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
     <link rel="stylesheet" href="./css/mainstyle.css">
     <link rel="stylesheet" href="css/navbarstyle.css?v=6">
     <link rel="stylesheet" href="css/mainstyle2.css">
     
     <title>Document</title>
 </head>
 <body>
    <nav>
        <?php require_once("includes/menu.inc.php") ?>
    </nav>
    <div><h1>Simple Platformer</h1><p>
    Use the arrow keys and your platforming skills to reach the blue diamond</p></div>
    
    <canvas id="canvas">
  
    <!-- <img id="image" src="https://m1.behance.net/rendition/modules/74723571/disp/0beedf48c9a000c812866297384c0cf4.png" style="display: none">!-->
 
    </canvas>
    <script src='./js/game.js'></script>
 </body>
 </html