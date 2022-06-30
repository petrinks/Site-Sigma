<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$validado = FALSE;

if (isset($_POST['txtNome'])) { 
    $nome = strtolower( $_POST['txtNome']);
    $validado = TRUE;
  
}

if (isset($_POST['telefone'])) { 
    $telefone = strtolower( $_POST['telefone']);
    $validado = TRUE;
  
}

if (isset($_POST['email'])) { 
    $email = strtolower( $_POST['email']);
    $validado = TRUE;
    
}

if (isset($_POST['msg'])) { 
    $msg = strtolower( $_POST['msg']);
    $validado = TRUE;
  
}




// $nome = $_REQUEST['txtNome']; faz a funcao do POST e do GET 

#echo $nome;       um dado 

//uma array
/**
 * 
 * echo '<pre>'; 
 * print_r($array);
 * echo '</pre>';
 * 
 */

?>



<h1>Contato</h1>
<form action="./Contato.php" method="post"> 
    <label for="txtNome">Nome Completo</label> 
    <br>
    <input type="text" name="txtNome" id="txtNome">
    <label for="telefone">Telefone Completo</label> 
    <br>
    <input type="text" name="telefone" id="telefone">   
    <label for="email">Email Completo</label> 
    <br>
    <input type="text" name="msg" id="msg">
    <br>
    <textarea name="msg" id="msg" cols="30" rows="10">Sua mensagem</textarea>
    <input type="submit" value="Cadastrar">
    <br>
    
</form>

<?php
if( $validado === TRUE){
?>
<ul>
        <li><?php echo $nome; ?></li>
        <li><?php echo $telefone; ?></li>
        <li><?php echo $email; ?></li>
        <li><?php echo $msg; ?></li>

</ul>
<?php
}
// include do footer
include_once './includes/_footer.php';
?>

