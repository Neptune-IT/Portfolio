<?php

require_once "app/manager/SessionManager.php";
session_start();

if (!SessionManager::is_registered($_SESSION)) {
    header("Location: login.php?l=bp");
}

?>

<html>
    <head>
        <title> ARS | Buy Premium </title>
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
        <script src="https://www.paypal.com/sdk/js?client-id=sb&enable-funding=venmo&currency=USD" data-sdk-integration-source="button-factory"></script>
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
                        <span class="pre"><a href="logout.php"> Logout </a></span><br><br>
                    </span>
                </div>
            </div>
        </nav>

        <header id="header">
            <div class="header-content">
                <div class="header-content-inner">
                    <h1> Buy Premium </h1>
                    <h3> Get the premium acces now for only 2.5 USD $ </h3>
                    <h4> with all securities levels, API Key and new level 5 indecryptable. </h4><br><br>
                    <div id="smart-button-container">
                        <div style="text-align: center;">
                            <div id="paypal-button-container"></div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <script>
            function initPayPalButton() {
                paypal.Buttons({
                    style: {
                        shape: 'rect',
                        color: 'gold',
                        layout: 'vertical',
                        label: 'paypal',
                    },

                    createOrder: function (data, actions){
                        return actions.order.create({
                            purchase_units: [{
                                "description": "Premium Acces ARS",
                                "amount": {
                                    "currency_code": "USD",
                                    "value": 2.5
                                }
                            }]
                        });
                    },

                    onApprove: function (data, actions){
                        return actions.order.capture().then(function(details){
                            alert('Transaction completed by ' + details.payer.name.given_name + '!');
                        });
                    },

                    onError: function (err){
                        console.log(err);
                    }
                }).render('#paypal-button-container');
            }
            initPayPalButton()
        </script>
    </body>
</html>

