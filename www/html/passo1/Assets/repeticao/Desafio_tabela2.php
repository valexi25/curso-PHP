<div class='titulo'>Desafio Tabela #2</div>
<form action= "#" method="post">
    <div>
        <label for="linhas">Linhas</label>
        <input type='number' value=<?= $_POST['linhas']?? 10 ?> name="linhas" id="">
    </div>
    <div>
        <label for="Colunas">Colunas</label>
        <input type='number' value =<?= $_POST['colunas']?? 10 ?>
         name="colunas" id="">
    </div>
    <button>Gerar Tabela</button>
</from>



<table>
    <?php
        $linhas = intval($_POST['linhas']);
        $colunas = intval($_POST['colunas']);
        if(!$linhas) $linhas = 10;
        if (!$colunas) $colunas = 10;

        $nun = 0;
        for($i =1; $i< $linhas;$i++){
            echo "<tr>";
            for($j = 1; $j< $colunas; $j++ ){
                echo"<td> $nun</td>";
                $nun++;
            }
            echo "</tr>";
        }
    ?>
    
</table>



<style>
    form > * {
        font-size: 1.8rem;
    }
    form >div {
        margin-bottom:10px;
    }
    table{
        border: 1px solid #444;
        border-collapse: collapse;
        margin: 20px 0px;
    }
    table{
        border: 1px solid #444;
    }
    table{
        padding:10px 20px;
    }

</style>