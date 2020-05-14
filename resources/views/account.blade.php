
<!DOCTYPE html>
<html>
<head>
    <title>Wallet | Monaptor</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/urlbox.png" type="image/gif">

    @include('layout.ad-blocker-detect')
</head>
<style>
    body{
        margin: 0;
        padding: 0;
        background:#0f0f0f;
    }
    .container{
        width: 60%;
        margin-left: 20%;
        height: 80vh;
        margin-top: 5vh;
        background: #141414;
        border: 1px solid #252525;
    }
    .balance{
        width: 76%;
        height: 76vh;
        background: ##141414;
        margin-left: 21%;
        margin-top: -2vh;
        z-index: -1;
        display: block;
    }
    .balance-box{
        width: 230px;
        height: 230px;
        border: 5px solid #0abde3;
        border-radius: 100%;
        margin-left: 300px;
        text-align: center;
        background: #141414;
    }
    
    .navbar{
        position:fixed;
        width:100%;
        margin-top:15px;
    }
    .title{
        font-size: 30px;color: white;margin-left: 290px;display: flex;font-family: sans-serif;
    }
    .money{
        color: #0abde3;font-size: 40px;line-height: 170px;
    }
    .info_tags{
        margin-top: 150px;font-size: 20px;color:lightgray;
    }
    .title_box{
        text-align: left;font-size: 40px;color: #0abde3;
    }
    @media only screen and (max-width:500px)
    {

        .navbar{
            margin-top:50px;
        }
        /* For Whole Box */
        .container{
            width:100%;
            padding:0;
            margin:0;
            margin-top:100px;
            position:absolute;
            z-index:-1;
            background:#0f0f0f;
            border:none;
        }
        /* for balance box */
        .balance-box{
            width:200px;
            height:200px;
            margin:auto;
            border:3px solid #0abde3;
            background:#0f0f0f;
        }
        .money{
            font-size:30px;
            line-height:170px;
        }
        .balance{
            width:90%;
            height:auto;
            margin-top:50px;
            margin-left:5%;
            padding-bottom:30px;
            padding-top:20px;
            background:#0f0f0f;
        }
        .title_box{
            font-size:25px;
            margin-left:5%;
        }
        
        .info_tags{
            width:96%;
            margin-left:2%;
            padding:0;
            font-size:15px;
            display:block;
            margin-top:100px;
            background:#0f0f0f;
            color:lightgrey;
            float:justify;
            text-align:justify;
        }
    }
</style>
<body>
<div class="navbar">@include('layout.navbar')</div>

<div class="container">
@include('layout.account-menu')

    <div class="balance">
        <p class="title_box">Balance</p>
        <div class="balance-box"><p class="money">${{ auth()->user()->wallet  }}</p></div>
        <p style="color: #0abde3;text-align:center;font-size:20px;">Your  Current  Balance </p>
        <ul class="info_tags">
            <li>It can take up to 24 hour with bad conditions for withdraw, but usually it takes lesser time than mentioned.</li><br>
            <li>Minimum You can Withdraw $5 at a time.</li><br>
            <li>Maximum You can Withdraw $15 at a time.</li>
        </ul>
    </div>
</div>
</body>
</html>

