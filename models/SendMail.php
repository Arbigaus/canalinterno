<?php
require_once 'Library/Mailer/PHPMailer.php';
require_once 'Library/Mailer/SMTP.php';

class SendMail extends Model {
  private static $MailResult;

	public function __construct(){}

  public static function sendMail($data) {
		if($data){

      try {
			
        $mail = new PHPMailer();
        $mail->CharSet = 'utf-8';
        
        $mail->SMTPOptions = array(
          'ssl' => array(
              'verify_peer' => false,
              'verify_peer_name' => false,
              'allow_self_signed' => true
          )
        );

        $mail->Port = "587";
        $mail->SMPTSecure = "tls";

        $mail->IsSMTP();
        // $mail->SMTPDebug = 4;
        $mail->Host = gethostbyname('172.16.56.205');
        $mail->SMTPAuth	= false;

        $mail->Username = "sistema@cotrasa.com.br";
        // $mail->Password = "!*8271208Ga";

        $mail->SetFrom("sistema@cotrasa.com.br", "Sistema Cotrasa");

        $mail->AddAddress("lg-cot-operacoes@cotrasa.com.br", "TIC");
        // $mail->AddCC("gerson87@gmail.com", "Gerson");

        $mail->isHTML(true);
        
        $mail->Subject	= "Contato - Canal Interno";
        $mail->Body			.= "<b>Tipo de Mensagem:</b> ".$data['col_tipo']."<br>";
        $mail->Body			.= (!empty($data['col_name']))? "<b>Nome:</b> ". $data['col_name']."<br>" : "<b>Nome:</b> Anônimo <br>";
        $mail->Body			.= (!empty($data['col_email']))? "<b>E-mail:</b> ". $data['col_email']."<br>" : "";
        $mail->Body			.= "<b>Filal:</b> ".$data['col_filial']."<br><br>";
        $mail->Body			.= "<b>Mensagem:</b><br>";
        $mail->Body			.= $data['col_msg']."<br>";
        
        self::setMailResult($mail->send());
        return self::getMailResult();
      
      } catch(Exception $e) {
        die($e->getMessage());
      }
			
		}
  }
  
  public function setMailResult($data){
    self::$MailResult = $data;
  }

  public function getMailResult(){
    return self::$MailResult;
  }
}