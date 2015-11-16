<!DOCTYPE html>
<html>
<head>
	<title>email send</title>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
	<style type="text/css">
	body{
		margin: 40px;
	}
	</style>
</head>
<body>
<div class="container">
		<form action="{{ url('email')}}" method="POST">
		{!!csrf_field() !!}
			<div class="form-group">
				<label>Subject:</label>
				<input type="text" name="subject" class="form-control">
			</div>
			<div class="form-group">
				<label>Sender Name</label>
				<input type="text" name="sname" class="form-control">
			</div>
			<div class="form-group">
				<label>sender email:</label>
				<input type="text" name="semail" class="form-control">
			</div>
			<div class="form-group">
				<label>recipient name</label>
				<input type="text" name="rname" class="form-control">
			</div>
			<div class="form-group">
				<label>recipient email</label>
				<input type="text" name="remail" class="form-control">
			</div>
			<div class="form-group">
				<label>content</label>
				 <textarea name="content" class="form-control"></textarea>
			</div>
			<input type="submit" value="Send" class="btn btn-primary">
		</form>
</div>

</body>
</html>