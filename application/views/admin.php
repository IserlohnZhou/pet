<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <script src="/vue.js"></script>
    <script src="/vue-resource.js"></script>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Home</title>
        <!-- Bootstrap Styles-->
        <link href="/assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FontAwesome Styles-->
        <link href="/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Morris Chart Styles-->
        <link href="/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>
    <div id="wrapper">

        <nav class="navbar navbar-default " role="navigation">
            <div class="container-fluid"> 
                <div class="navbar-header">
                    <a class="navbar-brand" href="/admin"><i class="fa fa-mail-reply"></i> <strong>return</strong></a>
                </div>
                <div>
                    <ul class="nav navbar-nav" style="float:right;"> 
                        <li class="active"><a href="/admin"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="/admin/create"><i class="fa fa-file-o">Create</i></a></li>
                        
                        <li><a href="/admin/search"><i class="fa fa-search">Search</i></a></li>
                        <li class="dropdown"> 
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
                                <i class="fa fa-user fa-fw"></i>Personel<i class="fa fa-caret-down"></i>

                            </a> 
                            <ul class="dropdown-menu">

                                <li><a href="/login"><i class="fa fa-sign-out fa-fw"></i>Login</a></li> 
                                <li><a href="/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a></li> 

                            </ul> 
                        </li> 
                    </ul> 

                </div>
            </div>
        </nav>
        <!--/. NAV TOP  -->

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header" style="text-align: center;">
                            Welcome to your personal page!<small style="color:#a5c6e3;">打造完善属于自己的满宠</small>
                        </h1>
                    </div>
                </div> 
                <!-- /. ROW  -->


                <div class="row">

                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Dashboard
                            </div>        
                            <div class="row" style="text-align:center">
                                <div class="col-md-4">
                                    <a href="/admin/edit">
                                        <img src="pet.jpg" style="width:100%;height:100%;">
                                        <label >passage1</label>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                    <a href="/admin/edit">
                                        <img src="pet.jpg" style="width:100%;height:100%;">
                                        <label >passage2</label>
                                    </a>
                                </div>
                                <div class="col-md-4">
                                     <a href="/admin/edit">
                                        <img src="/pet.jpg" style="width:100%;height:100%;">
                                        <label >passage3</label>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>						
                </div>

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>  
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="/assets/js/jquery-1.10.2.js"></script>

    <!-- Bootstrap Js -->                                                                   
    <script src="/assets/js/bootstrap.min.js"></script>                                                                   
    <!-- Metis Menu Js -->                                                                   
    <script src="/assets/js/jquery.metisMenu.js"></script>                                                                   
    <!-- Morris Chart Js -->                                                                   
    <script src="/assets/js/morris/raphael-2.1.0.min.js"></script>                                                                   
    <script src="/assets/js/morris/morris.js"></script>

    <script src="/assets/js/easypiechart.js"></script>                                                                    
    <script src="/assets/js/easypiechart-data.js"></script>	                                                                 
    <!-- Custom Js -->                                                               
    <script src="/assets/js/custom-scripts.js"></script>                                                                  
</body>                                                               
</html>                                                                