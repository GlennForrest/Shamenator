<?
require_once('logger.php');

class LoggerTest extends PHPUnit_Framework_TestCase{
 
 /**
  * Testing whether getLog returns an array with the keys
  * type, message and ip_address
  */
  
  public function testgetLogReturnsCorrectKeys(){
    $logger = new Logger();
    $this->assertArrayHasKey('type', $logger->getLog() );
    $this->assertArrayHasKey('message', $logger->getLog() );
    $this->assertArrayHasKey('ip_address', $logger->getLog() );
  }
  
  /**
   * Testing whether lastEmailSent indicates true when an
   * email is sent.
   */
  
  public function testlastEmailSentIsSent() {
    // Access
    $logger = new Logger();
    // Act
    $logger->sendEmail();
    // Assert
    $this->assertTrue($logger->lastEmailSent);
  }
  
  
  /**
   * Tests whether getType() returns the same value
   * as setType()
   */ 
  public function testgetTypeIsEqualToSetType(){
    
    $logger = new Logger();
    $type = "error";
    $logger->setType($type);
    $this->assertStringMatchesFormat($type, $logger->getType() );
    
    
  }
  
  
}



?>