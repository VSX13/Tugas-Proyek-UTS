<html>
<head>
	<title>Add Comment</title>

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

	<a href="Comment.php">RETURN</a>
	<br/>
	<br/>
	<h3>Add Comment</h3>
	<form method="post" action="Process.php">
			<table>
			<tr>			
				<p>Nama &nbsp;&nbsp;&nbsp;:
				<input type="text" name="nama"></p>
			</tr>
			<tr>
				<p>Email &nbsp;&nbsp;&nbsp;&nbsp;:
				<input type="text" name="email"></p>
			</tr>
			<tr>
				<p>Comment
					<br>
				<textarea placeholder="Comment anda" cols="90" rows="10" name="comment" required></textarea>
			</p>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
    </div>
</body>
</html>