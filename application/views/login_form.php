<html>

    <head>
        <title>Login Form</title>
        <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <!--link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"-->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    </head>
    <body>


        <!--  facebook -->
        <script>
            window.fbAsyncInit = function () {
                FB.init({
                    appId: '1449570565344625',
                    xfbml: true,
                    version: 'v2.3'
                });
            };

            (function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) {
                    return;
                }
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>








        <?php
        if (isset($logout_message)) {
            echo "<div class='message'>";
            echo $logout_message;
            echo "</div>";
        }
        ?>


        <div  class="container" style="margin-top:10%">

            <div id="login" class="form-group col-md-4 col-md-offset-4" >
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <center><h4>LOGIN</h4></center>
                    </div>                

                    <div class="panel-body">
                        <?php echo form_open('/login/user_login_process'); ?>
                        <?php
                        echo "<div class='error_msg'>";
                        if (isset($error_message)) {
                            echo $error_message;
                        }
                        if (isset($message_display)) {
                            echo $message_display;
                        }if (isset($message_display_resetpass)) {
                            echo $message_display_resetpass;
                        }

                        echo validation_errors();
                        echo "</div>";
                        ?>
                        <div class="form-group">
                            <label for="u_name">Username :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input class="form-control "type="text" name="username" id="u_name" placeholder="username" />
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password">Password :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" name="password" id="password" class="form-control" placeholder="**********"/>
                            </div>
                        </div>

                        <div class="form-group"><input class="btn btn-success btn-lg btn-block" type="submit" value=" Login " name="submit"/></div>
                        <div> <a class="btn btn-warning" href="<?php echo base_url() ?>signup">SignUp</a></div>
                        <?php echo form_close(); ?>
                    </div>
                    <div class="panel-footer">
                        <a  href="<?php echo base_url() ?>reset_pass">Forget Password?</a>
                        <div
                            class="fb-like"
                            data-share="true"
                            data-width="450"
                            data-show-faces="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>