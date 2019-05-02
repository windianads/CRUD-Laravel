<!DOCTYPE html>
<html>
<head>
	<title>Tampil</title>
</head>
<body>
	<table>
		<tr>
			<th>Id</th>
			<th>Nama Buku</th>
			<th>Harga</th>
		</tr>
		@foreach($books as $book)
		<tr>
			<td>{{$book->id}}</td>
			<td>{{$book->nama_buku}}</td> 
			<td>{{$book->harga}}</td>
			 <td>
                    <form action="{{route('buku.destroy', $book->id)}}" method="post">
                        @csrf
                        @method ('DELETE')
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form> 
                </td>
		</tr>
		@endforeach
	</table>
</body>
</html> 
