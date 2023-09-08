 @if($errors->any())
  <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="error">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
 @endif
<h1>User Register</h1>
<form action="{{url('/')}}" method="POST" enctype="multipart/from-data">
	@csrf
	<label>Name:</label>
	<input type="text" name="name" value="{{old('name')}}"><br>
	<label>Email:</label>
	<input type="email" name="email" value="{{old('email')}}"><br>
	<label>Contact:</label>
	<input type="number" name="number"><br>
	<label>Gander:</label>
	<input type="radio" name="radio" >
	male
	<input type="radio" name="radio">
	female<br>
	<label>Image</label>
	<input type="file" name="image"><br>
	<label>Password:</label>
	<input type="password" name="password" ><br>
	<label>Massage:</label>
	<textarea name="massage"  value="{{old('massage')}}"></textarea>
	<input type="submit" name="submit" value="submit">
</form>