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
                <form method="post" role="form" id="mail-form">
                    <div class="form-group"><label for="to">To:</label> <input type="text" class="form-control"
                                                                               id="to" tabindex="1"/>
                        <div class="field-options"><a href="javascript:;"
                                                      onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();">CC</a>
                            <a href="javascript:;"
                               onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();">BCC</a>
                        </div>
                    </div>
                    <div class="form-group hidden">
                        <label for="cc">CC:</label>
                        <input type="text" class="form-control" id="cc" tabindex="2"/>
                    </div>
                    <div class="form-group hidden">
                        <label for="bcc">BCC:</label>
                        <input type="text" class="form-control" id="bcc" tabindex="2"/>
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" class="form-control" id="subject" tabindex="1"/>
                    </div>
                    <div class="compose-message-editor">
                        <textarea class="form-control wysihtml5" data-stylesheet-url="{{ asset('assets/dashboard/wysihtml5/wysihtml5-color.css') }}" name="sample_wysiwyg" id="sample_wysiwyg">

                        </textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

@section('scripts')
    {{-- Your javascript for this page here --}}

    <script src="{{ asset('assets/dashboard/wysihtml5/wysihtml5-0.4.0pre.min.js') }}" id="script-resource-8"></script>
    <script src="{{ asset('assets/dashboard/wysihtml5/bootstrap-wysihtml5.js') }}" id="script-resource-9"></script>
@endsection