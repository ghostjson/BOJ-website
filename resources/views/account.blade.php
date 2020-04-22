
<!DOCTYPE html>
<html>
<head>
    <title>Account</title>
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
    .balance{
        width: 76%;
        height: 76vh;
        background: white;
        margin-left: 21%;
        margin-top: -2vh;
        z-index: -1;
        display: block;
    }
    .balance-box{
        width: 230px;
        height: 230px;
        border: 5px solid dodgerblue;
        border-radius: 100%;
        margin-left: 300px;
        text-align: center;
        background: whitesmoke;
    }
    .bottom-menu{
        position: relative;
    }
</style>
<body>
@include('layout.navbar')

<div class="container">
@include('layout.account-menu')

    <div class="balance">
        <p style="text-align: left;font-size: 40px;color: #262626;">Balance</p>
        <div class="balance-box"><p style="color: dodgerblue;font-size: 40px;line-height: 170px;">${{ money_format('%i',auth()->user()->wallet)  }}</p></div>
        <div style="font-size: 30px;color: #262626;margin-left: 290px;display: flex;font-family: sans-serif;"><p style="color: #dc0030;margin-right: 5px;">Your</p> <p style="color: #008ac9;margin-right: 5px;">Current </p> <p style="color: #c2b600;">Balance </p></div>
        <ul style="margin-top: 150px;font-size: 20px;">
            <li>It can take up to 24 hour with bad conditions for withdraw, but usually it takes lesser time than mentioned.</li>
            <li>Minimum You can Withdraw $5 at a time.</li>
            <li>Maximum You can Withdraw $15 at a time.</li>
        </ul>
    </div>
</div>

<div class="bottom-menu">

@include('layout.footer')

</div>
</body>
</html>

