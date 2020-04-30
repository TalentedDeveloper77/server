<!DOCTYPE html>
<html class="ng-csp" data-placeholder-focus="false" lang="<?php p($_['language']); ?>" data-locale="<?php p($_['locale']); ?>" >
	<head
<?php if ($_['user_uid']) { ?>
	data-user="<?php p($_['user_uid']); ?>" data-user-displayname="<?php p($_['user_displayname']); ?>"
<?php } ?>
 data-requesttoken="<?php p($_['requesttoken']); ?>">
		<meta charset="utf-8">
		<title>
		<?php p($theme->getTitle()); ?>
		</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<?php if ($theme->getiTunesAppId() !== '') { ?>
		<meta name="apple-itunes-app" content="app-id=<?php p($theme->getiTunesAppId()); ?>">
		<?php } ?>
		<meta name="theme-color" content="<?php p($theme->getColorPrimary()); ?>">
		<link rel="icon" href="<?php print_unescaped(image_path('', 'favicon.ico')); /* IE11+ supports png */ ?>">
		<link rel="apple-touch-icon" href="<?php print_unescaped(image_path('', 'favicon-touch.png')); ?>">
		<link rel="mask-icon" sizes="any" href="<?php print_unescaped(image_path('', 'favicon-mask.svg')); ?>" color="<?php p($theme->getColorPrimary()); ?>">
		<link rel="manifest" href="<?php print_unescaped(image_path('', 'manifest.json')); ?>">

		
		<?php emit_script_loading_tags($_); ?>
		<?php print_unescaped($_['headers']); ?>
		<!-- <?php emit_css_loading_tags($_); ?> -->
	</head>

	<?php if(strpos($_SERVER['REQUEST_URI'], "regist") !== false){ ?>

		<link rel="stylesheet" type="text/css" href="/nextcloud/core/custom/css/mystyle.css">
		<link rel="stylesheet" type="text/css" href="/nextcloud/core/custom/css/bootstrap-4.4.1-dist/css/bootstrap.min.css">

	<body id="<?php p($_['bodyid']);?>" style=" margin:0 auto;background-position: 0 0;background-repeat:no-repeat; background-size:100%, contain; background: #f1f1f2;">
		<?php include 'layout.noscript.warning.php'; ?>
		<?php foreach ($_['initialStates'] as $app => $initialState) { ?>
			<input type="hidden" id="initial-state-<?php p($app); ?>" value="<?php p(base64_encode($initialState)); ?>">
		<?php }?>


		<div class="container-fluid">
			<div class="row" style=" margin: 15px 80px;">
				<div class="col-md-6 col-sm-6">
					<div class="col-md-3">
					<?php if(\OC::$server->getConfig()->getSystemValue('installed', false)
									&& \OC::$server->getConfig()->getAppValue('theming', 'logoMime', false)): ?>
						<img src="<?php p($theme->getLogo()); ?>" style="width: 77px;" />
					<?php endif; ?>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<ul class="header_ul">
						<li class="header_li"><a href="#">INICIO</a></li>
						<li class="header_li"><a href="#">ALTA</a></li>
						<li class="header_li"><a href="<?php echo \OC::$WEBROOT . '/'.'index.php/login' ?>">INICIAR SESIÓN</a></li>
					</ul>
				</div>
			</div>
			<div class="row" style="background-image: url('/nextcloud/core/custom/img/S.png'); background-size: 100%;" >
				<div class="col-md-8 offset-md-2" style="text-align: center;font-size: 20px; margin-top:300px;">
				<p style="font-size: 45px; font-weight: bold;">SIMPLIFIQUE LA GESTIÓN DE SU NEGOCIO</p>

				<p style="">Tu herramienta para recopilar, gestionar y difundir datos de modelo y</p>
				<p>documentos de proyecto entre equipos multidisciplinares en un proceso</p>
				<p>gestionado, independientemente de su tamaño.</p >
				<p style="font-size: 22px;">AUDITABLE, TRANSPARENTE Y CONTROLABLE.</p>
				<img src="/nextcloud/core/custom/img/Color-02.png">
			</div>
			</div>
		</div>
		

		<div class="row" style="background: #f1f1f2; padding:70px 150px;">
			<div class="col-md-7">
				<main style=" background: #231f20;color: white;">
					<?php print_unescaped($_['content']); ?>
				</main>
			</div>
			<div class="col-md-5" style="position: relative;">
				<div style="/*padding-bottom: 71px;*/ font-size: 20px; color: #231f20;">
					<p style="font-size: 20px; color: #231f20;line-height: 36px;">Contacte con nosotros sobre cualquier cosa relacionada con nuestra empresa o servicios.</p>
					<p style="font-size: 20px; color: #231f20; line-height: 36px;">Haremos lo posible por responderle a la mayor brevedad.</p>
				</div>
				<div style="position: absolute;bottom:0;">
					<button style="background: #231f20; border:none; padding: 10px 20px; border-radius: 5px; color:#fad116;font-size: 20px;font-weight: bold;">Iinfo@cde360.io</button>
				</div>
			</div>
		</div>
		<div style="background: #fad116; width: 100%; padding: 10px 0; font-size: 20px; float: left;margin-top: 80px; text-align: center;">		
			Terms and conditions Privacy Policy © Copyright 2020 cde360.io All rights reserved.
		</div>
	





	</body>

<?php }else { ?>

	<?php emit_css_loading_tags($_); ?>

<body id="<?php p($_['bodyid']);?>" style="">
		<?php include 'layout.noscript.warning.php'; ?>
		<?php foreach ($_['initialStates'] as $app => $initialState) { ?>
			<input type="hidden" id="initial-state-<?php p($app); ?>" value="<?php p(base64_encode($initialState)); ?>">
		<?php }?>

		<div class="wrapper">
			<div class="v-align" >
				<?php if ($_['bodyid'] === 'body-login' ): ?>
					<header role="banner">
						<div id="header">
							<div class="logo">
								
								<?php if(\OC::$server->getConfig()->getSystemValue('installed', false)
									&& \OC::$server->getConfig()->getAppValue('theming', 'logoMime', false)): ?>
									<img src="<?php p($theme->getLogo()); ?>" />
								<?php endif; ?>
							</div>
						</div>
					</header>
				<?php endif; ?>
				<!-- <?php if(strpos($_SERVER['REQUEST_URI'], "regist") !== false){

    				echo "";

				} else{?> -->
					<!-- <img src="/nextcloud/core/custom/img/logo.png" style="width: 328px; margin-bottom: -6px;"> -->
				<!-- <?php } ?> -->
				<main style=" background: #fad116; width: 328px; margin:auto;">
					<?php print_unescaped($_['content']); ?>
				</main>
			</div>
		</div>

		<footer role="contentinfo">
			
			<!-- <p class="info">
				<?php print_unescaped($theme->getLongFooter()); ?>
			</p> -->
		</footer>
		<div style="background: #fad116; width: 100%; padding: 10px 0; font-size: 20px;">
				
			<?php	p($l->t("Terms and conditions Privacy Policy © Copyright 2020 cde360.io All rights reserved.")); ?>
		</div>
	</body>
<?php } ?>


<style>
	body{
		color:#231f20;
		font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen-Sans, Ubuntu, Cantarell, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
	}
	ul.header_ul {
  list-style-type: none;
  margin: 0;
  padding: 10px 0px 0px 0px;
  overflow: hidden;
  font-size: 24px;
  font-weight: bold;
  float: right;
}

li.header_li, li.header_li a {
  float: left;
}

li.header_li{
  display: block;
  color: black;
  text-align: center;
  /*padding: 16px;*/
  text-decoration: none;
}

li.header_li a{
  display: block;
  color: black;
  text-align: center;
  padding: 16px;
  text-decoration: none;
}

li.header_li:hover, li.header_li a:hover {
  background-color: #231f20;
  color:#fad116;
  border-radius: 4px;
}

@font-face {
   font-family: myFirstFont;
   src: url(../../core/custom/font/Gotham/Gotham-Book.otf);
}

.sss {
   font-family: myFirstFont;
}


</style>

</html>
