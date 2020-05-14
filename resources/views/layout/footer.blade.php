<style>
.info_container{
    width: 100%;
    min-height: 350px;
    max-height: auto;
    padding-bottom: 20px;
    padding-top: 20px;
    background-color: #101010;
    display: flex;
    position: absolute;
    margin-top:1200px;
    border-top: 1px solid #262626;
    z-index:-1;
}
/*----------For Sending Message----------*/

.information{
    width: 25%;
    height: 350px;
    padding-bottom: 20px;
    background: #101010;
    position: absolute;
    margin-left: 2%;
}
.info-text{
    font-size: 20px;
    color: white;
    text-align: center;
    float: justify;
    padding: 10px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.social_profile{
    width: 80%;
    height: auto;
    display: flex;
    margin-left: 10%;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-top: 50px;
}
.social_link{
    display: block;
    width: 100%;
    margin-left: 10%;
    color:#0abde3;
    text-decoration: none;
}
.info_title{
    font-size: 30px;
    color: aliceblue;
    text-align: center;
}


/*----------For Sending Message----------*/

.emails{
    width: 30%;
    height:350px;
    margin-left: 33%;
    background-color: #101010;
    padding-bottom: 20px;
}
.contact_title{
    font-size: 30px;
    color: aliceblue;
    text-align: center;
}
.email_contacts{
    display: block;
    font-size: 20px;
    color: aliceblue;
    text-align: center;
}

/*----------For Sending Message----------*/

.message_sender{
    width: 30%;
    position: absolute;
    height: auto;
    padding-bottom: 20px;
    background-color:#101010;
    margin-left: 68%;
}

.message{
    width: 90%;
    height: 320px;
    background-color: #101010;
    margin-left: 5%;
}

.message-title{
    font-size: 30px;
    color: aliceblue;
    text-align: center;
}
.name_input{
    width: 49%;
    height: 30px;
    font-size: 15px;
    margin-left: 0;
    border: none;
    border-bottom: 1px solid #0abde3;
    background: #101010;
    color: white;
}
.email_input{
    width: 50%;
    height: 30px;
    font-size: 15px;
    border: none;
    border-bottom: 1px solid #0abde3;
    background: #101010;
    color: white;
}
.message_input{
    height: 70px;
    width: 99%;
    resize: none;
    font-size: 15px;
    margin-left: 0;
    border: none;
    border-bottom: 1px solid #0abde3;
    background: #101010;
    margin-top: 20px;
    color: white;
}
.submit-btn{
    width: 100%;
    height: 40px;
    background-color:#101010;
    border: 2px solid #0abde3;
    border-radius: 5px;
    color: #0abde3;
    font-size: 25px;
    margin-top: 20px;
}
@media only screen and (max-width:500px)
{
    .info_container{
        width:100%;
        height:auto;
        padding:0;
        background:#0f0f0f;
        border-top:1px solid lightgrey;
        margin-top:1300px;
    }
    .information{
        width:100%;
        margin-left:0;
        padding:0;
        height:auto;
        margin-top:600px;
        background:#0f0f0f;
        text-align:justify;
    }
    .info-text{
        float:justify;
        font-size:18px;
        color:lightgrey;
    }
    .emails{
        width:100%;
        margin-left:0;
        margin-top:0;
        padding:0;
        height:auto;
        background:#0f0f0f;
    }
    .message_sender{
        width:100%;
        margin-left:0;
        margin-top:250px;
        padding:0;
        height:auto;
        background:#0f0f0f;
    }
    .message{
        width:94%;
        height:auto;
        padding:0;
        margin-left:3%;
        background:#0f0f0f;
    }
    .name_email{
        background:#0f0f0f;
        color:white;
        width:40%;
        margin-left:5%;
    }
    .message textarea{
        background:#0f0f0f;
        color:white;
        width:85%;
        margin-left:5%;
    }
    .submit-btn{
        width:85%;
        margin-left:5%;
    }
    .submit-btn:hover{
        background:#0abde3;
        color:#0f0f0f;
    }
    .character_count{
        width:85%;
        margin-left:5%;
        text-align:right;
    }
}
</style>
<div class="info_container">
<div class="information">
    <h1 class="info_title">Monaptor</h1>
    <p class="info-text">
      Monaptor.com  Is A Online Earning From Home Source. You Can Earn By Completing Tasks Given Above. 
    </p>
    <div class="social_profile">
        <a href="" class="social_link"><i class="fab fa-facebook-f"></i> Facebook</a>
        <a href="" class="social_link"><i class="fab fa-twitter"></i> Twitter</a>
        <a href="" class="social_link"><i class="fab fa-instagram"></i> Instagram</a>
    </div>
</div>
<div class="emails">
    <h1 class="contact_title">Contacts</h1>
    <p class="email_contacts">Business_monaptor@yahoo.com</p>    
    <p class="email_contacts">Service_monaptor@yahoo.com</p>
    <p class="email_contacts">Help_monaptor@yahoo.com</p>
</div>
<div class="message_sender">
    <div class="message">
        <p class="message-title">Message</p>
        <input type="text" name="name" class="name_input name_email"  placeholder="Name">
        <input type="email" name="email" class="email_input name_email" placeholder="Email">
        <textarea maxlength="300" id="message" class="message_input" onkeyup="count_up(this)" placeholder="Message"></textarea><br>
        <span style="float: right;display: flex;color: grey;font-size: 12px;text-decoration: none;color: #0abde3;" class="character_count"><p id="cha_num" style="margin-top: -0.1px;"></p>/300</span>
        <input type="submit" value="Submit" name="submit" class="submit-btn">
    </div>
</div>
</div>
<script>
    function count_up(bio_cha) {
       document.getElementById('cha_num').innerHTML = bio_cha.value.length;
   }
</script>