<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/estilos2.css">
    <link rel="stylesheet" href="css/font.css">
    <title>Renta de MAquinaria</title>
</head>
<body>
    <header>
      <div class="navbar">
        <img src="img/logo.ico" alt="Main logo" class="logo">
      <ul>
        <li><a href="#presentacion">Quienes Somos</a></li>
        <li><a href="#catalogo">Catalogo</a></li>
        <li><a href="#maniobras">Maniobras</a></li>
        <li><a href="#mapa">Mapa</a></li>
      </ul>  
    </div>
    </header>

        <div class="presentacion" id="presentacion">
          <div class="content">
            <h1>Tus aliados en cada maniobra</h1>
          </div>
        </div>
    
        <div class="catalogo" id="catalogo">
          <?php include('html/maquinaria.html')  ?>
        </div>
    
        <div class="maniobras" id="maniobras">
        <?php include('html/car.html')  ?>
        </div>
    
        <div class="mapa" id="mapa"> 
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2961.8839282347058!2d-100.43797377604533!3d20.720785777270624!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35968be29104f%3A0xac3652713d01d763!2sCorporativo%20CCIMA!5e0!3m2!1ses-419!2smx!4v1660070155207!5m2!1ses-419!2smx"
           width="100%" height="100%" style="border:0;"
           allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    
        <div class="social-bar">
        <a href="https://www.facebook.com/rentsolutionsbyccima" class="icon icon-facebook2" target="_blank"></a>
        <a href="https://www.youtube.com/channel/UCb6hCJ7yUV3X0SVBG_GFSow" class="icon icon-youtube" target="_blank"></a>
        <a href="https://www.instagram.com/grupo.ccima.qro1/" class="icon icon-instagram" target="_blank"></a>
        <a href="https://wa.me//527224736817/?text=tu%20texto%20personalizado" class="icon icon-whatsapp" target="_blank"></a>
    </div> 

        <footer>
            <?php include('html/foother.html')  ?>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/web-animations-js@2.3.2/web-animations.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/muuri@0.9.5/dist/muuri.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>