<div class="container home-container">
  <div class="row justify-content-center">
		<div class="row title">
			<div class="col">
				<h2>Formulário</h2>
			</div>
		</div>
	</div>

  <div class="row justify-content-center">
		<div class="col col-lg-8">
      <form id="form/add">

      <div class="form-group">
        <label for="name">Nome:</label>
        <input type="text" class="form-control" id="name" placeholder="Nome" name="col_name" />
      </div>
      <div class="form-group">
        <label for="email">E-mail:</label>
        <input type="text" class="form-control" id="email" placeholder="E-mail" name="col_email" />
      </div>
      <div class="form-group">
        <label for="filial">Filial:</label>
        <select class="form-control" id="filial" name="col_filial">
          <option value="0" selected>Filial</option>
          <option value="1">São José dos Pinhais</option>
          <option value="2">Cascavel</option>
          <option value="3">Ponta Grossa</option>
          <option value="4">Pato Branco</option>
          <option value="5">Guarapuava</option>
          <option value="6">Telêmaco Borba</option>
          <option value="7">União da Vitória</option>
        </select>
      </div>
      <div class="form-group">
        <label for="tipo">Tipo:</label>
        <select class="form-control" id="tipo" name="col_tipo" />
          <option value="0" selected>Tipo</option>
          <option value="1">Sugestão</option>
          <option value="2">Reclamação</option>
          <option value="2">Elogios</option>
        </select>
      </div>
      <div class="form-group">
        <label for="msg">Mensagem</label>
        <textarea class="form-control" id="msg" rows="3" name="col_msg"></textarea>
      </div>

      <div class="alert ">
					    <h4 class="alert-heading"><i class="icone btn-icon" aria-hidden="true"></i><span class="title-alert"></span></h4>
					    <div class="result "></div>
					  </div>

      <div class="row justify-content-end">
        <div class="col col-1">
          <button class="btn btn-primary" >Enviar<i class="i-send fa fa-arrow-right btn-icon" aria-hidden="true"></i></button>
        </div>
        <div class="col col-1">
        </div>
      </div>
      
      </form>
    </div>
  </div>
</div>