<form action="test.php" method="post">    
<select name="value">
    <option value="">Property Type</option>
    <?php
    include("DBconnect.php");
    $query  = "SELECT DISTINCT propertyType FROM properties";
    $result = mysqli_query($connection, $query);
    if ($result) {
        while($row = $result->fetch_assoc()) {  
            $propertyType = $row ['propertyType'];
            echo '<option value="'.$propertyType.'">'.$propertyType.'</option>';
        }
    }
    ?> 
</select> 

<select name="status">
    <option value="">Property Status</option>
    <?php
    include("DBconnect.php");
    $query  = "SELECT DISTINCT propertyStatus FROM properties";
    $result = mysqli_query($connection, $query);
    if ($result) {
        while($row = $result->fetch_assoc()) {  
            $propertyStatus = $row ['propertyStatus'];
            echo '<option status="'.$propertyStatus.'">'.$propertyStatus.'</option>';
        }
    }
    ?> 
</select> <br><br> 
<input type="submit" value="search"/>
</form>    
<br/>


