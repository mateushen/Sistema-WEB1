<?php
$senha1 =  password_hash('mateus', PASSWORD_DEFAULT);
echo '<br>';
$senha2 = password_hash('mateus', PASSWORD_DEFAULT);

echo "$senha1 - $senha2 ";
if (password_verify('mateus', $senha1)){
    echo 'iguais';
}else{
    echo 'diferentes';
}
?>