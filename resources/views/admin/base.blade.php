<html>
<head>

    <title>Admin Panel</title>

    <link rel="stylesheet" href="/assets/css/admin.css">

</head>


<body>
<header role="banner" style="display: flex">
    <img src="/assets/logo2.png" height="50px" style="margin-top: 10px;margin-left: 10px;">
    <h1>Admin Panel</h1>
    <ul class="utilities">
        <li class="users"><a href="#">My Account</a></li>
        <li class="logout warn"><a href="/logout">Log Out</a></li>
    </ul>
</header>

<nav role="navigation">
    <ul class="main">
        <li class="dashboard"><a href="/admin">Dashboard</a></li>
        <li class="write"><a href="/admin/video">Add Videos</a></li>
        <li class="edit"><a href="/admin/website">Add Websites</a></li>
    </ul>
</nav>

<main role="main">


    @yield('content')



</main>


</body>


</html>