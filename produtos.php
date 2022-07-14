<?php
// include do footer
include_once './includes/_banco.php';
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>


<?php
// include do footer
include_once './includes/_footer.php';
?>

<div class="container">

        <div class="row mt-5">
            
            <?php
           foreach ($produtos as $key => $value) {

            ?>
            <div class="card m-4" style="width: 19rem; box-shadow: 0 0 10px rgba(0, 0, 0, 0.3   );">
                <img class="card-img-top" src="./content/<?php echo $produtos[$key]['imagem']; ?>" alt="Card image cap" height=250>
                <div class="card-body">
                    <h5 class="card-title"><?php echo $produtos[$key]['nome']; ?></h5>
                    <p class="card-text"><?php echo $produtos[$key]['descricao'];?> </p>
                    <p class="card-text">R$<?php echo $produtos[$key]['preco'];?> </p>
                    <a href="produto-detalhe.php?keyd=<?php echo $keyh; ?>" class="btn btn-primary">Ver Produto</a>
                </div>
            </div>
            <?php } ?>
        </div>
</div>