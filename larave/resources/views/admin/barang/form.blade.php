<div class="form-group{{ $errors->has('nama') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'control-label']) !!}
    {!! Form::text('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('harga') ? 'has-error' : ''}}">
    {!! Form::label('harga', 'Harga', ['class' => 'control-label']) !!}
    {!! Form::text('harga', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('deskripsi') ? 'has-error' : ''}}">
    {!! Form::label('deskripsi', 'Deskripsi', ['class' => 'control-label']) !!}
    {!! Form::text('deskripsi', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('deskripsi', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('kategori') ? 'has-error' : ''}}">
    {!! Form::label('kategori', 'Kategori', ['class' => 'control-label']) !!}
    {!! Form::text('kategori', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('kategori', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('foto') ? 'has-error' : ''}}">
    {!! Form::label('foto', 'Foto', ['class' => 'control-label']) !!}
    {!! Form::file('foto', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('foto', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
