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
require THEME_API . "Accounts.php";

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
            <div class="page-header">
                <?php if (shouldProvideLoginFeedback()) { ?>
                    <div class="alert alert-danger">
                        Your login details were incorrect. Please, <a href="/forgot">reset your password</a>
                    </div>
                <?php }

                addModuleDescriptor("alert-area"); ?>
            </div>

            <div class="shadow-sm p-3 mb-5 boxcol rounded col-lg-6 col-md-6 col-sm-6 col-xs-12 float-right">
                <h2>Welcome to <?php echo getBankName(); ?></h2>
                <p style="font-size: 22px;">
                    Thank you for banking with us!
                </p>
                <p style="font-size: 18px;">
                    To get started with our award-winning online banking system please simply
                    login to your account below:
                </p>
                <hr />

                <?php addModuleDescriptor("pre-content"); ?>

                <form id="loginForm" action="/user/Login.php" method="POST">
                    <div class="form-group form-inline d-flex justify-content-between">
                        <input name="username" type="text" class="form-control" autocomplete="off" placeholder="Username" style="width: 48%;" />
                        <input name="password" type="password" class="form-control" placeholder="Password" style="width: 48%;" />
                    </div>

                    <?php addModuleDescriptor("post-content"); ?>

                    <button type="submit" class="btn btn-success">
                        Login
                    </button>

                    <a href="/user/Apply" class="btn btn-primary">Apply Now</a>
                </form>

                <div style="height: 3vh;"></div>

                <a href="/forgot">Forgot your username or password?</a>
                <div style="height: 1vh;"></div>
                <p style="font-size: 12px;">
                    Microsoft will never ask you for your banking details...
                </p>

                <?php addModuleDescriptor("footer"); ?>
            </div>
        </div>

        <img class="app" src=<?php echo getThemeContent("download-app.png", "assets/"); ?>>
    </body>
<?php }
