<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edmodo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" type="image/png" href="assets/img/icon.png"/>
</head>

<body>
    <div id="login-page" class="view-port">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container ">
                <a class="navbar-brand mx-auto order-0" href="index.html">
                    <img src="assets/img/edmodo.png" alt="" class="ed-logo">
                </a>
            </div>
        </nav>
        <div class="page-content container ">
            <h3>
                <span>Create your student account</span>
                <p style="font-size: 15px;">Join a Class with the code given to you by your teacher. After creating your account, you can connect to your parent or guardian.</p>
            </h3>
            <form action="process-sigupstudent.php" method="post">
                <div class="position-relative form-group"><input name="name" id="name" placeholder=" Username"
                        type="text" class="qa-test-login-username form-control-lg form-control" value=""></div>
                <div class="position-relative form-group"><input name="email" id="email" placeholder="Email (Optional)"
                        type="email" class="qa-test-login-username form-control-lg form-control" value=""></div>
                <div class="position-relative form-group"><input name="password" placeholder="Password*" id="password"
                        type="password" class="qa-test-login-password form-control-lg form-control" value=""></div>
                <div class="position-relative form-group"><input name="cpassword" placeholder="Confirm Password*" id="cpassword"
                        type="password" class="qa-test-login-password form-control-lg form-control" value=""></div>
                <div class="signup-or-container">
                <div class="signup-border">
                    <h4 class="my">OR</h4> 
                </div>
                <div class="auth-form-validation-error-container"><div></div></div>
            <div class="sso-actions-container">
                <div class="sso-buttons">
                    <div class="sso-button-group">
                        <div class="sso-login-button btn btn-light qa-test-google_drive-login-btn ">
                            <div class="sso-login-icon-container">
                                <div class="google-sso-login-icon"></div>
                            </div>
                            <div class="sso-provider-name">
                                <span>Continue with Google</span>
                            </div>
                        </div>
                    </div>
                    <div class="sso-button-group">
                        <div class="sso-login-button btn btn-light qa-test-office_365-login-btn ">
                            <div class="sso-login-icon-container">
                                <div class="office365-sso-login-icon "></div>
                            </div>
                            <div class="sso-provider-name"><span>Continue with Microsoft</span></div>
                        </div>
                    </div>
                    <div class="sso-button-group">
                        <div class="sso-login-button btn btn-light qa-test-apple-login-btn ">
                            <div class="sso-login-icon-container">
                                <div class="apple-sso-login-icon"></div>
                            </div>
                            <div class="sso-provider-name"><span>Continue with Apple</span></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-3">
                <div class="signup-or-container">
                    

                    <input type="submit" name="btnSigup" value="Create your account" class="btn btn-primary btn-lg btn-block " >
                    </input>

                    
            
            
            </form>
            <p style="text-align: center;">Already have an account? 
                <a href="">Log in</a> </p><a href=""></a>
            <div class="mt-5">
                <p>By signing up, you agree to our Terms of Service and Privacy Policy. Edmodo is ultimately owned and controlled by NetDragon Websoft Holdings Limited, a public company principally based in Hong Kong with operations in China, traded on the Hong Kong Stock Exchange (HKSE: 777), and ultimately majority owned by Chinese persons located in China.</p>
            </div>
            

              
        
    
    </div>
            
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>