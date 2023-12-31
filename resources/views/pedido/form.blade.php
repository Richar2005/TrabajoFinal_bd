<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('precio') }}
            {{ Form::text('precio', $pedido->precio, ['class' => 'form-control' . ($errors->has('precio') ? ' is-invalid' : ''), 'placeholder' => 'Precio']) }}
            {!! $errors->first('precio', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('clientre_id') }}
            {{ Form::text('clientre_id', $pedido->clientre_id, ['class' => 'form-control' . ($errors->has('clientre_id') ? ' is-invalid' : ''), 'placeholder' => 'Clientre Id']) }}
            {!! $errors->first('clientre_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>