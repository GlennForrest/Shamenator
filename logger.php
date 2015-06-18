<?
require_once('authenticator.php');
require_once('database.php');

/**
 * Provides logging functionality including recording errors
 * sending error/notification emails
 * and display error/notification messages to the user.
 * 
 */

class Logger{
private $db;
private $type;
private $message;
private $ip_address;
private $user_id;

private $emailTo;
private $emailSubject;
private $emailHeaders;
public $lastEmailSent;

/**
 * 
 * 
 */
 
  public function Logger(){
  $this->emailTo = 'glennjamesforrest@gmail.com';
  $this->emailSubject = 'TEST';
  $this->emailHeaders = "MIME-Version: 1.0 \r\n Content-type: text/html; charset=iso-8859-1 \r\n";
  $this->lastEmailSent = false;
  }
  
  /**
   * Setter method for a log entry
   */ 
  
  public function setLog($type = '', $message = ''){
    try{
      $this->setType($type);
      $this->setMessage($message);
      
    }catch(Exception $e){
      echo 'Caught exception: '. $e->getMessage();
    }
  }
  
/**
 * Returns current log entry information
 */ 
  public function getLog(){
    return array(
      'type' => $this->getType(),
      'message' => $this->getMessage(),
      'ip_address' => $this->getIP()
      //'user_id' => 123131133  //$this->getUser()
      );
  }
/**
 * Saves error/notification to the database
 */
 
   public function saveLog(){
     try{
    $this->db = new DatabaseHelper();
    }catch(Exception $e){
      echo 'Caught exception: '.$e->getMessage();
    }
    
    #save log data to database
    $this->db->insert('logs', $this->getLog(), "Successfully saved to log" );
    
    
    #return or redirect user
    return;
 
  
  }
  
/**
 * Generates a notification based on log data
 * 
 */
 
  public function notification(){
    
  }
     
/**
 * A temporary message shown to the user
 * 
 */
 
 private function flashMessage(){
   
 }
 
 /**
 * Generates and sends an error/notification email
 * 
 */
 
  public function sendEmail(){
    switch($this->getType() ){
      case 'error':
        $message = $this->generateErrorEmail();  
        break;
        
      default:
        $message = "eaokdpoeakdpeaodk";//$this->generateNotificationEmail();
    }
    
    try{
      $this->lastEmailSent = mail($this->emailTo, $this->emailSubject, $message, $this->emailHeaders);
      return $this->lastEmailSent;
      }catch(Exception $e){
         setLog('error', 'Failed to send log email: '.$error->getMessage() );
         saveLog();
    }
  }
     
/**
 * Processes error data and calls sendEmail();
 * @returns string $emailContent The email to send
 */
 
  private function generateErrorEmail(){
    
  }
     
/**
 * Processes the notification and calls sendEmail();
 * @returns string $emailContent The email to send
 */
 
  private function generateNotificationEmail(){
    
  }
     
/**
 * Builds an HTML email template to send emails
 * 
 */
 
  private function generateEmailTemplate(){
    
  }
  
  /**
   * @param string $type Set error to given type
   */ 
  public function setType($type = ''){
    if(!$type)
      throw new Exception("Cannot set Error type, type not supplied");
      
    $this->type = $type;
  }
  
  public function getType(){
    return $this->type;
  }
  
  public function setMessage($message = ''){
    if(!$message)
     throw new Exception("Cannot set Error message, message not supplied");
    
    $this->message = $message;
    }
  
  public function getMessage(){
    return $this->message;
  }
  
  private function getIP(){
    return $_SERVER['REMOTE_ADDR'];
  }
  private function getUser(){}
}

?>