<?php require 'function.php';

$connect = dBconnect();

$sql = " SELECT * FROM `projects` ORDER BY `projectTitle` ASC ";

	
	// perform $query on $db and store resource
	$result = mysqli_query($connect,$sql);

    while($row=mysqli_fetch_assoc($result)) 
    {
        echo "<div class='row'>";
        echo "<div class='col-md card'>";
        echo "<img class='card-img-top' src=".$row['projectImage']." alt='Card image cap'>";
        echo "<div class='card-body'>";
        echo    "<h5 class='card-title'>".$row['projectTitle']."</h5>";
        echo    "<p class='card-text'>".$row['projectDescription']."</p>";
        echo    "<a href=".$row['projectPath']." class='btn btn-primary'>Click</a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
?>