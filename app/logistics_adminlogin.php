<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Page</title>
        <link rel="stylesheet" href="logistics_adminlogin.css">
    </head>
    <body>
        <div class="login-container">
            <img class="background-image" 
                src="logisticslogo.png" 
                alt="Background Image">
            <div class="content">
                <h2>Welcome Back!</h2>
                <form class="login-form" action="#" method="post">
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>

                    <div class="form-group">
                        <label for="password">Password</label>
                        <input 
                        type="password" 
                        id="password" 
                        name="password" required>
                    </div>

                    <div class="form-group">
                        <button type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
