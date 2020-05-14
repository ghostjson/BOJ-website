<style>
body{
    padding:0%;
    margin:0%;
}
.nav_login_reg{
    width:100%;
    height:70px;
    background:#0f0f0f;
    display:flex;
    position:fixed;
    border-bottom:1px solid lightgrey;
    margin-top:-1px;
}
.logo{
    width: auto;
    height: 50px;
    margin-left: 2%;
    display:block;
    background:#0f0f0f;
    margin-top:10px;
}
.menu_loreg{
    width: 20%;
    height:60px;
    margin-top:5px;
    position:absolute;
    color:white;
    margin-left:75%;
    background:#0f0f0f;
    display:flex;
}
.menu_loreg a{
    font-size:20px;
    text-decoration:none;
    color:white;
    width:100%;
    text-align:center;
    line-height:60px;
    display:block;
    background:#0f0f0f;
}
@media only screen and (max-width:500px)
{
    .nav_login_reg{
        width:100%;
        height:70px;
        background:#0f0f0f;
        display:flex;
    }
    .menu_loreg{
        width: 50%;
        height:60px;
        margin-top:5px;
        position:absolute;
        color:white;
        margin-left:48%;
        background:#0f0f0f;
        display:flex;
        text-align:center;
    }
    .menu_loreg a{
        font-size:15px;
        text-decoration:none;
        color:white;
        width:100%;
        text-align:center;
        line-height:50px;
        display:block;
        background:#0f0f0f;
        height:50px;
        margin-top:10px;
    }
    .logo{
        width:auto;
        height: 40px;
        margin-left: 2%;
        display:block;
        background:#0f0f0f;
        margin-top:15px;
    }
}

</style>
<div class="nav_login_reg">
    <img src="/assets/officiallogo.png" class="logo">
    <div class="menu_loreg">
    <a href="/policy">Policy</a>
    <a href="/help">Help</a>
    </div>
</div>