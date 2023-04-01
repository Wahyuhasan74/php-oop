<?php
    class Lingkaran {
        public int $jari2;

        public function area(int $jari2){
            $luas = M_PI*$jari2*$jari2;
            return $luas;
        } 

        public function circumference(int $jari2){
            $keliling = 2*M_PI*$jari2;
            return $keliling;
        }

        public function enlarge(int $scale){
            $perbesar = $jari2*$scale;
            return $perbesar;
        }

        public function shrink(int $scale){
            $perkecil = $jari2/$scale;
            return $perkecil;
        }
    }

    class Persegi {
        public int $sisi;

        public function area(int $sisi){
            $luas = $sisi*$sisi;
            return $luas;
        } 

        public function circumference(int $sisi){
            $keliling = 4*$sisi;
            return $keliling;
        }

        public function enlarge(int $scale){
            $perbesar = $sisi*$scale;
            return $perbesar;
        }

        public function shrink(int $scale){
            $perkecil = $sisi*$scale;
            return $perkecil;
        }
    }

    class PersegiPanjang {
        public int $panjang, $lebar;

        public function area(int $panjang, int $lebar){
            $luas = $panjang*$lebar;
            return $luas;
        } 

        public function circumference(int $panjang, int $lebar){
            $keliling = ($panjang*2)+($lebar*2);
            return $keliling;
        }

        public function enlarge(int $scale){
            $perbesar = $panjang*$scale;
            return $perbesar;
        }

        public function shrink(int $scale){
            $perkecil = $panjang*$scale;
            return $perkecil;
        }

        
    }

    class Descriptor{
        public function static_describe($bangunDatar){
            $lingkaran = new Lingkaran();
            $persegi = new Persegi();
            $persegi_panjang = new PersegiPanjang();
            if($bangunDatar=="Lingkaran"){
                echo "Bangun datar ini adalah Lingkaran yang memiliki luas ".$lingkaran->area(5)." dan keliling ".$lingkaran->circumference(5);
            }else if($bangunDatar=="Persegi"){
                echo "Bangun datar ini adalah Persegi yang memiliki luas " .$persegi->area(5)." dan keliling ".$persegi->circumference(5);
            }else if($bangunDatar=="Persegi Panjang"){
                echo "Bangun datar ini adalah Lingkaran yang memiliki luas ".$persegi_panjang->area(10, 5)." dan keliling ".$persegi_panjang->circumference(10, 5);
            }else{
                echo "Bangun datar tidak ditemukan";
            }
        }
    }

    $descriptor = new Descriptor();
    echo $descriptor->static_describe("Lingkaran")."<br>";
    echo $descriptor->static_describe("Persegi")."<br>";
    echo $descriptor->static_describe("Persegi Panjang")."<br>";
    echo $descriptor->static_describe("Segitiga")."<br>";
?>