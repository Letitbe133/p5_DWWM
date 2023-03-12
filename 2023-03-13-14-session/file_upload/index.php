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
        <form action="" method="post">
            <label for="image">Choose an image</label><input type="file" id="image" name="image">
            <button type="submit">Upload</button>
        </form>
    </section>
    <section id="display">
        <article>
            <h2>Uploaded Image</h2>
            <img src="<?php echo $src ?? ''; ?>" alt="">
        </article>
    </section>
</body>
</html>

<?php
