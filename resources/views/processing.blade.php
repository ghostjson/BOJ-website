<!DOCTYPE html>
<html>
<head>
    <title>Processin</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    .container{
        width: 60%;
        margin-left: 20%;
        height: 80vh;
        margin-top: 5vh;
        background: white;
        border: 1px solid lightgrey;
    }
    .processing{
        width: 76%;
        height: 76vh;
        background: white;
        margin-left: 21%;
        margin-top: 2vh;
        z-index: -1;
        display: block;
    }
    .process-track{
        width: 74%;
        height: 60vh;
        background: white;
        margin-left: 15%;
        border: 1px solid lightgrey;
    }
    .orders{
        width: 98%;
        margin-left: 2%;
        height: 55vh;
        background: white;
        margin-top: -10px;
        overflow-x: hidden;
        overflow-y: scroll;
    }
    .orders::-webkit-scrollbar-track{
        background-color: white;
        border-radius: 10px;
    }
    .orders::-webkit-scrollbar{
        width: 10px;
        background-color: white;
        border-radius: 10px;
    }
    .orders::-webkit-scrollbar-thumb{
        background-color: whitesmoke;
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
        border: 1px solid #09A75A;
        background: #89E7B9;
        color: #09A75A;
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
    .bottom-menu{
        position: relative;
    }
</style>
<body>

@include('layout.navbar')

<div class="container">
    @include('layout.account-menu')
    <div class="processing">
        <p style="text-align: left;font-size: 40px;color: #262626;margin-top: -1px;">Processing</p>
        <div class="process-track">
            <p style="display: block;width: 100%;height: 30px;background: whitesmoke;border: 1px solid lightgrey;color: grey;text-align: center;margin-top: -0.5px;font-size: 20px;">Track Your Withdrawal Process</p>
            <div class="orders">
{{--                <div class="order-box">--}}
{{--                    <p class="order-heading"> Withdrawing $5 dollar to paypal<button class="cancel-btn">Cancel</button></p>--}}
{{--                    <p class="order-description">Withdraw Paypal - ID : WEDTG1541DGF65DGH4685G4V6T--}}
{{--                    <p class="order-date">2020-4-15 12:45:02</p></p>--}}
{{--                </div>--}}
{{--                <div class="order-box">--}}
{{--                    <p class="order-heading"> Withdrawing $5 dollar to Amazon-Gift-Card<button class="cancel-btn">Cancel</button></p>--}}
{{--                    <p class="order-description">Withdraw Amazon-Gift-Card - ID : WEDTG1541DGF65DGfhfgH4685G4V6T--}}
{{--                    <p class="order-date">2020-4-14 12:45:02</p></p>--}}
{{--                </div>--}}
{{--                <div class="order-box">--}}
{{--                    <p class="order-heading"> Withdrawing $5 dollar to Bitcoin<span class="complete">Completed</span></p>--}}
{{--                    <p class="order-description">Withdraw  Bitcoin - ID : fhfhfgWEDTG1541DGF65DGH4685G4V6T--}}
{{--                    <p class="order-date">2020-4-13 12:45:02</p></p>--}}
{{--                </div>--}}
{{--                <div class="order-box">--}}
{{--                    <p class="order-heading"> Withdrawing $5 dollar to EasyPaisa<span class="complete">Completed</span></p>--}}
{{--                    <p class="order-description">Withdraw  EasyPaisa - ID : WEDTG1541Ddfg5h+6f5+fghV6T--}}
{{--                    <p class="order-date">2020-4-12 12:45:02</p></p>--}}
{{--                </div>--}}
{{--                <div class="order-box">--}}
{{--                    <p class="order-heading"> Withdrawing $5 dollar to HBL bank<span class="complete">Completed</span></p>--}}
{{--                    <p class="order-description">Withdraw HBL bank - ID : WEDTG1541DGF65DGH46sdhg85G4V6T--}}
{{--                    <p class="order-date">2020-4-11 12:45:02</p></p>--}}
{{--                </div>--}}
{{--                <div class="order-box">--}}
{{--                    <p class="order-heading"> Withdrawing $5 dollar to Google-Gift-Card<span class="complete">Completed</span></p>--}}
{{--                    <p class="order-description">Withdraw Google-Gift-card- ID : WEDTG1541DGF65DGH468gbfg5G4V6T--}}
{{--                    <p class="order-date">2020-4-10 12:45:02</p></p>--}}
{{--                </div>--}}

            </div>
        </div>
    </div>
</div>

<div class="bottom-menu">
    @include('layout.footer')</div>
</body>
</html>

