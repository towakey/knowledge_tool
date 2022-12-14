<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','maxlength' => 255]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', 'Password:') !!}
    {!! Form::password('password', ['class' => 'form-control','minlength' => 8]) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password_confirmation', 'Password Confirmation:') !!}
    {!! Form::password('password_confirmation', ['class' => 'form-control','minlength' => 8]) !!}
</div>

<!-- Is Admin Field -->
<div class="form-group col-sm-6">
    <div class="form-check">
        {!! Form::hidden('is_admin', 0, ['class' => 'form-check-input']) !!}
        {!! Form::checkbox('is_admin', '1', null, ['class' => 'form-check-input']) !!}
        {!! Form::label('is_admin', 'Is Admin', ['class' => 'form-check-label']) !!}
    </div>
</div>
