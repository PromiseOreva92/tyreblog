<?php

include_once('includes.php');
$text = $_POST['text'];
$link= mysqli_connect($host,$user,$password,$database);

$st="update tyrereviews set status = 'pending' where review_id = $text";
$st1="select * from tyrereviews";
if(mysqli_query($link,$st)){
    $result=mysqli_query($link, $st1);
    while($row = mysqli_fetch_array($result)){
        
        
        ?>

                        <tr>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['location']; ?></td>
                            <td><?php echo $row['status']; ?></td>
                            <td><a href="customerview.php?rev=<?php echo $row['review_id'];?>">View</a>
                                <button onclick="approve(event)" id="<?php echo $row['review_id']; ?>;" style="background:#2e7912;">Approve</button>
                                <button onclick="pending(event)" id="<?php echo $row['review_id']; ?>;" style="background: #660000">Pending</button></td>
                        </tr>      

<?php
    }
    
}else{
   
}


