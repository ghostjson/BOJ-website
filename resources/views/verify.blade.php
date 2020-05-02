<!DOCTYPE html>
<html>
<head>
    <title>Website</title>
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
        }

        .links a{
            margin-top: 30px;
        }

        .banner{
            position: fixed;
            bottom: 0px;
            width: 100%;
            text-align: center;
            z-index: 99;
        }
        #share-buttons img {
            margin-top: 50px;
            width: 35px;
            padding: 5px;
            border: 0;
            box-shadow: 0;
            display: inline;
        }
        #link-section{
            text-align: center;
            font-family: 'Nunito', sans-serif;
            margin-top: 100px;
        }

    </style>

    <link href="https://vjs.zencdn.net/7.7.5/video-js.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/videojs-contrib-ads/6.6.5/videojs.ads.css">
<body>
@include('layout.navbar')



<section class="website-link-section" id="link-section">

    <h1>Share this website to 10 people to get verify</h1>



    <div class="links">
        <div id="share-buttons">
            <a href="https://www.facebook.com/sharer.php?u={{URL::to('/')}}" target="_blank">
                <img src="https://4.bp.blogspot.com/-raFYZvIFUV0/UwNI2ek6i3I/AAAAAAAAGSA/zs-kwq0q58E/s1600/facebook.png" alt="Facebook" />
            </a>
            <a href="https://twitter.com/share?url={{URL::to('/')}}&text=Make Money Online" target="_blank">
                <img src="https://4.bp.blogspot.com/--ISQEurz3aE/UwNI4hDaQMI/AAAAAAAAGS4/ZAgmPiM9Xpk/s1600/twitter.png" alt="Twitter" />
            </a>
            <a href="https://www.digg.com/submit?url={{URL::to('/')}}" target="_blank">
                <img src="https://4.bp.blogspot.com/-AUdsqB7cajQ/UwNI2iqT_AI/AAAAAAAAGR8/0FV_ZcsiylU/s1600/diggit.png" alt="Digg" />
            </a> <!-- Reddit -->
            <a href="http://reddit.com/submit?url={{URL::to('/')}}&title=Make Money Online" target="_blank">
                <img src="https://4.bp.blogspot.com/-1-mZEa1eiyc/UwNI4JytiFI/AAAAAAAAGSs/AoKmBkkJR-s/s1600/reddit.png" alt="Reddit" />
            </a> <!-- LinkedIn -->
            <a href="https://www.linkedin.com/shareArticle?mini=true&url={{URL::to('/')}}" target="_blank">
                <img src="https://2.bp.blogspot.com/-3_cATk7Wlho/UwNI3eoTTLI/AAAAAAAAGSQ/Y8cpq6S-SeQ/s1600/linkedin.png" alt="LinkedIn" /></a> <!-- Pinterest -->
            <a href="http://www.stumbleupon.com/submit?url={{URL::to('/')}}&title=Make Money Online" target="_blank">
                <img src="https://2.bp.blogspot.com/-si3v8X2IVGI/UwNI4bncQrI/AAAAAAAAGSo/iZepRnIJFZU/s1600/stumbleupon.png" alt="StumbleUpon" /></a> <!-- Email -->
        </div>

    </div>

</section>

<script>

    $(document).ready(function(){
        $('#share-buttons a').click(function(){
            fetch('/verify/complete', {method: 'GET'});
        });
    })


</script>



<div class="bottom-menu">

    @include('layout.footer')</div>
</body>
</html>
