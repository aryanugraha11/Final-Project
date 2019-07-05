<html>
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Data Pelanggan</title>
<link href="css.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>
<div id="menu-wrapper">
		<div id="menu">
			<ul>
				<li><a href="index.php">Homepage</a></li>
				<li><a href="pelanggan.html">Pelanggan</a></li>
				<li><a href="data.php">Data Pelanggan</a></li>
			</ul>
		</div>
        </div>
        
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
			<div align="right"><script src="javascript.js"></script><br>
            <?php echo date(" H:i:s "); ?></div>
				<h2><center>Final Project Pemrograman Web</center></h2>
				<p>Design by Arya Nugraha</p>
			</div>
		</div>
	</div>
    
    <div id="page">
    		<div id="content">
			<h2 class="title">Data Pelanggan</h2>
				<div align="justify"><br>
							<?php
							$files = "pelanggan.txt";
							$file = fopen($files, "r");
							while(!feof($file))
							{
							$filedata = fgets($file);
							echo $filedata . "<br>";
							}
							fclose($file);
							?>
						</div>
						
					</div>
					<div style="clear: both;">
                    </div>
				</div>
     <div id="footer">
    <p>&copy; Final Project Pemrograman Web<br>
    &copy; Arya Nugraha ( 1800018056 )</p>
</div>
<!-- end #footer -->

</body>
</html>