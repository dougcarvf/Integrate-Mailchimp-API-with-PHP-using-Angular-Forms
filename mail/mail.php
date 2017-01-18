<?php
//Variáveis
$nome = $_POST['Name'];
$telefone = $_POST['contact_no'];
$email = $_POST['email'];
$mensagem = $_POST['message'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');
// Compo E-mail
  $arquivo = "
 
    <html>
        <div style='font-family:HelveticaNeue-Light,Arial,sans-serif;background-color:#eeeeee'>
<table align='center' width='100%' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
   <tbody>
      <tr>
         <td>
            <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
               <tbody>
                  <tr>
                     <td>
                        <table width='690' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                           <tbody>
                              <tr>
                                 <td colspan='3' height='80' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='padding:0;margin:0;font-size:0;line-height:0'>
                                    <table width='690' align='center' border='0' cellspacing='0' cellpadding='0'>
                                       <tbody>
                                          <td width='30'></td>
                                          <td align='left' valign='middle' style='padding:0;margin:0;font-size:0;line-height:0'><a href='http://www.pointsistemas.com.br/' target='_blank'><img src='https://i.imgbox.com/gGiYvYjU.png' alt='pointsistemas' ></a></td>
                                          <td width='30'></td>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                              <tr>
                                 <td colspan='3' align='center'>
                                    <table width='630' align='center' border='0' cellspacing='0' cellpadding='0'>
                                       <tbody>
                                          <tr>
                                             <td align='center'>
                                                <h1 style='font-family:HelveticaNeue-Light,arial,sans-serif;font-size:38px;color:#404040;line-height:48px;font-weight:bold;margin:0;padding:0'>Email recebido do site MyTask</h1>
                                             </td>
                                             <td width='25'></td>
                                          </tr>
                                          <tr>
                                             <td colspan='3' height='40'></td>
                                          </tr>
                                          <tr>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                              </tr>
                              <tr bgcolor='#ffffff'>
                                 <td width='30' bgcolor='#eeeeee'></td>
                                 <td>
                                    <table width='570' align='center' border='0' cellspacing='0' cellpadding='0'>
                                       <tbody>
                                          <tr>
                                             <td colspan='4'>&nbsp;</td>
                                          </tr>
                                          <tr>
                                             <td width='120' align='right' valign='top'><img src='https://i.imgbox.com/WtrKN5By.png' alt='tool' width='120' ></td>
                                             <td width='30'></td>
                                             <td align='left' valign='middle'>
                                                <h3 style='color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0'>Nome: $nome</h3>
                                                <h3 style='color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0'>Telefone: $telefone</h3>
                                                <h3 style='color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0'>Email: $email</h3>
                                                <h3 style='color:#404040;font-size:18px;line-height:24px;font-weight:bold;padding:0;margin:0'>Mensagem: $mensagem</h3>
                                                <div style='line-height:5px;padding:0;margin:0'>&nbsp;</div>
                                                <div style='line-height:10px;padding:0;margin:0'>&nbsp;</div>
                                             </td>
                                             <td width='30'></td>
                                          </tr>
                                          <tr>
                                             <td colspan='5' height='40' style='padding:0;margin:0;font-size:0;line-height:0'></td>
                                          </tr>
                                       </tbody>
                                    </table>
                                    <table width='570' align='center' border='0' cellspacing='0' cellpadding='0'>
                                       <tbody>
                                          <tr>
                                             <td>
                                                <h2 style='color:#404040;font-size:22px;font-weight:bold;line-height:26px;padding:0;margin:0'>&nbsp;</h2>
                                                <div style='color:#404040;font-size:16px;line-height:22px;font-weight:lighter;padding:0;margin:0'>
                                                   Este e-mail foi enviado em <b>$data_envio</b> às <b>$hora_envio</b>
                                             </td>
                                          </tr>
                                          <tr>
                                          </tr><tr><td>&nbsp;</td>
                                          </tr>
                                       </tbody>
                                    </table>
                                 </td>
                                 <td width='30' bgcolor='#eeeeee'></td>
                              </tr>
                           </tbody>
                        </table>
                        <table align='center' width='750px' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee' style='width:750px!important'>
                        <tbody>
                        <tr>
                        <td>
                        <table width='630' align='center' border='0' cellspacing='0' cellpadding='0' bgcolor='#eeeeee'>
                        <tbody>
                        <tr><td colspan='2' height='30'></td></tr>
                        <tr>
                        <td width='360' valign='top'>
                        <div style='color:#a3a3a3;font-size:12px;line-height:12px;padding:0;margin:0'>&copy; 2017 PointSitemas. Todos os direitos reservados.</div>
                        <div style='line-height:5px;padding:0;margin:0'>&nbsp;</div>
                        </td>
                        </tr>
                        <tr><td colspan='2' height='5'></td></tr>
                        </tbody>
                        </table>
                        </td>
                        </tr>
                        </tbody>
                        </table>
                     </td>
                  </tr>
               </tbody>
            </table>
         </td>
      </tr>
   </tbody>
</table>
</div>


    </html>
  ";
  //enviar
  
  // emails para quem será enviado o formulário
  $emailenviar = "douglas.carvalho@pointsistemas.com.br";
  $destino = $emailenviar;
  $assunto = "Contato pelo Site";

  // É necessário indicar que o formato do e-mail é html
  $headers  = 'MIME-Version: 1.0' . "\r\n";
      $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
      $headers .= 'From: $nome <$email>';
  //$headers .= "Bcc: $EmailPadrao\r\n";
  
  $enviaremail = mail($destino, $assunto, $arquivo, $headers);
  if($enviaremail){
  $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
  echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
  } else {
  $mgm = "ERRO AO ENVIAR E-MAIL!";
  echo "";
  }
?>