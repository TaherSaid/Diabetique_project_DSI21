<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="profile/nav_bar_style.css">
    {{-- <link rel="stylesheet" href="css/vosdon.css"> --}}
    <link rel="stylesheet" href="css/profile.css">
    {{-- <link rel="stylesheet" href="css/association.css"> --}}
    <title>home</title>
</head>
<body>
    <nav class="navbar navbar-light navbar-expand-md" id="desktop">
        <a href="/" class="navbar-brand">
            <img src="image/logo.png" id="brand"/>
        </a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" >
            <ul class="navbar-nav ml-auto resp">
                <li class="nav-item">
                    <img src="image/icon/Icon material-notifications@2x.png" id="notif">
                </li>

                <li class="nav-item">
                    <a class="dropdown-item" href="/logout"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                       <img src="image/icon/Icon open-account-logout@2x.png" id="logoutIcon">
                 </a>

                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                     @csrf
                 </form>

                </li>
            </ul>
        </div>
    </nav>

    <nav class="navbar navbar-light navbar-expand-md" id="mobile">
        <a href="#" class="navbar-brand">
            <img src="image/icon/logo@2x.png" id="brand">
        </a>
        <div class="sidebarPhone">

                <a href="home"><img src="image/icon/Icon ionic-ios-home@2x.png" class="home"></a>
               <a href="profille"> <img src="image/icon/Icon awesome-user-alt@2x.png"></a>
                <a href="vosdon"><img src="image/icon/Icon awesome-donate@2x.png"></a>
               <a href="association"> <img src="image/icon/Icon material-list@2x.png"></a>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbar-menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-menu">
            <ul class="navbar-nav ml-auto resp">
                <li class="nav-item">
                    <img src="image/icon/Icon material-notifications@2x.png" id="notif">
                </li>
                <li class="nav-item" id="profile">
                    <a class="nav-link" href="#" id="userName">
                        <img src="image/blog/blog_2.png" id="profilePic">
                        <p>Foulena Foulena</p>
                    </a>
                </li>
                <li class="nav-item" id="notifItem">
                    <a class="nav-link" href="#" >
                    <img src="image/icon/Icon material-notifications@2x.png" id="notifPhone">
                    <p>Notifications</p>
                    </a>
                </li>

                <li class="nav-item" id="logout">
                    <a class="nav-link" href="/logout"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                    <img src="image/icon/Icon open-account-logout@2x.png" id="logoutIcon">
                    <p>Logout</p></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="row">
        <div class="col-2 hiden-ele">
            <div class="sidebar">
                <div class="">

                        <img src="image/blog/blog_2.png" id="profilePic">


                        <a class="nav-link" href="#" id="userName">Foulena Foulena</a>

                </div>
                <div class="">
                    <a id="a_menu" href="home">
                      <img src="image/icon/Icon ionic-ios-home@2x.png" class="home">
                      <p>Home</p>
                    </a>
                </div>
                <div class="">
                    <a id="a_menu" href="profille">
                        <img src="image/icon/Icon awesome-user-alt@2x.png">
                        <p>Profil</p>
                    </a>
                </div>
                <div class="">
                    <a id="a_menu" href="vosdon">
                        <img src="image/icon/Icon awesome-donate@2x.png">
                        <p>Table mesure</p>
                    </a>
                </div>
                <div class="">
                    <a id="a_menu" href="association">
                        <img src="image/icon/Icon material-list@2x.png">
                        <p>Associations</p>
                    </a>
                </div>
                </ul>
            </div>
        </div>
        <div class="col-10 hiden-ele" >
                <div class="containerCustom">
                     @yield('content2')
                </div>
        </div>
        <div class="col-12 hiden-ele1" >
            <div class="containerCustom">
                @yield('content2')
            </div>
        </div>

    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
