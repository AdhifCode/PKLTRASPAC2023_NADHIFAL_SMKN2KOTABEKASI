

<?php
    $y = $_POST['inputan'];
    
    $prediksi_hari = $_POST['prediksi_hari'];

    $regression = new RegresiLinear($y, $prediksi_hari);
Class RegresiLinear{
    
    public  $x = [1,2,3,4,5,6,7,8,9,10],
            $n = 10,
            $y,
            $prediksi_hari,

            $x2,
            $y2,
            $xy,
            $a,
            $b,
    
            $hasil;
            
    
    
    public function __construct($y=null, $prediksi_hari=null){
        if(!is_null($y) && !is_null($prediksi_hari)){
            $this->prediksi_hari = $prediksi_hari;
            $this->y = $y;
            $this->compute();
        }
    }
    
    public function compute(){
        if(is_array($this->x) && is_array($this->y)){
            if(count($this->x) == count($this->y)){
                $this->n  = count($this->x);
                
                $this->kalkulasi();
                $this->ab();
                $this->linear_regrasi();
            }
            else{
                throw new Exception('Emror');
            }

        }
        else{
            throw new Exception('Emror');
        }
    }
    
    public function kalkulasi(){
        $this->x2 = array_map(function($n){
            return $n * $n;
        }, $this->x);
        
        
        for($i=0; $i<$this->n; $i++){
            $this->xy[$i] = $this->x[$i] * $this->y[$i];
        }
        
    }
    
    public function ab(){
        
        $b = (($this->n * array_sum($this->xy)) - (array_sum($this->x) * array_sum($this->y))) / (($this->n * array_sum($this->x2)) - (array_sum($this->x) * array_sum($this->x)));
        $this->b = $b;
       
        $a = (array_sum($this->y) - $b * array_sum($this->x) / ($this->n));
        $this->a = $a;
        
        
    }
    
    public function forecast($prediksi_hari){ //Rumuw Y=a+bx
        $y = $this->a + ($this->b * $prediksi_hari);
        return $y;
    }
    
    public function linear_regrasi(){
         echo $this->forecast($this->prediksi_hari);
            
        // echo "$hasil";
    }
    // public function predictNextDay(){
    //     if ($this->n > 0) {
    //         // Ambil nilai x dari hari terakhir yang ada dalam data
    //         $lastX = end($this->x);
    
    //         // Prediksi hasil penjualan di hari selanjutnya
    //         $nextDay = $lastX + $prediksi_; // Prediksi hari selanjutnya
    //         $Nilai_Prediksi = $this->forecast($nextDay);
    
    //         return $Nilai_Prediksi;
    //         echo "$Nilai_Prediksi";
    //     } else {
    //         echo "Hari belum dimasukkan";
    //     }
    // }
    
    
    
    
}  