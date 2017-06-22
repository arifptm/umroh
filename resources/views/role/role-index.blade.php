@extends('theme.master')

@section('pagetitle')
Roles
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
                  <th>Title</th>
                  <th>Description</th>
                  <th></th>

@foreach($roles as $role)

                </tr>
				<td>{{ $role->id }}</td>
                <td>{{ $role->name }}</td>
                <td>{{ $role->display_name }}</td>
                <td>{{ $role->description }}</td>
                <td>
                {!! link_to('/roles/'.$role->id.'/edit', 'Edit') !!}

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