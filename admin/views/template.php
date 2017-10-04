<!DOCTYPE html>
<html>
<head>
        <meta http-equiv = "content-type" content = "text/html; charset=UTF-8">
        <title>MVC</title>
        <link href="<?= BASEADMIN; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?= BASEADMIN; ?>/assets/css/font-awesome.css" rel="stylesheet">

        <script src="<?= BASEADMIN; ?>/assets/js/jquery.js"></script>
        <script src="<?= BASEADMIN; ?>/assets/js/bootstrap.min.js"></script>
				<script src="<?= BASEADMIN; ?>/core/ajax.js"></script>
    </head>
<body>
	<!-- Navbar -->
	<nav class="navbar navbar-default navbar-inverse">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="<?php echo BASEADMIN; ?>">MVC Admin</a>
			</div>

			<ul class="nav navbar-nav navbar-left">
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-user"> Clients</span> <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?php echo BASEADMIN ?>/clients"><span class="fa fa-users"></span> View Clients</a></li>
						<li><a href="<?php echo BASEADMIN ?>/clients/add"><span class="fa fa-plus"></span> Add Client</a></li>
					</ul>
				</li>
        <li><a href="<?php echo BASEADMIN ?>/cidades"><span class="fa fa-building-o"> Cidades</span></a></li>

			</ul>


			<ul class="nav navbar-nav navbar-right">
				<li class="nav-item"><a href="login.html" class="nav-link logout">Logout <i class="fa fa-sign-out"></i></a></li>
			</ul>

			<form class="navbar-form navbar-right" method="POST">
				<span class="btn btn-default count_client"><?php echo $count_client; ?></span>
				<div class="form-group">
					<input type="text" name="client_name" class="form-control" placeholder="Search">
				</div>


			</form>

		</div>
	</nav>
	<!-- End Navbar -->

	<!-- Load View -->

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

	<!-- End Load View -->

</body>

</html>
