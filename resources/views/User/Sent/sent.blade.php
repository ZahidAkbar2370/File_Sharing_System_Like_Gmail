@extends('User/user_layout')
@section('content')


<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Sent</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			
				
				
				<div class="panel panel-default">
					<div class="panel-heading">Sent Mails</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"></p>
						<div class="col-md-12">
							
							<div class="table-responsive">
            <table class="table table-bordered mg-b-0">
              <thead>
                <tr>
                  <th width="180px">Subject</th>
                  <th width="650px">Message</th>
                  <th>File</th>
                  <th width="30px">Date</th>
                  <th width="60px">Action</th>
                </tr>
              </thead>
              <tbody>
              	@if(!empty($user_all_send_mails))
              	@foreach($user_all_send_mails as $mails)
              		
              		<tr>
              			<td>{{$mails->subject}}</td>
              			<td>{{$mails->message}}</td>
              			<td>{{$mails->file}}</td>
              			<td>{{$mails->created_at}}</td>
              			<td><a href="delete-mail/{{$mails->id}}" class="btn btn-danger">Delete</a></td>
              		</tr>
              	@endforeach
              	@endif
              </tbody>
            </table>
          </div>
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->


@endsection