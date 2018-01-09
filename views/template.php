<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv = "content-type" content = "text/html; charset=UTF-8">
    <title>Canal Interno - Cotrasa</title>
    <link href="<?= BASE; ?>/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= BASE; ?>/assets/css/font-awesome.css" rel="stylesheet">
    <link href="<?= BASE; ?>/assets/css/style.css" rel="stylesheet">

    <script src="<?= BASE; ?>/assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?= BASE; ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?= BASE; ?>/core/ajax.js"></script>
  </head>
<body>
	<!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark"> <!-- #203A65 -->
    <a class="navbar-brand" href="<?php echo BASE; ?> "><h2>Cotrasa</h2></a>
  </nav>
	<!-- End Navbar -->

	<!-- Load View -->

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

	<!-- End Load View -->

</body>

<script type="text/javascript">
  var BASE = '<?php echo BASE; ?>'+'/'; // TODO: Enviando a variável BASE para o Ajax.
</script>

</html>
