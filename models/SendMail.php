<?php

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
        $mail->SMPTSecure = "ssl";

        $mail->IsSMTP();
        // $mail->SMTPDebug = 4;
        $mail->Host = gethostbyname('172.16.56.205');
        $mail->SMTPAuth	= false;

        $mail->Username = "sistema@cotrasa.com.br";

        $mail->SetFrom("sistema@cotrasa.com.br", "Sistema Cotrasa");

        $mail->AddAddress("gerson.arbrugaus@cotrasa.com.br", "Gerson Arbrugaus");

        $mail->isHTML(true);
        
        $mail->Subject	= "Contato - Canal ".TITLE." | ".$data['col_assunto'];
        $mail->Body			.= (!empty($data['col_name']))? "<b>Nome:</b> ". $data['col_name']."<br>" : "<b>Nome:</b> Anônimo <br>";
        $mail->Body			.= (!empty($data['col_email']))? "<b>E-mail:</b> ". $data['col_email']."<br>" : "";
        $mail->Body			.= ($data['col_filial'] != 'filial')? "<b>Filal:</b> ". $data['col_filial']."<br>" : "";
        $mail->Body			.= "<b>Mensagem:</b><br>";
        $mail->Body			.= $data['col_msg']."<br>";
        
        self::setMailResult($mail->send());
        return self::getMailResult();
      
      } catch(Exception $e) {
        die($e->getMessage());
      }
			
		}
  }
  
  public static function setMailResult($data){
    self::$MailResult = $data;
  }

  public static function getMailResult(){
    return self::$MailResult;
  }
}
