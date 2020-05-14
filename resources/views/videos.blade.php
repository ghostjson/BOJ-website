<!DOCTYPE html>
<html>

<head>
    <title>Videos | Monaptor</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="icon" href="/assets/urlbox.png" type="image/gif">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layout.ad-blocker-detect')
    <style>
        body {
            padding: 0;
            margin: 0;
            background: #0f0f0f;
            color: lightgrey;
        }

        h3 {
            width: 100%;
            text-align: center;
            font-family: Ubuntu, sans-serif;
            font-size: 2em;
            margin: 20px 0px;
        }

        section.video {
            width: 100%;
        }

        section.video div.video-platform {
            width: 50%;
            margin: 0 auto;
        }

        section.video .next {
            width: 100%;
            text-align: center;
            margin-top: 20px;

        }

        section.video .next a,
        section.video .next a:active,
        section.video .next a:visited,
        section.video .next a:hover {
            font-size: 1.2em;
            text-decoration: none;
            background-color: #008ac9;
            padding: 10px;
            font-family: Ubuntu, sans-serif;
            border-radius: 10px;
            color: white;
        }

        .navbar {
            margin-top: 40px;
            position: fixed;
        }

        .banner {
            z-index: 99;
            margin: 0px auto;
            position: relative;
            bottom: 30px;
            display:none;
        }

        .vid {
            z-index: -1;
        }

        @media only screen and (max-width:500px) {
            .navbar {
                position: fixed;
                margin-top: 60px;

            }

            .video {
                width: 100%;
                margin: 0;
                padding: 0;
                height: 450px;
                padding-top: 50px;
                padding-bottom: 50px;
                background: #0f0f0f;
                position: absolute;
                z-index: -1;
                margin-top: 110px;
            }

            .title {
                font-size: 30px;
                color: lightgrey;
                margin-top: 10px;
                text-align: center;
            }

            .video-platform {
                width: 100%;
                height: auto;
            }

            #video-player {
                width: 100%;
                position: absolute;
                left: 0;
            }

            .banner {
                z-index: 100;
                position: absolute;
                color: white;
                background: #141414;
                height: 60px;
                width: 450px;
                margin-left: 25px;
                bottom: 0;
                margin-top: 200px;
            }

            .vid {
                z-index: -1;
            }
        }
    </style>

    <link href="https://vjs.zencdn.net/7.7.5/video-js.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-ads/6.6.5/videojs.ads.css">

<body>
    <div class="navbar">@include('layout.navbar')</div>

    <h3 id="mes-toma" style="display: none">Come Back Tomarrow</h3>

    <section class="video" id="video-player-section">
        <h3 class="title">Watch Today's videos</h3>
        <div class="video-platform">
            <video id="video-player" class="video-js vjs-default-skin vjs-big-play-centered">
                <source src="ad.mp4" class="vid">
            </video>
            <div class="banner" id="banner1">
                put add here1
            </div>
            <div class="banner" id="banner2">
                put add here2
            </div>
            <div class="banner" id="banner3">
                put add here3
            </div>
            <div class="banner" id="banner4">
                put add here4
            </div>
            <div class="banner" id="banner5">
                put add here5
            </div>
            <div class="banner" id="banner6">
                put add here
            </div>
            <div class="banner" id="banner7">
                put add here
            </div>
            <div class="banner" id="banner8">
                put add here
            </div>
            <div class="banner" id="banner9">
                put add here
            </div>
            <div class="banner" id="banner10">
                put add here
            </div>
            <div class="banner" id="banner11">
                put add here
            </div>
            <div class="banner" id="banner12">
                put add here
            </div>
            <div class="banner" id="banner13">
                put add here
            </div>
            <div class="banner" id="banner14">
                put add here
            </div>
            <div class="banner" id="banner15">
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
        let ad_count = 1;

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


        player.on('play', () => {
            if (played === 0) {
                player.controls(false)
            }
        })


        setInterval(function() {
            if (ad) {
                ad_count = ad_count > 15 ? 1 : ad_count + 1;
                $('.banner').fadeOut();
                $(`#banner${ad_count}`).fadeIn();
            } else {
                $('.banner').fadeOut();
            }

            ad = ad ? false : true;


        }, 5000)


        player.on('ended', () => {


            if (played === 0) {
                player.src(videos_src.src)
                player.controls(true)
                player.play()
                played = 1;
            } else {
                fetch('/videos/complete/{{$id}}', {
                        method: 'GET'
                    })

                    .then(function() {
                        location.reload()
                    })

            }


        })
    </script>
</body>

</html>