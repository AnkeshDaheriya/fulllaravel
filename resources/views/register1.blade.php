
 <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
<h1>User Register</h1>
<form action="{{url('/')}}" method="POST" enctype="multipart/form-data">
	@csrf
	<label>Name:</label>
	<input type="text" name="name" ><br>
	<label>Email:</label>
	<input type="email" name="email" ><br>
	
	<label>Image</label>
	 <input type="file" id="files" name="files" multiple>
	<label>Password:</label>
	<input type="password" name="password" ><br>
	
	<input type="submit" name="submit" value="submit">
</form>

		    
