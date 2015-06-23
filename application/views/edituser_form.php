
<html>

    <head>
        <title><?php echo $user_name . "'s profile" ?></title>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/btnstyle.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
        <script src="/assets/js/bootstrap.js" type="text/javascript"></script>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="/assets/js/bootstrap.min.js" type="text/javascript"></script>

        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <link rel="stylesheet" href="/resources/demos/style.css">
        <script>
            $(function () {
                $("#datepicker").datepicker();
                $("#accordion").accordion();

            });
        </script>
    </head>
    <body>
        <div class="container" style="margin-top:5%">
            <div class="row">

                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xs-offset-0 col-sm-offset-0 col-md-offset-2 col-lg-offset-2 toppad" >
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <?php echo $user_name . "'s profile" ?>
                            <span class="pull-right"><b id="logout"><a  href="<?php echo base_url() ?>login/logout"/>Logout</a></b></span>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3  " align="center" style="margin-left:auto"> <img alt="User Pic" src="<?php echo base_url(); ?>images/profpic.png" class="img-rounded"> 
                                    <div class="row" style="margin-top: 10% ">
                                        <div class="col-sm-2  col-sm-offset-1"><a class="btn btn-primary btn-circle " href="http://www.facebook.com"><i class="fa fa-facebook"></i></a></div>
                                        <div class="col-sm-2 col-sm-offset-1"><button class="btn btn-primary btn-circle" ><i class="fa fa-twitter"></i></button></div>
                                        <div class="col-sm-2 col-sm-offset-1"><button class="btn btn-primary btn-circle" ><i class="fa fa-linkedin"></i></button></div>
                                    </div>

                                </div>
                                <!--</div>-->

                                <div class=" col-md-9 "> 
                                    <?php
                                    $attributes = array("class" => "form-horizontal");
                                    echo form_open('edituser/adduserdata', $attributes);
                                    ?>
                                    <div class="form-group">
                                        <label for="firstname" class="col-sm-3 control-label">First Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="firstname" class="form-control" id="firstname" value="<?php echo $first_name ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="lasttname" class="col-sm-3 control-label">Last Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="lastname" class="form-control" id="lasttname"value="<?php echo $last_name ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="col-sm-3 control-label">User Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="username" class="form-control" id="username" value="<?php echo $user_name ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="datepicker" class="col-sm-3 control-label">Date of Birth</label>
                                        <div class="col-sm-9">
                                            <input type="text"name="birthday" class="form-control" id="datepicker" value="<?php echo $user_birthday ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Phoneno" class="col-sm-3 control-label">E-mail</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email_value" class="form-control" id="Phoneno" value="<?php echo $user_email ?>">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="Phoneno" class="col-sm-3 control-label">Phone No</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="phoneno" class="form-control" id="Phoneno" value="<?php echo $user_phoneno ?>">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-3 col-sm-offset-3">
                                            <button type="submit" class="btn btn-success btn-block">Done</button>
                                        </div>
                                        <div class="col-sm-3">
                                            <button type="reset" class="btn btn-primary btn-block">Reset</button>
                                        </div>
                                        <div class="col-sm-3">
                                            <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                Password
                                            </button>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <div class="collapse" id="collapseExample">
                                                <div class="">
                                                    <div class="form-group">
                                                        <label for="oldpass" class="col-sm-3 control-label">Old Password</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="oldpass" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="newpass" class="col-sm-3 control-label">New Password</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="newpass" >
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="renewpass" class="col-sm-3 control-label">Retype New Password</label>
                                                        <div class="col-sm-9">
                                                            <input type="text" class="form-control" id="renewpass" >
                                                        </div>
                                                         </div>
                                                        <div class="row col-md-3 col-md-offset-3" >
                                                            <button href="#"  class="btn btn-success test-2-by "> test 2</button>
                                                        <script>

                                                            $(document).ready(function () {

                                                                $('.test-2-by').click(function () {

                                                                    $(this).addClass('btn-danger').removeClass('btn-success');
                                                                    $(this).text('');
                                                                    $(this).text('podi adi')



                                                                })


                                                            })

                                                        </script>
                                                           </div>
                                                   
                                                </div>
                                            </div> 
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                            <span class="pull-right">
                                <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                            </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <br/>
    </body>
</html>
