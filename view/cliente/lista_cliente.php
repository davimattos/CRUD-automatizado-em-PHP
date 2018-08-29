<?php

//Inclui as classes controladoras
require_once("../../controller/cliente.controller.class.php");

//Criando as novas intâncias das classes
$controller = new ClienteController;

if(isset($_GET['id'])) {
    $retorno = $controller->remove($_GET['id'], 'id');
    if($retorno) {
        echo "O ".$_GET['id']." Excluído com sucesso!";
    } 
}

//Método de listagem
$registros = $controller->listaOrdenada();

?>
<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Excluir</th>
    </tr>

<?php
//listagem
if(mysqli_num_rows($registros)>0) {
    while($regA = mysqli_fetch_array($registros)){
?>
    <tr>
        <td><?php echo $regA['id']; ?></td>
        <td><?php echo $regA['nome']; ?></td>
        <td><a href='lista_cliente.php?id=<?php echo $regA['id']; ?>'>Exluir</a></td>
    </tr>
<?php
    }
}
?>
</table>