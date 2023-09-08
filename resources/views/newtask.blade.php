<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<title></title>
</head>
<body>
    <form>
    	
    	
    	<label>Name:</label>
    	<input type="name" name="name"><br>
    	<input type="submit" id="newtask" name="submit" value="submit">
   </form>
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script type="text/javascript">
  $(document).on( "click","#newtask", function( event ) {
        event.preventDefault();
  
        $.ajax({
        	
        	'headers': {
	                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	                    },
          type: 'POST',
          url:'newtask',
          data:
          	$("form").serialize(),       
          success: function(data){
            
              alert(data.massage);
             console.log(data);

               
            },
             error:function(errorMessge){

              alert('Error =>'+errorMessge);
              }
        })
    });
    
</script>
   
</body>
</html>