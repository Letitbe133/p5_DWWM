<?php

require_once 'uploadProcess.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
    <link rel="stylesheet" href="https://unpkg.com/@picocss/pico@1.*/css/pico.min.css">

</head>
<body>
    <h1>Let's Upload !</h1>
    <section>
        <p><?php echo $msg ?? ''; ?></p>
    </section>
    <section>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" enctype="multipart/form-data">
            <label for="image">Choose an image (jpg, png, gif) 2Mb or less</label><input type="file" id="image" name="image">
            <button type="submit">Upload</button>
        </form>
    </section>
    <section id="display">
        <article>
            <h2>Uploaded Image</h2>
            <img src="<?php echo $path ?? ''; ?>" alt="">
        </article>
    </section>
</body>
</html>

