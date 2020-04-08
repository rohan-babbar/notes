<!DOCTYPE html>
<html lang="en">
<head>
    <title>Notes Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <style>
        .img {
            height: 200px;
            background: #aaa;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="#">Notes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="./Authentication/login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./Authentication/register">Register</a>
            </li>
        </ul>
    </div>
</nav>

<div class="jumbotron text-center" style="margin-bottom:0; height: 100vh">
    <h1>Notes</h1>
    <p>A simple notes website to manage your notes.</p>
</div>

<div style="padding: 100px">
    <div class="card bg-secondary" style="padding: 30px">
        <h2>TITLE HEADING</h2>
        <h5>Title description, Dec 7, 2017</h5>
        <div class="fakeimg">
            <img src="img/A.jpg" height="200" width="200">
        </div>
        <p>Some text..</p>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
            ullamco.</p>
    </div>
    <br>
    <div class="card bg-info" style="padding: 30px">
        <h2>TITLE HEADING</h2>
        <h5>Title description, Sep 2, 2017</h5>
        <div class="fakeimg">
            <img src="img/B.jpg" height="200" width="200">
        </div>
        <p>Some text..</p>
        <p>Sunt  culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod
            tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
    </div>
</div>

</body>
</html>