<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-rc.5/css/uikit.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GADTC Admin Page</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
 <header id="admin-header">
        <h3>Admin Page</h3>
        <ul>
            <li>Alkein Villajos</li>
            <li class="profile-pic">
                <img src="images/admin/prof.jpg">
            </li>
        </ul>
    </header>
    <div id="admin-holder">
        <section id="admin-side-nav">
            <div class="side-navbars">
                <ul>
                    <li class="active"><i class="material-icons">dashboard</i><a href="#">Dashboard</a></li>
                    <li id="add-new"><i class="material-icons">create</i>Add New</li>
                    <div class="add-new-component is-close">
                        <ul>
                            <li><i class="material-icons">add</i><a href="/admin/add-new-announcement">Announcement</a></li>
                            <li><i class="material-icons">add</i><a href="#">Bulletin</a></li>
                            <li><i class="material-icons">perm_identity</i><a href="#">User</a></li>
                        </ul>
                    </div>
                    <li><i class="material-icons">web_asset</i><a href="#">Announcements</a></li>
                    <li><i class="material-icons">list</i><a href="#">Bulletin</a></li>
                </ul>
            </div>
        </section>

        <section id="main-content">
            <div class="admin-main-content-container">
                <div class="admin-main-content">
                    <h1>DASHBOARD</h1>
                    <h1>DASHBOARD</h1>
                </div>
            </div>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    {{-- <script src="{{asset('myscript.js')}}"></script> --}}
  <script>
        $(document).ready(function() {
            $('.add-new-component').hide();
            $('#add-new').click(function() {
        $('.add-new-component').slideToggle();
    });
        });
    </script>
</body>
</html>
