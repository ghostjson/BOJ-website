<style>
    .navbar{
        width: 100%;
        height: 50px;
        background: white;
        border-bottom: 1px solid lightgrey;
        display: flex;
        margin-bottom: 0;
    }
    .menu{
        width: 30%;
        height: 40px;
        display: flex;
        margin-left: auto;
        margin-right: 50px;
        margin-top: 5px;
        position: relative;
    }
    .menu-links{
        width: 100%;
        height: 40px;
        display: block;
        line-height: 40px;
        background: white;
        text-align: center;
        font-size: 18px;
        text-decoration: none;
        color: #262626;
        cursor: pointer;
        transition: color 0.5s;
    }

    .menu-links:hover{
        color: #008ac9;
        text-decoration: none;
    }

    .logo{
        width: 8%;
        height: 50px;
        margin-left: 60px;
        margin-top: 30px;
    }
    #drop-menu{
        width: 150px;
        height: 170px;
        background: white;
        border: 1px solid lightgrey;
        position: absolute;
        z-index: 1;
        border-top: none;
        display: none;
        right: -10px;
    }

    #drop-menu div a, #drop-menu div a:active, #drop-menu div a:hover{
        font-size: 1em;
        text-decoration: none;
        color: black;
        transition: color 0.5s;
    }
    #drop-menu div a:hover{
        color: #008ac9;
    }
</style>
<header class="navbar">

    <div class="logo"><a href="/    "><img src="/assets/logo2.png" style="width:100%;height:auto;margin-top: -30px;"></a></div>
    <div class="menu">
        <a class="menu-links" href="/account">${{ auth()->user()->wallet  }}</a>
        <a class="menu-links" href="/">Home</a>
        <a class="menu-links" href="/contact">Contact</a>
        <div  class="menu-links" id="menu-drop-down" style="width: 40px;height: 40px;background: lightgrey;margin-right: 10px;border-radius:100%;">
            <img src="https://api.adorable.io/avatars/240/{{auth()->user()->profile_image }}.png" style="width:40px;
                    height:40px;border-radius:100%;">
{{--            <div id="drop-menu">--}}
{{--                <p style="display: block;width: 94%;height: 40px;margin-top: 0;text-align:center;margin-left: 3%;background:white;margin-top: 5px;color: #262626;" > {{ auth()->user()->username }} </p>--}}
{{--                <a style="display: block;height: 35px;width: 94%;text-align: center;margin-left: 3%;background:white;text-decoration: none;color: #262626;" href="/profile" >profile</a>--}}
{{--                <a style="display: block;height: 35px;width: 94%;text-align: center;margin-left: 3%;background:white;text-decoration: none;color: #262626;" href="/account" >Account</a>--}}
{{--                <a style="display: block;height: 35px;width: 94%;text-align: center;margin-left: 3%;background:white;text-decoration: none;color: #262626;" href="/logout" >Logout</a>--}}
{{--            </div>--}}

            <div id="drop-menu">
                <div>{{ auth()->user()->username  }}</div>
                <div><a href="/profile">Profile</a></div>
                <div><a href="/account">Account</a></div>
                <div><a href="/logout">Logout</a></div>
            </div>
        </div>
    </div>
</header>




<script>
    $(document).ready(function(){
        $('#menu-drop-down').on('click', function(){
            $('#drop-menu').toggle();
        })
    });
</script>
