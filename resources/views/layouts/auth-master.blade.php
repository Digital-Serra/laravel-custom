<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="{{ env('APP_NAME') }} - Login"/>
    <meta name="author" content="Mauri de Souza Nunes(github.com/mauri870) - Digital Serra Tecnologia Digital"/>
    <link rel="icon" href="http://demo.neontheme.com/assets/images/favicon.ico">
    <title>{{ $title }}</title>
    @include('dashboard.includes.styles')
</head>
<body class="page-body login-page login-form-fall" data-url="{{ env('APP_URL') }}">
<script type="text/javascript">
    var baseurl = '{{ env('APP_URL') }}';
</script>
<div class="login-container">
    <div class="login-header login-caret">
        <div class="login-content">
            <a href="{{ route('dashboard.index') }}" class="logo">
                <img src="{{ asset('assets/dashboard/images/logo@2x.png') }}" width="120" alt=""/>
            </a>
            <!-- progress bar indicator -->
            <div class="login-progressbar-indicator"><h3>43%</h3> <span>Efetuando o login...</span></div>
        </div>
    </div>
    <div class="login-progressbar">
        <div></div>
    </div>
    <br><br>
    <div class="row  text-center">
        <div class="col-sm-6 col-sm-offset-3 text-center">
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
    @yield('body')

</div>
@include('dashboard.includes.scripts')
<!-- JavaScripts initializations and stuff -->
<!-- Demo Settings -->
<script src="{{ asset('assets/dashboard/js/neon-custom.js') }}" id="script-resource-17"></script>
<script src="{{ asset('assets/dashboard/js/neon-demo.js') }}" id="script-resource-18"></script>
<script src="{{ asset('assets/dashboard/js/neon-skins.js') }}" id="script-resource-19"></script>
@yield('scripts')
</body>
</html>