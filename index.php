<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Metadata Extractor</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="shortcut icon" href="./src/favicon.png" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-secondary">

    <div class="container-fluid">
        <div class="row vh-100 ">
            <div class="col ">
                <!-- row 1 start -->
                <div class="row">
                    <div class="col">
                        <div class="col mb-4">
                            <h1 class="text-center mt-5 fw-bold text-white ">Upload Image to get MetaData</h1>
                        </div>
                        <div class="col text-center">
                            <img src="./src/page1.png" class="img-fluid" alt="..." width="100px">
                        </div>
                    </div>
                </div>
                <!-- row 1 end -->

                <!-- row 2 start -->
                <div class="row h-50">
                    <div class=" col-lg-7 col-8 rounded bg-light mx-auto mt-4">
                        <div class="col mx-auto mt-5 ">
                            <form method="post" enctype="multipart/form-data" action="metadata.php" id="my-form">
                                <div class="mb-3 mt-2">
                                    <label for="url" class="form-label">Image Url</label>
                                    <input type="url" class="form-control" placeholder="https://" id="url" name="url">
                                    <div class="form-text">upload image URL and get meta data.
                                    </div>
                                </div>
                                <div class="mb-4">
                                    <label for="file" class="form-label mt-3">Browse your file here</label>
                                    <input type="file" class="form-control" id="file" name="file">
                                </div>
                                <div class="col text-center">
                                    <button id="submit-btn" type="submit" class="btn btn-danger mb-4 w-50">Get MetaData</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- row 2 end -->
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>
