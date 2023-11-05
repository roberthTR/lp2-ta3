<form method="post" action="<?=$_SERVER["PHP_SELF"]?>">
    <input type="text" name="id" placeholder="Ingrese id de la Facultad"><br>
    <input type="submit" value="Buscar"><br>
</form>
<?php
if(!empty($_POST)){
    $id = $_POST['id'];
    include_once "C:\laragon\www\LP2\TA3\Controladores\FacultadControlador.php";
    $tc = new FacultadControlador();    
    $resultado = $tc->getFacultadPorId($id);

    ?>
        <table border="1px solid">
            <tr>
                <th>nombre</th>
            </tr>
            <?php
                foreach($resultado as $item){
                    echo "<tr>
                            <td>".$item["name"]."</td>
                         </tr>";
                }
            ?>
        </table> 
    <?php
}