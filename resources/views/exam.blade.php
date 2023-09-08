<form action="{{url('exam')}}" method="POST">
	@csrf
	<label>Name:</label>
	<input type="text" name="name"><br>
	<label>Email:</label>
	<input type="email" name="email"><br>
	<label>Contact:</label>
	<input type="number" name="contact"><br>
	
	<input type="submit" name="submit" value="submit">
</form>	
	
	
