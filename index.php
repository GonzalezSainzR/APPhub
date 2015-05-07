<!DOCTYPE html>
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
                    <a  href="index.php" id='APP'><img src="IMG/Logo.png" alt="Logo" height="48" width="80" id='APP' ></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" placeholder="Username" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-success">Sign in</button>
                        <button type="submit" class="btn btn-info">Register</button>
                    </form>
                </div>
            </div>
        </nav>

        <div class="jumbotron">
            <div class="container">
                <h1 id='H1'>Welcome</h1>
                <p id='P'>Here you will be able to learn more about students of the APP Academy by having the ability to look at projects they have made.</p>
                <p id='P'><a class="btn btn-danger btn-lg" href="#" role="button">Learn more &raquo;</a></p>
            </div>
        </div>

        <div class="container" id='bottom'>
            <div class="row">
                <div class="col-md-6">
                    <h2>Websites</h2>
                    <p>This will take you to a list of viewable websites created by APP Academy students.</p>
                    <p><a class="btn btn-default" href="#" role="button">View Websites &raquo;</a></p>
                </div>
                <div class="col-md-6">
                    <h2>Games</h2>
                    <p>This will take you to a list of playable games made by APP Academy students</p>
                    <p><a class="btn btn-default" href="#" role="button">View Games &raquo;</a></p>
                </div>
            </div>

            <hr>

            <footer>
                <p>&copy; Sainz & Robles Inc. 2015</p>
            </footer>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
    </body>
</html>
