@extends('Admin/admin_layout')
@section('content')

<div class="row-fluid sortable"> 

<div class="box span12">
  <!-- <a href="{{url('admin-add-categorey')}}"><button class="btn btn-primary">Add Categorey</button></a> -->
  <div class="box-header" data-original-title>
    <h2><i class="halflings-icon user"></i><span class="break"></span>All Delete Mails</h2>
  </div>

  <div class="box-content">

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
          <th>ID</th>
          <th>Reciver Mail</th>
          <th>Sender Mail</th>
          <th>Subject</th>
          <th>Message</th>
          <th>File</th>
          <th>Status</th>
          <th>Created_at</th>
        </tr>
      </thead>
      @foreach($all_mails as $mails)
      <tr>
        <td>{{$mails->id}}</td>
        <td>{{$mails->sender_mail}}</td>
        <td>{{$mails->reciver_mail}}</td>
        <td>{{$mails->subject}}</td>
        <td>{{$mails->message}}</td>
        <td>{{$mails->file}}</td>
        <td>{{$mails->status}}</td>
        <td>{{$mails->created_at}}</td>
        <!-- <td><a href="admin-delete-mail/{{$mails->id}}" class="btn btn-danger" ><i class="halflings-icon white trash"></i></a></td> -->
      </tr>
      @endforeach
      <tbody>
      </tbody>
        
      
    </table>            
  </div>
</div><!--/span-->

</div><!--/row-->

    

@endsection