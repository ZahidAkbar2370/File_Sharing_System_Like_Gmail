@extends('User/user_layout')
@section('content')

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Profile</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
			<div class="panel panel-default">
					<div class="panel-heading">Update Profile</div>
					<div class="panel-body">
						<p style="font-size:16px; color:red" align="center"></p>
		<div class="col-md-12">
							
			<form role="form" method="post" action="{{URL::to('user-update-profile')}}">
				@csrf
				
				<div class="form-group">
					<label>Name</label>
					<input class="form-control" type="text" name="name" required="true" placeholder="Enter Full Name" value="{{Auth::user()->name}}">
				</div>

				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="subject"required="true" readonly="" value="{{Auth::user()->email}}">
				</div>
								
													
				<div class="form-group has-success">
					<button type="submit" class="btn btn-primary" name="submit">Update Profile</button>
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