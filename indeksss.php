<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-6">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>menampilkan gambar</title>
</head>
<body>
  <img src="http://localhost/khalwapbo/kopi.jpg" width="250" height="150" />
  <p>Khalwa : 42423054</p>

  <h1 align="center"> Pemrograman Berorientasi Objek</h1>

  <h2>1. Pengertian</h2>
  <p>Pemrograman berorientasi objek (Inggris: object-oriented programming disingkat OOP) merupakan paradigma pemrograman berdasarkan konsep "objek", yang dapat berisi data dalam bentuk <em>field</em> atau dikenal juga sebagai <em>atribut</em>; serta kode, dalam bentuk <em>fungsi</em>/<em>prosedur</em> yang dikenal juga sebagai <em>method</em>. Semua data dan fungsi di dalam paradigma ini dibungkus dalam <em>kelas-kelas</em> atau <em>objek-objek</em>. Bandingkan dengan logika pemrograman terstruktur. Setiap objek dapat menerima pesan, memproses data, dan mengirim pesan ke objek lainnya.</p>

  <h2>2. Bahasa Pemrograman Yang mendukung PBO</h2>
  <p>Berikut ini adalah Bahasa pemrograman yang mendukung OOP antara lain seperti:</p>
  <ul>
    <li>Visual Foxpro</li>
    <li>Java</li>
    <li>C++</li>
    <li>Pascal (bahasa pemrograman)</li>
    <li>SIMULA</li>
    <li>Smalltalk</li>
    <li>Ruby</li>
    <li>Python</li>
    <li>PHP</li>
    <li>TypeScript</li>
    <li>C#</li>
    <li>Delphi</li>
    <li>Eiffel</li>
    <li>Perl</li>
    <li>Adobe Flash AS 3.0</li>
  </ul>

  <h2>3. Membuat Tabel kategori Produk</h2>
  <style>
    table{
        border-collapse: collapse;
            width: 50%
    }
            
    th, td{
        border: 1px solid #843434;
            padding: 3px;
            text-align: left;
    }
    th{
            background-color: #f0f0f0;
      }
</style>

  <table class="table">
    <thead>
        <tr>
          <th>NO</th>
          <th>Kategori Produk</th>
          <th>Nama Produk</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Bumbu Dapur</td>
          <td>Garam</td>
        </tr>
        <tr>
          <td>2</td>
          <td>Bumbu Dapur</td>
          <td>Cabe</td>
        </tr>
        <tr>
          <td>3</td>
          <td>Bumbu Dapur</td>
          <td>Lengkuas</td>
        </tr>
        <tr>
          <td>4</td>
          <td>Bumbu Dapur</td>
          <td>Terasi</td>
        </tr>
        <tr>
          <td>5</td>
          <td>Sembako</td>
          <td>Beras</td>
        </tr>
        <tr>
          <td>6</td>
          <td>Sembako</td>
          <td>Minyak Goreng</td>
        </tr>
        <tr>
          <td>7</td>
          <td>Sembako</td>
          <td>Gula Pasir</td>
        </tr>
  </table>
    
  <h2>4. Membuat Tabel Produk</h2>
  <table class="table">
    <thead>
      <tr>
        <th>NO</th>
        <th>Produk</th>
        <th>Stok</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>1</td>
        <td>Garam</td>
        <td>10</td>
        <td>7000</td>
      </tr>
      <tr>
        <td>2</td>
        <td>Cabe</td>
        <td>10</td>
        <td>25000</td>
      </tr>
      <tr>
        <td>3</td>
        <td>Lengkuas</td>
        <td>10</td>
        <td>12000</td>
      </tr>
      <tr>
        <td>4</td>
        <td>Terasi</td>
        <td>10</td>
      <td>35000</td>
    </tr>
    <tr>
      <td>5</td>
      <td>Beras</td>
      <td>10</td>
      <td>13000</td>
    </tr>
    <tr>
      <td>6</td>
      <td>Minyak Goreng</td>
      <td>10</td>
      <td>15000</td>
    </tr>
    <tr>
      <td>7</td>
      <td>Gula Pasir</td>
      <td>10</td>
      <td>13000</td>
    </tr>
  </tbody>
</table>

<h3> PERTEMUAN 3 </h3>  
  <?php
class buah {
  public $nama;
  public $warna;

  function set_name($nama) {
    $this->nama = $nama;
  }
  function get_name() {
    return $this->nama;
  }
}


$apel = new buah();
$pisang = new buah();
$apel->set_name('Apel');
$pisang->set_name('Pisang');

echo $apel->get_name();
echo "<br>";
echo $pisang->get_name();
echo "<br>";
?>

<?php
class mobil {
  public $warna;

  function set_warna($warna) {
    $this->warna = $warna;
  }

  function get_warna() {
    return "warna mobil itu adalah ". $this->warna;
  }
}

$toyota = new mobil();
$toyota->set_warna('biru metalik');

echo $toyota->get_warna();
?>

<h3> PERTEMUAN 4 </h3>
<h4 style="color:black;" align="left">Constructor</h4>
 <?php
class buahh {
  public $nama;
  public $warna;

  function __construct($nama, $warna) {
    $this->nama = $nama;
    $this->warna = $warna;
  }
  function get_name() {
    return $this->nama;
  }
  function get_warna() {
    return $this->warna;
  }
}

$apel = new buahh("apel", "merah");
echo $apel->get_name();
echo "<br>";
echo $apel->get_warna();
?>
  

<h4 style="color:black;" align="left">Destructor</h4>
 <?php
class buahhh {
  public $nama;
  public $warna;

  function __construct($nama, $warna) {
    $this->nama = $nama;
    $this->warna = $warna;
  }
  function __destruct() {
    echo "buah tersebut adalah {$this->nama} dan warnanya adalah {$this->warna}.";
  }
}

$apel = new buahhh("apel", "merah");
echo "<br>";
?>

<h2> TUGAS PERTEMUAN 4</H2>
<?php
$mahasiswi = [
  [
    'nama' => 'Khalwa',
    'tinggi_badan' => 146,
    'warna_kulit' => 'Sawo Matang'
  ],
   [
   'nama' => 'Amel',
   'tinggi_badan' => 154,
   'warna_kulit' => 'Sawo Matang' 
   ],
   [
    'nama' => 'Najwa',
    'tinggi_badan' => 157,
    'warna_kulit' => 'Kuning Langsat'
   ]
];

foreach ($mahasiswi as $mhs) {
  echo "Mahasiswi tersebut bernama ". $mhs['nama']. ",Tinggi Badan ". $mhs['tinggi_badan']. "cm, dan Warna Kulit ". $mhs['warna_kulit']. "<br>";
}
?>

</body>
</html>
