<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<style>
    body{
        margin:0;
        padding: 0;
    }
    .container{
        width: 80%;
        margin-left: 10%;
        height: 80vh;
        background: white;
        margin-top: 5vh;
        border: 1px solid lightgrey;
    }
    .social-profiles{
        width: 30%;
        height: 70px;
        margin-left: 50px;
        margin-top: 20px;
        background: white;
    }
    .mails{
        width: 30%;
        height: auto;
        background: white;
        margin-left: 50px;
        text-align: center;
        margin-top: 100px;
    }
    .mails p{
        font-size: 20px;
    }

    .section{
        display: flex;
    }

    .message{
        width: 50%;
        height: auto;
        background: white;
        margin-left: 100px;
    }
    .submit-btn{
        width: 100%;
        height: 40px;
        background: dodgerblue;
        color: white;
        font-size: 18px;
        border-radius: 10px;
        text-align: center;
        border: none;
        margin-top: 10px;
    }
    .submit-btn:hover{
        background: #3997F2;
    }
    .submit-btn:focus{
        background: #469DF1;
    }
</style>
<body>

@include('layout.navbar')
<div class="container">
    <div class="social-profiles">
        <a><i class="fab fa-twitter-square" style="font-size: 70px;color: #262626;"></i></a>
        <a><i class="fab fa-facebook-square" style="font-size: 70px;color: #262626;margin-left: 55px;"></i></a>
        <a><i class="fab fa-instagram-square" style="font-size: 70px;color: #262626;margin-left: 55px;"></i></a>
        <a><i class="far fa-envelope" style="font-size: 70px;color: #262626;margin-left: 55px;"></i></a>
    </div>
    <div class="section">
    <div class="mails">
        <p style="font-size: 50px;color: black;font-family: monospace;">Contact-Mail</p>
        <p>Example@yahoo.com</p>
        <p>Example@gmail.com</p>
        <p>Example@hotmail.com</p>
        <p>Example@example.com</p>
    </div>
    <div class="message">
        <p style="font-size: 50px;color: black;font-family: monospace;text-align: center;">Message</p>
        <input type="text" placeholder="name" name="name" style="width: 100%;height: 30px;font-size: 25px;margin-left: 0;border: none;border-bottom: 1px solid black;background: white;text-align: center;" value=" {{--<?php echo $row["name"]; ?>--}} ">

        <input type="email" placeholder="Email" name="email" style="width: 100%;height: 30px;font-size: 25px;border: none;border-bottom: 1px solid black;background: white;margin-top: 30px;text-align: center;"  value="{{--<?php echo $row["username"]; ?>--}}">

        <textarea maxlength="400" id="message" style="height: 100px;width: 100%;resize: none;font-size: 15px;margin-left: 0;border: none;border-bottom: 1px solid black;background: white;margin-top: 30px;" onkeyup="count_up(this)"></textarea>

        <span style="float: right;display: flex;color: grey;font-size: 12px;text-decoration: none;background: white;"><p id="cha_num" style="width: auto;margin-top: -.1px"></p>/400</span>

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
