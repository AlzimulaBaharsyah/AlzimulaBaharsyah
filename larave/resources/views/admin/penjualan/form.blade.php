<div class="form-group{{ $errors->has('nama') ? 'has-error' : ''}}">
    {!! Form::label('nama', 'Nama', ['class' => 'control-label']) !!}
    {!! Form::text('nama', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('email') ? 'has-error' : ''}}">
    {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
    {!! Form::email('email', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('no_hp') ? 'has-error' : ''}}">
    {!! Form::label('no_hp', 'No Hp', ['class' => 'control-label']) !!}
    {!! Form::text('no_hp', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('no_hp', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('alamat') ? 'has-error' : ''}}">
    {!! Form::label('alamat', 'Alamat', ['class' => 'control-label']) !!}
    {!! Form::text('alamat', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('kota') ? 'has-error' : ''}}">
    {!! Form::label('kota', 'Kota', ['class' => 'control-label']) !!}
    {!! Form::text('kota', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('kota', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('negara') ? 'has-error' : ''}}">
    {!! Form::label('negara', 'Negara', ['class' => 'control-label']) !!}
    {!! Form::text('negara', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('negara', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('kurir') ? 'has-error' : ''}}">
    {!! Form::label('kurir', 'Kurir', ['class' => 'control-label']) !!}
    {!! Form::text('kurir', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('kurir', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('pembayaran') ? 'has-error' : ''}}">
    {!! Form::label('pembayaran', 'Pembayaran', ['class' => 'control-label']) !!}
    {!! Form::text('pembayaran', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('pembayaran', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('total') ? 'has-error' : ''}}">
    {!! Form::label('total', 'Total', ['class' => 'control-label']) !!}
    {!! Form::text('total', null, ('required' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
    {!! $errors->first('total', '<p class="help-block">:message</p>') !!}
</div>


<div class="form-group">
    {!! Form::submit($formMode === 'edit' ? 'Update' : 'Create', ['class' => 'btn btn-primary']) !!}
</div>
