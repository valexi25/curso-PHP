<div class = 'tituli'>Tipo Booleano</div>


<?php
echo TRUE;
echo '<br>';
echo FALSE;

echo '<br>' . var_dump(true);
echo '<br>' . var_dump(false);
echo '<br>' .var_dump('false');
echo '<br>' .is_bool(false);
echo '<br>' .is_bool('true');

//fazer as regras de conversões
echo '<p>Regras: </P> ';
echo '<br>' . var_dump((bool)0);//apenas o zaero é false
echo '<br>' . var_dump((bool)20);
echo '<br>' . var_dump((bool)20);
echo '<br>' . var_dump((bool)20);
echo '<br>' . var_dump((bool)"");
echo '<br>' . var_dump((bool)" ");
echo '<br>' . var_dump((bool)"0");

?>
