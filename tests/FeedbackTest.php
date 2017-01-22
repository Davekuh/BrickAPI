<?php

use OneTree\BrickAPI\Element\Feedback;

/**
 * Tests the Feedback Element
 */
class FeedbackTest extends PHPUnit_Framework_TestCase 
{
	/**
	 * @var \OneTree\BrickAPI\Element\Feedback
	 */
	protected $feedback;
	
	public function setUp() 
	{
		$this->feedback = new Feedback();
		parent::setUp();
	}
	
	public function testClassImplementation()
	{
		$this->assertInstanceOf(\OneTree\BrickAPI\Element::class, $this->feedback);
	}
	
	public function testValidFeedbackId()
	{
		$this->feedback->SetFeedbackId(1);
		$this->assertEquals(1, $this->feedback->GetFeedbackId());
		
		$this->feedback->SetFeedbackId(0);
		$this->assertEquals(0, $this->feedback->GetFeedbackId());
		
		$this->feedback->SetFeedbackId(1111);
		$this->assertEquals(1111, $this->feedback->GetFeedbackId());
	}
	
	public function testInvalidFeedbackIdString()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetFeedbackId('string');
	}
	
	public function testInvalidFeedbackIdNegative()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetFeedbackId(-10);
	}
	
	public function testInvalidFeedbackIdArray()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetFeedbackId(array());
	}
	
	public function testInvalidFeedbackIdObject()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetFeedbackId(new \stdClass());
	}
	
	public function testValidorderId()
	{
		$this->feedback->SetorderId(1);
		$this->assertEquals(1, $this->feedback->GetorderId());
		
		$this->feedback->SetorderId(0);
		$this->assertEquals(0, $this->feedback->GetorderId());
		
		$this->feedback->SetorderId(1111);
		$this->assertEquals(1111, $this->feedback->GetorderId());
	}
	
	public function testInvalidorderIdString()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetorderId('string');
	}
	
	public function testInvalidorderIdNegative()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetorderId(-10);
	}
	
	public function testInvalidorderIdArray()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetorderId(array());
	}
	
	public function testInvalidorderIdObject()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetorderId(new \stdClass());
	}
	
	public function testValidFrom()
	{
		$this->feedback->SetFrom('from');
		$this->assertEquals('from', $this->feedback->GetFrom());
		
		$this->feedback->SetFrom(1);
		$this->assertEquals(1, $this->feedback->GetFrom());
		
		$this->feedback->SetFrom(true);
		$this->assertEquals(true, $this->feedback->GetFrom());
		
		$this->feedback->SetFrom('false');
		$this->assertEquals('false', $this->feedback->GetFrom());
	}
	
	public function testInvalidFromEmpty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetFrom('');
	}
	
	public function testInvalidFromNull()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetFrom(null);
	}
	
	public function testInvalidFromZero()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetFrom(0);
	}
	
	public function testInvalidFromArray()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetFrom(array());
	}
	
	public function testValidTo()
	{
		$this->feedback->SetTo('To');
		$this->assertEquals('To', $this->feedback->GetTo());
		
		$this->feedback->SetTo(1);
		$this->assertEquals(1, $this->feedback->GetTo());
		
		$this->feedback->SetTo(true);
		$this->assertEquals(true, $this->feedback->GetTo());
		
		$this->feedback->SetTo('false');
		$this->assertEquals('false', $this->feedback->GetTo());
	}
	
	public function testInvalidToEmpty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetTo('');
	}
	
	public function testInvalidToNull()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetTo(null);
	}
	
	public function testInvalidToZero()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetTo(0);
	}
	
	public function testInvalidToArray()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetTo(array());
	}
	
	public function testValidComment()
	{
		$this->feedback->SetComment('Comment');
		$this->assertEquals('Comment', $this->feedback->GetComment());
		
		$this->feedback->SetComment(1);
		$this->assertEquals(1, $this->feedback->GetComment());
		
		$this->feedback->SetComment(true);
		$this->assertEquals(true, $this->feedback->GetComment());
		
		$this->feedback->SetComment('false');
		$this->assertEquals('false', $this->feedback->GetComment());
	}
	
	public function testInvalidCommentEmpty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetComment('');
	}
	
	public function testInvalidCommentNull()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetComment(null);
	}
	
	public function testInvalidCommentZero()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetComment(0);
	}
	
	public function testInvalidCommentArray()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetComment(array());
	}
	
	public function testValidReply()
	{
		$this->feedback->SetReply('Reply');
		$this->assertEquals('Reply', $this->feedback->GetReply());
		
		$this->feedback->SetReply(1);
		$this->assertEquals(1, $this->feedback->GetReply());
		
		$this->feedback->SetReply(true);
		$this->assertEquals(true, $this->feedback->GetReply());
		
		$this->feedback->SetReply('false');
		$this->assertEquals('false', $this->feedback->GetReply());
	}
	
	public function testInvalidReplyEmpty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetReply('');
	}
	
	public function testInvalidReplyNull()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetReply(null);
	}
	
	public function testInvalidReplyZero()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetReply(0);
	}
	
	public function testInvalidReplyArray()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetReply(array());
	}
	
	public function testValidDateCreated()
	{
		$dateCreated = new \DateTime('2017-01-22');
		
		$this->feedback->SetDateCreated($dateCreated);
		$this->assertInstanceOf(\DateTime::class, $this->feedback->GetDateCreated());
		$this->assertEquals('2017-01-22', $this->feedback->GetDateCreated()->format("Y-m-d"));
		
		$this->feedback->SetDateCreated('2017-02-22');
		$this->assertInstanceOf(\DateTime::class, $this->feedback->GetDateCreated());
		$this->assertEquals('2017-02-22', $this->feedback->GetDateCreated()->format("Y-m-d"));
		
		$this->feedback->SetDateCreated(1485120556);
		$this->assertInstanceOf(\DateTime::class, $this->feedback->GetDateCreated());
		$this->assertEquals('2017-01-22', $this->feedback->GetDateCreated()->format("Y-m-d"));
	}
	
	public function testInvalidDateCreatedArray()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetDateCreated(array(1));
	}
	
	public function testValidRating()
	{
		$this->feedback->SetRating(Feedback::RATING_PRAISE);
		$this->assertEquals(Feedback::RATING_PRAISE, $this->feedback->GetRating());
		
		$this->feedback->SetRating(0);
		$this->assertEquals(Feedback::RATING_PRAISE, $this->feedback->GetRating());
		
		$this->feedback->SetRating(Feedback::RATING_NEUTRAL);
		$this->assertEquals(Feedback::RATING_NEUTRAL, $this->feedback->GetRating());
		
		$this->feedback->SetRating(1);
		$this->assertEquals(Feedback::RATING_NEUTRAL, $this->feedback->GetRating());
		
		$this->feedback->SetRating(Feedback::RATING_COMPLAINT);
		$this->assertEquals(Feedback::RATING_COMPLAINT, $this->feedback->GetRating());
		
		$this->feedback->SetRating(2);
		$this->assertEquals(Feedback::RATING_COMPLAINT, $this->feedback->GetRating());
	}
	
	public function testInvalidRatingHighNumber() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetRating(4);
	}
	
	public function testInvalidRatingNegativeNumber() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetRating(-10);
	}
	
	public function testInvalidRatingNull() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetRating(null);
	}
	
	public function testInvalidRatingString() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetRating('string');
	}
	
	public function testInvalidRatingArray() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetRating(array());
	}
	
	public function testInvalidRatingObject() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetRating(new \stdClass());
	}
	
	public function testValidBs()
	{
		$this->feedback->SetRatingOfBs(Feedback::BUYER);
		$this->assertEquals(Feedback::BUYER, $this->feedback->GetRatingOfBs());
		
		$this->feedback->SetRatingOfBs('B');
		$this->assertEquals(Feedback::BUYER, $this->feedback->GetRatingOfBs());
		
		$this->feedback->SetRatingOfBs(Feedback::SELLER);
		$this->assertEquals(Feedback::SELLER, $this->feedback->GetRatingOfBs());
		
		$this->feedback->SetRatingOfBs('S');
		$this->assertEquals(Feedback::SELLER, $this->feedback->GetRatingOfBs());
	}
	
	public function testInvalidBsNumber() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetRatingOfBs(4);
	}
	
	public function testInvalidBsNegativeNumber() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetRatingOfBs(-10);
	}
	
	public function testInvalidBsNull() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetRatingOfBs(null);
	}
	
	public function testInvalidBsString() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetRatingOfBs('string');
	}
	
	public function testInvalidBsArray() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetRatingOfBs(array());
	}
	
	public function testInvalidBsObject() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->feedback->SetRatingOfBs(new \stdClass());
	}
}