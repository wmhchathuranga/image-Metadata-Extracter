<!DOCTYPE html>
<html>

<head>
    <title>Metadata Viewer</title>
    <link rel="shortcut icon" href="./src/favicon.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <style>
        td {
            padding: 10px !important;
            margin-right: 0;
        }

        .bg-light.border-dark {
            border-radius: 10px;
        }
    </style>


</head>

<body class="bg-light">
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="col mb-4">
                    <h1 class="text-center mt-1 fw-bold">Your File MetaData</h1>
                </div>
                <div class="col text-center">
                    <img src="./src/page2.png" class="img-fluid " alt="..." width="100px">


                </div>
            </div>
            <div class="col-11 text-end">
                <a href="index.php">
                    <img src="./src/left-arrow.png" class="img-fluid" alt="Back" width="50px">
                </a>
               
            </div>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-7 mx-auto">


            <?php
            if (!empty($_POST['url'])) {
                $url = $_POST['url'];
                $temp_file = tempnam(sys_get_temp_dir(), 'img');
                file_put_contents($temp_file, file_get_contents($url));
                $file = $temp_file;
            } elseif (!empty($_FILES['file'])) {
                $file = $_FILES['file']['tmp_name'];
            } else {
                echo '<div class="alert alert-danger" role="alert">No file or URL provided. Please try again.</div>';
                echo '<a class="btn btn-secondary" href="index.php">Go back</a>';
                exit();
            }

            $output = exec("exiftool $file > meta.txt");
            $file_handle = fopen('meta.txt', 'r');

            echo "<table class='table table-striped border'>";
            while (!feof($file_handle)) {
                $line = fgets($file_handle);
                $line_array = explode(':', $line);
                $key = trim($line_array[0]);
                $value = trim($line_array[1]);

                // Exclude certain metadata tags
                if ($key == 'ExifTool Version Number' || $key == 'File Name' || $key == 'Directory') {
                    continue;
                }

                echo "<tr>
                      <td>$key</td>
                      <td>$value</td>
                      </tr>";
            }


            echo "</table>";

            fclose($file_handle);

            if (isset($temp_file)) {
                unlink($temp_file);
            }
            ?>





            <div class="mt-3 mb-3">
                <a class="btn btn-secondary w-50 offset-3" href="index.php">Go back</a>
            </div>

        </div>
    </div>


    </div>
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>