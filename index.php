<?php
    if($_SERVER["HTTPS"] != "on") {
        header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]);
        exit();
    }

    // $pageLink = 'https://ripaim.markmarzeotti.com/';
    // $pageLink = 'http://localhost:8888/personal/rip-aim/';
    $pageLink = 'https://aimliveson.com/';
    $screenname = htmlspecialchars($_GET["screenname"]); // between 3 and 16 chars
    if ($screenname) {
        $title = 'AIM Lives On';
        $image = $pageLink . 'generated/' . $screenname . '.png';
        $link = $pageLink . '?screenname=' . $screenname;
        $blurb = 'AIM may be gone, but your screenname can live on forever.';
    } else {
        $title = 'AIM Lives On';
        $image = $pageLink . 'assets/img/aol-instant-messenger.png';
        $link = $pageLink;
        $blurb = 'Immortalize your screenname';
    }
?>

<!doctype html>
<html prefix="og: http://ogp.me/ns#" class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $title . ' - ' . $blurb; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" initial-scale="1">

        <meta property="og:image" content="<?php echo $image; ?>" />
        <meta property="og:image:width" content="1200" />
        <meta property="og:image:height" content="630" />
        <meta property="og:title" content="<?php echo $title; ?>" />
        <meta property="og:description" content="<?php echo $blurb; ?>" />
        <meta property="og:url" content="<?php echo $link; ?>" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:site_name" content="<?php echo $title; ?>" />
        <meta property="og:type" content="article" />

        <meta itemprop="name" content="<?php echo $title; ?>">
        <meta itemprop="description" content="<?php echo $blurb; ?>">
        <meta itemprop="image" content="<?php echo $image; ?>">

        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="@stephagency"/>
        <meta name="twitter:image" content="<?php echo $image; ?>"/>
        <meta name="twitter:title" content="<?php echo $title; ?>"/>
        <meta name="twitter:description" content="<?php echo $blurb; ?>"/>

        <meta property="fb:app_id" content="966242223397117" />

        <link rel="apple-touch-icon" sizes="76x76" href="/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">

        <meta name="Description" content="<?php echo $blurb; ?>" />

        <link rel="icon" href="/favicon.ico" type="image/x-icon"/>
        <link rel="canonical" href="<?php echo $pageLink; ?>"/>

        <link rel="stylesheet" href="assets/css/main.min.css">

        <?php /*<script src='https://www.google.com/recaptcha/api.js'></script>*/ ?>
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <div class="layout">
            <div class="border-top"></div>
            <div class="border-right"></div>
            <div class="border-bottom"></div>
            <div class="border-left"></div>
            <div class="corner-top-left"></div>
            <div class="corner-top-right"></div>
            <div class="corner-bottom-left"></div>
            <div class="corner-bottom-right"></div>
            <div class="icon-tomb"></div>
            <div class="page-title">
                <?php echo $title; ?>
            </div>
        </div>

        <section class="aol-container">
            <div class="vertical-middle-wrapper">
                <div class="vertical-middle">

                    <div class="row">
                        <div class="aol column">

                            <canvas id="canvas" width="1200" height="630"></canvas>

                            <div class="gen-bucket"></div>

                            <div class="create-image">
                                <div class="gif-left">
                                    <img src="assets/img/rip.gif" alt="RIP Tombstone" />
                                </div>
                                <div class="form">
                                    <div class="text-left">
                                        <h1>AIM MAY BE GONE, BUT YOUR SCREENNAME CAN LIVE ON FOREVER.</h1>
                                        <p>On December 15th, 2017 AIM signs off for good. But we don't want your screenname to sign off with it. For many of us, our AIM screenname was our first online identity. So we created a place where those (not at all embarrassing) screennames can live on forever.</p>
                                    </div>
                                    <div class="text-center">
                                        <hr />
                                        <h2>Immortalize your ScreenName here:</h2>
                                        <form class="image-generator" id="bury" action="<?php echo $pageLink; ?>">
                                            <input type="text" name="screenname" id="screenname" value="" maxlength="16">
                                            <?php /*<div class="g-recaptcha" data-sitekey="6LdOzDwUAAAAAAXifkXvDAW0nVHDNCJscTuFzCBb"></div>*/ ?>
                                            <input type="submit" value="Sign On Forever">
                                        </form>
                                    </div>
                                </div>
                                <div class="gif-right">
                                    <img src="assets/img/aim.gif" alt="AIM Tombstone" />
                                </div>
                            </div>

                            <div class="share">
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-url="<?php echo $link; ?>">
                                    <a class="a2a_button_facebook"></a>
                                    <a class="a2a_button_twitter"></a>
                                    <a class="a2a_button_linkedin"></a>
                                    <a class="download"></a>
                                </div>
                                <script async src="https://static.addtoany.com/menu/page.js"></script>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="digo">
                    <p><small>Brought to you by DiMassimo Goldstein - A New York inspiring action agency</small></p>
                </div>
            </div>
        </section>

        <script src="assets/js/vendor/modernizr-3.5.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
        <script src="assets/js/main.min.js"></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-24799650-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-24799650-1');
        </script>
    </body>
</html>
