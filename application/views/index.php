    <!doctype html>
    <html class="no-js" lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Sistem Arsip</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    </head>

    <body>

        <style type="text/css">

            body{
                background-color: #955D00;
            }
            .navbar-siad{
                background: #955D00;
                border-radius: 0px;
                border: 1px solid #955D00;
                margin: 0px;
                padding: 20px 0px;
            }

            .navbar-inverse .navbar-brand {

                color: #fff;

            }

            .navbar-inverse .navbar-nav > li > a {

                color: #fff;

            }
            .navbar-siad > li > a {

                color: #9d9d9d !important;

            }

            .banner{
                border-radius: 0px;
                padding: 60px 0px;
                color: white;
            }

            .banner a{
                padding: 15px 25px;
                color: white;
                border: 1px solid white;
                -webkit-transition: all 0.5s; 
                transition: all 0.5s;
                margin-right: 10px;
            }

            .banner a:hover{
                text-decoration: none;
                border: 1px dashed white;
            }

            .banner p{
                font-size: 13pt;
            }
        </style>



        <nav class="navbar navbar-inverse navbar-siad">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Arsip Digital</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <!-- <ul class="nav navbar-nav">
                        <li><a href="#">Link <span class="sr-only">(current)</span></a></li>
                        <li><a href="#">Link</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">One more separated link</a></li>
                            </ul>
                        </li>
                    </ul> -->

                   
                </div>
            </div>
        </nav>


        <div class="banner">
            <div class="container">

                <div class="row">
                    <div class="col-lg-6">
                        <div style="margin-top: 140px;">
                            <h1>Sistem Arsip Digital</h1>
                            <p>Pondok Pesantren Wali Songo Ngabar</p>

                            <br>
                            <br>
                            <a href="<?php echo base_url('auth/login'); ?>">LOGIN ADMIN / PETUGAS</a>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <img src="gambar/depan/8.png">
                        
                    </div>
                </div>

            </div>
        </div>





        <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    </body>

    </html>