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
        }else if($this->nilai >= 70){
            return "Memuaskan";
        }else if($this->nilai >= 69){
            return "Cukup";
        }else if($this->nilai >= 60){
            return "Kurang";
        }else{
            return "Tidak Lulus";
        }
    }

    public function getGrade(){
        if($this->nilai >= 85){
            return "A";
        }else if($this->nilai >= 70){
            return "B";
        }else if($this->nilai >= 69){
            return "C";
        }else if($this->nilai >= 60){
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