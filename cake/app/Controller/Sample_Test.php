<?php
const SAMPLE_TEXT = 'Running the test.';
 
 function callback($text)
 {
	     return $text.' And call the callback().';
 }
  
	class Sample_Test extends PHPUnit_Framework_TestCase {
		 
		     public function test_returnValue()
				     {
							         $target = new TargetClass();
											  
												        $expected_value = 'This is expected value';
																 
																         $mock = $this->getMock('StubClass', array('dosomething'));
																				  
																					        $mock
																									            ->expects($this->any())
																															            ->method('dosomething')
																																					            ->with($this->equalTo(SAMPLE_TEXT))
																																											            ->will($this->returnValue($expected_value));
																																																	 
																																																	         $this->assertEquals($expected_value, $target->call_dosomething($mock));
																																																					     }
																																																							  
																																																								    public function test_returnArgument()
																																																										    {
																																																													        $target = new TargetClass();
																																																																	 
																																																																	         $mock = $this->getMock('StubClass', array('dosomething'));
																																																																					  
																																																																						        $mock
																																																																										            ->expects($this->any())
																																																																																            ->method('dosomething')
																																																																																						            ->with($this->equalTo(SAMPLE_TEXT))
																																																																																												            ->will($this->returnArgument(0));
																																																																																																		 
																																																																																																		         // SAMPLE_TEXT = 'Running the test.'
																																																																																																						  
																																																																																																							        $this->assertEquals(SAMPLE_TEXT, $target->call_dosomething($mock));
																																																																																																											    }
																																																																																																													 
																																																																																																													     public function test_returnCallback()
																																																																																																															     {
																																																																																																																		         $target = new TargetClass();
																																																																																																																						  
																																																																																																																							        $mock = $this->getMock('StubClass', array('dosomething'));
																																																																																																																											 
																																																																																																																											         $mock
																																																																																																																															             ->expects($this->any())
																																																																																																																																					             ->method('dosomething')
																																																																																																																																											             ->with($this->equalTo(SAMPLE_TEXT))
																																																																																																																																																	             ->will($this->returnCallback('callback'));
																																																																																																																																																							  
																																																																																																																																																								        // SAMPLE_TEXT = 'Running the test.'
																																																																																																																																																												 
																																																																																																																																																												         $this->assertEquals(callback(SAMPLE_TEXT), $target->call_dosomething($mock));
																																																																																																																																																																     }
																																																																																																																																																																		  
																																																																																																																																																																			    public function test_throwException()
																																																																																																																																																																					    {
																																																																																																																																																																								        $target = new TargetClass();
																																																																																																																																																																												 
																																																																																																																																																																												         $mock = $this->getMock('StubClass', array('dosomething'));
																																																																																																																																																																																  
																																																																																																																																																																																	        $mock
																																																																																																																																																																																					            ->expects($this->any())
																																																																																																																																																																																											            ->method('dosomething')
																																																																																																																																																																																																	            ->with($this->equalTo(SAMPLE_TEXT))
																																																																																																																																																																																																							            ->will($this->throwException(new Exception('Test')));
																																																																																																																																																																																																													 
																																																																																																																																																																																																													         try
																																																																																																																																																																																																																	         {
																																																																																																																																																																																																																						             $target->call_dosomething($mock);
																																																																																																																																																																																																																												             $this->fail('Exception didn\'t thrown.');
																																																																																																																																																																																																																																		         }
																																																																																																																																																																																																																																						         catch (Exception $e)
																																																																																																																																																																																																																																										         {
																																																																																																																																																																																																																																															             // Test is ok.
																																																																																																																																																																																																																																																					         }
																																																																																																																																																																																																																																																									     }
																																																																																																																																																																																																																																																											  
																																																																																																																																																																																																																																																												    public function test_onConsecutiveCalls()
																																																																																																																																																																																																																																																														    {
																																																																																																																																																																																																																																																																	        $target = new TargetClass();
																																																																																																																																																																																																																																																																					 
																																																																																																																																																																																																																																																																					         $expected_value = 'This is expected value';
																																																																																																																																																																																																																																																																									  
																																																																																																																																																																																																																																																																										        $mock = $this->getMock('StubClass', array('dosomething'));
																																																																																																																																																																																																																																																																														 
																																																																																																																																																																																																																																																																														         $mock
																																																																																																																																																																																																																																																																																		             ->expects($this->any())
																																																																																																																																																																																																																																																																																								             ->method('dosomething')
																																																																																																																																																																																																																																																																																														             ->with($this->equalTo(SAMPLE_TEXT))
																																																																																																																																																																																																																																																																																																				             ->will($this->onConsecutiveCalls(
																																																																																																																																																																																																																																																																																																										                 $expected_value,
																																																																																																																																																																																																																																																																																																																		                 $this->throwException(new Exception('Test'))
																																																																																																																																																																																																																																																																																																																										             ));
																																																																																																																																																																																																																																																																																																										  
																																																																																																																																																																																																																																																																																																											        try
																																																																																																																																																																																																																																																																																																															        {
																																																																																																																																																																																																																																																																																																																				            $this->assertEquals($expected_value, $target->call_dosomething($mock));
																																																																																																																																																																																																																																																																																																																										        }
																																																																																																																																																																																																																																																																																																																														        catch (Exception $e)
																																																																																																																																																																																																																																																																																																																																		        {
																																																																																																																																																																																																																																																																																																																																							            $this->fail('Exception thrown.');
																																																																																																																																																																																																																																																																																																																																													        }
																																																																																																																																																																																																																																																																																																																																																	 
																																																																																																																																																																																																																																																																																																																																																	         try
																																																																																																																																																																																																																																																																																																																																																					         {
																																																																																																																																																																																																																																																																																																																																																										             $target->call_dosomething($mock);
																																																																																																																																																																																																																																																																																																																																																																             $this->fail('Exception didn\'t thrown.');
																																																																																																																																																																																																																																																																																																																																																																						         }
																																																																																																																																																																																																																																																																																																																																																																										         catch (Exception $e)
																																																																																																																																																																																																																																																																																																																																																																														         {
																																																																																																																																																																																																																																																																																																																																																																																			             // Test is ok.
																																																																																																																																																																																																																																																																																																																																																																																									         }
																																																																																																																																																																																																																																																																																																																																																																																													     }
																																																																																																																																																																																																																																																																																																																																																																																															  
	}
	 
	 class TargetClass {
		  
			    public function call_dosomething($object)
					    {
								        return $object->dosomething(SAMPLE_TEXT);
												    }
	 }
	 
