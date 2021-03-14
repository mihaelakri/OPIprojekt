<?php

include "connection.php"; 

$sql="SELECT * FROM evidencija;";
$result=mysqli_query($conn, $sql); 

if(mysqli_num_rows($result)>0){
    while($row=mysqli_fetch_assoc($result)){
        echo '
        <tr>
            <td>'.$row['ime'].'</td>
            <td>'.$row['prezime'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['vrsta_zahtjeva'].'</td>
            <td>'.$row['opis_zahtjeva'].'</td>
            <td>'.$row['status_zahtjeva'].'</td>
            <td>'.$row['obavijest'].'</td>
            <td>'.$row['operater_ev'].'</td>
            <td>'.$row['operater_ob'].'</td>
        </tr>';
    }
}

?>