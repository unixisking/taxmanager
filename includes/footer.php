<!--// Footer \\-->
<footer id="tax-footer" class="tax-footer-one">
  <!--// Footer Widget \\-->
  
  <!-- Start main Footer -->
  <div class="our-footer">
	<div class="container">
	  <span id="uptoTop" style="text-align: center; display:block;width: 50px;;  margin: 10px auto 10px; cursor:pointer"> <i class="fa fa-chevron-circle-up" style="color: #E0C56E; font-size:35px" ></i></span>
	  <div class="row">
		<div class="col-xs-12 col-sm-12 col-md-6 col-lg-2">
		  <div class="our-footer-info" style=" padding-bottom: 34px;">
			<a href="" class="footer-logo"><img src="images/logo-white.webp" alt="Logo Fiduciaire Tax Manager"></a>
		  </div>
		  <ul class="social-network">
			<li><a href="https://www.facebook.com/taxmanager.ch" target="_blank" class="fa fa-facebook"></a></li>
			<li><a href="https://www.youtube.com/channel/UC6SDKaE3zQOAiVO5k0Qv_3g" target="_blank" class="fa fa-youtube"></a></li>
			<li><a href="https://www.linkedin.com/company/fiduciaire-tax-manager/" target="_blank" class="fa fa-linkedin"></a></li>
		  </ul>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
		  <div class="our-footer-info">
			<h5 class="our-footer-title">Liens rapide </h5> 
			<div class="our-footer-likns">
			  <ul>
				<li><i class="fa fa-chevron-right"></i> <a href="imposition-des-particuliers.php">Imposition des particuliers</a></i>
			  <li><i class="fa fa-chevron-right"></i> <a href="creation-d-entreprise.php" target="_blank" >Création d'entreprise</a></i>
			<li><i class="fa fa-chevron-right"></i> <a href="comptabilite.php"  target="_blank">Comptabilité et gestion des salaires</a></i>
		  <li><i class="fa fa-chevron-right"></i> <a href="decompte-tva.php" target="_blank" >Décompte TVA</a></i>
		<li><i class="fa fa-chevron-right"></i> <a href="declaration-d-impot-des-personnes-morales.php"  target="_blank">Déclaration d'impôt des personnes morales</a></i>
	</ul>
  </div>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
  <div class="our-footer-info">
	<h5 class="our-footer-title">Nous contacter </h5> 
	<div class="our-footer-contact">
	  <ul>
		<li><i class="fa fa-phone  contact"></i> <a href="tel:+41 21 552 02 22">+41 21 552 02 22</a></li>
		<li><i class="fa fa-envelope   contact"></i> <a href="mailto:info@taxmanager.ch">info@taxmanager.ch</a></li>
		<li><i class="fa fa-globe  contact"></i>
		  <span>Avenue de Tivoli 25
			<span style="margin: 0 28px; display:block">1007 Lausanne</span>
		  </span></li>
	  </ul>
	</div>
  </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
  <div class="our-footer-info">
	<h5 class="our-footer-title">Newsletter </h5> 
	<span class="our-footer-subtitle">Fiduciaire Tax Manager</span>
	<div class="our-footer-contact">
	  <form action="./model/frenchsubmit.php" id="n_letter_1" method="post" class="newsletter-form">
		<input type="text" class="form-control" name="n_email" id="n_email" placeholder="Type your email">
		<input type="submit" value="Submit">
		<span id="sms"></span>
	  </form>
	</div>
  </div>
</div>
</div>
</div>
</div>


<!-- End main Footer -->


<div class="tax-copyright">
  <div class="container">
	<div class="row">
	  <div class="col-md-12" >
		<p style="padding: 20px 0 20px"><i class="fa fa-copyright"></i> 2020, Tous les droits sont réservés - Développé par <a href="https://inomad.ch/" target="_blank">Inomad</a></p>
	  </div>
	</div>
  </div>
</div>

</footer>
<!--// Footer \\-->

<div class="clearfix"></div>
</div>
<!--// Main Wrapper \\-->

<!-- jQuery (necessary for JavaScript plugins)

-->
<script src="script/jquery.validate_min.js"></script>
<script src="https://kit.fontawesome.com/bf6205eb78.js"></script>
<!-- <script class="script" type="text/javascript" data-src="script/additional-methods.min.js"></script>
<script class="script" type="text/javascript" data-src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> -->
<script type="text/javascript" src="script/bootstrap.min.js"></script>
<script type="text/javascript" src="script/slick.slider.min.js"></script>
<!-- <script type="text/javascript" src="script/jquery.nicescroll.min.js"></script> -->
<script type="text/javascript" class="loading" data-src="script/main.js"></script>

<script>
	  $(window).on('load', function() {
	  var imgEl = document.getElementsByClassName('loading');
	  for (var i=0; i<imgEl.length; i++) {
	  if(imgEl[i].getAttribute('data-src')) {
	imgEl[i].setAttribute('src',imgEl[i].getAttribute('data-src'));
	imgEl[i].removeAttribute('data-src');
  }
									 }
									 });
  $(window).on('load', function() {
	setTimeout(function(){
	  $("#video").append("<source src='images/fiduciaire-lausanne-geneve.mp4' type='video/mp4'><source src='video.ogg' type='video/ogg'><source src='video.webm' type='video/webm'>");
	}, 2000);
  });
</script>
</body>
</html>