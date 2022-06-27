![WhatsApp Image 2022-06-27 at 12 37 11](https://user-images.githubusercontent.com/80630206/175867254-5f4d084e-f0ad-46bb-9323-8fd5762900ac.jpeg)

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
