<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ url('CSS/style.css') }}">
    <script src="https://kit.fontawesome.com/497fc3cf26.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="sidebar">
        <a class="active" href="adminpanelhome"></i>Home</a><hr>
        <a href="adminpanelnews">News</a><hr>
        <a href="adminpanelcontact">Contact</a><hr>
        <a href="adminpanelabout">About</a>
        <a href="adminpanelaccount"></i>Account</a>
        <a href="adminpanelsetting"></i>Setting</a>
        <a href="#"><i class="fas fa-sign-out-alt"></i>Logout</a>
      </div>
      <div class="content">
        
     </div>
    @yield('content')
</body>
</html>