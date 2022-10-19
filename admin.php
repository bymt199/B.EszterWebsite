<?php

    if(isset($_POST["img_submit"])){

        $img_name=$_FILES['img_upload']['name'];
	    $tmp_img_name=$_FILES['img_upload']['tmp_name'];
        $folder="img/henna/";
	    move_uploaded_file($tmp_img_name, $folder."/".$img_name);
        header("Refresh:0");
    }

?>


<!DOCTYPE html>
<html lang="hu">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Baka Eszter - Admin</title>
</head>
<body>

    <div class="container" style="max-width: 800px;">
        <div class="row justify-content-center">
        
            <form action="" method="POST" enctype="multipart/form-data" class="form-group text-center p-5">
                <h2>Kép feltöltés</h2>  
                
                <input type="file" id="image-input" name="img_upload" accept="image/png, image/jpg, image/jpeg" class="form-control my-3">

                <button type="submit" name="img_submit">Küldés</button>
            </form>
            
        </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>

<script>
    const image_input = document.querySelector("#image-input");

    image_input.addEventListener("change", function() {
        const reader = new FileReader();
        reader.addEventListener("load", () => {
            const uploaded_image = reader.result;
            document.querySelector("#display-image").style.backgroundImage = `url(${uploaded_image})`;
  });
  reader.readAsDataURL(this.files[0]);
});

</script>
</body>
</html>