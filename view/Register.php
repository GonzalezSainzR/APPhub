<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css"  rel="stylesheet" href="css/bootstrap.min.css">
        <link type="text/css"  rel="stylesheet" href="css/bootstrap.theme.min.css">
        <link type="text/css"  rel="stylesheet" href="css/custom-style.css">
        <link href="jumbotron.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <a  href="index.php" id='APP'><img src="IMG/Logo.png" class="img-rounded" alt="Logo" height="48" width="80" id='APP' ></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right">
                    </form>
                </div>
            </div>
        </nav>
        <div class="container">
            <h1 id="Register">Register</h1>
            <form  method="post" action="<?php echo $path . "controller/create-user.php"; ?>">
                <div class="form-group" id="Register">
                    <input type="text" placeholder="Email" class="form-control">
                </div>

                <div class="form-group" id="Register">
                    <input type="text" placeholder="Username" class="form-control">
                </div>
                <div class="form-group" id="Register">
                    <input type="password" placeholder="Password" class="form-control">
                </div>

                <div id='Register'>
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </form>
        </div>
    </body>
</html>