<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Homepage</title>
<link href="css.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>    
<form name="formcari" onSubmit="google()">Google:
		<input name="keyword" size="40" type="text">
		<input type="submit" value="Search">
		</form>
	<div id="menu-wrapper"> 

		<div id="menu">
			<ul>
				<li><a href="index.php">Homepage</a></li>
				<li><a href="pelanggan.html">Pelanggan</a></li>
				<li><a href="data.php">Data Pelanggan</a></li>
                
			</ul>
		</div>
		<!-- end #menu -->
	</div>
    
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
			<div align="right"><script src="javascript.js"></script><br>
            <?php 
			// menampilkan waktu
			echo date(" H:i:s "); ?></div>
				<h2><center>Final Project Pemrograman Web</center></h2>
				<p>Design by Arya Nugraha</p>
			</div>
		</div>
	</div>
	<!-- end #header -->
	<div id="page">
		<div id="page-bgtop">
			<div id="page-bgbtm">
				<div id="content">
					<div class="post">
						<h2 class="title"><center> Welcome to My Website </center></h2>
							<h3><center>Life Motto</center></h3><br>
							<center>I never worried about wherther my player will be granted, that I worry about is if I do not pray.</center>
						<div class="entry">
							<center><p><img src="Gambar/IMG20170805105633.jpg" width="380" height="480" /></p></center>
						</div>
					</div>
					<div style="clear: both;">
                    </div>
				</div>
				<!-- end #content -->
				<div id="sidebar">
					<ul>
                    <li><audio src="Happiness.mp3" autoplay controls hidden="hidden"></audio></li>
						</ul>
							<h2>Contanct</h2>
							<ul>
                            <center><img src="Gambar/IMG20170805131435.JPG" width="140" height="180" style="border-radius: 99em; border: 1px solid #089975; box-shadow: 1px 1px 1px 4px rgb(255,255,255);padding:4px;"/></center>
                            <font face="Times New Roman, Times, serif">
								<p><li>Nama  : Arya Nugraha<br></li>
                                <li>NIM   : 1800018056<br></li>
                                <li>Email : arya1800018056@webmail.uad.ac.id</li>
                                <li>No HP : 082185358810</li>
                              </font></p>
								</ul>
						<ul>
                        </ul>
				</div>
				<!-- end #sidebar -->
				<div style="clear: both;">
                </div>
			</div>
		</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
    <p>&copy; Final Project Pemrograman Web<br>
    &copy; Arya Nugraha ( 1800018056 )</p>
</div>
<!-- end #footer -->
</body>

</html>
