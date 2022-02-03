<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./css/home.css">
     <link rel="stylesheet" href="css/navbarstyle.css?v=6">
     <script src="./js/nav.functions.js"></script>
    <script src="./js/index.functions.js"></script>
     <title>Document</title>
 </head>
 <body>
    <div class="mainbody">
        <nav><?php require_once("includes/menu.inc.php") ?></nav>
            <div class="middiv">
                <div class="divboxes">
                    <div class="box1"></div>
                    <div class="box2"></div>
                    <div class="box3"></div>
                    <div class="box4"></div>
                    <div class="box5"></div>
                    <div class="box6"></div>
                    <div class="box7"></div>
                    <div class="box8"></div>
                    <div class="boxbanner">
                        <div class="boxbannerimg"></div> 
                    </div>
                    <div class="boxaboutus">
                        <div class="boxaboutusimg" onClick="location.href='./about_us.php'"></div>
                    </div>
                    <div class="boxgame">
                        <div class="boxgameimg" onClick="location.href='./trash_masterz.php'"></div>
                    </div>
                </div>
            <!--MAIN LAYOUT-1: layout (navbar, title, banner, gameblock (photo + buttun), about us block(photo + button)) -->
    </div>
        <div class="lowerdiv"></div>
    </div>
 </body>
 </html>    