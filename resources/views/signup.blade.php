
<!DOCTYPE html>
<html>
<head>
	<title>Sign In | Monaptor</title>
	<meta n>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
   <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.8.2.js"></script>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/assets/urlbox.png" type="image/x-icon">
</head>
<style type="text/css">
	body{
		padding: 0;
		margin:0;
		background: #0f0f0f;
	}
	.container{
		width:100%;
		background: #0f0f0f;
		margin: 0;
		z-index:-1;
	}
	.login-form{
		width: 30%;
		height:auto;
		background: #0f0f0f;
		margin-left: 35%;
		padding-bottom: 30px;
		position:absolute;
		margin-top:200px;
		z-index:-1;
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
	.sign-in{
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
	.sign-in:hover{
		background: #2887bd;
		color: #262626;
	}
	.login-form p{
		font-size: 30px;
		color: white;
		text-align: center;
		line-height: 70px;
	}
	.option{
		width: 100%;
		height: auto;
		margin: 0;
		padding:0;
		display:flex;
	}
	.sign-up{
		color: #0abde3;
		text-align: left;
		text-decoration: none;
		margin-top: 10px;
		display: block;
		margin-left: 10%;
	}
	.forget-password{
		color: #0abde3;
		text-decoration: none;
		margin-top: 10px;
		display: block;
		margin-left: 30%;
	}
    .welcome{
        display:none;
    }
	.footer{
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
        .login-form{
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
		.email{
			margin-left:10%;
		}
		.header{
			position:fixed;
		}
		.footer{
			margin-top:-900px;
		}
		.warm_welcome{
			font-size:40px;
			color:#0abde3;
			text-align:center;
			margin-top:120px;
		}

    }
</style>
<body>
<div class="header">@include('layout.outer')</div>
<div class="container">
	<h1 class="warm_welcome">Welcome</h1>
	<form class="login-form" method="post">
		<p style="padding:0;">Sign In</p>
        
        {{ csrf_field() }}

        <label style="color:#ee5253;margin-left:10%;width:80%;display:block;padding:0;"><?= isset($error) ? $error : '' ?></label>

        
        <input type="text" name="username" placeholder="Username" class="input email">
        
        
        <input type="email" name="email" placeholder="Email" class="input email">
		<input type="password" name="password" placeholder="password" class="input">
		<input type="password" name="secret" placeholder="Scret" class="input">
		<input type="submit" value="Sign In" name="login" class="sign-in">
		<div class="option">
		<a href="/register" class="sign-up">Create Account?</a>
		<a href="/forgot" class="forget-password">Forget Password?</a>
	</div>
	</form>
</div>
<div class="footer">
@include('layout.footer')
</div>
</body>
</html>
