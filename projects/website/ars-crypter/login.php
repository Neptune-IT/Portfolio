<?php
    session_start();
    error_reporting(E_ALL | E_STRICT);
    ini_set('display_errors', 'On');
    require_once "app/manager/SessionManager.php";
    require_once "app/manager/SQLManager.php";
    require_once "app/libs/ARS_SHELL_CRYPT/ars.php";

    $err = "<p> Create an account here : <a href='register.php'> sign-up </a>";

    if (SessionManager::is_registered($_SESSION)){
        if ($_GET["l"] == "bp"){
            header("Location: buy-premium.php");
        } else header("Location: index.php");
    }

    if (isset($_POST["login-sub"])) {
        if (!empty($_POST["email"]) && !empty($_POST["password"])){
            if (SQLManager::data_exist("SELECT * FROM users WHERE email = '" . $_POST["email"] . "'", SQLManager::DATABASE_ARS, array())) {
                $data = SQLManager::get_data("SELECT * FROM users WHERE email = '" . $_POST["email"] . "'", SQLManager::DATABASE_ARS, array());
                $rev_hash_pass = decrypt($data["password"], STANDARD_SEC_4);

                if ($rev_hash_pass === $_POST["password"]) {
                    $_SESSION["user"] = new SessionManager([
                        $data["username"],
                        "nothing",
                        $data["email"]
                    ]);

                    if ($_GET["l"] == "bp") {
                        header("Location: buy-premium.php");
                    } else header("Location: index.php");
                } else $err = "Please put correct identifiers.";
            } else $err = "Please put correct identifiers.";
        } else $err = "Please fill all the fields above.";
    }
?>

<html>
    <head>
        <title> ARS | Login </title>
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
        <link href="style/css/login.css" rel="stylesheet">
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
                        <span class="pre"><a href="index.php#decrypter"> Decrypter </a>&#9;&#9;</span><br><br>
                    </span>
                </div>
            </div>
        </nav>

        <header id="header">
            <div class="header-content">
                <div class="header-content-inner">
                    <div class="log-div">
                        <form action="" class="box" name="login-form" method="post">
                            <h1> Login </h1>
                            <label>
                                <input type="text" name="email" placeholder="Email" autocomplete="off">
                            </label>
                            <label>
                                <input type="password" name="password" placeholder="Password" autocomplete="off">
                            </label>
                            <input type="submit" name="login-sub" value="- Login -">
                            <p> <?php echo $err ?> </p>
                        </form>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>
