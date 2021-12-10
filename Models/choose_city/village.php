<?php
    $mysqli = new mysqli("localhost","root","","webfood");
    $key = $_POST['idXa'];
    $query = "SELECT *from village where wardid = '$key'";
    $result = $mysqli->query($query);
    $row =  $result -> fetch_array(MYSQLI_ASSOC);
    if(count($row) > 0) { 
        foreach($result as $value) { ?>
        <option value="<?php echo $value['villageid']?>">
            <?php echo $value['name']; ?>
        </option>   
<?php
    }
}
?>