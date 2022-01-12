<?php

    $conn = mysqli_connect("localhost", "root", "", "bayazid");
    if ($conn) {
        $query = "SELECT * FROM bal";
        $res = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($res)){
            ?> 
            <div style="display: flex; justify-content: center">
            <table  border="2" style="width: 40%;">
                <tr>
                    <th style="width: 50%;"><?php echo $row['id'] ?></th>
                    <th style="width: 50%;"> <?php echo $row['name'] ?> </th>
                </tr>
            </table>
            </div>
            
            <?php
        }
    }
    else echo "N";
?>