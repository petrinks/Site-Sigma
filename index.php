<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

    
##echo '<pre>'; 
#print_r($dados);
#echo '</pre>';

?>



<div class="container">

        <div class="row mt-5">
            
            <?php
            for ($i=0; $i < 3; $i++) {

            ?>
            <div class="card m-3" style="width: 21rem;">
                <img class="card-img-top" src="./content/<?php echo $produtos[$i]['imagem']; ?>" alt="Card image cap" height=250>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produtos[$i]['nome']; ?></h5>
                    <p class="card-text"><?php echo $produtos[$i]['descricao'];?> </p>
                    <p class="card-text">R$<?php echo $produtos[$i]['preco'];?> </p>
                    <a href="produto-detalhe.php?id=<?php echo $i; ?>" class="btn btn-primary">Ver Produto</a>
                </div>
            </div>
            <?php } ?>
        </div>
</div>



<?php
// include do footer
include_once './includes/_footer.php';
?>