<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

    
##echo '<pre>'; 
#print_r($dados);
#echo '</pre>';

?>



<div class="container">

        <div class="row mt-5">
            
            <?php

            $sql = "select *  FROM produtos WHERE ativo = 1";

            $exec = mysqli_query($conn, $sql);

            $numProdutos = mysqli_num_rows($exec);
            
            while ($dados = mysqli_fetch_assoc($exec)) {

            ?>
            <div class="card m-4" style="width: 19rem; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3   );">
                <img class="card-img-top" src="./content/<?php echo $dados['Imagem']; ?>" alt="Card image cap" height=250>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $dados['Nome']; ?></h5>
                    <p class="card-text"><?php echo $dados['Descricao'];?> </p>
                    <p class="card-text">R$<?php echo $dados['Preco'];?> </p>
                    <a href="produto-detalhe.php?id=<?php echo $dados['ProdutoID']; ?>" class="btn btn-primary">Ver Produto</a>
                </div>
            </div>
            <?php } ?>
        </div>
</div>



<?php
// include do footer
include_once './includes/_footer.php';
?>