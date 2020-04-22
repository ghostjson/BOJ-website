<!DOCTYPE html>
<html>
<head>
    <title>Videos</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        .vid-sec{
            width: 80%;
            height:auto;
            background: white;
            margin-left: 10%;
            margin-top: 100px;

        }
        .video{
            width: 60%;
            height: 500px;
            background: whitesmoke;
            margin-bottom: 100px;
            margin-left: 20%;
        }
        .title{
            width: 80%;
            height: 200px;
            margin-left: 10%;
            margin-top: 50px;
            font-size: 30px;
            color: #262626;
            text-align: center;
        }
        .bottom-menu{
            position: relative;
        }
    </style>
<body>

@include('layout.navbar')

<div class="title">
    <p>Complete The Mission By Watching Maximum 4 Videos, any Video.<br>
        Then You Will Be Done With Your First Mission.
    <p style="font-size: 20px;margin-top: -20px;">While Watching Videos You Won't be Able To Rewind or Skip Any Part of The Video.<br>You have to watch full Video to Complete The Mission</p>
    </p>
</div>
<div class="vid-sec">
    <div class="video">
        1
    </div>
    <div class="video">
        2
    </div>
    <div class="video">
        3
    </div>
    <div class="video">
        4
    </div>
    <div class="video">
        5
    </div>
    <div class="video">
        6
    </div>
    <div class="video">
        7
    </div>
    <div class="video">
        8
    </div>
</div>


<div class="bottom-menu">

    @include('layout.footer')</div>
</body>
</html>
