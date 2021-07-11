@extends('User/user_layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Compose</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
					<div class="panel-heading">Compose a Mail</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"></p>
		<div class="col-md-12">
							
			<form role="form" method="post" action="{{URL::to('user-save-compose-mail')}}">
				@csrf
				
				<div class="form-group">
					<label>To*</label>
					<input class="form-control" type="email" name="reciver_mail" required="true" placeholder="Enter Reciver Mail">
				</div>

				<div class="form-group">
					<label>Subject*</label>
					<input type="text" class="form-control" name="subject"required="true" placeholder="Enter Subject">
				</div>
								
				<div class="form-group">
					<label>Message</label>
					<textarea class="form-control" name="message" style="height: 120px" placeholder="Enter Your Message..."></textarea>
				</div>

				<div class="form-group">
					<label>File</label>
					<input type="file" class="form-control" name="file">
				</div>
																
				<div class="form-group has-success">
					<button type="submit" class="btn btn-primary" name="submit">Send</button>
				</div>
								
			</form>
					
		</div>
								
						</div>
					</div>
				</div><!-- /.panel-->
			</div><!-- /.col-->
		</div><!-- /.row -->
	</div><!--/.main-->

@endsection