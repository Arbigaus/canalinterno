<div class="container home-container">
  <div class="row justify-content-center">
		<div class="row title">
			<div class="col">
				<h2 class="text-blue">Envie sua denúncia</h2>
			</div>
		</div>
	</div>

  <div class="row justify-content-center">
		<div class="col col-lg-8">
      <form id="form/add">

      <div class="form-group">
        <div class="row justify-content-between">
          <div class="col-1"><label for="name">Nome:</label></div>
          <div class="text-blue"><small class="col-1 text-blue">Opcional</small></div>
        </div>
        <input type="text" class="form-control" id="name" placeholder="Nome" name="col_name" />
      </div>
      <div class="form-group">
        <div class="row justify-content-between">
          <div class="col-1"><label for="email">Email:</label></div>
          <div class="text-blue"><small class="col-1 text-blue">Opcional</small></div>
        </div>
        <input type="text" class="form-control" id="email" placeholder="E-mail" name="col_email" />
      </div>
      <div class="form-group">
        <div class="row justify-content-between">
          <div class="col-1"><label for="filial">Filial:</label></div>
          <div class="text-blue"><small class="col-1 text-blue">Opcional</small></div>
        </div>
        <select class="form-control" id="filial" name="col_filial">
          <option value="filial" selected>Filial</option>
          <option value="São José dos Pinhais">São José dos Pinhais</option>
          <option value="Cascavel">Cascavel</option>
          <option value="Ponta Grossa">Ponta Grossa</option>
          <option value="Pato Branco">Pato Branco</option>
          <option value="Guarapuava">Guarapuava</option>
          <option value="Telêmaco Borba">Telêmaco Borba</option>
          <option value="União da Vitória">União da Vitória</option>
        </select>
      </div>
      <div class="form-group">
        <div class="row justify-content-between">  
          <div class="col-1"><label for="assunto">Assunto:</label></div>
          <div class="text-red"><small class="col-1 text-red">Obrigatório</small></div>
        </div>
        <input type="text" class="form-control" id="assunto" placeholder="Nome" name="col_assunto" />
      </div>
      <div class="form-group">
        <div class="row justify-content-between">  
          <div class="col-1"><label for="msg">Mensagem:</label></div>
          <div class="text-red"><small class="col-1 text-red">Obrigatório</small></div>
        </div>
        <textarea class="form-control" id="msg" rows="3" name="col_msg"></textarea>
      </div>
      <div class="row justify-content-end">
        <div class="alert col col-10 ">
          <h4 class="alert-heading"><i class="icone btn-icon" aria-hidden="true"></i><span class="title-alert"></span></h4>
          <div class="result "></div>
        </div>
        <div class="col col-1">
          <button class="btn btn-primary" >Enviar<i class="i-send fa fa-arrow-right btn-icon" aria-hidden="true"></i></button>
        </div>
        <div class="col col-1">
          </div>
        </div>        
      </div>

      </form>
    </div>
  </div>
</div>