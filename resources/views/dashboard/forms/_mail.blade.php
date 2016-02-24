<div class="form-group">
    {!! Form::label('to','Para:') !!}
    {!! Form::text('to',null,['class'=>'form-control','id'=>'to','tabindex'=>'1','placeholder'=>'email1,email2,email3']) !!}
    <div class="field-options">
        <a href="javascript:;" onclick="$(this).hide(); $('#cc').parent().removeClass('hidden'); $('#cc').focus();" title="Cópia">CC</a>
        <a href="javascript:;"
           onclick="$(this).hide(); $('#bcc').parent().removeClass('hidden'); $('#bcc').focus();" title="Cópia Oculta">BCC</a>
    </div>
</div>
<div class="form-group hidden">
    {!! Form::label('cc','Cópia:') !!}
    {!! Form::text('cc',null,['class'=>'form-control','id'=>'cc','tabindex'=>'2','placeholder'=>'email1,email2,email3']) !!}
</div>
<div class="form-group hidden">
    {!! Form::label('bcc','Cópia Oculta:') !!}
    {!! Form::text('bcc',null,['class'=>'form-control','id'=>'bcc','tabindex'=>'3','placeholder'=>'email1,email2,email3']) !!}
</div>
<div class="form-group">
    {!! Form::label('subject','Assunto:') !!}
    {!! Form::text('subject',null,['class'=>'form-control','id'=>'subject','tabindex'=>'4']) !!}
</div>
<div class="compose-message-editor">
    {!! Form::textarea('message',null,['class'=>'form-control wysihtml5','data-stylesheet-url'=>asset('assets/dashboard/wysihtml5/wysihtml5-color.css'),'id'=>'sample_wysiwyg']) !!}
</div>