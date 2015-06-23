
<html>

    <head>
        <title><?php echo $user_name . "'s profile" ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/btnstyle.css">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
               <!--link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css"-->
        <link href="/assets/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="container" style="margin-top:10%">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <?php echo $user_name . "'s profile" ?>
                            <span class="pull-right"><b id="logout"><a  href="<?php echo base_url() ?>login/logout"/>Logout</a></b></span>

                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-3  " align="center" style="margin-left:auto"> <img alt="User Pic" src="<?php echo base_url(); ?>images/profpic.png" class="img-rounded"> 
                                    <div class="row" style="margin-top: 10% ">
                                        <div class="col-sm-2  col-sm-offset-1"><button class="btn btn-primary btn-circle" ><i class="fa fa-facebook"></i></button></div>
                                        <div class="col-sm-2 col-sm-offset-1"><button class="btn btn-primary btn-circle" ><i class="fa fa-twitter"></i></button></div>
                                        <div class="col-sm-2 col-sm-offset-1"><button class="btn btn-primary btn-circle" ><i class="fa fa-linkedin"></i></button></div>
                                    </div>

                                </div>
                        
                            <div class=" col-md-9 col-lg-9 "> 
                                <table class="table table-user-information">
                                    <tbody>
                                        <tr>
                                            <td>First Name:</td>
                                            <td><?php echo $first_name ?></td>
                                        </tr>
                                        <tr>
                                            <td>Last Name:</td>
                                            <td><?php echo $last_name ?></td>
                                        </tr>
                                        <tr>
                                            <td>User Name</td>
                                            <td><?php echo $user_name ?></td>
                                        </tr>

                                        <tr>
                                        <tr>
                                            <td>Date of Birth</td>
                                            <td><?php echo $user_birthday ?></td>
                                        </tr>
                                        <tr>
                                            <td>Home Address</td>
                                            <td><?php echo $user_address ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email</td>
                                            <td><?php echo $user_email ?></td>
                                        </tr>
                                    <td>Phone Number</td>
                                    <td><?php echo $user_phoneno ?>
                                    </td>

                                    </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="<?php echo base_url() ?>edituser" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
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