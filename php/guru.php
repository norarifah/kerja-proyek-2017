<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TKJ Stembayo | PRAKERIN</title>
    <meta name="description" content="Your Description Here">
    <meta name="keywords" content="free boostrap, bootstrap template, freebies, free theme, free website, free portfolio theme, portfolio, personal, cv">
    <meta name="author" content="Jenn, ThemeForces.com">
    
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../font-awesome-4.2.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../css/jasny-bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/animate.css">

    <!-- Slider
    ================================================== -->
    <link href="../css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="../css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="../css/responsive.css">

    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<script type="text/javascript" src="../js/modernizr.custom.js"></script>
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
 <!-- Header Section -->
    <div class="header page-scroll navbar-fixed-top">
		<div class="container">
			<div class="row">
			  	<div class="col-md-12">
					<div class="header-left">
					 	<div class="logo">
							<a href="../index.html"><img src="../img/logo tkj.png" alt=""/></a>
						</div>
						<div class="menu">
					  		<a class="toggleMenu" href="#"><img src="images/nav.png" alt="" /></a>
						    <ul class="nav navbar-nav" id="nav">
						    	<li><a class="page-scroll" href="../index.html">Home</a></li>
						    	<li><a class="page-scroll" href="../profil.html">Profil</a>
							    	<ul role="menu" class="sub-menu">
                                        <li><a href="../struktur.html">Struktur Organisasi</a></li>
										<li><a href="#">Tenaga Pendidik</a></li> 
										<li><a href=#">Fasilitas</a></li> 
                                    </ul>                                                         
						    	</li>
						    	<li><a class="page-scroll" href="../prestasi.html">Prestasi</a></li>
						    	<li><a class="page-scroll" href="../event.html">Event</a></li>			
								<div class="clear"></div>
							</ul>
				    	</div>							
	    		    	<div class="clear"></div>
	    	    	</div>
	            	<div class="header_right"><!-- start search-->
				      	<div class="search-box">
							<div id="sb-search" class="sb-search">
								<form>
								<img src="img/search.png"/>
									<input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
									<input class="sb-search-submit" type="submit" value="">
									<span class="sb-icon-search"></span>
								</form>
							</div>
						</div>
						<!----search-scripts---->
						<script src="../js/classie.js"></script>
						<script src="../js/uisearch.js"></script>
						<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>
						<!----//search-scripts---->
		           		<div class="clear"></div>
	       			</div>
	      		</div>
		 	</div>
	    </div>
	</div>
	
	
	<style>

   h3{
      text-align:center; }
   table { 
      border-collapse:collapse;
      border-spacing:0;     
      font-family:Arial, sans-serif;
      font-size:16px;
      padding-left:10px;
      margin:auto; }
      
   table th {
      font-weight:bold;
      padding:auto;
      color:#fff;
      text-align:center;
      margin: auto;
      background-color:#2A72BA;
      border-top:1px black solid;
      border-bottom:1px black solid;}

   table td {
      padding:10px;
      border-top:1px black solid;
      border-bottom:1px black solid;
      text-align:center; }         
   tr:nth-child(even) {
     background-color: #DFEBF8; }
   </style>
   
<?php


echo "<table width='100%' margin-top='50' align='center'>  
<tr>
	<tr><h4 color='#fff'>jfhdhdg</h4></tr>
	<tr><h4 color='#fff'>jfhdhdg</h4></tr>
	<th><h2 align=center> TENAGA PENDIDIK TEKNIK KOMPUTER DAN JARINGAN </h2></th>
    <tr>  </tr>
       
</tr>";

include 'konekguru.php';

echo "<table  border='1' Width='800' align='center'>  
<tr>
	<th> No </th>
	<th> Nama</th>
    <th> NIP </th>
    <th> Jenis Kelamin </th>
    <th> Agama </th>
    <th> Tempat Lahir </th>
    <th> Tanggal Lahir </th>
    <th> Alamat </th>
    <th> Status </th>
    <th> Golongan </th>
    <th> Mapel Tugas Pokok </th>
    <th> Keterangan </th>
    <th> Tugas Tambahan </th>
       
</tr>";
$query = "SELECT * FROM table_guru";
$result = mysqli_query($connect,$query) or die ("error");

while ($data = mysqli_fetch_array($result)){

$id=$data['id'];
$nama=$data['nama'];
$nip=$data['nip'];
$jenis_kelamin=$data['jenis_kelamin'];
$agama=$data['agama'];
$tempat_lahir=$data['tempat_lahir'];
$tanggal_lahir=$data['tanggal_lahir'];
$alamat=$data['alamat'];
$status=$data['status'];
$golongan=$data['golongan'];
$mapel_tugas_pokok=$data['mapel_tugas_pokok'];
$keterangan=$data['keterangan'];
$tugas_tambahan=$data['tugas_tambahan'];

echo "<tr>
	<td>$id</td>
	<td>$nama</td>
	<td>$nip</td>
	<td>$jenis_kelamin</td>
	<td>$agama</td>
	<td>$tempat_lahir</td>
	<td>$tanggal_lahir</td>
	<td>$alamat</td>
	<td>$status</td>
	<td>$golongan</td>
	<td>$mapel_tugas_pokok</td>
	<td>$keterangan</td>
	<td>$tugas_tambahan</td>
</tr>
";
};
?>
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="../js/jquery.1.11.1.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script type="text/javascript" src="../js/SmoothScroll.js"></script>
    <script type="text/javascript" src="../js/jasny-bootstrap.min.js"></script>

    <script src="../js/owl.carousel.js"></script>

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="../js/main.js"></script>

  </body>
</html>