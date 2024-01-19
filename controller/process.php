<?php
require 'dbc.php';
$dbc = new Dbc ();

if(isset($_FILES['postImg'])){
    $postTitle = $dbc->test_input($_POST['postTitle']);
    $postCat = $dbc->test_input($_POST['postCat']);
    $postDescription = $dbc->test_input($_POST['postDescription']);
    // $postImg = $dbc->test_input($_FILES['postImg']['name']);
  

    if(isset($_FILES['postImg']) && ($_FILES['postImg'] != '')){
        $folder = dirname(__FILE__) .'/img/';
        // $name = strtolower(basename($_FILES['postImg']['name']));
        // echo($name);
        $newimg = time().'_'.$_FILES['postImg']['name'];
        // $newimg = $folder.time().'_'.$_FILES['postImg']['name'];
        move_uploaded_file($_FILES['postImg']['tmp_name'], $folder.$newimg);
      }
    $insert = $dbc->uploadPost($postTitle, $postCat, $postDescription, $newimg);
    if($insert){
        echo "success";
    }else{
        echo "some is wrong";
    }
}

if(isset($_POST['action']) && $_POST['action'] == 'fetchData'){
    // $id = $_POST['fetchData'];
    $fetchData = $dbc->fetchPost();
    // echo $fetchData;
    if($fetchData){
        $output = '';
        foreach($fetchData as $fetchDatas){
            $output .='
            <div class="card mb-4 ml-3" style="max-width: 500px;">
            <div class="row g-0">
                <div class="col-lg-5 ">
                    <img src="controller/img/'.$fetchDatas['postImg'].'" class="card-img-top h-100" alt="...">
                </div>
                <div class="col-sm-7">
                    <div class="card-body"> 
                        <h5 class="card-title">'.$fetchDatas['postTitle'].'</h5>
                        <p class="card-text">'.$fetchDatas['postDescription'].'</p>
                        <a href="readmore.php?id='.$fetchDatas['id'].'" class="btn btn-info stretched-link">Read More...</a>
                        <button a href="#" class=" btn m-1 text-info fa fa-share-alt"></a></button>
                        <h5><small class="text-muted"><i><button a href="#"
                                        class=" btn m-1 text-info fa fa-user "></a></button>
                                    Adeshina Feb 11, 2022</i></small></h5>
                    </div>
                </div>
            </div>
        </div>
            ';
        }
    } 
    echo $output;
}