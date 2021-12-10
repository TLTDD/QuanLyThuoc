<?php
    $mysqli = new mysqli("localhost","root","","webfood");
    $key = $_POST['idHuyen'];
    $query = "SELECT *from ward where districtid = '$key'";
    $result = $mysqli->query($query);
    $row =  $result -> fetch_array(MYSQLI_ASSOC);
    if(count($row) > 0) {
        foreach($result as $value) { ?>
    <option value="<?php echo $value['wardid']?>">
        <?php echo $value['name']; ?>
    </option>
<?php
    }}
?>