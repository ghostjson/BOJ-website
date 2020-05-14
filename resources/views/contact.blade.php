<!DOCTYPE html>
<html>
<head>
    <title>Contact | Monaptor</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/urlbox.png" type="image/gif">
</head>
<style>
    body{
        margin:0;
        padding: 0;
        background:#0f0f0f;
    }
    .container{
        width: 80%;
        margin-left: 10%;
        height: 80vh;
        background: #141414;
        margin-top: 5vh;
        border: 1px solid #252525;
    }
    .social-profiles{
        width: 30%;
        height: 70px;
        margin-left: 50px;
        margin-top: 20px;
    }
    .mails{
        width: 30%;
        height: auto;
        margin-left: 50px;
        text-align: center;
        margin-top: 100px;
    }
    .mails p{
        font-size: 20px;
        color:#0abde3;
    }

    .section{
        display: flex;
    }

    .message{
        width: 50%;
        height: auto;
        margin-left: 100px;
    }
    .submit-btn{
        width: 100%;
        height: 40px;
        color:#0abde3;
        font-size: 18px;
        border-radius: 10px;
        text-align: center;
        border: none;
        margin-top: 10px;
        border:2px solid #0abde3;
        background:#141414;
    }
    .submit-btn:hover{
        background: #0abde3;
        color:#0f0f0f;
    }
    
    .navbar{
        position:fixed;
        width:100%;
        margin-top:15px;
    }
</style>
<body>

<div class="navbar">@include('layout.navbar')</div>
<div class="container">
    <div class="social-profiles">
        <a><i class="fab fa-twitter-square" style="font-size: 70px;color: #0abde3;"></i></a>
        <a><i class="fab fa-facebook-square" style="font-size: 70px;color: #0abde3;margin-left: 55px;"></i></a>
        <a><i class="fab fa-instagram-square" style="font-size: 70px;color: #0abde3;margin-left: 55px;"></i></a>
        <a><i class="far fa-envelope" style="font-size: 70px;color: #0abde3;margin-left: 55px;"></i></a>
    </div>
    <div class="section">
    <div class="mails">
        <p style="font-size: 50px;color:white;font-family: monospace;">Contact-Mail</p>
        <p>Example@yahoo.com</p>
        <p>Example@gmail.com</p>
        <p>Example@hotmail.com</p>
        <p>Example@example.com</p>
    </div>
    <div class="message">
        <p style="font-size: 50px;color: white;font-family: monospace;text-align: center;">Message</p>
        <input type="text" placeholder="name" name="name" style="background:#141414;width: 100%;color:white;height: 30px;font-size: 25px;margin-left: 0;border: none;border-bottom: 1px solid #0abde3;text-align: center;" value=" {{--<?php echo $row["name"]; ?>--}} ">

        <input type="email" placeholder="Email" name="email" style="background:#141414;width: 100%;color:white;height: 30px;font-size: 25px;border: none;border-bottom: 1px solid #0abde3;margin-top: 30px;text-align: center;"  value="{{--<?php echo $row["username"]; ?>--}}">

        <textarea placeholder="Message" maxlength="400" id="message" style="background:#141414;height: 100px;width: 100%;color:white;resize: none;font-size: 15px;margin-left: 0;border: none;border-bottom: 1px solid #0abde3;margin-top: 30px;" onkeyup="count_up(this)"></textarea>

        <span style="float: right;display: flex;color: #0abde3;font-size: 12px;text-decoration: none;"><p id="cha_num" style="width: auto;margin-top: -.1px"></p>/400</span>

        <input type="submit" value="Submit" name="submit" class="submit-btn">
    </div></div>
</div>
</body>
</html>
<script>
    function count_up(bio_cha) {
        document.getElementById('cha_num').innerHTML = bio_cha.value.length;
    }
</script>
