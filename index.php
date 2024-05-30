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
   <div class="container">
      <div class="row">

         <?php
         include("config.php");
         include("connect.php");

         $db = new connect($dbURL);

         $data = $db->get("hayvanlar");
         $data = json_decode($data, 1);

         if (is_array($data)) {
            foreach ($data as $id => $hayvanlar) {
         ?>
               <div class="col-3 text-center" onmouseenter="$(this).children('div').show()" onmouseleave="$(this).children('div').hide()">
                  <img src="<?= $hayvanlar['thumbnail']; ?>"  style=" height:192px;width:auto" class="img-fluid rounded-top mb-2" alt="" />
                  <div class="photoDetails" style="display:none">
                     <div class="d-flex">
                        <div class="col-6">
                           İsmi
                        </div>
                        <div class="col-6">
                           <?= $hayvanlar["title"] ?>
                        </div>
                     </div>
                     <div class="d-flex">
                        <div class="col-6">
                           Çekilme Yılı
                        </div>
                        <div class="col-6">
                           <?= $hayvanlar["year"] ?>
                        </div>
                     </div>
                     <div class="d-flex">
                        <div class="col-6">
                           Puan
                        </div>
                        <div class="col-6">
                           <?= $hayvanlar["rating"] ?>
                        </div>
                     </div>
                     <div class="mb-2"><a style="text-decoration:none;" class="btn btn-primary" href='edit.php?id=<?=$id?>'>Güncelle</a></div>
                     <div class="mb-2"><a style="text-decoration:none;" class="btn btn-danger" href='delete.php?id=<?=$id?>'>Sil</a></div>
                  </div>
               </div>
               <!-- <tr>
                     <td><img src=''></td>
                     <td>{$hayvanlar['title']}</td>
                     <td>{$hayvanlar['year']}</td>
                     <td>{$hayvanlar['rating']}</td>
                     <td><a href='edit.php?id=$id'>EDIT</a></td>
                     <td><a href='delete.php?id=$id'>DELETE</a></td>
                  </tr> -->
         <?php
            }
         }
         ?>
      </div>

   </div>

</body>

</html>