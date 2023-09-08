<h1>Edit from</h1>

<form action="{{url('/update_data')}}" method="POST">
	@csrf
	<input type="hidden" name="id" value="{{$data['id']}}">
	<label>name:</label>
	<input type="text" name="name" value="{{$data['name']}}"><br>
	<label>email:</label>
	<input type="email" name="email" value="{{$data['email']}}"><br>
	<label>contact:</label>
	<input type="number" name="number" value="{{$data['contact']}}"><br>
	<label>gander:</label><br>
 male:<input type="radio" name="radio"  value="male" {{ ($data->gander=="male")? "checked" : "" }}  >
female:<input type="radio" name="radio" value="female" {{ ($data->gander=="female")? "checked" : "" }}><br>
	<label>massage:</label>
	<textarea name="massage">{{$data['massage']}}</textarea><br>
	<input type="submit" name="edit" value="Edit">
	

</form>
<!--  male:<input type="radio" name="radio"  value="male" {{ ($data->gander=="male")? "checked" : "" }}  >
female:<input type="radio" name="radio" value="female" {{ ($data->gander=="female")? "checked" : "" }}> -->