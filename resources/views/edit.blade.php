<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<form action="{{route('buku.update',$post->id)}}" method="post">
		 @csrf 
		 @method('patch')
		<input type="text" name="nama_buku" placeholder="Nama Buku" value="{{$post->nama_buku}}"> 
		<input type="number" name="harga" placeholder="Harga" value="{{$post->harga}}"> 
		<button type="submit">Submit</button>
	</form> 
</body>
</html>
