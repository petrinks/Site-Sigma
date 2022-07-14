<?php

$produtos = array(
    0 => array('nome'=>'Cria dos Malote','preco'=> '1200.00','descricao'=>'Cria que possui a parada proibida shhiu','imagem'=>'criamalote.jpg'), 
    1 => array('nome'=>'Cria Calvissimo','preco'=> '1000.00','descricao'=>'O homem que vive no mundo inverso','imagem'=>'criacalvo.jpg'), 
    2 => array('nome'=>'Cria do RJ','preco'=> '6000.00','descricao'=>'Na regua maxima','imagem'=>'criaregua.jpg'), 
    3 => array('nome'=>'Cria com efeito','preco'=> '900.00','descricao'=>'a cara do freio da blaze ','imagem'=>'criarj.jpg'), 
    4 => array('nome'=>'Cria Investimento','preco'=> '2000.00','descricao'=>' Ta tdo no mindset irmao','imagem'=>'criainvest.png'), 
    5 => array('nome'=>'Cria de condominio','preco'=> '800.00','descricao'=>' viva ao crime faixa slk pae','imagem'=>'playba.jpg'), 
    6 => array('nome'=>'Cria do cv','preco'=> '5700.00','descricao'=>'condominio vermelho, os dois mais perigosos do alphaville','imagem'=>'criacv.jpg'), 
    7 => array('nome'=>'Cria da visão','preco'=> '20.000.000.00','descricao'=>' o mlk tem visão truta','imagem'=>'criavisao.jpg'), 
    8 => array('nome'=>'Cria da sacanagem','preco'=> '3800.00','descricao'=>'o coringao vai te pegar rsrsrsrs','imagem'=>'criacor.jpg'),            
    9 => array('nome'=>'Cria em grupo','preco'=> '200.00','descricao'=>' os crias de verdade, os brabos do rj','imagem'=>'criaog.jpg'), 
    
    10 => array('nome'=>'Cria da nike','preco'=> '1200.00','descricao'=>' ice bro, lean yeah','imagem'=>'crianike.jpg'), 
    11 => array('nome'=>'Cria futebolista','preco'=> '1000.00','descricao'=>'cria que manja de bola','imagem'=>'criafut.jpg'), 
    12 => array('nome'=>'Cria Indigeno','preco'=> '6000.00','descricao'=>'me meti na amazonia e voltei cheio de verdekkkkkkkkkkkkkkkkkkkkk','imagem'=>'criaindio.webp'), 
    13 => array('nome'=>'Cria Luan Santana','preco'=> '900.00','descricao'=>' breja, sertanejo e ela na mente :(','imagem'=>'criaserta.jpg'), 
    14 => array('nome'=>'cria alien','preco'=> '2000.00','descricao'=>' cria extremamente doido depois das paradinhas','imagem'=>'criaet.jpg'), 
    15 => array('nome'=>'cria baiano','preco'=> '800.00','descricao'=>'cria que dorme e ronca','imagem'=>'criab.jpg'), 
    16 => array('nome'=>'cria shape de grilo','preco'=> '5700.00','descricao'=>' no shape','imagem'=>'criashape.jpg'), 
    17 => array('nome'=>'cria da lupa','preco'=> '20.000.000.00','descricao'=>'maluco ta embassado truta','imagem'=>'criapolicia.jpg'), 
    18 => array('nome'=>'Cria em casal','preco'=> '3800.00','descricao'=>'apoio e surto','imagem'=>'casalcria.jpg'), 
    19 => array('nome'=>'cria idoso','preco'=> '200.00','descricao'=>' cuidado com a vóvó','imagem'=>'criavelho.jpg'), 
    
    20 => array('nome'=>'cria de luxo','preco'=> '1200.00','descricao'=>' moda casual de luxo','imagem'=>'crialuxo.jpg'), 
    21 => array('nome'=>'cria bonito','preco'=> '1000.00','descricao'=>' cria bonito demais slk','imagem'=>'criabonito.webp'), 
    22 => array('nome'=>'cria sentado','preco'=> '6000.00','descricao'=>' sentado','imagem'=>'criasentado.jpg'), 
    23 => array('nome'=>'cria jack','preco'=> '900.00','descricao'=>' porte da jack','imagem'=>'criajack.webp'), 
    24 => array('nome'=>'cria orando','preco'=> '2000.00','descricao'=>' mão para cima e o senhor na mente','imagem'=>'criaorando.jpg'), 
    25 => array('nome'=>'cria barcelona','preco'=> '800.00','descricao'=>' cria que curte gritar na pelada','imagem'=>'criabarca.jpg'), 
    26 => array('nome'=>'cria chique','preco'=> '5700.00','descricao'=>' muita grana ','imagem'=>'crialux.jpg'), 
    27 => array('nome'=>'cria apaionado','preco'=> '20.000.000.00','descricao'=>' mano ela é diferente ','imagem'=>'faveladoapa.jpg'), 
    28 => array('nome'=>'cria do baile','preco'=> '3800.00','descricao'=>' muita bebida para esquecer ela ','imagem'=>'criar.jpg'), 
    29 => array('nome'=>'criacionismo','preco'=> '9.000','descricao'=>' teoria que os crias criaram o mundo','imagem'=>'criacionismo.jpg'), 

);

$sqlStr = "";

foreach ($produtos as $key => $value) {
    $nome = $value['nome'];
    $descricao = $value['descricao'];
    $imagem = $value['imagem'];
    $preco = $value ['preco'];
    $sqlStr = "$sqlStr<br>INSERT INTO `produtos` (`Nome`, `Descricao`, `Imagem`, `Preco`, `CategoriaID`, `Ativo`) VALUES ('$nome', '$descricao', '$imagem', '$preco', 1, 1); ";
}

print($sqlStr);

?>