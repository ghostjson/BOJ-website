<html>
<head>
    <title>Sign In | Imstapros</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			@include('layout.ad-blocker-detect')
            </head>
 <style>
     body{
		padding: 0;
		margin:0;
		background: #0f0f0f;
	}
	.container{
		width: 1366px;
		background: #0f0f0f;
		margin: auto;
	}
	.reg-form{
		width: 30%;
		height:auto;
		background: #0f0f0f;
		margin-left: 35%;
		padding-bottom: 30px;
		margin-top: 50px;
	}
	.input{
		width: 78%;
		margin-left: 10%;
		height: 40px;
		border-radius: 4px;
		background: #e8f0fe;
		border: none;
		padding-left: 10px;
		margin-top: 30px;
		color: #262626;
	}
	.sign-up{
		width: 80%;
		margin-left: 10%;
		height: 40px;
		border-radius: 4px;
		background: #0abde3;
		border: none;
		padding-right: 10px;
		padding-left: 10px;
		margin-top: 30px;
		color: white;
	}
	.sign-up:hover{
		background: #0abde3;
		color: #262626;
	}
	.reg-form p{
		font-size: 30px;
		color: white;
		text-align: center;
		line-height: 70px;
	}
	.reg-form a{
		color: #0abde3;
		text-align: left;
		text-decoration: none;
		margin-top: 10px;
		display: block;
		margin-left: 10%;
    }
    
    .warm_welcome{
        display:none;
    }
	.footer_nav{
		width:100%;
		height:auto;
		padding:0;
		margin:0;
		margin-top:-350px;
	}
    @media only screen and (max-width: 500px)
    {
        .container{
            width:100%;
            height:auto;
            margin:0;
            padding:0;
            background:#0f0f0f;
			z-index:-1;
            
        }
        .reg-form{
            width:100%;
            height:auto;
            margin-left:0%;
            z-index:1;
            background:#0f0f0f;
            margin-top:-10px;
			z-index:-1;
        }
		.input{
			margin-left:10%;
		}
		.header{
			position:fixed;
		}
		.footer_nav{
			margin-top:-1250px;
		}
		.warm_welcome{
			font-size:40px;
			color:#0abde3;
			text-align:center;
            margin-top:100px;
            display:block;
		}

    }
</style>
<body>
    <div class="header">
        @include('layout.outer')
    </div>
    <div class="container">
        <h1 class="warm_welcome">Welcome</h1>
		
		@if(isset($error))
			<p style="margin-top: 200px;">{{$error}}</p>
		@endif

		@if(isset($not))
			<h2 style="margin-top: 200px;">{{$not}}</h2>
			<h3><a href="/login">Go back to login page</a></h3>
		@else
			<form class="reg-form" method="post" autocomplete="off">
				<p>Sign Up</p>
				@csrf
				<input type="text" name="username" placeholder="Userame" class="input">
				<input type="email" name="email" placeholder="Email" class="input">
				<input type="password" name="password" placeholder="password" class="input">
				<input type="password" name="confirm_password" placeholder="Confirm Password" class="input">
				<input type="password" name="secret" placeholder="Secret Code" class="input">
				<input type="submit" value="Sign Up" name="register" class="sign-up">
				<a href="/login">Login? Instead</a><a style="cursor: pointer;text-decoration: none;float: right;margin-right: 10%;margin-top: -20px;">Policy and Terms</a>
			</form>
		@endif
    </div>
    <div class="footer_nav">
        @include('layout.footer')
    </div>
</body>
</html>
