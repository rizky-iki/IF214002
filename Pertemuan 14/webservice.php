


<?php 
$host   = "localhost";
$dbuser = "postgres";
$dbpass = "waifu";
$port   = "5432";
$dbname = "ikan_skyy";
	
  header("Access-Control-Allow-Origin: *");
  header("Access-Control-Allow-Credentials: true");
  header('Access-Control-Allow-Methods: GET, POST, OPTIONS, DELETE, PUT');
  header('Content-Type: application/json; charset=utf-8');
	
  $request = $_SERVER['REQUEST_URI'];
  
  function ambilSemuaDataIkan_skyy($host, $dbuser, $dbpass, $port, $dbname) {
    try {
			
      // Coba dulu apa yang ada di sini,
			
      // Biasanya dikasih nama $conn 
      $link = new PDO("pgsql:dbname=$dbname;host=$host",$dbuser,$dbpass);
			
      $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			
      $objekPerintah = $link->prepare("SELECT* from detail_pemesanan");
      $objekPerintah->execute();
			
      $hasilQuery = $objekPerintah->fetchAll();
			
      echo json_encode($hasilQuery);
			
      // Perintah query
			
      $objekKoneksiBasisData = null;
			
    } catch(PDOException $e) {
      // Kalo gagal, jalankan yang dibawah ini
			
      echo "Sebab gagalnya: " . $e->getMessage();
    }
  }
      ambilSemuaDataIkan_skyy($host, $dbuser, $dbpass, $port, $dbname);  
  
?>
