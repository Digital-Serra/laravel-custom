<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Link Bootstrap and Font-Awesome --}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    {{-- Auth page style--}}
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
    @section('header')
    @show
    <title>Company::@yield('title')</title>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">

        <div class="row text-center">
            <img class="img-responsive" src="{{ asset('img/logo.svg') }}"/>
        </div>

        <div class="row  text-center">
            <div class="col-md-12">
                @if (Session::has('status'))
                    <div class="alert alert-warning">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                        {{ Session::get('status') }}
                    </div>
                @endif

                @unless($errors->isEmpty())
                    <ul style="list-style: none;">
                        @foreach($errors->getMessages() as $error)
                            <li>
                                <p class="alert alert-danger">
                                    <a href="#" class="close" data-dismiss="alert"
                                       aria-label="close">&times;</a>
                                    {{ $error[0] }}
                                </p>
                            </li>
                        @endforeach
                    </ul>
                @endunless
                @if (Session::has('flash_notification.message'))
                    <div class="alert alert-{{ Session::get('flash_notification.level') }}">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                        {{ Session::get('flash_notification.message') }}
                    </div>
                @endif
            </div>
        </div>
        @section('body')
        @show
    </div>
    <div id="particles-js"></div>
</div>
<div class="footer">
    @section('footer')
    @show
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/auth/particles.min.js') }}"></script>
    <script>
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('particles-js', 'js/auth/particles.json', function () {
            console.log('callback - particles.js config loaded');
        });
    </script>
</div>
</body>
</html>
