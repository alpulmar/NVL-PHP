<?php
        function vocales($frase = "Esta frase tiene cinco vocales") {
            print_r($frase);
            for(i=0; i<30; i++){
                if($frase == "a,e,i,o,u"){
                    true;
                    echo "LA PALABRA CONTIENE LAS 5 VOCALES";
                }else{
                    false;
                    echo "NO CONTIENE TODAS LAS VOCALES";
                }
            }
        }
        vocales();
?>