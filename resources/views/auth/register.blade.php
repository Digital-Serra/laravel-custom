@extends('layouts.auth-master')
@section('title','Registro')
@section('body')
    <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-6 col-sm-offset-3">

        <div class="row text-center">
            <img class="img-responsive" src="{{ asset('img/logo.svg') }}" />
        </div>

        <div class="row  text-center">
            <div class="col-md-12">
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
            </div>
        </div>

        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panel-title text-center">Registre-se</div>
            </div>

            <div class="panel-body">
                {!! Form::open(['url'=>route('auth.register')]) !!}
                <div class="form-group">
                    {!! Form::label('name', 'Nome') !!}

                    {!! Form::text('name', old('name'),['class'=>'form-control','placeholder'=>'Preencha seu nome']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('email', 'Email') !!}

                    {!! Form::email('email', old('email'),['class'=>'form-control','placeholder'=>'email@example.com']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password', 'Senha') !!}

                    {!! Form::password('password',['class'=>'form-control','id'=>'password','placeholder'=>'***********']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('password_confirmation', 'Repita a Senha') !!}

                    {!! Form::password('password_confirmation',['class'=>'form-control','id'=>'password','placeholder'=>'***********']) !!}
                </div>

                <div class="form-group">
                    <!-- Button -->
                    <div class="col-sm-12 controls">
                        <button type="submit" href="#" class="btn btn-success pull-right"><i
                                    class="fa fa-check"></i> Registrar-se
                        </button>
                        <a href="{{ route('home.index') }}">
                            <button type="button" href="#" class="btn btn-primary pull-left"><i
                                        class="fa fa-reply-all"></i> Voltar ao site
                            </button>
                        </a><br><br>
                    </div>
                </div>
                {!! Form::close() !!}

            </div>
        </div>
    </div>
@stop