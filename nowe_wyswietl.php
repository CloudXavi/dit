<?php

$db = new mysqli('localhost','root','','di');
$query = $db->prepare("SELECT * FROM news LIMIT 10"); 
$query->execute();
$result = $query->get_result();

if(mysqli_error($db)){

    include 'error.js';

} else{

  echo "<h1 style='text-align:center;'> NOWOŚCI </h1>";

    while($row = $result->fetch_assoc()) 
    {
        $content = $row['content'];
        $date = $row['dates'];
        $creator = $row['creator'];

        echo "
          

          <div id='news'>
            <h3> $creator, $date </h3>
            <h5> $content </h5>
          </div>";
    }

}




?>