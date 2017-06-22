@extends('theme.master')

@section('pagetitle')
	Create Role
@endsection	

@section('content')
<div class="box box-primary">
    {!! Form::open(['url'=> '/roles', 'role' => 'form']) !!}
        @include('role/role-field')
    {!! Form::close() !!}
</div>
@endsection	
