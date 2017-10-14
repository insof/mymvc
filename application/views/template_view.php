<!DOCTYPE html>
<html>
    <head>
        <title><?php print $transl['title']; ?></title>
        <meta charset="utf-8">
        <meta name="format-detection" content="telephone=no"/>
        <link rel="icon" href="/images/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="/css/grid.css">
        <link rel="stylesheet" href="/css/style.css">
        <link rel="stylesheet" href="/css/touchtouch.css"/>
        <link rel="stylesheet" href="/css/google-map.css"/>
        <link href="/lightgallery/skins/default/style.css" type="text/css" media="screen" rel="stylesheet" />

        <script src="/js/jquery.js"></script>
        <script src="/js/jquery-migrate-1.2.1.js"></script>
        <script src="/lightgallery/lightgallery.min.js" type="text/javascript"></script>
        <script src="/lightgallery/lang/ru_utf8.js" type="text/javascript"></script>
        <script>lightgallery.init();</script>

        <!--Fonts-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

        <link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Raleway:400,500' rel='stylesheet' type='text/css'>

        <script src='/js/device.min.js'></script>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-92806288-1', 'auto');
            ga('send', 'pageview');

        </script>
    </head>

    <body>
        <div class="page">
            <!--========================================================
                                      HEADER
            =========================================================-->
            <header class="rd-parallax">
                <div id="stuck_container" class="stuck_container">
                    <div class="container">
                        <div>
                            <ul id="langul">
                                <li>
                                    <form action="/application/controllers/setlang.php" method=POST>
                                        <input type="hidden" name="setlang" value='en'>
                                        <input id="langen" type="submit" value="">
                                    </form>
                                </li>
                                <li>
                                    <form action="/application/controllers/setlang.php" method=POST>
                                        <input type="hidden" name="setlang" value='de'>
                                        <input id="langde" type="submit" value="">
                                    </form>
                                </li>
                                <li>
                                    <form action="/application/controllers/setlang.php" method=POST>
                                        <input type="hidden" name="setlang" value='ru'>
                                        <input id="langru" type="submit" value="">
                                    </form>
                                </li>
                            </ul>
                        </div>
                        <div class="brand">
                            <span class="brand__name">
                                <a href="../"><?php print $transl['title']; ?></a>
                            </span>
<!--                            <span class="brand__slogan">
                                <?php print $transl['berries']; ?>
                                <br/>
                                <?php print $transl['for you']; ?>
                            </span>-->
                        </div>

                        <nav class="nav">
                            <ul class="sf-menu" data-type="navbar">
                                <li>
                                    <a href="/"><?php print $transl['main']; ?></a>
                                </li>
                                <li>
                                    <a href="/about"><?php print $transl['about']; ?></a>
                                    <ul>
                                        <li><a href="/about#about"><?php print $transl['who']; ?></a></li>
                                        <li><a href="/about#factory"><?php print $transl['factory']; ?></a></li>
                                        <li><a href="/about#sert"><?php print $transl['sert']; ?></a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="/prod"><?php print $transl['prod']; ?></a>
                                </li>
                                <li>
                                    <a href="/prices"><?php print $transl['price']; ?></a>
                                </li>
                                <li>
                                    <a href="/gallery"><?php print $transl['gallery']; ?></a>
                                </li>
                                <li>
                                    <a href="/contacts"><?php print $transl['contacts']; ?></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>

            <?php include 'application/views/' . $content_view; ?>

            <!--========================================================
                                       FOOTER
             =========================================================-->
            <footer class="wow fadeInUp">
                <div class="container text-sm-center text-right">
                    <div class="brand">
                        <a href="./">
                            <div class="brand__name">
                                <?php print $transl['title']; ?>
                            </div>
                        </a>
                    </div>
                    © <span id="copyright-year"></span> .
                </div>
            </footer>
        </div>

        <script src="/js/script.js"></script>
    </body>
</html>