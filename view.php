<?php
include("db_connec.php");
    $sel ="select * from category_tbl";
    $qry = mysqli_query($con,$sel);
    while($rows =mysqli_fetch_array($qry)){
        ?>
     <tr>
        
        <td><?php echo $rows['category_name'] ?></td>
        <td><?php echo $rows['category_descc'] ?></td>
        <td><a href ="edit1.php?id=<?php echo $rows['catid']?>">EDIT</a></td>
        <td><a href ="delete.php?id=<?php echo $rows['catid']?>">DELETE</a></td>
    </tr>
<?php
}
    ?>