<?php
    session_start();
    error_reporting(E_ALL | E_STRICT);
    ini_set('display_errors', 'On');
    require_once "app/manager/SessionManager.php";
    require_once "app/manager/SQLManager.php";
    require_once "app/utils/Checker.php";
    require_once "app/libs/ARS_SHELL_CRYPT/ars.php";

    $err = "";

    if (SessionManager::is_registered($_SESSION)){
        header("Location: index.php");
    }

    if (isset($_POST["register-sub"])){
        if (!empty($_POST["pseudo"] && !empty($_POST["email"]) && !empty($_POST["password"]))){
            if (!check_acc_name(strtolower($_POST["pseudo"])) && !check_email(strtolower($_POST["email"]))){
                SQLManager::write_data("INSERT INTO users (
                    pseudo, email, password
                ) VALUES (
                    '" . $_POST["pseudo"] . "', '" . $_POST["email"] . "', '" . encrypt($_POST["password"], STANDARD_SEC_4) . "'
                )", SQLManager::DATABASE_ARS, []);
            } else $err = "Accout name or email already used.";
        } else $err = "Please fill all the fields above.";
    }
?>

<html>
    <head>
        <title> ARS | Register </title>
        <link rel="icon" href="images/logo_small_icon_only.png">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">

        <!-- Head Meta -->
        <meta charset="utf-8">
        <meta name="creator" content="Neptune">
        <meta name="Official website for ARS_SHELL_CRYPT encryption system">

        <!-- CSS Style -->
        <link href="style/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="style/css/index.css" rel="stylesheet">
        <link href="style/css/register.css" rel="stylesheet">
    </head>

    <body>
        <nav id="navbar" class="base-nav navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="">
                        <img src="images/logo_white_large.png">
                    </a>
                </div>

                <div id="navbar">
                    <span>
                        <span class="pre"><br>&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;&#9;</span>
                        <span class="pre"><a href="index.php"> Home </a>&#9;&#9;</span>
                        <span class="pre"><a href="index.php#crypter"> Crypter </a>&#9;&#9;</span>
                        <span class="pre"><a href="index.php#decrypter"> Decrypter </a>&#9;&#9;</span>
                        <span class="pre"><a href="login.php"> Login </a></span><br><br>
                    </span>
                </div>
            </div>
        </nav>

        <header id="header">
            <div class="header-content">
                <div class="header-content-inner">
                    <div class="log-div">
                        <form action="" class="box" name="register-form" method="post">
                            <h1> Register </h1>
                            <label>
                                <input type="text" name="pseudo" placeholder="Account Name" autocomplete="off">
                            </label>
                            <label>
                                <input type="text" name="email" placeholder="Email" autocomplete="off">
                            </label>
                            <label>
                                <input type="password" name="password" placeholder="Password" autocomplete="off">
                            </label>
                            <input type="submit" name="register-sub" value="- Register -">
                            <p> <?php echo $err ?> </p>
                        </form>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>