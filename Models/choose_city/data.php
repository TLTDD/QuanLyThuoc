<?php
    $mysqli = new mysqli("localhost","root","","webfood");
    $key = $_POST['id'];
    $query = "SELECT *from district where provinceid = '$key'";
    $result = $mysqli->query($query);
    $row =  $result -> fetch_array(MYSQLI_ASSOC);
    if(count($row) > 0){
    foreach($result as $value) {
        ?>
        <option value="<?php echo $value['districtid']?>">
            <?php echo $value['name']; ?>
        </option> 
    <?php } }?>
?>