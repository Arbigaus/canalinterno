<?php
class formController extends Controller {

  public function __construct(){
    parent::__construct();
  }

  public function index(){
    $data = array();


    $this->loadTemplate('form/form', $data);
  }

  public function add(){
    $data = array();

    $dados_form = filter_input_array(INPUT_POST,FILTER_SANITIZE_MAGIC_QUOTES);
    $dados_form['col_date'] = date('Y-m-d H:i:s');

    if($dados_form['col_filial'] == "filial"):
      $data['return'] = $this->ajaxError("Favor selecionar a Filial");     
    elseif($dados_form['col_tipo'] == "tipo"):
      $data['return'] = $this->ajaxError("Favor selecionar o tipo de mensagem");
    elseif(empty($dados_form['col_msg'])):
       $data['return'] = $this->ajaxError("Favor preenchar a mensagem que deseja enviar");
    else:
      Form::Create($dados_form);
      if(SendMail::sendMail($dados_form)):
        $data['return'] = $this->ajaxSuccess('Solicitação enviada com sucesso, obrigado pelo contato.<br>Você será redirecionado para a página inicial. <i class="i-send fa fa-spinner fa-spin btn-icon" aria-hidden="true"></i>');
        $data['redirect'] = ["", 3200];
      else:
        $data['return'] = $this->ajaxError("Ocorreu algum erro, favor tentar novamente.");
      endif;
    endif;

    
    echo json_encode($data);
  }
}