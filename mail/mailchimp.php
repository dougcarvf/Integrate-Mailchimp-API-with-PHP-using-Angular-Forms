<?php
session_start();
    $email = $_POST['subscriber_email'];
    if(!empty($email) && !filter_var($email, FILTER_VALIDATE_EMAIL) === false){
        // MailChimp API credentials
        $apiKey = 'your api key';
        $listID = 'your list id';
        
        // MailChimp API URL
        $memberID = md5(strtolower($email));
        $dataCenter = substr($apiKey,strpos($apiKey,'-')+1);
        $url = 'https://' . $dataCenter . '.api.mailchimp.com/3.0/lists/' . $listID . '/members/' . $memberID;
        
        // member information
        $dmail = array('email_address' => $email, 'status' => 'subscribed');
        $json = json_encode($dmail);
        
        // send a HTTP POST request with curl
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_USERPWD, 'user:' . $apiKey);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        $result = curl_exec($ch);
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);
        
        // store the status message based on response code
     //   if ($httpCode == 200) {
      //      $_SESSION['msg'] = '<p style="color: #34A853">You have successfully subscribed to CodexWorld.</p>';
        //} else {
          //  switch ($httpCode) {
            //    case 214:
              //      $msg = 'You are already subscribed.';
                //    break;
                //default:
                  //  $msg = 'Some problem occurred, please try again.';
                   // break;
           // }
          //  $_SESSION['msg'] = '<p style="color: #EA4335">'.$msg.'</p>';
       // }
    }//else{
      //  $_SESSION['msg'] = '<p style="color: #EA4335">Please enter valid email address.</p>';
   // }
// redirect to homepage
