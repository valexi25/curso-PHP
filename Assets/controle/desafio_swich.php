<div class = 'titulo'>Desafio Swich</div>
<form action = "#" method= "post">
    <input type= "tex" name="param">
    <select name="conversao" id ="conversao">
            <option value= ""> </option>
            <option value= "km-milha">Km > Milha</option>
            <option value= "milha-km">Milha > Km</option>
            <option value= "metro-km">metro > Km</option>
            <option value= "km-metro">Km > metro</option>
            <option value= "fah-cel">Fahrenhit > Celsius</option>
            <option value= "cel-fah">Celsius > Fahrenhit</option>
    </select>
    <button>Calcular</button>
</form>
<style> 
    from > * {
        font-size:1.8rem;
    }
</style>
<?php   
   // echo $_POST['param'] . '<br>';
    //echo $_POST['conversao'];
    const FATOR_KM_MILHA = 0.621371;
    const FATOR_METRO_KM = 1000;
    const FATOR_CEL_Fah = 1.8;

    
    $param = $_POST['param'] ?? 0;
    switch($_POST['conversao']){
        case 'km-milha':
            $distacia = $param * FATOR_KM_MILHA;
            $mensagem = "$param km = $distacia Milhas";
            break;
        case 'milha-km':
            $distacia = $param / FATOR_KM_MILHA;
            $mensagem = "$param Milhas - $distacia Km";
            break;
        case 'metro-km':
            $distacia = $param / FATOR_METRO_KM;
            $mensagem = "$param Metros = $distacia KM";
            break;
        case 'km-metro': 
            $distacia = $param * FATOR_METRO_KM;
            $mensagem = "$param Km = $distacia Metros";
            break;
        case 'cel-fah':
            $conversao =  $param * FATOR_CEL_Fah + 32;
            $mensagem = "{$param}° CEL = {$conversao} °fah";
            break;
        case 'fah-cel':
            $conversao = ($param -32) / FATOR_CEL_Fah;
            $mensagem ="$param °fah = $conversao °CEL";
            break;
        default:
            $mensagem = "Nenhum valor calculad!";     
    }

    echo "<br> $mensagem";
