<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<form action="{{route('buku.store')}}" method="post">
		 @csrf 
		<input type="text" name="nama_buku" placeholder="Nama Buku">  
		<input type="number" name="harga" placeholder="Harga"> 
		<button type="submit">Submit</button>
	</form> 
</body>
</html>
