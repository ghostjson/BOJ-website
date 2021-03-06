<!DOCTYPE html>
<html>
<head>
    <title>Videos</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <style>

        h3{
            width: 100%;
            text-align: center;
            font-family: Ubuntu, sans-serif;
            font-size: 2em;
            margin: 20px 0px;
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

        section.video .next a,section.video .next a:active,section.video .next a:visited,section.video .next a:hover{
            font-size: 1.2em;
            text-decoration: none;
            background-color: #008ac9;
            padding: 10px;
            font-family: Ubuntu, sans-serif;
            border-radius: 10px;
            color: white;
        }
    </style>

    <link href="https://vjs.zencdn.net/7.7.5/video-js.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-ads/6.6.5/videojs.ads.css">
<body>
@include('layout.navbar')

<h3 id="mes-toma" style="display: none">Come Back Tomarrow</h3>

<section class="video" id="video-player-section">
    <h3>Watach Today's videos</h3>
    <div class="video-platform">
        <video id="video-player" class="video-js vjs-default-skin vjs-big-play-centered">
            <source src="ad.mp4">
        </video>

        <div class="banner" style="z-index:99; margin: 0px auto; position: relative; bottom: 50px;">
            put add here
        </div>
    </div>

    

    {{--<div class="next">
        <a href="#">Next Video</a>
    </div>--}}
</section>


<script src="https://vjs.zencdn.net/7.7.5/video.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-ads/6.6.5/videojs.ads.min.js"></script>


<script>
    // if('{{ $path }}' === '' && '{{$id}}' === ''){
    //     document.getElementById('video-player-section').style.display = 'none';
    //     document.getElementById('mes-toma').style.display = '';

    // }

    // let videos_src = {
    //     ad: '{{ $ad_path }}',
    //     src: '{{ $path }}'
    // };

    let ad = true;

    let videos_src = {
        ad: '/assets/videos/ad.mp4',
        src: '/assets/videos/main.mp4'
    }

    let played = 0;

    const player = videojs('video-player', {
        controls: true,
        autoplay: false,
        fluid: true
    })

    player.src(videos_src.ad);


    player.on('play', ()=> {
        if(played === 0){
            player.controls(false)
        }
    })


    setInterval(function(){
        if(ad){
            $('.banner').fadeIn();
        }else{
            $('.banner').fadeOut();
        }

        ad = ad ? false : true;
    }, 5000)


    player.on('ended', ()=> {


        if(played === 0){
            player.src(videos_src.src)
            player.controls(true)
            player.play()
            played = 1;
        }else{
            fetch('/videos/complete/{{$id}}', {
                method: 'GET'
            })

            .then(function(){
                location.reload()
            })

        }


    })
</script>



<div class="bottom-menu">

    @include('layout.footer')</div>
</body>
</html>
