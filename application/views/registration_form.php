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
                echo form_open('user_authentication/new_user_registration');

                echo form_label('Create Username : ');
                echo"<br/>";
                echo form_input('username');
                echo "<div class='error_msg'>";
                if (isset($message_display)) {
                    echo $message_display;
                }
                echo "</div>";
                echo"<br/>";
                echo form_label('Email : ');
                echo"<br/>";
                $data = array(
                    'type' => 'email',
                    'name' => 'email_value'
                );
                echo form_input($data);
                echo"<br/>";
                echo"<br/>";
                echo form_label('Password : ');
                echo"<br/>";
                echo form_password('password');
                echo"<br/>";
                echo"<br/>";
                echo "<div class='form-group'>";
                echo form_submit('submit', 'Sign Up');
                echo form_close();
                echo "</div>"
                ?>
                </div>
                 <div class="panel-footer">
                <a href="<?php echo base_url() ?> "><h3>Cancel</h3></a>
                 </div>
                
            </div>
        </div>
        </div>
</body>
</html>