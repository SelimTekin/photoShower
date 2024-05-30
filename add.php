<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fotoğraf Ekle</title>
    <link rel="stylesheet" href="styles.css">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css">

</head>

<body>
    <div class="text-center p-5 mb-3" style="font-size:30px;border-bottom:1px dashed grey">
        Fotoğraf Kütüphanesi
    </div>
    <div style="position:absolute;left:10px;top:20px;background-color:white;border:1px solid black" class="p-2 d-flex">
        <div class="col-6">
            <a href="index.php" class="p-2">
                <button><i class="fa-solid fa-house"></i></button>
            </a>
        </div>
        <div class="col-6">
            <a href="add.php" class="p-2">
                <button><i class="fa-solid fa-plus"></i></button>
            </a>
        </div>
    </div>
    <div class="container">

        <form method="post" action="action_add.php" class="movie-form">
            <div class="form-group">
                <label for="title">Fotoğraf İsmi:</label>
                <input type="text" id="title" name="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="thumbnail">Fotoğrafın URL:</label>
                <input type="text" id="thumbnail" name="thumbnail" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="year">Çekilme Yılı:</label>
                <input type="text" id="year" name="year" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="rating">Puanı:</label>
                <input type="text" id="rating" name="rating" class="form-control" required>
            </div>
            <button
                type="submit"
                class="btn btn-primary mt-2"
            >
            Kaydet
            </button>
        </form>
    </div>

</body>

</html>