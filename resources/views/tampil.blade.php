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
			<!-- ayou yutuban lagi gan -->
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
                <td><a href="{{route('buku.edit', $book->id)}}">Edit</a></td>
		</tr>
		@endforeach
	</table>
	<a href="/buku/create">Tambah Data</a>
</body>
</html> 
