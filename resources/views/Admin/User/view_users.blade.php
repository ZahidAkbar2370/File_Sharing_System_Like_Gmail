@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable"> 

<div class="box span12">
  <!-- <a href="{{url('admin-add-categorey')}}"><button class="btn btn-primary">Add Categorey</button></a> -->
  <div class="box-header" data-original-title>
    <h2><i class="halflings-icon user"></i><span class="break"></span>All Users</h2>
  </div>

  <div class="box-content">

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
          <th>ID</th>
          <th>User Name</th>
          <th>Email</th>
          <th>Created_at</th>
          <th>Action</th>
        </tr>
      </thead>
      @foreach($all_users as $users)
      <tr>
        <td>{{$users->id}}</td>
        <td>{{$users->name}}</td>
        <td>{{$users->email}}</td>
        <td>{{$users->created_at}}</td>
        <td><a href="admin-delete-user/{{$users->id}}" class="btn btn-danger" ><i class="halflings-icon white trash"></i></a></td>
      </tr>
      @endforeach
      <tbody>
      </tbody>
        
      
    </table>            
  </div>
</div><!--/span-->

</div><!--/row-->

    

@endsection