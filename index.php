<?php
//destroy previous session data
if(session_id() != '') session_destroy();

//get file upload status
if(isset($_GET['err'])){
    if($_GET['err'] == 'bf'){
        $errorMsg = 'Please select a video file to upload.';
    }elseif($_GET['err'] == 'ue'){
        $errorMsg = 'Sorry, there was an error on uploading your file.';
    }elseif($_GET['err'] == 'fe'){
        $errorMsg = 'Sorry, only MP4, AVI, MPEG, MPG, MOV and WMV files are allowed.';
    }else{
        $errorMsg = 'Some problems occurred, please try again.';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Upload video to YouTube using PHP</title>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
    <div class="video-box">
        <h1>Upload Video to YouTube using PHP</h1>
        <form method="post" enctype="multipart/form-data" action="upload.php">
            <?php echo (!empty($errorMsg))?'<p class="err-msg">'.$errorMsg.'</p>':''; ?>
            <label for="title">Title:</label><input type="text" name="title" value="" />
            <label for="description">Description:</label> <textarea name="description" cols="20" rows="2" ></textarea>
            <label for="tags">Tags:</label> <input type="text" name="tags" value="" />
            <label for="file">Choose Video File:</label> <input type="file" name="file" >
            <input name="videoSubmit" type="submit" value="Upload">
        </form>
    </div>
</body>
</html>
