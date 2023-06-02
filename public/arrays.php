<?php

/*ARRAYS - Os arrays são estruturas que servem para guardar dados, e organizá-los. 
Seu objetivo é ser um espaço fixo na memória do computador que armazena elementos. 
Esses elementos podem ser acessados por um tipo de indicação, que chamamos de índice
*/
$data = ['Lipszera', 'Aline', 'Gean', 26, true];
    print_r($data);
/*RESULTADO: 
Array
(
    [0] => Lipszera
    [1] => Aline
    [2] => Gean
    [3] => 26
    [4] => 1
)
Note que xistem 5 elementos dentro do array, onde cada elemento guardado dentro do array, 
possui um indice individual,onde o primeiro se inicia em 0, e vai até o 4 
e podemos acessa-los utilizando a funcao 'var_dump' e passando qual indice queremos acessar.
*/

$data = ['Lipszera', 'Aline', 'Gean', 26, true];
    var_dump($data[2]);
//RESULTADO: string(4) "Gean"



//Para saber quantos elementos existem dentro de um determinado array, utiliza-se a funcao 'count'
$data = ['Lipszera', 'Aline', 'Gean', 26, true];
    $lenght = count($data);
        echo $lenght;
/*RESULTADO: 5
obs: ao utilizar a funcao 'count' , comeca a contar do indice '1' em diante, e nao do '0' como é o padrao
*/



/*Para adicionarmos ou substituirmos algum dado em um determinado array, 
passamos o indice e o elemento (dado) que queremos adicionar/substituir
*/
$data = ['Lipszera', 'Gean', 26];
    $data[1] = 'XR250';
        var_dump($data);
/*RESULTADO:
array(3) {
  [0]=>
  string(8) "Lipszera"
  [1]=>
  string(5) "XR250"
  [2]=>
  int(26)
}

Neste caso substituindo 'Gean' por 'XR250' no indice [1]
*/



/*Para adicionar algum elemento ao final do array, utiliza-se a funcao,'array_push()' passando dois parametros
'array_push($nomedoarray, 'elemento que deseja add)'
*/
$data = ['Lipszera', 'Gean', 26, true,];
    array_push($data, 'XR250TORNADO');
        var_dump($data);
/*RESULTADO: 
array(5) {
  [0]=>
  string(8) "Lipszera"
  [1]=>
  string(4) "Gean"
  [2]=>
  int(26)
  [3]=>
  bool(true)
  [4]=>
  string(12) "XR250TORNADO"
}
*/



//Adicionando elementos no inicio de um array, sem alterar os elementos internos, utilizando a funcao 'array_unshift'
$data = ['Lipszera', 'Gean', 26,];
    array_unshift($data, 'Aline');
        var_dump($data);
/*RESULTADO:
array(4) {
  [0]=>
  string(5) "Aline"
  [1]=>
  string(8) "Lipszera"
  [2]=>
  string(4) "Gean"
  [3]=>
  int(26)
}
*/



//Criando array com indices manuais

$person = ['name' => 'Lipszera', 'age' => 26, 'cpf' => 12345678910];
    var_dump($person);
/*RESULTADO:
array(3) {
  ["name"]=>
  string(8) "Lipszera"
  ["age"]=>
  int(26)
  ["cpf"]=>
  int(12345678910)
}
*/



//Acessando indices manuais
$person = ['name' => 'Lipszera', 'age' => 26, 'cpf' => 12345678910];
    var_dump($person['age']);
//RESULTADO: int(26)



//Criando array dentro de outro array
$person = ['name' =>'Lipszera', 'age' => 26, 
            'documents' => [
                'cpf' => 12345678910, 'rg' => 6343212, 'uf' => 'sc'
            ]
        ];
    var_dump($person['documents']);
/*RESULTADO:
array(3) {
  ["cpf"]=>
  int(12345678910)
  ["rg"]=>
  int(6343212)
  ["uf"]=>
  string(2) "sc"
}
*/