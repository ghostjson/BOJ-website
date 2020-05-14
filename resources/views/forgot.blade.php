<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget</title>
</head>
<body>
    <form action="/forgot" method="post">
        
        @csrf
        
        <div class="input_groups">
            <label>Secret_Code</label>
            <input type="password" name="secret" placeholder="Secret Code">
        </div>
        <div class="input_groups">
            <label>Secret_Code</label>
            <input type="password" name="new_password" placeholder="New Pasword">
        </div>
        <div class="input_groups">
            <label>Secret_Code</label>
            <input type="submit" name="change" value="Change Password">
        </div>
    </form>
</body>
</html>

