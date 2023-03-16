<?php

        // check if form submitted
        if ('POST' === $_SERVER['REQUEST_METHOD']) {
            // check what is received in $_FILES
            $file = $_FILES['image'];
            $msg = '';

            try {
                // check if a file was uploaded
                if (!isset($file)) {
                    throw new \ValueError('No file uploaded');
                }
                // check if error during upload
                if ($file['error'] > 0) {
                    throw new \Exception('Upload error');
                }

                // create array for allowed extensions
                $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];

                // max size in bytes
                $maxSize = 1000000;

                // get file extension from file mime type
                $mimeType = mime_content_type($file['tmp_name']);
                $mimeType = explode('/', $mimeType);
                $ext = end($mimeType);

                // check if file extension is allowed
                if (!in_array($ext, $allowedExtensions)) {
                    throw new \ValueError('Extension is not allowed');
                }

                // check file size
                if ($file['size'] > $maxSize) {
                    throw new \ValueError("File size exceeds the {({$maxSize} / 1000000)} Mb limit");
                }

                // generate unique id
                $filename = uniqid().'.'.$file['name'];

                // now store the file in the uploads folder
                $status = move_uploaded_file($file['tmp_name'], 'uploads/'.$filename);

                if ($status) {
                    $msg = 'Fichier correctement téléversé';
                    $path = "uploads/{$filename}";
                } else {
                    throw new \Exception('File could not be uploaded');
                }
                $msg = 'File successfully uploaded';
            } catch (\Throwable $error) {
                // var_dump($error instanceof \ValueError);
                // var_dump($error);
                if ($error instanceof \ValueError) {
                    $msg = 'File doesn\'t meet the specified upload conditions';
                } else {
                    $msg = 'Something went wrong during upload';
                }
            }
        }
