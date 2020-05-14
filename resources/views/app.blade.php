<!DOCTYPE html>
<html>
<head>
    <title>Apps | Monaptor</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/urlbox.png" type="image/gif">
    @include('layout.ad-blocker-detect')
    <style>
        body{
            padding:0;
            margin:0;
            background:#0f0f0f;
        }

        h3{
            width: 100%;
            text-align: center;
            font-family: Ubuntu, sans-serif;
            font-size: 2em;
            margin: 20px 0px;
            color:#0abde3;
        }
        small{
            font-family: Ubuntu, sans-serif;
            margin: 20px auto;
        }

        section.video{
            width: 100%;
        }

        section.video div.video-platform{
            width: 50%;
            margin: 0 auto;
        }

        section.video .next{
            width: 100%;
            text-align: center;
            margin-top: 20px;

        }

        .links{
            display: grid;
            font-size: 1.3em;
            width: 100%;
            text-align: center;
            padding-top: 150px;
        }

        .links a{
            margin-top: 30px;
            color:#0abde3;
            padding:0;
        }
        .info{
            font-size:40px;
            color:#0abde3;
            display:block;
            margin-top:70px;
            position:absolute;
            z-index:-1;
        }

            .links small{
                color:lightgray;
                padding:0;
        }
        .navbar{
        position:fixed;
        width:100%;
        margin-top:60px;
    }
        @media only screen and (max-width:500px)
        {
            .navbar{
            margin-top:60px;
        }
        .info{
            font-size:30px;
            color:#0abde3;
            display:block;
            margin-top:130px;
            position:absolute;
        }
        .links{
            width:100%;
            height:auto;
            left:0;
            margin-top:200px;
        }
        .links small{
            margin-top:10px;
            position:absolute;
            display:block;
            width:100%;
            text-align:center;
        }
        #site{
            width:100%;
            height:auto;
            text-decoration:none;
            text-align:center;
        }
        .banner{
            width:300px;
            height:50px;
            position:absolute;
            margin:auto;
            margin-top:300px;
        }
        .banner img{
            width:300px;
            height:50px;
        }
        }
    </style>

    <link href="https://vjs.zencdn.net/7.7.5/video-js.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-ads/6.6.5/videojs.ads.css">
<body>
<div class="navbar">@include('layout.navbar')</div>
<h3 id="mes-toma" style="display: none;padding-top:100px;">Come Back Tomarrow</h3>

<section class="website-link-section" id="link-section">

    <h3 class="info">Visit these links to get reward</h3>
    <div class="links">
        <small>You should download the app to get reward</small>

        @foreach($app as $a)
            <a href="#" class="url" id="{{$a->id}}" data-path="{{ $a->url }}">{{ $a->url }}</a>
        @endforeach
    </div>
</section>
<div class="banner">
    <img src="{{ $ad_path }}">
</div>
<script>

    const site_timeout_limit = 5; //set how many seconds a user restrict for download


    if($('.url').text() === ''){
        document.getElementById('link-section').style.display = 'none'
        document.getElementById('mes-toma').style.display = 'block'
    }

    let time = 0;
    let inter;
    let siteActive = false;
    let current_id;


    window.onblur = ()=>{

        if(siteActive){
            popup = true
            inter = setInterval(function () {
                time += 1;
                console.log(time)
            }, 1000)
        }

    }

    window.onfocus = ()=>{

        clearInterval(inter);

        if(siteActive){
            if(time > site_timeout_limit){
                time = 0;
                siteActive = false
                fetch(`/app/complete/${current_id}`, {
                    method: 'GET'
                }).then(function(){
                    location.reload()
                })
            }else{
                siteActive = false;
                time = 0;
                alert('You should spend atleast 2 mins in the app')
            }
        }
    }


    $('.url').click(function() {
        siteActive = true;
        window.open($(this).attr('data-path'), '_blank');

        current_id = $(this).attr('id');
    });


</script>
</body>
</html>
