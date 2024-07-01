<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="image-container">
            <img src="logo3.png" alt="Products Image">
        </div>
        <div class="login-container">
            <h1>Login</h1>
            <form>
                <label for="email">Email*</label>
                <input type="email" id="email" name="email" required>
                
                <label for="password">Password*</label>
                <input type="password" id="password" name="password" required>

                <div class="terms">
                    <input type="checkbox" id="terms" name="terms" required>
                    <label for="terms">Accept our Terms and Conditions</label>
                </div>

                <button type="submit">Login</button>
                
                <button class="google-login" type="button">
                    <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo">
                    Login with Google
                </button>
            </form>
            <p>Don’t have an account? <a href="#">Sign Up</a></p>
        </div>
    </div>
</body>
</html>

    <script>
        function onSignIn(googleUser) {
            var profile = googleUser.getBasicProfile();
            console.log('ID: ' + profile.getId());
            console.log('Name: ' + profile.getName());
            console.log('Image URL: ' + profile.getImageUrl());
            console.log('Email: ' + profile.getEmail());

            var id_token = googleUser.getAuthResponse().id_token;
            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'YOUR_BACKEND_URL');
            xhr.setRequestHeader('Content-Type', 'application/json');
            xhr.send(JSON.stringify({token: id_token}));
            xhr.onload = function() {
                console.log('Signed in as: ' + xhr.responseText);
            };
        }

        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                console.log('User signed out.');
            });
        }
    </script>
</body>
</html>
