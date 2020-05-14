<style>
    .container_nav{
        width:100%;
        height:60px;
        position:fixed;
        border-bottom:1px solid #262626;
        background-color: #0f0f0f;
        margin-top:-60px;
    }
    .logo{
        width:10%;
        position:absolute;
        margin-left: 1%;
    }
    .logo img{
        height: 50px;
        width: auto;
        margin-top: 5px;
    }
    .menu{
        width:40%;
        height: 50px;
        margin-top: 5px;
        position: absolute;
        display: flex;
        margin-left: 59%;
    }
    .menu a{
        width:100%;
        margin-left: 10%;
        color:white;
        font-size: 20px;
        text-decoration: none;
        cursor: pointer;
        text-align: center;
        line-height: 50px;
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
    @media only screen and (max-width:500px)
    {
        .menu{
          width: 100%;
          height: 40px;
          margin-top: 60px;
          background-color: #0f0f0f;
          position: absolute;
          color: lightpink;
          position: fixed;
          margin-left:0;
          line-height:40px;
          padding:0;
          border-bottom:1px solid #252525;
      }
      .menu a{
          margin-left:0;
          margin-right:0;
          padding:0;
          width:25%;
          line-height:40px;
          font-size:15px;

      }
      #menu-drop-down{
          .width:20px;
          height:20px;
          line-height:40px;
          margin-left:5%;
      }
      .user_profile_image{
          width:20px;
          height:20px;
          line-height:40px;
      }
    }
</style>
<div class="container_nav">
    <div class="logo">
        <a href="/"><img src="/assets/officiallogo.png"></a>
    </div>
    <div class="menu">
    <a style="color:#feca57;" href="/account">Rs {{ auth()->user()->wallet  }}</a>
    <a href="/">Home</a>
    <a href="/contact">Contact</a>
    <div  class="menu-links" id="menu-drop-down" style="width: 40px;height: 40px;background: lightgrey;margin-right: 10px;border-radius:100%;">
            <img src="https://api.adorable.io/avatars/240/{{auth()->user()->profile_image }}.png" style="width:40px;
                    height:40px;border-radius:100%;" class="user_profile_image">
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
                <div><a href="/policy">policy</a></div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $('#menu-drop-down').on('click', function(){
            $('#drop-menu').toggle();
        })
    });
</script>