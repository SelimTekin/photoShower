<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Fotoğraf kütüphanesi</title>
   <link rel="stylesheet" href="style.css">

   <!-- Bootstrap CSS v5.0.2 -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.css">
   <!-- jquery -->
   <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

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
   <?php
   include("config.php");
   include("connect.php");

   $db = new connect($dbURL);
   $id = $_GET['id'];
   $get = $db->get("hayvanlar/$id");
   $data = json_decode($get, 1);


   ?>
   <div class="container">
      <form method="post" action="action_edit.php">
         <table border="0" width="500">
            <tr>
               <td>Fotoğraf İsmi</td>
               <td>:</td>
               <td><input type="text" name="title" value="<?= $data['title'] ?>"></td>
            </tr>
            <tr>
               <td>Fotoğraf Linki</td>
               <td>:</td>
               <td><input type="text" name="thumbnail" value="<?= $data['thumbnail'] ?>"></td>
            </tr>
            <tr>
               <td>Çekilme Yılı</td>
               <td>:</td>
               <td><input type="text" name="year" value="<?= $data['year'] ?>"></td>
            </tr>
            <tr>
               <td>Puan</td>
               <td>:</td>
               <td><input type="text" name="rating" value="<?= $data['rating'] ?>"></td>
            </tr>
            <tr>
               <td>
                  <input type="hidden" name="id" value="<?= $id ?>">
                  <input type="submit" value="Kaydet">
               </td>
            </tr>
         </table>
      </form>
   </div>
</body>

</html>