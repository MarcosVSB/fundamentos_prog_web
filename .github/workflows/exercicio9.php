Function Fatorial($fat){
                $result = 1;
                echo "Fatorial de " . $fat . " = ";
                While($fat > 1){ 
                    $result *= $fat;
                    $fat--;
               }                
               return $result;                    
  }            
  $x = Fatorial(numero); //numero que deseja fazer o fatorial.
  echo $x; 