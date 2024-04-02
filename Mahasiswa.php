<?php 
class Mahasiswa{
    public $nim;
    public $nama;
    public $kuliah;
    public $mataKuliah;
    public $nilai;

    public function __construct($nim, $nama, $kuliah, $mataKuliah, $nilai){
        $this->nim = $nim;
        $this->nama = $nama;
        $this->kuliah = $kuliah;
        $this->mataKuliah = $mataKuliah;
        $this->nilai = $nilai;
    }

    public function getPredikat(){
        if($this->nilai >= 85){
            return "Sangat Memuaskan";
        }else if($this->nilai >= 75){
            return "Memuaskan";
        }else if($this->nilai >= 60){
            return "Cukup";
        }else if($this->nilai >= 40){
            return "Kurang";
        }else{
            return "Sangat Kurang";
        }
    }

    public function getGrade(){
        if($this->nilai >= 85){
            return "A";
        }else if($this->nilai >= 75){
            return "B";
        }else if($this->nilai >= 60){
            return "C";
        }else if($this->nilai >= 40){
            return "D";
        }else{
            return "E";
        }
    
    }
    public function getStatus(){
        if($this->nilai >= 65){
            return "Lulus";
        }else{
            return "Tidak Lulus";
        }
    }
}

?>