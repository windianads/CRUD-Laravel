<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
</head>
<body>
	<!-- mudeng ra, kok jadi buku.store?, kan nyg arep ngirim nang route store, ooo. route store kuwe khusus nggo nge store / nyimpen data (y)  kalo sudah kita liat github saya, saya lupa langkah selanjutnya hehe--> 
	<form action="{{route('buku.store')}}" method="post">
		 @csrf 
		<input type="text" name="nama_buku" placeholder="Nama Buku">  
		<input type="number" name="harga" placeholder="Harga"> 
		<!-- kie gunane nggo ngesubmit data sing wes keiisi (y) -->
		<button type="submit">Submit</button>
		<!-- nah tinggal kie dikirim ke controller trus ngko kang controller dikirim ming data base -->
		<!-- Cara untuk ngirim form ini ke controller adalah dengan action -->
	</form> 
</body>
</html>