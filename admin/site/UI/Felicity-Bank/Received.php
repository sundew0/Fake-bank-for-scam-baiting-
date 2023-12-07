<?php

/*
FELICITY BANK PORT - DSJAS
==========================

Welcome to the DSJAS theme port of Felicity Bank!

Felicity bank is an open source and free template for making
fake banking sites. This port is an exact replica of the site
ported to the DSJAS theme API, allowing for dynamically changing
the name, branding etc.

Almost nothing has been changed about the original, but some features
had to be removed due to their conflict with existing modules or
other plugins.

Please check out the Felicity Bank GitHub page here: https://github.com/0xB9/Felicity-Bank-Inc.


For more information of theming and creating your own themes, please refer to the
API documentation for themes and plugins.
*/

require_once THEME_API . "General.php";

function getTheme()
{
    ?>

    <body>
        <!--[if lt IE 7]>
      <p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="#">upgrade your browser</a> to improve your experience.
      </p>
    <![endif]-->
        <?php include ABSPATH . getRawThemeContent("Nav.php", "components/"); ?>


        <!-- in between the nav and login box -->

        <div class="container">
            <div class="page-header"></div>

            <div class="shadow-sm p-3 mb-5 boxcol rounded col-lg-6 col-md-6 col-sm-6 col-xs-12 float-right">
                <h2>Welcome to <?php echo getBankName(); ?></h2>
                <p style="font-size: 22px;" class="text-success">
                    Your submission has been received
                </p>
                <p style="font-size: 18px;" class="text-success">
                    Thanks for contacting us! We'll get back to you within a year
                </p>
                <hr />

                <a href="/" class="btn btn-primary">Finish</a>
                <a href="/Contact" class="btn btn-warning">Contact us again</a>

                <div style="height: 3vh;"></div>
            </div>
        </div>

        <img class="app" src=<?php echo getThemeContent("download-app.png", "assets/"); ?>>
    </body>
<?php }
