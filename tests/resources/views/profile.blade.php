<html>

<head>
    <title>Update Profile | Imstapros</title>
    <link rel="icon" type="jpg/gif" href="/assets/logo-url-box.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
    <script src="https://kit.fontawesome.com/1b5e0bcd4a.js" crossorigin="anonymous"></script>
</head>
<style>
    body{
        background: white;
    }
    .everything {
        width: 50%;
        height: 100%;
        background: white;
        margin-left: 25%;
    }
    .form-div{
        border: 1px solid lightgrey;
        padding-bottom: 30px;
        width: 100%;
        text-align: center;
    }
    .image_field{
        margin-top: 20px;
    }
    .image_frame{
        width: 80px;
        border-radius: 100%;
        margin: 10px auto;
    }
    .change-image{
        font-size: 1.1em;
        color: white;
        padding:5px;
        width: 100px;
        border-radius: 100px;
        background:  #68BBDA;
        border: 2px solid #3993B5;
        margin: 20px auto;
        cursor: pointer;
    }

    .change-image:hover{
        background: #51B4D9;
    }

    .input-field{
        width: 30%;
        height: 30px;
        background: none;
        border: none;
        float: left;
        margin-left: 10%;
        margin-top: 30px;
    }
    .input_areas{
        width: 100%;
        height: 30px;
        border: none;
        border-bottom: 1px solid lightgrey;
        background: none;
    }
    .input-field1{
        width: 30%;
        height: 30px;
        background: none;
        border: none;
        float: right;
        margin-right: 10%;
        margin-top: 30px;
    }
    .input_areas1{
        width: 100%;
        height: 30px;
        border: none;
        border-bottom: 1px solid lightgrey;
        background: none;
    }
    .input-field2{
        width: 80%;
        height: 30px;
        background: none;
        border: none;
        margin-left: 10%;
        margin-top: 90px;
    }
    .input_areas2{
        width: 100%;
        height: 30px;
        border: none;
        border-bottom: 1px solid lightgrey;
        background: none;
    }
    .input-field3{
        width: 80%;
        height: auto;
        background: white;
        border: none;
        margin-left: 10%;
        margin-top: 60px;
        overflow: hidden;
    }
    .input_areas3{
        width: 89%;
        height: auto;
        border: none;
        border-bottom: 1px solid lightgrey;
        background: white;
        resize: none;
        text-align: center;
    }

    .input-field5{
        width: 80%;
        height: 30px;
        background: none;
        border: none;
        margin-left: 10%;
        margin-top: 60px;
    }
    .input_areas5{
        width: 100%;
        height: 30px;
        border: none;
        border-bottom: 1px solid lightgrey;
        background: none;
    }
    .input-field4{
        width: 80%;
        height: 40px;
        background: #689CDA;
        margin-left: 10%;
        margin-top: 100px;
        border-radius: 100px;
        border: none;
    }
    .input_areas4{
        width: 100%;
        height: 50px;
        border: 2px solid #3993B5;
        background: #68BBDA;
        border-radius: 100px;
        color: white;
        font-size: 20px;
        font-family: sans-serif;
        padding-bottom: 30px;
        padding-top: 10px;
    }
    .input_areas4:hover{
        background: #51B4D9;
    }
    .error{
        position: fixed;
        width: 250px;
        height: auto;
        float: left;
        background: green;
        border:2px solid lightgrey;
        margin-left: 90%;
        margin-top: 70px;
    }
    @media only screen and (max-width: 600px)
    {
        .everything{
            width: 100%;
            height: auto;
            border: none;
            margin-left: 0;
        }
        .image_frame{
            width: 250px;
            height: 250px;
            border-radius: 100%;
            margin-left:28%;
            margin-top: 50px;
        }
        .change-image{
            margin-left: 34%;
            padding-left: 20px;
            padding-right: 20px;
        }

    }
</style>
<body>

@include('layout.navbar')


<div class="everything">
    <div class="body_section" style="margin-top: 100px">
        <form method="post" enctype="multipart/form-data" action="/profile/update" class="form-div">

            {{ csrf_field()  }}

            <div class="image_field">
                <img src="https://api.adorable.io/avatars/240/{{auth()->user()->profile_image }}.png" class="image_frame">
                <div class="change-image">Change</div>

                <input id="pro_image" name="pro_image" type="hidden" value="{{ auth()->user()->profile_image  }}">
            </div>
            <?= isset($_GET['error']) ? $_GET['error'] : ''; ?>
            <div class="input-field">
                <label>Name : </label>
                <input type="text" name="username" id="name" required class="input_areas" value="{{ auth()->user()->username }}">
            </div>
            <div class="input-field1">
                <label>E-mail : </label>
                <input type="email" name="email" id="email" pattern="^[a-zA-Z0-9_@.-]*$" required class="input_areas1" value="{{ auth()->user()->email }}">
            </div><br />
            <div class="input-field2">
                <label>Password : </label>
                <input type="password" name="password" id="password" class="input_areas2" placeholder="Password" value="">
            </div>
            <div class="input-field5">
                <label>Confirm-Password : </label>
                <input type="password" name="confirm_password" id="confirm-password" class="input_areas5" placeholder="Re-type Password">
            </div>
            <div class="input-field3">
{{--                <label>Phone Number : </label>--}}
                <div>
{{--                    <select style="width: 10%;">--}}
{{--                        <option value="+92">+92</option>--}}
{{--                        <option value="+66">+66</option>--}}
{{--                    </select>--}}
{{--                    <input type="number" name="number" id="bio" class="input_areas3" maxlength="10" value="--}}{{--<?php echo $row["number"]; ?>--}}{{--">--}}
                </div>
            </div>
            <div class="input-field4">
                <input type="submit" name="edit_profile" id="edit_profile" class="input_areas4" value="Update Profile">
            </div>
        </form>

    </div>
</div>
@include('layout.footer')

<script>
    $(document).ready(function(){
        $('.change-image').click(function(){
            let random = Math.floor(Math.random() * 100);

            $('#pro_image').attr('value', random);




            $('.image_frame').attr('src', `https://api.adorable.io/avatars/240/${random}.png`);
        });
    })

</script>

</body>
</html>


