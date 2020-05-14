<!DOCTYPE html>
<html>

<head>
    <title>Website</title>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <style>
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
    </style>

    <link href="https://vjs.zencdn.net/7.7.5/video-js.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-ads/6.6.5/videojs.ads.css">

<body>
    @include('layout.navbar')

    <h3 id="mes-toma" style="display: none">Come Back Tomarrow</h3>

    <section class="website-link-section" id="link-section">

        <h3>Visit these links to get reward</h3>


        <div class="links">
            {{ $path }}
        </div>


    </section>


    <div class="banner">
        <img src="{{ $ad_path }}">
    </div>

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



    <div class="bottom-menu">

        @include('layout.footer')</div>
</body>

</html>