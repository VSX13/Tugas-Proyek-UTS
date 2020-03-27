<html>
<head>
	<title>Comment</title>

	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="gambar4.ico">

</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">Techno News</h1>
		<h3 class="deskripsi">Selalu Menampilkan Berita Teknologi Terkini</h3>
	</header>
 
	<div class="menu">
		<ul>
			<li><a href="Home.php">HOME</a></li>
			<li><a href="News.php">News</a></li>
			<li><a href="Video.php">Video</a></li>
			<li><a href="AboutUs.php">About Us</a></li>
			<li><a href="Comment.php">Comment</a></li>
		</ul>
	</div>

    <div class="tabel">

    	<h2>Comment</h2>
	<a href="Add.php">Add Comment</a>
	<br/>
	<br>
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Email</th>
			<th>Comment</th>
		</tr>
		<?php 
		include 'koneksi2.php';
		$data = mysqli_query($koneksi,"select * from Admin");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['Nama']; ?></td>
				<td><?php echo $d['Email']; ?></td>
				<td><?php echo $d['Comment']; ?></td>
			</tr>
			<?php 
		}
		?>
	</table>

    </div>
</body>
</html>