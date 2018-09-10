<!doctype html>
<html class="no-js" lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
</head>

<body>

  <header>
    <nav class="d-flex justify-content-between p-2 mx-4">
      <h1><span class="colorTouch">Y</span>es<span class="colorTouch">W</span>e<span class="colorTouch">S</span>ell</h1>
      <a href="index.html">Accueil</a>
    </nav>
    <!-- <div class="disclaimer">
      <p class="text-center"><i>Ce site est juste un site vitrine, veuillez suivre nos réseaux sociaux pour un achat.</i></p>
    </div> -->
  </header>

  <nav aria-label="breadcrumb" class="mt-5">
    <ol class="breadcrumb mt-5">
      <li class="breadcrumb-item mt-5"><a href="index.html">Accueil</a></li>
      <li class="breadcrumb-item active mt-5" aria-current="page">Chaussures AVE Rapidweld Pro Lite</li>
    </ol>
  </nav>

  <div class="container mt-5 pt-5">

    <div class="row p-0">


      <div class="col-12 col-md-6 mt-2 basketImage">
        <img src="img/basket1_blanc.png" alt="first picture of basket" class="img-fluid">
      </div>

      <div class="col-12 col-md-6 mt-2">
        <h2 class="font-weight-bold mt-3">Chaussures AVE Rapidweld Pro Lite</h2>
        <p class="description">Description</p>
        <p class="aboutDescription">Outre sa tige en synthétique, cette chaussure légère intègre une membrane Rapidweld sans coutures équipée de renforts DURACAP™ sur les zones les plus exposées à l'usure pour la durabilité et une semelle intérieure UltraCush Lite™ 3D pour plus de confort.</p>

        <div class="productColor d-flex mt-4">
          <div class="firstColor clickActive d-flex justify-content-center align-items-center activeTouch">
            Rouge
          </div>
          <div class="secondColor clickActive d-flex justify-content-center align-items-center">
            Blanc
          </div>
          <div class="thirdColor clickActive d-flex justify-content-center align-items-center">
            Noir
          </div>
        </div>

        <div class="shoeSizeList d-flex flex-wrap mt-3">
          <div class="shoeSize mb-3 font-weight-bold d-flex justify-content-center align-items-center activeTouch">
            39
          </div>
          <div class="shoeSize mb-3 font-weight-bold d-flex justify-content-center align-items-center">
            40
          </div>
          <div class="shoeSize mb-3 font-weight-bold d-flex justify-content-center align-items-center">
            41
          </div>
          <div class="shoeSize mb-3 font-weight-bold d-flex justify-content-center align-items-center">
            42
          </div>
          <div class="shoeSize mb-3 font-weight-bold d-flex justify-content-center align-items-center">
            43
          </div>
          <div class="shoeSize mb-3 font-weight-bold d-flex justify-content-center align-items-center">
            44
          </div>
        </div>

        <p class="description mt-2">€ 110,00</p>
      </div>

    </div>

    <?php echo 'img/basket' . $_GET['basketType'] . '.png'; ?>
    <?php echo $_GET['test']; ?>
  </div>
    <script src="js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
      window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
      ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async defer></script>
  </body>

  </html>
