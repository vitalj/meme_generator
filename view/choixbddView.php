<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Meme Generator</title>
</head>
<body>
<div class="navbar">
    <img class="logo" src="../assets/media/logo.png">
</div>

<<<<<<< HEAD
 <div class="container">
<div class="row">
<div class="col-12 d-flex justify-content-around">
<img src="../assets/media/cercle1.jpg" class="rounded-circle" />
<img src="../assets/media/cercle2blanc.png" class="rounded-circle" />
<img src="../assets/media/cercle3blanc.png" class="rounded-circle" />
</div>
</div>
</div>

<div>
=======
<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-around">
            <img src="../assets/media/cercle1.png" class="rounded-circle" />
            <img src="../assets/media/cercle2blanc.png" class="rounded-circle" />
            <img src="../assets/media/cercle3blanc.png" class="rounded-circle" />
        </div>
    </div>
</div> 
<form name="inscription" method="post" action="memegeneView.php">
<div class="list">
>>>>>>> 43aee25ace090495de0736c7c6330bd5970ea9ae

<?php

require('../model/model.php');

$response = getImages();

$images=$response->fetchAll(PDO::FETCH_ASSOC);
foreach($images as $row){

?>

<div class="images">
    <p><a href="../view/memegeneView.php?id=<?= $row["id"]?>"><img src="../<?=$row["adress"]?>"style="cursor:pointer" witdh="300" height="300"></a></p>
</div>

 
<?php

  }

  $response->closeCursor();

  ?>

  

<p id="list"></p>  

<div>
    <input type="button" class="btn btn-info" value="Retour" onclick="location.href = 'choixView.php';">
</div>


</script>
</form>
</body>
</html>