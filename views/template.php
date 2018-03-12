<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv = "content-type" content = "text/html; charset=UTF-8">
    <title>Canal <?php echo TITLE; ?> - Cotrasa</title>
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
    <a class="navbar-brand" href="<?php echo BASE; ?> "><img src="<?php echo BASE; ?>/assets/images/logo.png" alt="Cotrasa"></a>
  </nav>
	<!-- End Navbar -->

	<!-- Load View -->

	<?php $this->loadViewInTemplate($viewName, $viewData); ?>

	<!-- End Load View -->
  <!-- Footer -->
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="copyright">
            © 2018, Cotrasa | Todos os direitos reservados 
            <!-- Desenvolvido por Midsen Tecnologia | Gerson Arbigaus -->
          </div>
        </div>
        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
          <div class="design">
             <a target="_blank" href="http://www.cotrasa.com.br">Cotrasa </a> |  <a target="_blank" href="http://www.cotrasa.com.br">Veículos e Serviços LTDA</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Footer -->

</body>


<script type="text/javascript">
  var BASE = '<?php echo BASE; ?>'+'/'; // TODO: Enviando a variável BASE para o Ajax.
</script>

</html>
