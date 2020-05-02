<!DOCTYPE html>
<html>
<head>
    <title>Account</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>

    <!-- jQuery Modal -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>
<style>
    body{
        margin: 0;
        padding: 0;
    }
    .container{
        margin-top: 10px;
    }
    .withdraw{
        width: 76%;
        height: 76vh;
        background: white;
        margin-left: 21%;
        margin-top: 2vh;
        /*z-index: 1;*/
    }
    .current-balance{
        width: 230px;
        height: 230px;
        border: 5px solid dodgerblue;
        border-radius: 100%;
        margin-left: 300px;
        text-align: center;
        background: whitesmoke;
        margin-top: 50px;
    }
    .options{
        width: 75%;
        height: 80px;
        background: white;
        margin-top: 10vh;
    }
    #options{
        display: flex;
        width: 100%;
        text-align: center;
        color: dodgerblue;
        background: white;
    }
    #options a{
        display: block;
        width: 100%;
        text-align: center;
        color: dodgerblue;
        cursor: pointer;
    }

    /*-------HBL Bank--------*/

    #hbl-withdrawal-page
    {
        width: 60%;
        height: 80vh;
        background: white;
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


</style>
<body>

<!-- Modal HTML embedded directly into document -->
<div id="ex1" class="modal">
    <img src="/assets/paypal.png" class="widtdrawal-title">
    <p>Please fill all the information correctly or we're not responsibly for lost fund.</p>

    <form>
        <div class="input-div-pp">
            <label>Name:</label><br>
            <input type="text" name="username" value="{{auth()->user()->username}}" class="input" required>
        </div>
        <div class="input-div-pp">
            <label>PayPal Address:</label><br>
            <input type="text" name="paypal-address" placeholder="Paypal Address" class="input" required>
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

    <form>
        <div class="input-div-pp">
            <label>Name:</label><br>
            <input type="text" name="username" value="{{auth()->user()->username}}" class="input" required>
        </div>
        <div class="input-div-pp">
            <label>EasyPaisa Receiver Account Number:</label><br>
            <input type="text" name="easypaisa-address" placeholder="0345917890" class="input" required>
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
            @include('layout.navbar')

            <div class="withdraw" id="withdraw">
                <p style="text-align: left;font-size: 40px;color: #262626;margin-top: -1px;">Withdraw</p>
                <div class="current-balance">
                    <p style="color: dodgerblue;font-size: 40px;line-height: 170px;">${{ auth()->user()->wallet  }}</p>
                </div>
                <p style="font-size: 25px;color: #262626;margin-left: 325px;">Your Current Balance</p>
                <div class="options">
                    <label style="height: 30px;display: block;width: 80%;margin-left: 7%;font-size: 20px;">Withdraw Options:</label>
                    <div id="options">
                        <a title="Withdraw with Google-Gift-Card" onclick="alert('This Method is Enabled.')"><img src="/assets/download.png" style="width: auto;height: 50px;margin-left: 20px;margin-top: 5px;"></a>
                        <a title="Withdraw with Amazon-Gift-Card" onclick="alert('This Method is Enabled.')"><img src="/assets/amazon.png" style="width: auto;height: 60px;margin-left: 20px;"></a>
                        <a title="Withdraw with Bitcoin" onclick="alert('This Method is Enabled.')"><img src="/assets/bitcoin.png" style="width: auto;height: 20px;margin-left: 30px;margin-top: 20px;"></a>
                        <a title="Withdraw with PayPal" href="#ex1" rel="modal:open"><img src="/assets/paypal.png" style="width: auto;height: 25px;margin-left: 30px;margin-top: 20px;"></a>
                        <a title="Withdraw with EasyPaisa" href="#easy" rel="modal:open"><img src="/assets/easypaisa.png" style="width: auto;height: 40px;margin-left: 20px;margin-top: 15px;"></a>
                        <a title="Withdraw with HBL Bank" onclick="openhbl()"><img src="/assets/HBL.png" style="width: auto;height: 40px;margin-left: 20px;margin-top: 15px;"></a>
                    </div>
                    <!---------For hbl withdrawal method----------->
        {{--            <div id="hbl-withdrawal">--}}
{{--                <div id="hbl-withdrawal-page">--}}
{{--                    <button class="close-btn" onclick="closehbl()">X</button>--}}
{{--                    <p class="widtdrawal-title">HBL Bank</p>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!---------For easypaisa withdrawal method----------->
{{--            <div id="ep-withdrawal">--}}
{{--                <div id="ep-withdrawal-page">--}}
{{--                    <button class="close-btn" onclick="closeep()">X</button>--}}
{{--                    <img src="/assets/easypaisa.png" class="widtdrawal-title" style="height: 50px;width: auto;margin-left: 42%;">--}}
{{--                    <div class="withdrawal-sec">--}}
{{--                        <div class="notice">--}}
{{--                            <p>Please fill all the information correctly or we're not responsibly for lost fund.</p>--}}
{{--                        </div>--}}
{{--                        <div class="input-div-pp">--}}
{{--                            <label>Name:</label><br>--}}
{{--                            <input type="text" name="username" value="--}}{{--<?php echo $row["name"]; ?>--}}{{--" class="input">--}}
{{--                        </div>--}}
{{--                        <div class="input-div-pp">--}}
{{--                            <label>EasyPaisa Receiver Account Number:</label><br>--}}
{{--                            <input type="text" name="easypaisa-address" placeholder="0345917890" class="input">--}}
{{--                        </div>--}}
{{--                        <div class="input-div-pp">--}}
{{--                            <label>Enter Amount:</label>--}}
{{--                            <input type="number" name="amount" placeholder="amount" value="400" class="amount-box">--}}
{{--                        </div>--}}
{{--                        <div style="width: 60%;margin-left: 20%;height: 30px;text-align: center;">--}}
{{--                            <p>Select Via E-mail or Via Phone number For Security Code...</p>--}}
{{--                        </div>--}}
{{--                        <div class="input-div-pp">--}}
{{--                            <label>Via Email:</label><br>--}}
{{--                            <input type="email" name="email" value="--}}{{--<?php echo $row["username"]; ?>--}}{{--" class="input" style="width: 89%">--}}
{{--                            <a style="width: 10%;border-radius:5px;text-align:center;margin-top:1px;margin-right: .5%;height: 30px;display: block;background: lightblue;border: 1px solid dodgerblue;color: #008ac9;float: right;line-height: 30px;">Send</a>--}}
{{--                        </div>--}}
{{--                        <div class="input-div-pp">--}}
{{--                            <label>Via Phone:</label><br>--}}
{{--                            <input type="number" name="number" value="--}}{{--<?php echo $row["number"]; ?>--}}{{--" class="input" style="width: 89%">--}}
{{--                            <a style="width: 10%;border-radius:5px;text-align:center;margin-top:1px;margin-right: .5%;height: 30px;display: block;background: lightblue;border: 1px solid dodgerblue;color: #008ac9;float: right;line-height: 30px;">Send</a>--}}
{{--                        </div>--}}
{{--                        <div class="input-div-pp">--}}
{{--                            <label>Code:</label><br>--}}
{{--                            <input type="number" name="code" placeholder="Code" class="input">--}}
{{--                        </div>--}}
{{--                        <div class="withdraw-btn">--}}
{{--                            <button>Withdraw</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
            <!---------For paypal withdrawal method----------->
{{--            <div id="pp-withdrawal">--}}
{{--                <div id="pp-withdrawal-page">--}}
{{--                    <button class="close-btn" onclick="closepp()">X</button>--}}
{{--                    <img src="/assets/paypal.png" class="widtdrawal-title">--}}
{{--                    <div class="withdrawal-sec">--}}
{{--                        <div class="notice">--}}
{{--                            <p>Please fill all the information correctly or we're not responsibly for lost fund.</p>--}}
{{--                        </div>--}}
{{--                        <div class="input-div-pp">--}}
{{--                            <label>Name:</label><br>--}}
{{--                            <input type="text" name="username" value="--}}{{--<?php echo $row["name"]; ?>--}}{{--" class="input">--}}
{{--                        </div>--}}
{{--                        <div class="input-div-pp">--}}
{{--                            <label>PayPal Address:</label><br>--}}
{{--                            <input type="text" name="paypal-address" placeholder="Paypal Address" class="input">--}}
{{--                        </div>--}}
{{--                        <div class="input-div-pp">--}}
{{--                            <label>Enter Amount:</label>--}}
{{--                            <input type="number" name="amount" placeholder="amount" value="400" class="amount-box">--}}
{{--                        </div>--}}
{{--                        <div style="width: 60%;margin-left: 20%;height: 30px;text-align: center;">--}}
{{--                            <p>Select Via E-mail or Via Phone number For Security Code...</p>--}}
{{--                        </div>--}}
{{--                        <div class="input-div-pp">--}}
{{--                            <label>Via Email:</label><br>--}}
{{--                            <input type="email" name="email" value="--}}{{--<?php echo $row["username"]; ?>--}}{{--" class="input" style="width: 89%">--}}
{{--                            <a style="width: 10%;border-radius:5px;text-align:center;margin-top:1px;margin-right: .5%;height: 30px;display: block;background: lightblue;border: 1px solid dodgerblue;color: #008ac9;float: right;line-height: 30px;">Send</a>--}}
{{--                        </div>--}}
{{--                        <div class="input-div-pp">--}}
{{--                            <label>Via Phone:</label><br>--}}
{{--                            <input type="number" name="number" value="--}}{{--<?php echo $row["number"]; ?>--}}{{--" class="input" style="width: 89%">--}}
{{--                            <a style="width: 10%;border-radius:5px;text-align:center;margin-top:1px;margin-right: .5%;height: 30px;display: block;background: lightblue;border: 1px solid dodgerblue;color: #008ac9;float: right;line-height: 30px;">Send</a>--}}
{{--                        </div>--}}
{{--                        <div class="input-div-pp">--}}
{{--                            <label>Code:</label><br>--}}
{{--                            <input type="number" name="code" placeholder="Code" class="input">--}}
{{--                        </div>--}}
{{--                        <div class="withdraw-btn">--}}
{{--                            <button>Withdraw</button>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
        <ul style="margin-top: 50px;font-size: 20px;">
            <li>It can take up to 24 hour with bad conditions for withdraw, but usually it takes lesser time than mentioned.</li>
            <li>Minimum You can Withdraw $5 at a time.</li>
            <li>Maximum You can Withdraw $15 at a time.</li>
        </ul>
    </div>
</div>

@include('layout.footer')

</body>
</html>

<script>
    function openhbl() {
        document.getElementById("hbl-withdrawal-page").style.display = "block";
    }

    function closehbl() {
        document.getElementById("hbl-withdrawal-page").style.display = "none";
    }

    function openhbl() {
        document.getElementById("hbl-withdrawal").style.display = "block";
    }

    function closehbl() {
        document.getElementById("hbl-withdrawal").style.display = "none";
    }

</script>
<script>
    function openep() {
        document.getElementById("ep-withdrawal-page").style.display = "block";
    }

    function closeep() {
        document.getElementById("ep-withdrawal-page").style.display = "none";
    }

    function openep() {
        document.getElementById("ep-withdrawal").style.display = "block";
    }

    function closeep() {
        document.getElementById("ep-withdrawal").style.display = "none";
    }

</script>
<script>
    function openpp() {
        document.getElementById("pp-withdrawal-page").style.display = "block";
    }

    function closepp() {
        document.getElementById("pp-withdrawal-page").style.display = "none";
    }

    function openpp() {
        document.getElementById("pp-withdrawal").style.display = "block";
    }

    function closepp() {
        document.getElementById("pp-withdrawal").style.display = "none";
    }

</script>
