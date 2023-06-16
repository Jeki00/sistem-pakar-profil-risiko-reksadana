<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/icon.png">

    <title>Sistem Pakar</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
</head>
<body>
	<?php
		include ('navbar.php');
	?>
	
    <main role="main">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="image/bg1.jpg" alt="First slide" width="1400" height="580" >
            <div class="container">
              <div class="carousel-caption text-left" style="color: black;">
                <h1>Bingung Mau Mulai Dari Mana?</h1>
                <p>Jangan biarkan keputusan investasimu menjadi sebuah tebak-tebakan. 
                  Manfaatkan kekuatan teknologi dan pengetahuan dalam menentukan profil risiko investasi reksa dana 
                  yang cocok buat kamu.</p>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="image/bg2.jpg" alt="Second slide" width="1400" height="570" >
            <div class="container">
              <div class="carousel-caption">
                <h1>Gatau Caranya Mulai Investasi?</h1>
                <p>Temukan Profil Risiko Investasi Reksa Dana yang Tepat untuk Mengoptimalkan Keuangan Anda!</p>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="image/bg3.jpg" alt="Third slide" width="1400" height="580" >
            <div class="container">
              <div class="carousel-caption text-right"  style="color: black;">
                <h1>Mau Investasi Tapi Ragu-Ragu?</h1>
                <p>Mulailah perjalanan menuju keputusan investasi yang lebih cerdas dan dapatkan kendali penuh atas investasi kamu agar dapat meningkatkan peluang keberhasilan tujuan keuangan yang kamu inginkan.</p>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- Carousel -->

      <!-- -------------- MODAL ---------------
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Identitas User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nama :</label>
                  <input type="text" name="nama" class="form-control" id="input-ame" placeholder="isikan nama anda" required autofocus >
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Umur :</label>
                  <input type="number" name="umur" class="form-control col-sm-8" placeholder="isikan umur anda" required >
                </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info">Lanjut ></button>
                </div>
              </form>
            </div> -->
            
          </div>
        </div>
      </div>






      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-6">
            <h2>Kenapa harus memperhatikan profil risiko? </h2>
            <p>Karena setiap investor memiliki toleransi risiko yang berbeda. Beberapa mungkin lebih suka investasi yang lebih konservatif dengan risiko rendah, sementara yang lain mungkin siap mengambil risiko yang lebih tinggi untuk potensi keuntungan yang lebih besar. Dengan mengetahui profil risiko Anda, Anda dapat memilih reksa dana yang sesuai dengan tujuan keuangan dan kenyamanan Anda.</p>
          </div><!-- /.col-lg-4 -->
          <!--
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/2.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Maria Octavia Antarani</h2>
            <p>sebagai Knowledge Engineer</p>
            <p>(71150055)</p>
            <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
          </div> --> <!-- /.col-lg-4 -->
          <!-- <div class="col-lg-4">
            <img class="rounded-circle" src="image/3.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Debora Syebat Nazir</h2>
            <p>sebagai Project Manager</p>
            <p>(71150088)</p>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          </div> --> <!-- /.col-lg-4  -->
        </div><!-- /.row -->



    </main>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</html>