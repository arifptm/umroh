<div class="box-body">
	<div class="form-group">
		{!! Form::label('name', 'Name',['class'=>'control-label']) !!}
		{!! Form::text('name', null, ['class' => 'form-control']) !!}
		@if ($errors->has('name'))
		    <div class="label label-danger">
		        {{ $errors->first('name') }}
		    </div>
		@endif
	</div>

	<div class="form-group">
		{!! Form::label('display_name', 'Display Name',['class'=>'control-label']) !!}
		{!! Form::text('display_name', null, ['class' => 'form-control']) !!}
		@if ($errors->has('display_name'))
		    <div class="label label-danger">
		        {{ $errors->first('display_name') }}
		    </div>
		@endif
	</div>

	<div class="form-group">
		{!! Form::label('description', 'Description',['class'=>'control-label']) !!}
		{!! Form::text('description', null, ['class' => 'form-control']) !!}
		@if ($errors->has('description'))
		    <div class="label label-danger">
		        {{ $errors->first('description') }}
		    </div>
		@endif
	</div>
</div>

<div class="box-footer">
	<div class="form-group">
		{!! Form::submit('Simpan',  ['class' => 'btn btn-primary']) !!}
	</div>
</div>	