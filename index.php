<!DOCTYPE html>
<html lang="da" prefix="og: http://ogp.me/ns#" data-bs-theme="dark">
	<head>
		<!-- Required meta tags -->
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
		<!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">-->
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<link rel="stylesheet" href="css/custom.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
		<title> S&aring;dan beregner du antallet af javscripts og CSS-filer p&aring; din hjemmeside! </title>
		<!--<script src='https://www.google.com/recaptcha/api.js'></script>-->
		<!-- open graph -->
		<meta property="og:url"                content="https://github.org" />
		<meta property="og:type"               content="article" />
		<meta property="og:title"              content="S&aring;dan beregner du antallet af javscripts og CSS-filer p&aring; din hjemmeside!" />
		<meta property="og:description"        content="Hvor mange filer indl&aelig;ser en hjemmeside egentlig? Javascripts og CSS-filer er med til at sl&oslash;ve hastigheden p&aring; din hjemmeside. Hvor mange forskellige scripts og grafiske filer bruger din hjemmeside? Tjek dem her!" />
	<!--	<meta property="og:image" content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />-->

		<meta name="robots" content="index,follow">
		<meta name="Description" content="En hjemmeside bruger ofte mange eksterne filer - js og CSS filer. Indtast en hjemmeside addresse og find ud af det">
	</head>

	<body>
		<div class="container" >
			<nav class="navbar navbar-expand-lg bg-body-tertiary">
				<div class="container-fluid">
					<button  type="button" class="btn btn-primary position-relative" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Hvad er dette?
						<span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
							<span class="visually-hidden">New alerts</span>
						</span>
					</button>

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav me-auto mb-2 mb-lg-0">
							<li class="nav-item">
								<a class="nav-link active" aria-current="page" href="#">Forside</a>
							</li>
						</ul>
						<form class="d-flex" role="search">
							<a class="navbar-brand" href="#">JS / CSS regnemaskine</a>
							<a href="https://github.org" target="_SELF">
								<button class="btn btn-outline-success" type="button">Bes&oslash;g Github
								</button>
							</a>
						</form>
					</div>
				</div>
			</nav>
			<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel" data-bs-theme="dark">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasTopLabel">WPFinder</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body">
					<div class="jumbotron">
						<h5 class="display-3">JS og CSS fil beregner</h5>
						<p class="lead">
							Hvor mange filer indl&aelig;ser en hjemmeside egentlig? Javascripts og CSS-filer er med til at sl&oslash;ve hastigheden p&aring; din hjemmeside. Hvor mange forskellige scripts og grafiske filer bruger din hjemmeside? S&aelig;t tal p&aring; html-filerne!</a>
						</p>
					</div>
				</div>
			</div>		

			<div class="row ">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-body" id="result">
							<form id="submitValJSCheck">
								<div class="form-group">
									<label for="inputJSURL">Hjemmeside Addressen</label>
									Skriv en URL: <input type="text" class="form-control" id="inputJSURL" aria-describedby="wwwHelp" placeholder="Indtast Web-addresse">
									<small id="wwwHelp" class="form-text text-muted">Du skal indtaste en addresse . fx dinhjemmeside.dk - f&oslash;r vi kan beregne den</small>
									<input type="submit" id="btnSearchScript" class="btn btn-primary" value="Spor kodeforbrug"
										data-bs-toggle="popover" data-bs-placement="left"
										data-bs-custom-class="custom-popover"
										data-bs-title="Custom popover"
										data-bs-content="This popover is themed via CSS variables."
									/>
									<!--<div class="g-recaptcha" data-sitekey="6LfEbyUTAAAAALVaFIct9spO3aHZn-Cfc8J9imk7"></div>-->
								</div>
							</form>
							
							<!--<div id="txtHint"></div>-->
						</div>
					</div>
				</div>
			</div>

			<!--<button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom" aria-controls="offcanvasBottom">Toggle bottom offcanvas</button>-->

			<div class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
				<div class="offcanvas-header">
					<h5 class="offcanvas-title" id="offcanvasBottomLabel">...</h5>
					<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
				</div>
				<div class="offcanvas-body small" id="offcanvas-body">
					<div id="txtHint"></div>
				</div>
			</div>

			<!-- Modal -->
			<div class="modal fade  modal-xl" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
				<div class="modal-header">
					<h1 class="modal-title fs-5" id="staticBackdropLabel">Modal title</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
				<div id="txtHint"></div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				</div>
				</div>
			</div>
			</div>



		</div>

		<footer class="container-fluid text-center">
			<a href="#myPage" title="To Top">
				<span class="glyphicon glyphicon-chevron-up"></span>
			</a>
			<p>WP Generator<a href="" title="">  (C) 2017-2024</a></p>
		</footer>

		<script
			  src="https://code.jquery.com/jquery-3.7.1.min.js"
			  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
			  crossorigin="anonymous">
		</script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
		<!--<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>-->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
		<!-- Option 1: Bootstrap Bundle with Popper -->
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script> 
		
		<script src="custom.js" ></script>

	</body>
</html>
