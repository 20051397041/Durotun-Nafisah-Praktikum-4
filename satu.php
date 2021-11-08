<!-- Nama   : Durotun Nafisah Amalia Ahli -->
<!-- NIM    : 20051397041 -->
<!-- Kelas  : D4 Manajemen Informatika 2020A -->

<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="bagus.css">
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<center><h2>Soal 1</h2></center>
<!-- Program PHP -->
<?php
class Orang{
    protected $nama,$umur;
    public function __construct($nama,$umur){
    $this->nama = $nama;
    $this->umur = $umur;
    }
}
class Dosen extends Orang{
    private $nip;
    public function __construct($nama, $umur, $nip){
    $this->nip = $nip;
    parent::__construct($nama, $umur);    
    }
    public function hasil(){
        return $this->nama . ' berumur ' . $this->umur. ' dengan NIP ' . $this->nip;
    }
} 
$dosen1 = new Dosen('I Kadek Dwi Nuryana', 40, 198104142009121004); 
$dosen2 = new Dosen('Dodik Arwin Dermawan', 42, 197801082000121001);
$dosen3 = new Dosen('Warju', 40, 198103282006041001);
echo $dosen1->hasil();
echo '<br> <br>';
echo $dosen2->hasil();
echo '<br> <br>';
echo $dosen3->hasil();
echo '<br> <br>';
?>
<!-- Akhir Program PHP -->
</div>
</body>
</html>