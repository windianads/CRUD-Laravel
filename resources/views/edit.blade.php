<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<!-- mudeng ra, kok jadi buku.store?, kan nyg arep ngirim nang route store, ooo. route store kuwe khusus nggo nge store / nyimpen data (y)  kalo sudah kita liat github saya, saya lupa langkah selanjutnya hehe--> 

	<!-- kita ganti actionnya ke buku.update , untuk mengupdate data -->
	<form action="{{route('buku.update',$post->id)}}" method="post">
		 @csrf 
		 @method('patch')
		 <!-- tambahin atribut value di input -->
		 <!-- Lihat perbedaanya -->
		<input type="text" name="nama_buku" placeholder="Nama Buku" value="{{$post->nama_buku}}"> 
		<input type="number" name="harga" placeholder="Harga" value="{{$post->harga}}"> 
		<!-- kie gunane nggo ngesubmit data sing wes keiisi (y) -->
		<button type="submit">Submit</button>
		<!-- nah tinggal kie dikirim ke controller trus ngko kang controller dikirim ming data base -->
		<!-- Cara untuk ngirim form ini ke controller adalah dengan action -->
	</form> 
</body>
</html>