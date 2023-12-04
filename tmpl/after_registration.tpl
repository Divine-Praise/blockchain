<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>{$settings.site_name}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="shortcut icon" href="styles/img/Asset1@4x-8.png" type="image/x-icon">
	<link rel="stylesheet" href="styles/css/bootstrap.min.css">
	<link rel="stylesheet" href="styles/css/owl.carousel.min.css">
	<link rel="stylesheet" href="styles/css/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="styles/css/animate.css">
	<script>
		document.write("<link rel='stylesheet' type='text/css' href='styles/css/main.css?v=" + Date.now() + "'>")
	</script>
</head>

<body data-gr-c-s-loaded="true">
	<main>
		<section id="content-form" class="wibble all-center">
			<div class="container">
				<div class="row all-center all-center flex-column">
				{literal}
					<a href="/" class="mb-1">
						<img src="styles/img/logo.png" alt="Template Rex" width="130px" >
					</a>
					{/literal}
					<div class="col-11 col-md-8 col-lg-5 form-box mb-3">
						<div class="inside d-flex flex-column">
							<h4 class="text-center center-bottom-line">Registration Completed</h4>
							<p>You are now an official member of {$settings.site_name}. <a href="?a=login">Log in now!</a>
							</p>
							<div class="status-box success p-3 mb-3 flex-column all-center">	<i class="fas fa-check-circle mb-2" style="font-size:2rem;"></i>
								<h6 class="m-0 text-center">Thank you for registering <br>with {$settings.site_name}!</h6>
							</div>
							<div class="table-row d-flex align-items-center flex-column">
								<p class="mb-0" style="color:#AEBAC7;">Already have an account? <a href="?a=login">Log in</a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	<script src="styles/js/jquery-3.4.1.min.js"></script>
	<script src="styles/js/bootstrap.bundle.min.js"></script>
	<script src="styles/js/owl.carousel.min.js"></script>
	<script src="styles/js/tilt.jquery.min.js"></script>
	<script src="styles/js/clipboard.min.js"></script>
	<script>
		$(window).scroll(function() {        var scroll = $(window).scrollTop();    if (scroll >= 50) {        $("#header-main-menu").addClass("darkHeader");    } else {        $("#header-main-menu").removeClass("darkHeader");    }});
	</script>
	<iframe data-product="web_widget" title="No content" tabindex="-1" aria-hidden="true" src="about:blank" style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"></iframe>
	
</body>

</html>