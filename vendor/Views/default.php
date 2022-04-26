<?php
    use Core\View;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../styles/css/bootstrap.css"
</head>
<body>
    <main>
        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" style="color: #f0f0f0" href="/main">YD Inc</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" style="color: #f0f0f0" aria-current="page" href="/">Home</a>
                        <a class="nav-link" style="color: #f0f0f0" href="#">Features</a>
                        <a class="nav-link" style="color: #f0f0f0" href="#">More</a>
<!--                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
                    </div>
                </div>
                <span class="navbar-text">
                    <a class="nav-link active" style="color: #f0f0f0"  aria-current="page" href="/singin">Sing In</a>
                </span>
                <span class="navbar-text">
                    <a class="nav-link active" style="color: #f0f0f0" aria-current="page" href="/singup">Sing Up</a>
                </span>
            </div>
        </nav>
    </main>
    <div class="container">
<!--        --><?php //View::render('singin')?>
<!--        <div class="row-cols-lg-3">-->
<!--            <h2>Sing In</h2>-->
<!--            <form>-->
<!--                <div class="mb-4">-->
<!--                    <label for="exampleInputEmail1" class="form-label">Email address</label>-->
<!--                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">-->
<!--                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
<!--                </div>-->
<!--                <div class="mb-4">-->
<!--                    <label for="exampleInputPassword1" class="form-label">Password</label>-->
<!--                    <input type="password" class="form-control" id="exampleInputPassword1">-->
<!--                </div>-->
<!--                <div class="mb-4 form-check">-->
<!--                    <input type="checkbox" class="form-check-input" id="exampleCheck1">-->
<!--                    <label class="form-check-label" for="exampleCheck1">Check me out</label>-->
<!--                </div>-->
<!--                <button type="submit" class="btn btn-primary">Submit</button>-->
<!--            </form>-->
<!--        </div>-->
    </div>
</body>
</html>
