<!DOCTYPE html>
<html>
<head>
    <title>Withdraw | Monaptor</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/urlbox.png" type="image/gif">

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
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
        z-index:-1;
    }
    .withdraw{
        width: 76%;
        height: 76vh;
        background: #141414;
        margin-left: 21%;
        margin-top: 2vh;
        /*z-index: 1;*/
    }
    .balance-box{
        width: 230px;
        height: 230px;
        border: 5px solid #0abde3;
        border-radius: 100%;
        margin-left: 300px;
        text-align: center;
        background: ;
        margin-top: 50px;
    }
    .options{
        width: 70%;
        height: 80px;
        background: #141414;
        margin-top: 10vh;
        color:#0abde3;
        margin-left:10%;
    }
    #options{
        display: flex;
        width: 90%;
        text-align: center;
        color: #0abde3;
        background: white;
        margin-left:9%;
    }
    #options a{
        display: block;
        width: 100%;
        text-align: center;
        color: #0abde3;
        cursor: pointer;
    }

    /*-------HBL Bank--------*/

    #hbl-withdrawal-page
    {
        width: 60%;
        height: 80vh;
        background: #141414;
        margin-left: 20%;
        margin-top: 10vh;
        z-index: 1;
        position: fixed;
    }
    #hbl-withdrawal
    {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 2;
    }

    /*------- EasyPaisa ---------------*/

    #ep-withdrawal-page
    {
        width: 40%;
        height: 80vh;
        background: white;
        margin-left: 30%;
        margin-top: 10vh;
        z-index: 1;
        position: fixed;
    }

    #ep-withdrawal
    {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 2;
    }

    /*-------- PayPal ----------*/

    #pp-withdrawal-page
    {
        width: 40%;
        height: 80vh;
        background: white;
        margin-left: 30%;
        margin-top: 10vh;
        z-index: 1;
        position: fixed;
    }
    #pp-withdrawal
    {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 2;
    }

    /*------ For All -------*/

    .widtdrawal-title{
        height: 3vh;
        width: auto;
        color: #262626;
        text-align: center;
        padding: 0;
        margin: 0;
        margin-left: 40%;
        margin-top: 5px;

    }
    .close-btn{
        width: 40px;
        height: 40px;
        color: grey;
        background: white;
        border: none;
        float: right;
        cursor: pointer;
    }
    .withdrawal-sec{
        width: 90%;
        margin-left: 5%;
        height: 70vh;
        border: 1px solid lightgrey;
        margin-top: 1vh;
    }
    .input-div-pp{
        width: 80%;
        margin-left: 10%;
        height: 60px;
        background:white;
        margin-top: 30px;
    }
    .input{
        width: 100%;
        height: 30px;
        border: none;
        border-bottom: 1px solid grey;
        background: white;
    }
    .input label{
        font-size: 20px;
    }
    .amount-box{
        width: 60%;
        height: 30px;
        text-align: center;
        font-size: 20px;
    }
    .withdraw-btn{
        width: 60%;
        margin-left: 20%;
        background: white;
        height: 40px;
        margin-top: 10px;
    }
    .withdraw-btn button{
        width: 100%;
        height: 40px;
        border-radius: 10px;
        text-align: center;
        line-height: 40px;
        background: #008ac9;
        border:2px solid #008ac9;
        font-size: 20px;
        color: white;
        cursor: pointer;
    }
    .notice{
        width: 80%;
        font-size: 16px;
        color: #cc2727;
        height: 20px;
        padding: 0;
        margin: 0;
        margin-left: 10%;
    }
    .navbar{
        position:fixed;
        width:100%;
        margin-top:15px;
    }
    .Verify_btn{
        display:block;
        height:50px;
        width:10%;
        padding-left:10px;
        padding-right:10px;
        color:#0abde3;
        text-decoration:none;
        font-size:15px;
        text-align:center;
        line-height:50px;
        border:2px solid #0abde3;
        border-radius:5px;
        margin-left:40%;

    }
    .title_box{
        text-align: left;font-size: 40px;color: #0abde3;margin-top: -1px;
    }
    .money{
        color: #0abde3;font-size: 40px;line-height: 170px;
    }
    .info_tags{
        margin-top: 50px;font-size: 20px;color:lightgray;background:#141414;
    }
    .GG{
        width: auto;height: 50px;margin-left: 5px;margin-top: 5px;
    }
    .AG{
        width: auto;height: 60px;margin-left: 20px;
    }
    .PP{
        width: auto;height: 25px;margin-left: 30px;margin-top: 20px;
    }
    .EPA{
        width: auto;height: 40px;margin-left: 20px;margin-top: 15px;
    }
    .HBLP{
        width: auto;height: 40px;margin-left: 20px;margin-top: 15px;
    }
    .option_title{
        height: 30px;display: block;width: 80%;margin-left: 7%;font-size: 20px;background:#141414;
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
        .withdraw{
            width:100%;
            height:100%;
            padding:0;
            padding-top:20px;
            padding-bottom:30px;
            margin:0;
            background:#0f0f0f;
        }
        /* for balance box */
        .balance-box{
            width:200px;
            height:200px;
            margin:auto;
            border:3px solid #0abde3;
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
            margin-top:100px;
        }
        
        
        .info_tags{
            width:90%;
            margin-left:5%;
            padding:0;
            font-size:15px;
            display:block;
            margin-top:80px;
            background:#0f0f0f;
            color:lightgrey;
            float:justify;
            text-align:justify;
        }
        .options{
            width:100%;
            height:auto;
            margin:0;
            padding:0;
            background:#0f0f0f;
            margin-top:13vh;
        }
        #options{
            width:100%;
            height:auto;
            margin:0;
            padding:0;
            background:white;
        }
        .GG{
        width: auto;height: 40px;margin-top: 5px;
        margin-left:0;
    }
    .AG{
        width: auto;height: 50px;
        margin-left:0;
    }
    .PP{
        width: auto;height: 20px;margin-top: 15px;
        margin-left:0;
    }
    .EPA{
        width: auto;height: 40px;margin-top: 5px;
        margin-left:0;
    }
    .HBLP{
        width: auto;height: 30px;margin-top: 10px;
        margin-left:0;
    }
    .option_title{
        height: 30px;display: block;width: 96%;margin-left: 2%;font-size: 20px;background:#101010;
    }
    }

</style>
<body>
<div class="navbar">@include('layout.navbar')</div>
<!-- Modal HTML embedded directly into document -->
<div id="ex1" class="modal">
    <img src="/assets/paypal.png" class="widtdrawal-title">
    <p>Please fill all the information correctly or we're not responsibly for lost fund.</p>

    <form method="post" action="/withdraw/submit">

        @csrf

        <input type="hidden" name="type" value="paypal">

        <div class="input-div-pp">
            <label>Name:</label><br>
            <input type="text" name="username" value="{{auth()->user()->username}}" class="input" required>
        </div>
        <div class="input-div-pp">
            <label>PayPal Address:</label><br>
            <input type="text" name="target" placeholder="Paypal Address" class="input" required>
        </div>
        <div class="input-div-pp">
            <label>Enter Amount:</label>
            <input type="number" name="amount" placeholder="amount"  value="{{ auth()->user()->wallet }}" max="{{ auth()->user()->wallet }}"  class="amount-box">
        </div>

        <div class="withdraw-btn">
            <button>Withdraw</button>
        </div>
    </form>

</div>

<!-- For HBL BANK -->
<div id="hbl" class="modal">
    <img src="/assets/HBL.png" class="widtdrawal-title">
    <p>Please fill all the information correctly or we're not responsibly for lost fund.</p>

    <form method="post" action="/withdraw/submit">

        @csrf

        <input type="hidden" name="type" value="paypal">

        <div class="input-div-pp">
            <label>Name:</label><br>
            <input type="text" name="username" value="{{auth()->user()->username}}" class="input" required>
        </div>
        <div class="input-div-pp">
            <label>Account Holder Name:</label><br>
            <input type="text" name="target" placeholder="Account Holder Name" class="input" required>
        </div>
        <div class="input-div-pp">
            <label>HBL Address:</label><br>
            <input type="text" name="target" placeholder="Account Number" class="input" required>
        </div>
        <div class="input-div-pp">
            <label>Receiver Phone No:</label><br>
            <input type="text" name="target" placeholder="Receiver Phone Number" class="input" required>
        </div>
        <div class="input-div-pp">
            <label>Enter Amount:</label>
            <input type="number" name="amount" placeholder="amount"  value="{{ auth()->user()->wallet }}" max="{{ auth()->user()->wallet }}"  class="amount-box">
        </div>

        <div class="withdraw-btn">
            <button>Withdraw</button>
        </div>
    </form>

</div>


<!-- Modal HTML embedded directly into document -->
<div id="easy" class="modal">
    <img src="/assets/easypaisa.png" class="widtdrawal-title">
    <p>Please fill all the information correctly or we're not responsibly for lost fund.</p>

    <form method="post" action="/withdraw/submit">

        @csrf

        <input type="hidden" name="type" value="easypaisa">

        <div class="input-div-pp">
            <label>Name:</label><br>
            <input type="text" name="username" value="{{auth()->user()->username}}" class="input" required>
        </div>
        <div class="input-div-pp">
            <label>EasyPaisa Receiver Account Number:</label><br>
            <input type="text" name="target" placeholder="0345917890" class="input" required>
        </div>
        <div class="input-div-pp">
            <label>Enter Amount:</label>
            <input type="number" name="amount" placeholder="amount" value="{{ auth()->user()->wallet }}" max="{{ auth()->user()->wallet }}" class="amount-box">
        </div>

        <div class="withdraw-btn">
            <button>Withdraw</button>
        </div>
    </form>
</div>


        <div class="container">
            @include('layout.account-menu')
            @if(auth()->user()->verify == 'yes')
            <div class="withdraw" id="withdraw">
                <p class="title_box">Withdraw</p>
                <div class="balance-box">
                    <p class="money">${{ auth()->user()->wallet  }}</p>
                </div>
                <p style="color: #0abde3;text-align:center;font-size:20px;">Your Current Balance</p>
                <div class="options">
                    <label class="option_title">Withdraw Options:</label>
                    <div id="options">
                        <a title="Withdraw with Google-Gift-Card" onclick="alert('This Method is Enabled.')"><img src="/assets/download.png" class="GG"></a>
                        <a title="Withdraw with Amazon-Gift-Card" onclick="alert('This Method is Enabled.')"><img src="/assets/amazon.png" class="AG"></a>
                        <a title="Withdraw with PayPal" href="#ex1" rel="modal:open"><img src="/assets/paypal.png" class="PP"></a>
                        <a title="Withdraw with EasyPaisa" href="#easy" rel="modal:open"><img src="/assets/easypaisa.png" class="EPA"></a>
                        <a title="Withdraw with HBL Bank"  href="#hbl" rel="modal:open"><img src="/assets/HBL.png" class="HBLP"></a>
                    </div>
        <ul class="info_tags">
            <li>It can take up to 24 hour with bad conditions for withdraw, but usually it takes lesser time than mentioned.</li><br>
            <li>Minimum You can Withdraw $5 at a time.</li><br>
            <li>Maximum You can Withdraw $15 at a time.</li>
        </ul>
    </div>
</div>
</div>
@else
    <div style="width: 100%;text-align: center;padding-top: 50px;">
        <h1 style="color:#0abde3;">You should verify the account before withdraw</h1>
        <small> <a href="/verify" class="Verify_btn">Go to verifivation</a> </small>
    </div>
@endif


</body>
</html>