<!DOCTYPE html>
<html>

<head>
    <title>Websites | Monaptor</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="icon" href="/assets/urlbox.png" type="image/gif">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('layout.ad-blocker-detect')
    <style>

    body{
        padding;0;
        margin:0;
        background:#0f0f0f;
        color:lightgrey;
    }
        h3 {
            width: 100%;
            text-align: center;
            font-family: Ubuntu, sans-serif;
            font-size: 2em;
            margin: 20px 0px;
        }

        small {
            font-family: Ubuntu, sans-serif;
            margin: 20px auto;
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

        .links {
            display: grid;
            font-size: 1.3em;
            width: 100%;
            text-align: center;
        }

        .links a {
            margin-top: 30px;
        }

        .banner {
            position: fixed;
            bottom: 0px;
            width: 100%;
            text-align: center;
            z-index: 99;
        }

        .adv-banner{
            margin: 100px auto;
            max-width: 700px;
        }
        
    .navbar{
        position:fixed;
        width:100%;
        margin-top:60px;
    }
    .banner_ads{
        width:300px;
        height:50px;
        margin:0;
        padding:0;
    }
        @media only screen and (max-width:500px)
        {
            .navbar{
            margin-top:60px;
        }
            #link-section{
                width:100%;
                height:90%;
                padding:0;
                margin:0;
                padding-bottom:20px;
                background:#0f0f0f;
                z-index:-1;
                margin-top:9%;
                position:absolute;
            }
            .banner{
                width:300px;
                height:50px;
                margin-left:100px;
                position:absolute;
                border:1px solid lightgrey;

            }
            .links{
                width:90%;
                height:auto;
                margin:auto;
                margin-top:110px;
            }
            .banner_ads{
        width:300px;
        height:50px;
        margin:0;
        padding:0;
    }
        }
    </style>

    <link href="https://vjs.zencdn.net/7.7.5/video-js.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-ads/6.6.5/videojs.ads.css">

<body>
    <div class="navbar">@include('layout.navbar')</div>

    <h3 id="mes-toma" style="display: none;margin-top:120px;position:absolute;">Come Back Tomarrow</h3>

    <section class="website-link-section" id="link-section">

        <h3>Visit these links to get reward</h3>


        <div class="links">
            {{ $path }}
        </div>


        <div class="banner">
        <img src="{{ $ad_path }}" class="banner_ads">
    </div>
    </section>

    <script>
        if ('{{$path}}' === '') {
            document.getElementById('link-section').style.display = 'none'
            document.getElementById('mes-toma').style.display = ''
        }

        let time = 0;
        let inter;
        let siteActive = false;


        window.onblur = () => {

            if (siteActive) {
                popup = true
                inter = setInterval(function() {
                    time += 1;
                    console.log(time)
                }, 1000)
            }

        }

        window.onfocus = () => {

            clearInterval(inter);

            if (siteActive) {
                if (time > 60) {
                    time = 0;
                    siteActive = false
                    fetch('/website/complete/{{$id}}', {
                        method: 'GET'
                    }).then(function() {
                        location.reload()
                    })
                }
            }
        }


        $('#site').click(function() {
            siteActive = true;

            window.open('{{$path}}', '_blank');
        });
    </script>
</body>

</html>