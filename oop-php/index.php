<?php


class Inisial {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }
}

// Interface untuk kelas yang dapat dikonsultasikan
interface Consultable {
    public function consult();
}

// Class Mahasiswa merupakan turunan dari inisial n mengimplementasi interface Consultable
class Mahasiswa extends Inisial implements Consultable {
    private $nim;
    private $totalSks = 0;

    public function __construct($name, $nim) {
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function consult() {
        return "Mahasiswa " . $this->getName() . " (21.230.0194) Kelas 6M51.";
    }

    public function addSks($sks) {
        $this->totalSks += $sks;
    }

    public function getTotalSks() {
        return $this->totalSks;
    }
}

// Class Dosen merupakan turunan dari inisial
class Dosen extends Inisial {
    private $nidn;

    public function __construct($name, $nidn) {
        parent::__construct($name);
        $this->nidn = $nidn;
    }

    public function getNidn() {
        return $this->nidn;
    }
}

// Class SKS
class SKS {
    private $sks;

    public function __construct($sks) {
        $this->sks = $sks;
    }

    public function getSks() {
        return $this->sks;
    }
}

// Class Mapel merupakan turunan dari inisial
class Mapel extends Inisial {

    private $no;
    private $sks;
    private $semester;
    private $status;

    public function __construct($no, $mapel, $sks, $semester, $status) {
        parent::__construct($mapel);
        $this->no = $no;
        $this->sks = $sks;
        $this->semester = $semester;
        $this->status = $status;
    }

    public function getNo() {
        return $this->no;
    }

    public function getSks() {
        return $this->sks;
    }

    public function getSemester(){
        return $this->semester;
    }

    public function getStatus(){
        return $this->status;
    }

    public function getInfoTable() {
        $output = "<tr>";
        $output .= "<td>{$this->getNo()}</td>";
        $output .= "<td>{$this->getName()}</td>";
        $output .= "<td>{$this->getSks()}</td>";
        $output .= "<td>{$this->getSemester()}</td>";
        $output .= "<td>{$this->getStatus()}</td>";
        $output .= "</tr>";

        return $output;
    }
}

// Class Kampus
class Kampus {
    private $nama;

    public function __construct($nama) {
        $this->nama = $nama;
    }

    public function getInfo() {
        return "Kampus: " . $this->nama;
    }
}

// Membuat objek mapel
$mapel1 = new Mapel(1, "Bahasa Inggris 4", 3, "6", "Disetujui");
$mapel2 = new Mapel(2, "Technopreneur", 3, "6", "Disetujui");
$mapel3 = new Mapel(3, "Tugas Akhir", 3, "6", "Disetujui");

// Menampilkan informasi dalam bentuk tabel
echo "<table border='1'>";
echo "<caption><b>Isi Kartu Rencana Studi</b></caption>";
echo "<caption><b>DIII Teknik Komputer</b></caption>";
echo "<caption>Tahun Akademik 2023/2024 - Genap</caption>";
echo "<tr>
        <th>No</th>
        <th>Nama Mata Kuliah</th>
        <th>SKS</th>
        <th>Semester</th>
        <th>Status</th>
        </tr>";
echo $mapel1->getInfoTable();
echo $mapel2->getInfoTable();
echo $mapel3->getInfoTable();
echo "</table>";

// Membuat objek mahasiswa, dosen, mapel, dan kampus
$mahasiswa = new Mahasiswa("Nasyath Faykar", "21.230.0194");
$dosen = new Dosen("Tri Pudji Wahyuningsih, M.Kom", "1238786542");
$kampus = new Kampus("STMIK Widya Pratama Pekalongan");

// Menambahkan SKS ke objek mahasiswa
$mahasiswa->addSks($mapel1->getSks());
$mahasiswa->addSks($mapel2->getSks());
$mahasiswa->addSks($mapel3->getSks());

// Menampilkan informasi
echo "<p>Total SKS : " . $mahasiswa->getTotalSks() . "</p>";
echo "<p>" . $mahasiswa->consult() . "</p>";
echo "<p>Dosen Wali: " . $dosen->getName() . " (" . $dosen->getNidn() . ")</p>";
echo "<p>" . $kampus->getInfo() . "</p>";

?>
