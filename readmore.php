<?php 
require_once './controller/dbc.php';
$dbs = new Dbc();
if(isset($_GET['id'])){
 $getId = $_GET['id'];
 $result = $dbs->fetchSinglePost($getId);
//  echo json_encode($result);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../carousel/dist/css/bootstrap.min.css">
    <title>Document</title>
    <style>
        .aaa{
            border-radius: 10px;width:400px;
            border-color:black;
    }
    </style>
    
</head>
<body>
    <!-- <h1>What else do you want to see hun</h1> -->
    <div class="card text-center">
        <?php foreach($result as $results): ?>
        <div class="card-header"><?= $results['postTitle']?></div>
        <div class="card-body">
            <h5 class="card-title">Post</h5>
            <div class="card ml-3" style="max-width: 500px;">
            <div class="row g-0">
                <div class="col-lg-5 ">
                    <img src="controller/img/<?= $results['postImg']?>" class="img-fluid" alt="...">
                      <p class="card-text"><?= $results['postDescription']?></p>
                </div>
          
            <!-- <a href="#" class="btn btn-info ju">Comment</a> -->
        </div>
        <div class="card-footer  mt-3 text-muted"><?= date('F j Y', strtotime($results['datePosted']))?></div>
    </div>
    
    <?php endforeach; ?>
    <div class="container-fluid mt-5">
        <!-- <input type="button" value="comment"> -->
        <input class="aaa" type="text"placeholder="Add a comment">
       <a href="#"  button class=" text-info pr-5" type="submit">Post</button>
    </div>
    <a href="index.php" class="text-info"> Click here to go back home</a>
</body>
</html>