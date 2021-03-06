<?php 

abstract class Produk {
    protected $judul, 
            $penulis, 
            $penerbit,
            $harga;

    protected $diskon;

    public function __construct($judul="judul", $penulis="penulis", $penerbit="penerbit", $harga=0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
  
    public function setJudul($judul) {
        if (!is_string($judul)) {
            throw new Exception("Error Type Variable");
        }
        $this->judul = $judul;
    }
    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }
    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }
    public function setHarga($harga) {
        $this->harga = $harga;
    }
    
    public function getJudul() {
        return $this->judul;
    }
    public function getPenulis() {
        return $this->penulis;
    }
    public function getPenerbit() {
        return $this->penerbit;
    }
    public function getHarga() {
        return $this->harga = $this->harga - ($this->harga * $this->diskon / 100);
    }

    abstract public function getInfo();
    
}