<!doctype html>
<html >
    <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <script src="https://kit.fontawesome.com/5e23cd948e.js" crossorigin="anonymous"></script>
    <style>
        ul.pagination{
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 8px 8px;
        }
        ul.pagination li {
            font-size: 12px;
            font-weight: bold;
    display:table;
        }

        ul.pagination li a , ul.pagination li.active span, ul.pagination li.disabled span{
            padding: 8px 8px;
            text-decoration: none;
            transition: background-color .3s;
        }
        ul.pagination li a{
            color:black;
        }


        ul.pagination li a:hover {background-color: #999999;}
        ul.pagination li span {color: #999999;}
        
    
    </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
            
            <div class="content">
                <header>
                    @include('layout.navBar')
                </header>
                <main>
                    @if(Session::has('todook'))
                        <div class='alert-info'>
                            {{Session::get('todook')}}
                        </div>                    
                    @endif
                    
                    @yield('main')
                </main>
            </div>
        </div>
    </body>
</html>
