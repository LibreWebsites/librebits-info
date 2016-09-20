<!DOCTYPE html>
<html lang="en"><head>

    <!--- here goes meta.php -->
    <?php include "components/php/meta.php"; ?>
    
    <title>Librebits | Pagos/Donaciones</title>

    <!-- Bootstrap core CSS -->
    <link href="Carousel%20Template%20for%20Bootstrap_files/bootstrap.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="Carousel%20Template%20for%20Bootstrap_files/ie-emulation-modes-warning.js">
    </script>
    
    <style>.carbonad,
    #content > #right > .dose > .dosesingle,
    #content > #center > .dose > .dosesingle,
    #carbonads-container
    {display:none !important;}

    body {
    padding-top: 100px;
    }
    .starter-template {
    padding: 40px 15px;
    text-align: center;
    }


    hr {
    display: block;
    margin-before: 0.5em;
    margin-after: 0.5em;
    margin-start: auto;
    margin-end: auto;
<!-- acá fijamos el estilo de la línea, en sus bordes -->
    border-style: double;
    border-width: 1px; }
    

    </style>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="Carousel%20Template%20for%20Bootstrap_files/carousel.css" rel="stylesheet">
 </head>

<!-- NAVBAR
================================================== -->
  <body>


    <!-- { navbar-->
    <?php include "components/php/navbar.php"; ?>



<!-- PayPal button  Container 
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->


  <div class="container">

      <div class="row">
	<div class="col-sm-9">
	  <h3> Pago Online a Librebits.info via PayPal</h3>
	  <div class="row">
	    
	    <div class="col-xs-8 col-sm-6">
	      <p> €nergizanos con tu <i>donación</i> via PayPal o tarjeta de crédito de forma sencilla, rápida, eficaz y segura: </p>
	    </div>
	    <div class="col-xs-4 col-sm-6">
	      <div class="row text-center">
		<hr style="noshade size="5" text-align:center; width: 50%;">
		      <!-- aqui viene el botón de pago PayPal -->

		      <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="hosted_button_id" value="W8UQPFZBSB5WU">
			<input type="image" src="https://www.paypalobjects.com/en_US/ES/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form>
			 
<!--		      <p><a href="https://paypal.com"> <img alt="PayPal logo" src="assets/images/PayPal.svg.png" ></a></p> -->
		    </div>
	    </div>
	  </div>

          <div class="row">
	    <hr  style="text-align:center; width: 50%;"hr>
        
        <div class="col-xs-8 col-sm-6">
          <p> Realiza un pago via PayPal o tarjeta de crédito de forma sencilla, rápida, eficaz y segura: </p>
        </div>
        <div class="col-xs-4 col-sm-6">
                <div class="row text-center">
              <!-- aqui viene el botón de pago PayPal -->
<form name="_xclick" action="https://www.sandbox.paypal.com/es/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_xclick">
<input type="hidden" name="business" value="jordilopezamat@gmail.com">
<input type="hidden" name="cancel_return" value="https://librebits.info/pay-cancel.php">
<input type="hidden" name="return" value="https://librebits.info/pay-ok.php">
<input type="hidden" name="cbt" value="Volver a Librebits">
<input type="hidden" name="image_url" value="https://librebits.info/assets/images/Librebits_v3_100x.png">
<input type="hidden" name="no_shipping" value="1">
<input type="hidden" name="no_note" value="1">
<input type="hidden" name="currency_code" value="EUR">
<input type="hidden" name="item_name" value="Pago acordado">
<div>
<label for="amount">Importe del pago</label>  
<input type="number" name="amount" value="0" min="0">
</div>
<br>
<div>
<input type="image" src="https://www.paypalobjects.com/es_ES/ES/i/btn/btn_paynow_LG.gif" border="0" name="submit" alt="Realice pagos con PayPal: es rápido, gratis y seguro">
</div>

</form>

            </div>
        </div>
      </div>
	  
	</div>
	</div>

  </div>


        </div><!-- /.container -->

    

  
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Carousel%20Template%20for%20Bootstrap_files/jquery.js"></script>
    <script src="Carousel%20Template%20for%20Bootstrap_files/bootstrap.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="Carousel%20Template%20for%20Bootstrap_files/holder.html"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Carousel%20Template%20for%20Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  

</body></html>
