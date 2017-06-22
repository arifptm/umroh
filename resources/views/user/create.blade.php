@extends('theme.master')

@section('pagetitle')
	Create User
@endsection	

@section('content')
<div class="box box-primary">
    {!! Form::open(['url'=> '/users', 'role' => 'form']) !!}
        @include('user/field')
    {!! Form::close() !!}
</div>
@endsection	
