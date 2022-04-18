<?php 

class Bmi{
    private $berat;
    private $tinggi;

    public function setBerat($berat){
        $this->berat = $berat;
    }

    public function getBerat(){
        return $this->berat;
    }

    public function setTinggi($tinggi){
        $this->tinggi = $tinggi;
    }

    public function getTinggi(){
        return $this->tinggi;
    }

    public function nilaiBmi(){
        $nilaiBmi = $this->berat / pow($this->tinggi, 2);
        $hasil = printf("%.1f", $nilaiBmi);
        return $hasil;
    }

    public function StatusBmi(){
        if(self::nilaiBmi() < 18.5){
            $status = 'Kekurangan Berat Badan';
        } else if(self::nilaiBmi() >= 18.5 && self::nilaiBmi() <= 24.9){
            $status = 'Normal';
        } else if(self::nilaiBmi() >= 25.0 && self::nilaiBmi() <= 26.9){
            $status = 'Kelebihan Berat Badan';
        } else if(self::nilaiBmi() >= 27 && self::nilaiBmi() <= 29.9){
            $status = 'Obesitas 1';
        } else if(self::nilaiBmi() < 30){
            $status = 'Obestias Berkelanjutan';
        } else{
            $status = 'Masukan anda Salah!!';
        }
        return $status;
    }
}

?>