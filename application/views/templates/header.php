<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Project Anime</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url(); ?>src/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>src/css/app.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
        <body>
            <!-- NAVIGATION -->
            <nav class="navbar navbar-inverse navbar-fixed-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Project Anime</a>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                           <li><a href="inscription">Sign-up</a></li>
                           <li data-toggle="modal" data-target="#myModal"><a href="#">Login</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-option-vertical"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">A propos</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Support</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- FIN NAVIGATION -->
            <div class="container-fluid">
                <div class="row">
                    <!-- CONNEXION -->
                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Login</h4>
                                </div>
                                <div class="modal-body">
                                    <?php echo form_open('connection', 'class="form-horizontal"'); ?>
                                        <div class="form-group">
                                            <label for="username" class="col-sm-2 control-label">Username</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="v_userName" name="v_userName" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="password" class="col-sm-2 control-label">Password</label>
                                            <div class="col-sm-10">
                                                <input type="password" class="form-control" id="v_passWord" name="v_passWord" placeholder="Password">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> Remember me.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-default">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- FIN CONNEXION -->
                </div>