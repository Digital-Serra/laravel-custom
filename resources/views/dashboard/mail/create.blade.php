@extends('layouts.dashboard',['title'=>'Novo Email'])

@section('styles')
    {{-- Your stylesheet for this page here --}}
    <link rel="stylesheet" href="{{ asset('assets/dashboard/wysihtml5/bootstrap-wysihtml5.css') }}">
@endsection

@section('content')
    <div class="mail-env"> <!-- compose new email button -->
        <div class="mail-body">
            <div class="mail-header"> <!-- title -->
                <div class="mail-title">
                    Novo Email <i class="entypo-pencil"></i></div>
                <!-- links -->
                <div class="mail-links">
                    <a href="{{ route('dashboard.mail.create') }}" class="btn btn-default">
                        <i class="entypo-cancel"></i>
                    </a>
                    <a class="btn btn-success btn-icon" onclick="document.getElementById('mail-form').submit();">
                        Enviar
                        <i class="entypo-mail"></i>
                    </a>
                </div>
            </div>
            <div class="mail-compose">
                {!! Form::open(['route'=>'dashboard.mail.store','method'=>'post','id'=>'mail-form']) !!}
                    <div class="form-group">
                        {!! Form::label('to','Para:') !!}
                        <input type="text" class="form-control" id="to" tabindex="1" placeholder="email1,email2,email3"/>
                        <div class="field-options">
                            <a href="javascript:;" onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" title="Cópia">CC</a>
                            <a href="javascript:;"
                               onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" title="Cópia Oculta">BCC</a>
                        </div>
                    </div>
                    <div class="form-group hidden">
                        {!! Form::label('cc','Cópia:') !!}
                        <input type="text" class="form-control" placeholder="email1,email2,email3" id="cc" tabindex="2"/>
                    </div>
                    <div class="form-group hidden">
                        {!! Form::label('bcc','Cópia Oculta:') !!}
                        <input type="text" class="form-control" placeholder="email1,email2,email3" id="bcc" tabindex="2"/>
                    </div>
                    <div class="form-group">
                        {!! Form::label('subject','Assunto:') !!}
                        <input type="text" class="form-control" id="subject" tabindex="1"/>
                    </div>
                    <div class="compose-message-editor">
                        {!! Form::textarea('message',null,['class'=>'form-control wysihtml5','data-stylesheet-url'=>asset('assets/dashboard/wysihtml5/wysihtml5-color.css'),'id'=>'sample_wysiwyg']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {{-- Your javascript for this page here --}}

    <script src="{{ asset('assets/dashboard/wysihtml5/wysihtml5-0.4.0pre.min.js') }}" id="script-resource-8"></script>
    <script src="{{ asset('assets/dashboard/wysihtml5/bootstrap-wysihtml5.js') }}" id="script-resource-9"></script>
@endsection