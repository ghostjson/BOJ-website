<!DOCTYPE html>
<html>
<head>
    <title>BOJ</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<style>
    body{
        margin:0;
        padding: 0;
    }

    .landing-page{
        width: 100%;
        height: 500px;
        background: white;
        margin-top: .5px;
        text-align: center;
        font-size: 50px;
        color: #002366;
    }
    .landing-page p{
        margin-top: 80px;
    }
    .contents{
        width: 70%;
        margin-left: 15%;
        height: 200px;
        margin-top: 100px;
        display: flex;
    }
    .video:hover{
        border: 1px solid dodgerblue;
    }
    .video{
        width: 20%;
        height: 200px;
        background: white;
        margin-left: 10%;
    }.site:hover{
         border: 1px solid dodgerblue;
     }
    .site{
        width: 20%;
        height: 200px;
        background:white;
        margin-left: 12%;
    }.verify:hover{
         border: 1px solid dodgerblue;
     }
    .verify{
        width: 20%;
        height: 200px;
        background: owhite;
        margin-left: 12%;
    }
    .apps:hover{
        border: 1px solid dodgerblue;
    }
    .apps{
        width: 20%;
        height: 200px;
        background: owhite;
        margin-left: 12%;
    }
    .abouts{
        width: 100%;
        height: auto;
        position: absolute;
        background: white;
        margin-top: 100px;
        display: flex;

    }
    .purpose{
        width: 15%;
        height: auto;
        text-align: center;
        font-size: 20px;
        color: black;
        font-family: sans-serif;
        margin-left: 20%;
        margin-top: 150px;
    }
    .purpose1{
        width: 15%;
        height: auto;
        text-align: center;
        font-size: 20px;
        color: black;
        font-family: sans-serif;
        margin-left: 7.5%;
        margin-top: 150px;
    }
    .purpose2{
        width: 15%;
        height: auto;
        text-align: center;
        font-size: 20px;
        color: black;
        font-family: sans-serif;
        margin-left: 7.5%;
        margin-top: 150px;
    }
    .purpose3{
        width: 15%;
        height: auto;
        text-align: center;
        font-size: 20px;
        color: black;
        font-family: sans-serif;
        margin-left: 20%;
        margin-top: 400px;
        position: absolute;
    }
    .purpose4{
        width: 15%;
        height: auto;
        text-align: center;
        font-size: 20px;
        color: black;
        font-family: sans-serif;
        margin-left: 42.5%;
        margin-top: 400px;
        position: absolute;
    }
    .purpose5{
        width: 15%;
        height: auto;
        text-align: center;
        font-size: 20px;
        color: black;
        font-family: sans-serif;
        margin-left: 65%;
        margin-top: 400px;
        position: absolute;
    }
    .link-btn{
        width: 80%;
        margin-left: 10%;
        background: dodgerblue;
        border-radius: 10px;
        height: 30px;
        font-size: 20px;
        color: white;
        display: block;
        text-align: center;
        font-family: sans-serif;
        margin-top: 25px;
        text-decoration: none;
        line-height: 30px;
    }
</style>
<body>

@include('layout.navbar')

<div class="landing-page">
    <p>BOJ is a free earning website that helps you earn in this Lockdown</p>
    <div class="contents">
        <div class="video">
            <div style="width: 100%;height: 40px;font-size: 30px;display: block;background: white;text-align: center;font-family: sans-serif;color: dodgerblue;">Video</div>
            <div style="width: 90%;font-size: 17px;background: white;display: block;margin-left: 5%;margin-top: 20px;color: dodgerblue;font-family: sans-serif;">  Watch each video and get paid for each video<br> but yo have to finish the video for full award.
            </div>
            <a href="/videos" class="link-btn">click here</a>
        </div>
        <div class="site">
            <div style="width: 100%;height: 40px;font-size: 30px;display: block;background: white;text-align: center;font-family: sans-serif;color: dodgerblue;">Websites</div>
            <div style="width: 90%;font-size: 17px;background: white;display: block;margin-left: 5%;margin-top: 20px;color: dodgerblue;font-family: sans-serif;">  Watch each video and get paid for each video<br> but yo have to finish the video for full award.
            </div>
            <a   href="/websites" class="link-btn">click here</a>
        </div>
        <div class="apps">
            <div style="width: 100%;height: 40px;font-size: 30px;display: block;background: white;text-align: center;font-family: sans-serif;color: dodgerblue;">Apps</div>
            <div style="width: 90%;font-size: 17px;background: white;display: block;margin-left: 5%;margin-top: 20px;color: dodgerblue;font-family: sans-serif;">  Watch each video and get paid for each video<br> but yo have to finish the video for full award.
            </div>
            <a href="/websites" class="link-btn">click here</a>
        </div>
        <div class="verify">
            <div style="width: 100%;height: 40px;font-size: 30px;display: block;background: white;text-align: center;font-family: sans-serif;color: dodgerblue;">Verification</div>
            <div style="width: 90%;font-size: 17px;background: white;display: block;margin-left: 5%;margin-top: 20px;color: dodgerblue;font-family: sans-serif;">  Watch each video and get paid for each video<br> but yo have to finish the video for full award.
            </div>
            <a href="/verify" class="link-btn">click here</a>
        </div>
    </div>
</div>
<div class="abouts">
    <p style="font-size: 40px;color: black;text-align: center;position: absolute;margin-left: 48%;">About</p>
    <div class="purpose">
        <p>Purpose</p>
        <p>This Web Application is made with a purpose of helping people, who are still living in poverty.</p>
    </div>
    <div class="purpose1">
        <p>Purpose</p>
        <p>This Web Application is made with a purpose of helping people, who are still living in poverty.</p>
    </div>
    <div class="purpose2">
        <p>Purpose</p>
        <p>This Web Application is made with a purpose of helping people, who are still living in poverty.</p>
    </div>
    <div class="purpose3">
        <p>Purpose</p>
        <p>This Web Application is made with a purpose of helping people, who are still living in poverty.</p>
    </div>
    <div class="purpose4">
        <p>Purpose</p>
        <p>This Web Application is made with a purpose of helping people, who are still living in poverty.</p>
    </div>
    <div class="purpose5">
        <p>Purpose</p>
        <p>This Web Application is made with a purpose of helping people, who are still living in poverty.</p>
    </div>
</div>

@include('layout.footer')

</body>
</html>

