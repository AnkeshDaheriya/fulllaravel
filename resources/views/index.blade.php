
<head>

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
</head>
<style>
.fa {
  font-size: 50px;
  cursor: pointer;
  user-select: none;
}

.fa:hover {
  color: darkblue;
}
</style>
<body>
	<div class="Container">
	
    <table class="table table-hover" style="border: 1px solid black;"> 
		<thead>
			
			<tr>
				<th>s/no.</th>
				<th>name</th>
				<th>email</th>
				<th>contact</th>
				
				<th>massage</th>
				<th>views</th>
				<th>user_edit</th>
				<th>delet</th>
			</tr>		
		</thead>
		<tbody>
			@php $i = 1; @endphp
		    @foreach ($data as $key => $value)
				
		   <tr>
			<td>{{$i++}}</td>
			<td>{{$value['name']}}</td>
			<td>{{$value['email']}}</td>
			
			
			<td> 
			<a href="{{asset('imagefile/1682337847.png')}}"> 
                      <img src="{{asset('imagefile/1682337847.png')}}" style="width: 150px; height: 150px; border-radius: 50%;" ></a>
                <a href=""<i onclick="myFunction(this)" id="like" class="fa fa-thumbs-up"></i></a>
               </td>
			<!-- <td>{{$value['password']}}</td> -->
			<td>{{$value['massage']}}</td>
			
			<td><a href="{{url('user_views/'.$value['id'])}}">View</a></td>
			<td><a href="{{url('user_edit/'.$value['id'])}}">edit</a></td>
			<td><a href="{{url('delet/'.$value['id'])}}">delet</a></td>
		</tr>
	     @endforeach
	     
	   </tbody>
      </table>
	<script>
  function myFunction(x) {
	  x.classList.toggle("fa-thumbs-down");
	}
</script>
</body>