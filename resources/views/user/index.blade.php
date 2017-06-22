@extends('theme.master')

@section('pagetitle')
Users
@stop

@section('content')
	

	
<div class="row">


	<div class="col-xs-12">
          <div class="box">

            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th></th>

@foreach($users as $user)

                </tr>
				<td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>

                <td>
                {!! link_to('/users/'.$user->id.'/edit', 'Edit') !!}

                </td>
                <tr>
@endforeach
                </tr>
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>

</div>


@stop