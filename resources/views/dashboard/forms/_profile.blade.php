<div class="form-group">
    {!! Form::label('name', 'Nome') !!}

    {!! Form::text('name', auth()->user()->name,['class'=>'form-control','placeholder'=>'Preencha seu nome']) !!}
</div>
<div class="form-group">
    {!! Form::label('email', 'Email') !!}

    {!! Form::email('email', auth()->user()->email,['class'=>'form-control','placeholder'=>'email@example.com']) !!}
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
    <button type="submit" href="#" class="btn btn-success pull-right"><i
                class="fa fa-check"></i> Atualizar perfil
    </button>
</div>