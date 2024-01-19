<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assests/css/bootstrap.min.css">
    <title>post</title>
</head>
<body>
    <div class="container mt-4">
        <div class="card shadow d-flex justify-content-center">
            <div class="card-header">
                <h3>Upload Your Post Here</h3>
            </div>
            <div class="card-body">
                <form action="post" class="form-group" id="uploadPost" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Post Title</label>
                        <input type="text" name="postTitle" class="form-control" placeholder="post-title">
                    </div>
                    <div class="form-group">
                        <label for="">Post Category</label>
                        <select name="postCat" class="form-control" id="">
                        <option value="News">News</option>
                        <option value="Entertainment">Entertainment</option>
                        <option value="Events">Events</option>
                        <option value="Fashion">Fashion</option>
                        <option value="Fashion">Technology</option>
                        <option value="Lifestyle">Lifestyle</option>
                        <option value="Politics">Politics</option>
                        <option value="Beauty">Beauty</option>
                        <option value="Business & Economy">Business & Economy</option>
                        <option value="Metro Plus">Metro Plus</option>
                        <option value="Inspiration">Inspiration</option>
                        <option value="Featured">Featured</option>
                        <option value="Latest News">Latest News</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Post Description</label>
                        <textarea name="postDescription" id="" class="form-control" cols="30" rows="10"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="file" name="postImg" class="form-control" placeholder="post-title">
                    </div>
                    <div class="d-flex justify-content-center">
                        <button class="btn btn-success px-5 btn-center" id="uploadPostBtn">Upload</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
 
    
<script src="../assests/js/jquery.js"></script>
<script src="../assests/js/bootstrap.min.js"></script>
<script src="../assests/js/sweetAlert.js"></script>

<script>
    $(document).ready(function(){
        $("#uploadPost").submit(function(e){
        // alert("hjkhfkjdhjghdj")
        e.preventDefault()

        $.ajax({
            url: './controller/process.php',
            method: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data : new FormData(this),
            success : function(response){
                console.log(response)
                if(response === 'success'){
                    swal.fire({
                        title: 'Upload successFully' ,
                        icon: 'success' ,
                        text: 'Post Uploaded' 
                    }).then(location.reload())
                }
            }

        })
    })
    })
</script>
</body>
</html>