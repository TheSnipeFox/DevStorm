<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Creative - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/creative.min.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">
<?php
 session_start();
?>
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">               
                <a class="navbar-brand page-scroll" href="index.php?action=default"><image src="img/devstorm.png" alt=""/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-center">
                    <li>
                        <a class="page-scroll" href="index.php?action=classeActuelle">Classe actuelle</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php?action=historiqueColles">Historiques des colles</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php?action=eleves">Elèves</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php?action=classes">Classes</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php?action=sanctions">Sanctions</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="index.php?action=professeurs">Professeurs</a>
                    </li>
                    <?php 
                       if (isset($_SESSION["user"])){
                       	?>
                       	  <li>
	                        <a class="page-scroll" href="index.php?action=delog">Se déconnecter</a>
	                    </li>
	                    <?php
	                	}
                       	else
                       	{
                       	?>
                       	    <li>
                        <a class="page-scroll" href="index.php?action=login">Se connecter</a>
                    </li>
	                    <?php
                       	}
                       	?>
                  
                  
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <header>
        <div class="header-content">
            <div class="header-content-inner">
            </div>
        </div>
        </br>
        </br>
        </br>
        </br>
        </br>
        </br>
        
        <div class="row">
            <?php
            require 'pdo/userPdo.php';

           
                if (isset ($_GET["action"]))
                    {
                    switch($_GET["action"]) {
                        case "classeActuelle":
                            if (isset($_SESSION["user"])==0)
                                {
                                    include 'vendor/login.php';
                                }
                                else
                                {
                                    include 'vendor/classeActuelle.php';
                                }
                            break;
                        case "historiqueColles":
                            if (isset($_SESSION["user"])==0)
                                {
                                    include 'vendor/login.php';
                                }
                                else
                                {
                                    include 'vendor/historiqueColles.php';
                                }
                            break;
                        case "eleves":
                            if (isset($_SESSION["user"])==0)
                                {
                                    include 'vendor/login.php';
                                }
                                else
                                {
                                    include 'vendor/eleves.php';
                                };
                            break;
                        case "classes":
                            if (isset($_SESSION["user"])==0)
                                {
                                    include 'vendor/login.php';
                                }
                                else
                                {
                                    include 'vendor/classes.php';
                                }
                            break;
                        case "sanctions":
                            if (isset($_SESSION["user"])==0)
                                {
                                    include 'vendor/login.php';
                                }
                                else
                                {
                                    include 'vendor/sanctions.php';
                                }
                            break;
                        case "professeurs":
                            if (isset($_SESSION["user"])==0)
                                {
                                    include 'vendor/login.php';
                                }
                                else
                                {
                                    include 'vendor/professeurs.php';
                                }
                            break;
                        case "checkLogin":
                                   $nb= verification($_POST["login"],sha1($_POST["password"]));
                                   var_dump($nb);           
                                    if ($res=1)
                                    {
                                        $_SESSION["user"]="test";
                                        header("location:index.php?action=accueil");
                                    }
                        case "login":
                            include ("vendor/login.php");
                            break;
                        case "delog":
                        	session_destroy();
                        	header("location:index.php?action=accueil");
                        	break;
                        default:
                            include ("vendor/accueil.php");
                            break;
                    }
                    }
                    else 
                    {
                        echo "<br>Si tu as cette page, c'est que t'as merdé!";
                    }
                    ?>          
        
    </header>

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/creative.min.js"></script>

</body>

</html>
