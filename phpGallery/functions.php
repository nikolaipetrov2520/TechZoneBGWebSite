<?php
function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'techzone';
    $DATABASE_PASS = 'cz!8A,jSSi9K';
    $DATABASE_NAME = 'techzone_phpgallery';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	die ('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
    echo <<<EOT
        <!DOCTYPE html>
        <html>
            <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=0.5,  maximum-scale=3.0, minimum-scale=0.5">
            <meta name="description" content="Ремонт на смартфони, ремонт на таблети, ремонт на компютри, смяна на счупено стъкло на дисплей цена, ремонт на лаптопи, сервиз за телефони,">
            <meta name="keyword" content="Ремонт на смартфони, ремонт на таблети, ремонт на компютри, смяна на счупено стъкло на дисплей цена, ремонт на лаптопи, сервиз за телефони,">
            <title>TechZoneBG</title>
            <script src="/JavaScript/menuScript.js"></script>
            <meta property="og:image:secure_url" content="https://techzone-bg.com/images/itech Logo1.png" />
            <meta property="og:title" content="TechZoneBG" />
            <meta property="og:image" content="/images/itech Logo1.png"/>
            <meta property="og:image:width" content="400" />
            <meta property="og:image:height" content="300" />
            <link rel="shortcut icon" type="image/x-icon" href="/images/icon.png">
            <link rel="stylesheet" type="text/css" href="/CSS/style.css">
            <link rel="stylesheet" type="text/css" href="/CSS/responsiveMenu.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="/CSS/galeryStyle.css" rel="stylesheet" type="text/css"> 
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
            <style>
                body {
                    background-image: url('/images/circuit.png');
                    background-position: center;

                }
            </style>        
            </head>
            <body>
                <nav class="a">
                    <p class="e">гр. София, бул. Сливница 133/ тел. 0878432079</p>
                    <p class="d">
                        <a class="c" href="viber://chat?number=359878432079">
                         <img alt="facebook" src=/images/viber.png width="37" height="37">
                        </a>
                    </p>
                    <p class="d">
                        <a class="c" href="https://www.facebook.com/messages/t/iTech.Computers" target="_blank">
                            <img alt="facebook" src=/images/messenger.png width="40" height="40">
                        </a>
                    </p>
                    <p class="d">
                        <a class="c" href="https://www.facebook.com/TechZoneBG11/" target="_blank">
                            <img alt="facebook" src=/images/facebook.png width="38" height="38">
                        </a>
                    </p>
                    <p class="d">
                        <a class="c" href="https://www.instagram.com/itechcomputers1/" target="_blank">
                            <img alt="facebook" src=/images/instagram.png width="39" height="39">
                        </a>
                    </p>
                    <p class="d">
                        <a class="c" href="https://www.youtube.com/channel/UCr_JWBo47P0706JHxWmoNAw/" target="_blank">
                            <img alt="facebook" src=/images/youtube.png width="40" height="40">
                        </a>
                    </p>

                </nav>
                <nav id="logo" style="text-align: center;">
                    <div>
                        <a href="/index">
                            <img src="/images/TechZone Logo.png" width="272" height="48">
                        </a>
                    </div>
                </nav>
                <header id="menu" class="topnav">
                    <ul>
        <a class="b" href="/index">Начало</a>
        <a class="b" href="/online">Онлайн поддръжка</a>         
        <a href="/services" class="dropbtn">Услуги</a>                        
        <a href="/parts" class="dropbtn">Цени</a>           
        <a class="b" href="/contacts">Контакти</a>      
        <a style="float: right;" class="b" href="/phpGallery/index.php">Галерия</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
    </ul>
                </header>
EOT;
    }
    // Template footer
function template_footer() {
    echo <<<EOT
        <head>         
        </head>
        </body>
    </html>
    <footer>
    <section>
        <table>
           <tr>
             
                <th><a href="/contacts">Контакти</a></th>
                <th><a href="/services">Услуги</a></th>
            </tr>
            <tr>
                <td></td>
                <td></td>
               
            </tr>
            <tr>
                <td><a href="/address">Адрес</a></td>
                <td><a href="/parts">Цени</a></td>
               
            </tr>
            <tr>
             
                <td><a href="/phone">Телефон</a></td>
                <td><a href="/online">Онлайн поддръжка</a></td>  
            </tr>
        </table>
    </section>
    <section class="d">
        <p class="c">
            site design / iTech © 2020
        </p>
    </section>
</footer>
EOT;
    }
    ?>