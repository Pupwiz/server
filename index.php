<?php
echo nl2br("Welcome\r\nThis is Temp  HTML document\r\n", false);
$server_ip = gethostbyname($_SERVER['SERVER_ADDR']);
echo nl2br("Below is your server IP.\r\n", false);
echo $server_ip;
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Your Server Link Page</title>
        <meta name="description" contents="Just a start page">
        <link rel="stylesheet" href="css/style.css" type="text/css">
    </head>
    <body bgcolor="#E6E6FA">
        <header>
            <nav id="main-navigation">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="http://<?php echo $server_ip; ?>:32400/web" target="_blank">Plex</a></li>
                    <li><a href="http://<?php echo $server_ip; ?>:8989" target="_blank">Sonarr</a></li>
                    <li><a href="http://<?php echo $server_ip; ?>:7878" target="_blank">Radarr</a></li>
                    <li><a href="http://<?php echo $server_ip; ?>:9117" target="_blank">Jacket</a></li>
                    <li><a href="http://<?php echo $server_ip; ?>:9091" target="_blank">Transmission</a></li>
                    <li><a href="http://<?php echo $server_ip; ?>:6789" target="_blank">Nzbget</a></li>
                    </ul>
            </nav>
        </header>
        <div id="main-contents"><br>
           <br>
            This is a Helper index page<br><br>

            It is here to retrieve info about your server  and allow you <br>
            to start setting up all the media server options. Leaving it <br>
            here is a risk.<br>
<br>

        </div>
        <footer>
             Do your research to setup the apps as required. <br>
          Note: this server doesn't mount any other drives after install and must be configure
by you!!
        </footer>
    </body>
</html>
