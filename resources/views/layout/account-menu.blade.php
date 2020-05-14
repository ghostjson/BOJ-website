<head>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<style>
    .side-nav{
        width: 10%;
        height: 300px;
        background: #0f0f0f;
        margin-top: 2vh;
        margin-left: 10px;
        position: absolute;
        border-radius: 10px;
        text-align: center;
    }
    .side-nav a{
        width: 100%;
        height: 100px;
        display: block;
        color: #0abde3;
        line-height: 75px;
        text-decoration: none;
    }
    @media only screen and (max-width:500px)
    {
        .side-nav{
            width:90%;
            height:40px;
            position:absolute;
            margin-top:30px;
            display:flex;
            text-align:center;
            margin-left:5%;
            border:1px solid #0abde3;
            background:#141414;
        }
        .side-nav a{
            font-size:13px;
            width:33%;
            text-align:center;
            display:block;
            height:40px;
            margin:0;
            line-height:40px;
        }
        .side-nav a:hover{
            background:#0abde3;
            color:#0f0f0f;
        }
    }
</style>
<div class="side-nav">
    <a href="/account"><i class="fas fa-dollar-sign" style="margin-right:10px;"></i> Balance</a>
    <a href="/withdraw"><i class="fas fa-share" style="margin-right:10px;"></i> Withdraw</a>
    <a href="/processing"><i class="fas fa-spinner" style="margin-right:10px;"></i> Processing</a>
</div>
