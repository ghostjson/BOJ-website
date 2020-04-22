<style>
    .bottom-nav{
        width: 100%;
        height: 350px;
        background:whitesmoke;
        position: absolute;
        margin-bottom:-900px;
        bottom: 0;
        display: flex;
    }
    .about{
        width: 25%;
        height: 200px;
        background: whitesmoke;
        color: black;
        font-size: 18px;
        font-family: sans-serif;
        z-index: 1;
        text-align: center;
    }
    .contact{
        width: 25%;
        height: 200px;
        background: whitesmoke;
        color: black;
        text-align: center;
        top: 0;
        font-size: 18px;
        font-family: sans-serif;
        margin-left: 12.5%;
    }
    .message{
        width: 25%;
        height: 200px;
        background: whitesmoke;
        color: black;
        text-align: center;
        top: 0;
        font-size: 18px;
        font-family: sans-serif;
        margin-left: 10%;
    }
    .submit-btn{
        width: 98%;
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
<div class="bottom-nav">
    <div class="about">
        <p style="font-size: 30px;color: black;font-family: monospace;">About</p>
        <p style="width: 60%;margin-left: 20%;margin-top: 50px;">This Website's purpose is just only to help people at home in these LockDown Days...</p>
        <a><i class="fab fa-twitter-square" style="font-size: 40px;color: #262626;"></i></a>
        <a><i class="fab fa-facebook-square" style="font-size: 40px;color: #262626;margin-left: 5px;"></i></a>
        <a><i class="fab fa-instagram-square" style="font-size: 40px;color: #262626;margin-left: 5px;"></i></a>
        <p>Pracha Songkhro Road, Din Daeng 10400, Bangkok Thailand</p>
    </div>
    <div class="contact">
        <p style="font-size: 30px;color: black;font-family: monospace;">Contact</p>
        <p>Example@yahoo.com</p>
        <p>Example@gmail.com</p>
        <p>Example@hotmail.com</p>
        <p>Example@example.com</p>
    </div>

    <div class="message">
        <p style="font-size: 30px;color: black;font-family: monospace;">Message</p>
        <input type="text" name="name" style="width: 49%;height: 30px;font-size: 15px;margin-left: 0;border: none;border-bottom: 1px solid black;background: whitesmoke;" value=" Jack {{-- <?php /*echo $row['name'];*/ ?> --}}">
        <input type="email" name="email" style="width: 49%;height: 30px;font-size: 15px;border: none;border-bottom: 1px solid black;background: whitesmoke;" value=" someemail@gmail.com {{-- <?php echo /*$row['username'];*/ ?>" --}}">
        <textarea maxlength="300" id="message" style="height: 70px;width: 100%;resize: none;font-size: 15px;margin-left: 0;border: none;border-bottom: 1px solid black;background: whitesmoke;margin-top: 10px;" onkeyup="count_up(this)"></textarea>
        <span style="float: right;display: flex;color: grey;font-size: 12px;text-decoration: none;"><p id="cha_num" style="margin-top: -0.1px;"></p>/300</span>
        <input type="submit" value="Submit" name="submit" class="submit-btn">
    </div>
</div>
<script>
    function count_up(bio_cha) {
        document.getElementById('cha_num').innerHTML = bio_cha.value.length;
    }
</script>
