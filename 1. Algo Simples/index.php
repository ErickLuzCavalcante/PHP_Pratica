<?php // <-- Delimitador de código PHP
/* 
    Um projeto Simples, criado com a finalidade de praticar o PHP
    Exemplo estudado com o curso de Introdução ao PHP - Aula:
    Aprenda sobre a sintaxe do PHP moderno e os fundamentos do protocolo HTTP

    Proposta:

    Crie um projeto em PHP para uma competição de natação, o sistema deverá permitir
    a inserção de competidores com seu nome e idade, e o sistema deverá identificar em 
    qual cateforia o nadador irá competir, por exemplo, 6 a 12 anos categoria infantil,
    de 13 a 18 categoria adolescente, acima de 18 categoria adulto, o sistema deverá retornar
    a categoria para cada nadador que for cadastrado.

*/

// Lista com as categorias
// PHP é fracamente tipado, ou melhor, dinamicamente tipado
// não sendo necessario definir um tipo
$categorias = []; //<- Cria um array vazio
$categorias[] = 'infantil'; // <- adiciona item
$categorias[] = 'adolescente';
$categorias[] = 'adulto';


// print_r() exibe informação sobre uma variável em uma maneira que é legível para humanos.
print_r($categorias); // <- Mostra o conteudo da array

// Define variaveis de nome e idade

$nome ='Erick'; // <- String
$idade = 888; // <- int

// var_dump — Mostra informações sobre a variável
var_dump($nome);
var_dump($idade);

echo '<br>';
// Verifica se a idade esta dentro dos parametros
// com o comando if testo a idade
if ($idade>= 6 && $idade <=12){
    // Para percorrer a lista e testar o conteudo da lista
    // o for ira percorrer incementando a variavel i, até ela chegar na mesma quantidade
    // de itens contidos no array categorias "$i<count($categorias)" 
    for ($i=0; $i<count($categorias);$i++){
        if ($categorias[$i]=='infantil'){
            echo "O nadador ".$nome." compete na categoria ". $categorias[$i];
        }
    }
} elseif ($idade>= 13 && $idade <=18){
    for ($i=0; $i<count($categorias);$i++){
        if ($categorias[$i]=='adolescente'){
            echo "O nadador ".$nome." compete na categoria ". $categorias[$i];
        }
    }
}else{
    for ($i=0; $i<count($categorias);$i++){
        if ($categorias[$i]=='adulto'){
        echo "O nadador ".$nome." compete na categoria ". $categorias[$i];
     }
    }
}
echo '<br>';




// Fim do delimitador PHP 
 ?>