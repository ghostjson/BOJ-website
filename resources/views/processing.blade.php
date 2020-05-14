<!DOCTYPE html>
<html>
<head>
    <title>Track Orders | Monaptor</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/urlbox.png" type="image/gif">
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
    .processing{
        width: 76%;
        height: 76vh;
        background: #141414;
        margin-left: 21%;
        margin-top: 2vh;
        z-index: -1;
        display: block;
    }
    .process-track{
        width: 74%;
        height: 60vh;
        background: #101010;
        margin-left: 15%;
        border: 1px solid #252525;
    }
    .orders{
        width: 98%;
        margin-left: 2%;
        height: 55vh;
        background: #101010;
        margin-top: -10px;
        overflow-x: hidden;
        overflow-y: scroll;
    }
    .orders::-webkit-scrollbar-track{
        background-color: #101010;
        border-radius: 10px;
    }
    .orders::-webkit-scrollbar{
        width: 10px;
        background-color: #101010;
        border-radius: 10px;
    }
    .orders::-webkit-scrollbar-thumb{
        background-color: #141414;
        border-radius: 10px;
    }
    .order-box{
        width: 96%;
        height: 100px;
        background: whitesmoke;
        border: 1px solid lightgrey;
        border-radius: 10px;
        margin-left: 2%;
        margin-top: 20px;
    }
    .order-heading{
        width: 98%;
        height: 35px;
        border-bottom: 1px solid lightgrey;
        background: whitesmoke;
        text-align: left;
        line-height: 40px;
        font-size: 20px;
        margin-top: -0.5px;
        margin-left: 1%;
        color: #262626;
    }
    .cancel-btn{
        border: 1px solid #0980BF;
        background: #8BCCED;
        color: #032435;
        border-radius: 5px;
        float: right;
        width: 60px;
        height: 20px;
        margin-top: 10px;
        margin-right: 10px;
    }
    .order-description{
        width: 98%;
        height: 42px;
        background: whitesmoke;
        margin-top: -20px;
        line-height: 40px;
        font-size: 15px;
        margin-left: 1%;
        color: #262626;
    }
    .order-date{
        width: 98%;
        height: 15px;
        background:whitesmoke;
        text-align: right;
        font-size: 10px;
        margin-top: -15px;
    }
    .complete{
        border: 1px solid #018f6b;
        background: #10ac84;
        color: lightgrey;
        border-radius: 5px;
        float: right;
        width: 80px;
        height: 20px;
        margin-top: 10px;
        margin-right: 10px;
        line-height: 20px;
        font-size: 13px;
        text-align: center;
    }
    .pending{
        border: 1px solid #03a0c3;
        background: #0abde3;
        color: lightgrey;
        border-radius: 5px;
        float: right;
        width: 80px;
        height: 20px;
        margin-top: 10px;
        margin-right: 10px;
        line-height: 20px;
        font-size: 13px;
        text-align: center;
    }
    .navbar{
        position:fixed;
        width:100%;
        margin-top:15px;
    }
    .order_box_title{
        display: block;
        width: 100%;
        height: 30px;
        background: #111111;
        border: 1px solid #252525;
        color: #0abde3;
        text-align: center;
        margin-top: -0.5px;
        font-size: 20px;
    }
    .title_box{
        text-align: left;
        font-size: 40px;
        color: #0abde3;
        margin-top: -1px;
    }
    @media only screen and (max-width:500px)
    {

        .navbar{
            margin-top:50px;
        }
        /* For Whole Box */
        .container{
        width: 100%;
        padding:0;
        margin:0;
        margin-left: 0;
        height:100%;
        margin-top:100px;
        background: #0f0f0f;
        border:none;
        z-index:-1;
        position:absolute;
    }
        .title_box{
            font-size:25px;
            margin-left:5%;
            margin-top:50px;
        }
        .processing{
            width:100%;
            height:80%;
            margin:0;
            padding:0;
            position:absolute;
            margin-top:19%;
            background:#0f0f0f;
        }
        .process-track{
            width:90%;
            height:90%;
            margin:0;
            padding:0;
            position:absolute;
            background:#141414;
            margin-left:5%;
        }
        .orders{
            width:100%;
            height:85%;
            padding:0;
            margin:0;
            background:#141414;
        }
        .order-box{
            background:#0f0f0f;
            width:90%;
            margin-left:5%;
            border:1px solid #252525;
            height:auto;

        }
        .order-heading{
            color:white;
            background:#0f0f0f;
            border-bottom: 1px solid #252525;
            font-size:11px;
        }
        .order-description{
            color:white;
            background:#0f0f0f;
            margin-top:10px;
            font-size: 14px;
        }
        .order-date{
            background:#0f0f0f;
            color:lightgrey;
        }
        .order_box_title{
            color:white;
        }
        .complete{
        border: 1px solid #025e47;
        background: #10ac84;
        color: lightgrey;
        border-radius: 5px;
        float: right;
        width: 65px;
        height: 20px;
        margin-top: 10px;
        margin-right: 5px;
        line-height: 20px;
        font-size: 11px;
        text-align: center;
    }
    .pending{
        border: 1px solid #a77305;
        background: #feca57;
        color: #0f0f0f;
        border-radius: 5px;
        float: right;
        width: 65px;
        height: 20px;
        margin-top: 5px;
        margin-right: 10px;
        line-height: 20px;
        font-size: 11px;
        text-align: center;
    }
        
    }
</style>
<body>

<div class="navbar">@include('layout.navbar')</div>

<div class="container">
    @include('layout.account-menu')
    <div class="processing">
        <p class="title_box">Processing</p>
        <div class="process-track">
            <p class="order_box_title">Track Your Withdrawal Process</p>
            <div class="orders">


                @foreach($withdrawals as $with)
                    <div class="order-box">
                        <p class="order-heading"> Withdrawing ${{$with->amount}} dollar to {{$with->type}}<span class="{{$with->status}}">{{$with->status}}</span></p></p>
                        <p class="order-description">Withdraw Paypal - ID : {{$with->id}}
                        <p class="order-date">{{$with->created_at}}</p></p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
</body>
</html>

