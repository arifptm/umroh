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
		{!! Form::label('email', 'Email',['class'=>'control-label']) !!}
		{!! Form::text('email', null, ['class' => 'form-control']) !!}
		@if ($errors->has('email'))
		    <div class="label label-danger">
		        {{ $errors->first('email') }}
		    </div>
		@endif
	</div>

	<div class="form-group">
		{!! Form::label('password', 'Password',['class'=>'control-label']) !!}
		{!! Form::password('password', ['class' => 'form-control']) !!}
		@if ($errors->has('password'))
		    <div class="label label-danger">
		        {{ $errors->first('password') }}
		    </div>
		@endif
	</div>
</div>

<div class="box-footer">
	<div class="form-group">
		{!! Form::submit('Simpan',  ['class' => 'btn btn-primary']) !!}
	</div>
</div>	
