<?php
/**
 * Upload version 1.0
 * Created by Brisa Schanzenbach & Belen Silvero http://github.com/xxx
 * Date 24 august 2024
 */

 class Upload
 {
 
     private $imagesFolder = "img/";
 
     public function uploadImage()
     {
         $nombre_img = $_FILES['imagen']['name'];
         $tipo = $_FILES['imagen']['type'];
         $tamano = $_FILES['imagen']['size'];
         //Si existe imagen y tiene un tamaño correcto
         if (($nombre_img == !NULL) && ($_FILES['imagen']['size'] <= 200000)) {
             //indicamos los formatos que permitimos subir a nuestro servidor
             if (($_FILES["imagen"]["type"] == "image/gif")
                 || ($_FILES["imagen"]["type"] == "image/jpeg")
                 || ($_FILES["imagen"]["type"] == "image/jpg")
                 || ($_FILES["imagen"]["type"] == "image/png")
             ) {
                 // Ruta donde se guardarán las imágenes que subamos
                 $directorio = $this->imagesFolder;
                 // Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
                 move_uploaded_file($_FILES['imagen']['tmp_name'], $directorio . $nombre_img);
             } else {
                 //si no cumple con el formato
                 exit("No se puede subir una imagen con ese formato ");
             }
         } else {
             //si existe la variable pero se pasa del tamaño permitido
             if ($nombre_img == !NULL) exit("La imagen es demasiado grande ");
         }
         return $directorio . $nombre_img;
     }
     
     public function setImagesFolder($newFolder){
            $this->imagesFolder=$newFolder;
     }
 }
 