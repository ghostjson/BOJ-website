<html>
<head>
    <title>Sign In | Imstapros</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
            </head>
            <style>
                * {
                    font-family: sans-serif;
                }

                body {
                    padding: 0;
                    margin: 0;
                    background: #ffffff;
                }

                .hero {
                    height: 100%;
                    width: 100%;
                    background:#ffffff;
                    background-size: cover;
                    position: absolute;
                    background-position: center;
                }

                .form-box {
                    width: 40%;
                    height:700px;
                    position: relative;
                    margin: 6% auto;
                    background: white;
                    padding: 5px;
                    overflow: hidden;
                    display: flex;
                    margin-top: 100px;
                    background:#ffffff;
                    border: 1px solid lightgray;
                }

                .input-group {
                    position: absolute;
                    width: 80%;
                    margin-left: 10%;
                    text-align: center;
                    margin-top: 280px;
                }

                .input-field {
                    width: 100%;
                    margin-top: 30px;
                    border: none;
                    border-bottom: 1px solid lightgrey;
                    outline: none;
                    background: #ffffff;
                    color: black;
                    border-bottom-right-radius: 5px;
                }

                .submit-btn {
                    width: 100%;
                    padding: 10px 30px;
                    cursor: pointer;
                    display: block;
                    margin: auto;
                    border: 0;
                    outline: none;
                    border-radius: 30px;
                    font-size: 18px;
                    color: dodgerblue;
                    margin-top: 10px;
                    border:2px solid #eff0f5;
                    background:#ffffff;
                }
                .submit-btn:hover{
                    background:#eff0f5;
                }

                .dont-have-acc {
                    text-align: center;
                    display: block;
                    text-decoration: none;
                    color: dodgerblue;
                    margin-top: 20px;
                }
                .dont-have-acc:hover{
                    color: royalblue;
                }

                .site-info {
                    width: 40%;
                    margin-left: 30%;
                    background: none;
                    font-family: monospace;
                    position: absolute;
                    text-align: center;
                    margin-top: -40px;
                    display: flex;

                }

                .logo {
                    width: 40%;
                    height: auto;
                    margin-left: 30%;
                    margin-top: 60px;
                }

                .logog {
                    width: 100%;
                }

                .url-box {
                    width: 40%;
                    height: 20px;
                    border: 1px solid gray;
                    display: flex;
                    position: absolute;
                    margin-top: 100px;
                    margin-left: 30%;
                    line-height: 20px;
                    overflow:hidden;
                }

                .url {
                    position: relative;
                    float: left;
                    margin-left: 10px;
                    margin-top: -1px;
                }
                #error{
                    width: 80%;
                    background: white;
                    height: auto;
                    position: absolute;
                    margin-top: 170px;
                    margin-left: 10%;
                    z-index: 1;
                }
                @media only screen and (max-width: 1700px){

                }
            </style>

            <body>
            <div class="hero">
                <div class="form-box">
                    <div class="logo">
                        <a href="/register"><img src="/assets/logo.png" class="logog"></a>
                    </div>
{{--                    <div class="url-box">--}}
{{--                        <a href="register.php"><p class="url" style="color:green;float:justify;">https://</p>--}}
{{--                            <p class="url" style="color:gray;margin-left:0;float:justify;">www.imstapros.com/sign-up/</p></a>--}}
{{--                    </div>--}}

                    <div id="error"></div>
                    <form class="input-group" action="/register" method="post" id="register">
                        {{ csrf_field() }}
                        <input type="text" class="input-field" placeholder="Username" name="username">
                        <input type="email" class="input-field" placeholder="Email" name="email">
                        <input type="password" class="input-field" placeholder="Password" name="password">
                        <input type="password" class="input-field" placeholder="Confirm-Password" name="confirm_password">
                        <input type="password" class="input-field" placeholder="Secret Code" name="secret">
                        <div style="width: 100%;height: auto;display: flex;font-size: 12px;margin-top: 20px;">
                            <input type="checkbox"> <p style="padding-left: 3px;margin-top: 3px;">By click on this checkbox you're agreeing to our <a>policy and terms</a></p>
                        </div>
                        <button class="submit-btn" id="submit_button" type="submit" name="register">Sign Up</button>
                        <a class="sign-in" href="/login" style="text-align: center;margin-top: 10px;display: block;text-decoration: none;color: dodgerblue;">Already Sign Up? Sign In</a>
                    </form>
                </div>
                <div class="site-info">

                </div>
            </div>
            </body>
</html>
