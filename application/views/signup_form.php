<html>
    <?php
    if (isset($this->session->userdata['logged_in'])) {
        header("location: http://localhost/login/index.php/login/user_login_process");
    }
    ?>
    <head>
        <title>Registration Form</title>
        <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>

        <!--link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"-->
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div  class="container" style="margin-top:10%">
            <div id="main" class="form-group col-md-4 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <center><h4>Registration Form</h4></center>
                    </div>
                    <div class="panel-body">
                        <?php
                        echo "<div class='error_msg'>";
                        echo validation_errors();
                        echo "</div>";
                        ?>
                        <?php echo form_open('signup/new_user_registration'); ?>
                        <div class="form-group">
                            <label for="u_name">UserName :</label>
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
                        <div class="form-group">
                            <label for="passwordre">Retype Password :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" name="passconf" id="passwordre" class="form-control" placeholder="**********"/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail :</label>
                            <div class="input-group">
                                <span class="input-group-addon"> <i class="fa fa-envelope-o"></i></span>
                                <input class="form-control "type="email" name="email_value" id="email" placeholder="E-mail" />
                            </div>
                        </div>
                        <div class="form-group"><input class="btn btn-success btn-lg btn-block" type="submit" value=" Submit " name="submit"/></div>
                    </div>
                    <div class="panel-footer">
                        <a href="<?php echo base_url() ?> ">Cancel</a>
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>