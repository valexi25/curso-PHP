<div class='titulo'>While/Do  while</div>
<?php
    const VALOR_LIMITE = 5;
    $contador =0;

    while($contador < VALOR_LIMITE){
        echo "while $contador <br>";
        $contador++;
    }

   
    $contadr = 10;
    echo '<br>';
   do{
    echo "do-while $contadr<br>";
    $contador++;
   }while($contador < VALOR_LIMITE);
   echo '<br>';
   $contador = 0;

   for($contador = 0; $contador < VALOR_LIMITE;$contador++){
    echo "for $contador <br>";
    
   }
   echo '<br>';
   $contador = 0;
   do{
    echo "do-while $contador <br>";
    $contador++;
   }while($contador < VALOR_LIMITE);

   $contador = 0;
   echo "<br>";
   while (true){
    echo "while(true) $contador <br>";
    $contador++;
    if($contador >=VALOR_LIMITE)break;
   }

   



