<html>

<head>
    <title>Sign In | Imstapros</title>
    <link rel="icon" type="jpg/gif" href="logo-url-box.png">
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
        background:#eff0f5;
        background-size: cover;
        position: absolute;
        background-position: center;
    }

    .form-box {
        width: 40%;
        height: 480px;
        position: relative;
        margin: 6% auto;
        background: white;
        padding: 5px;
        overflow: hidden;
        display: flex;
        margin-top: 100px;
        background:#ffffff;
    }
    .form-box:hover{
        box-shadow: 0px 0px 10px 0.1px black;
        cursor: pointer;;
    }

    .input-group {
        top: 200px;
        position: absolute;
        width: 90%;
        transition: .5s;
        margin-left: 5%;
    }

    .input-field {
        width: 100%;
        padding: 10px 0;
        margin: 5px 0;
        border-left: 0;
        border-right: 0;
        border-top: 0;
        border-bottom: 1px solid #999;
        outline: none;
        background: #ffffff;
        color: black;
    }
    .input-field:focus{
        color: dodgerblue;
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
        color: darkgrey;
        margin-top: 20px;
        border:2px solid #eff0f5;
        background:#ffffff;
    }
    .submit-btn:hover{
        background:whitesmoke;
        color: grey;
    }

    .dont-have-acc {
        text-align: center;
        display: block;
        text-decoration: none;
        color: dodgerblue;
        margin-top: 20px;
        padding: 0;
    }
    .dont-have-acc:hover{
        color: royalblue;
    }

    .logo {
        width: 40%;
        height: auto;
        margin-left: 30%;
        margin-top: 10px;
    }

    .logog {
        width: 100%;
        /*border-bottom: 1px solid lightgray;*/
    }

    .sign-up {
        text-align: center;
        display: block;
        text-decoration: none;
        color: dodgerblue;
        margin-top: 20px;
        padding: 0;

    }

    .sign-up:hover {
        color: royalblue;
    }

    .url-box {
        width: 40%;
        height: 20px;
        border: 1px solid gray;
        display: flex;
        position: absolute;
        margin-top: 150px;
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
    .error{
        width: 200px;
        height:auto;
        background:none;
        float:right;
        margin-top:100px;
        border-radius:10px;
        z-index:100px;
        position:fixed;
        margin-left:86%;

    }

    @media only screen and (max-width: 600px){
        .form-box {
            width: 100%;
            height: 100vh;
            position: relative;
            background: white;
            margin: 0px;
            padding: 0px;
            overflow: hidden;
            display: flex;
            background:#ffffff;
            z-index: -0.5;
        }
        .form-box:hover{
            box-shadow: 0px 0px 0px 0px black;
        }

        .input-group {
            margin-top: 100px;
        }
        .input-field{
            margin-top:25px;
        }
        .url-box{
            margin-top: 200px;
            width: 50%;
            margin-left: 25%;
        }
        .sign-up{
            margin-top: -5px;
        }

    }

</style>

<body>
<div class="hero">

    <div class="form-box">
        <div class="logo">
            <a href="/login"><img src="/assets/logo.png" class="logog"></a>
        </div>
{{--        <div class="url-box">--}}
{{--            <a href="/" class="url-text"><p class="url" id="url1" style="color:green;">https://</p>--}}
{{--                <p class="url" id="url2" style="color:gray;margin-left:0;">www.imstapros.com/sign-in/</p></a>--}}
{{--        </div>--}}
        <form class="input-group" method="post" id="login">

            {{ csrf_field() }}

            <label><?= isset($error) ? $error : '' ?></label>
            <input type="email" class="input-field" placeholder="Email" name="email">
            <input type="password" class="input-field" placeholder="Password" name="password">
            <button class="submit-btn" type="submit" name="login">login</button>
            <a class="dont-have-acc" href="/forget">Forget Password</a>
            <a class="sign-up" href="/register">Sign Up</a>
        </form>
    </div>
</div>
</body>

</html>
