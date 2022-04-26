<?php include_once 'default.php'?>
<div class="container">
    <div class="row-cols-lg-3">

        <h2 class="mt-4"> Sing Up</h2>

        <form class="mt-4">

            <div class="mb-4">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" >
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-4">
                <label for="username" class="form-label">Username</label>
                <input type="password" class="form-control" id="username">
                <div id="passwordHelp" class="form-text">Enter your username</div>
            </div>

            <div class="mb-4">
                <label for="photo" class="form-label">Profile photo</label>
                <input type="file" class="form-control" id="photo">
                <div id="photoHelp" class="form-text">Choose a photo for your profile</div>
            </div>

            <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password">
                <div id="passwordHelp" class="form-text">Come up with a really complex password.</div>
            </div>

            <div class="mb-4">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password">
                <div id="passwordHelp" class="form-text">Confirm your password</div>
            </div>
            <div class="mb-4 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Privacy Policy</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
