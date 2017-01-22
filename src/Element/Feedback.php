<?php

namespace OneTree\BrickAPI\Element;

use OneTree\BrickAPI\Element as ElementInterface;

/**
 * The Feedback class represents any feedback of a Bricklink order.
 */
class Feedback implements ElementInterface
{
	/**+@#
	 * The possible rating values.
	 * @var int
	 */
	const RATING_PRAISE = 0;
	const RATING_NEUTRAL = 1;
	const RATING_COMPLAINT = 2;
	
	/**+@#
	 * The buyer/seller codes.
	 * @var string
	 */
	const BUYER = 'b';
	const SELLER = 's';
	
	/**
	 * The bricklink feedback ID.
	 * @var int
	 */
	public $feedbackId = 0;
	/**
	 * The Bricklink order ID for this feedback.
	 * @var int
	 */
	public $orderId = 0;
	/**
	 * The username from whom this feedback is.
	 * @var string
	 */
	public $from = null;
	/**
	 * The username to whom this feedback is directed.
	 * @var string
	 */
	public $to = null;
	/**
	 * The date and time the feedback was created.
	 * @var \DateTime
	 */
	public $dateCreated = null;
	/**
	 * The feedback score, scale 0-2. 0 = praise, 1 = neutral, 2 = complaint.
	 * @var int
	 */
	public $rating = self::RATING_NEUTRAL;
	/**
	 * Indicates whether the feedback is written for a seller or a buyer. S: Seller, B: Buyer
	 * @var string
	 */
	public $ratingOfBs = self::BUYER;
	/**
	 * A comment associated with the feedback.
	 * @var string
	 */
	public $comment = null;
	/**
	 * A reply for this feedback.
	 * @var string
	 */
	public $reply = null;
	
	

	/**
	 * Sets the feedbackId.
	 *
	 * @param int $feedbackId
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Feedback
	 */
	public function SetFeedbackId($feedbackId)
	{
		if (is_array($feedbackId)) {
			throw new \InvalidArgumentException('Invalid value for feedbackId, expected to be an integer but recieved array.');
		}
		
		if (is_object($feedbackId)) {
			throw new \InvalidArgumentException('Invalid value for feedbackId, expected to be an integer but recieved object.');
		}
		
		if (!ctype_digit((string)$feedbackId)) {
			throw new \InvalidArgumentException('Invalid value for feedbackId, expected to be an integer but recieved '.gettype($feedbackId).'.');
		}
		
		$this->feedbackId = intval($feedbackId);
		return $this;
	}

	/**
	 * Returns the feedbackId.
	 *
	 * @return int
	 */
	public function GetFeedbackId()
	{
		return $this->feedbackId;
	}

	/**
	 * Sets the orderId.
	 *
	 * @param int $orderId
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Feedback
	 */
	public function SetOrderId($orderId)
	{
		if (is_array($orderId)) {
			throw new \InvalidArgumentException('Invalid value for orderId, expected to be an integer but recieved array.');
		}
		
		if (is_object($orderId)) {
			throw new \InvalidArgumentException('Invalid value for orderId, expected to be an integer but recieved object.');
		}
		
		if (!ctype_digit((string)$orderId)) {
			throw new \InvalidArgumentException('Invalid value for orderId, expected to be an integer but recieved '.gettype($orderId).'.');
		}
		
		$this->orderId = intval($orderId);
		return $this;
	}

	/**
	 * Returns the orderId.
	 *
	 * @return int
	 */
	public function GetOrderId()
	{
		return $this->orderId;
	}

	/**
	 * Sets the from.
	 *
	 * @param string $from
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Feedback
	 */
	public function SetFrom($from)
	{
		if (empty($from)) {
			throw new \InvalidArgumentException('Invalid value for from, expected to be a not empty string but recieved '.gettype($from).'.');
		}
		
		$this->from = (string)$from;
		return $this;
	}

	/**
	 * Returns the from.
	 *
	 * @return string
	 */
	public function GetFrom()
	{
		return $this->from;
	}

	/**
	 * Sets the to.
	 *
	 * @param string $to
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Feedback
	 */
	public function SetTo($to)
	{
		if (empty($to)) {
			throw new \InvalidArgumentException('Invalid value for to, expected to be a not empty string but recieved '.gettype($to).'.');
		}
		
		$this->to = (string)$to;
		return $this;
	}

	/**
	 * Returns the to.
	 *
	 * @return string
	 */
	public function GetTo()
	{
		return $this->to;
	}

	/**
	 * Sets the dateCreated.
	 *
	 * @param string|\DateTime $dateCreated
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Feedback
	 */
	public function SetDateCreated($dateCreated)
	{
		if (empty($dateCreated) || is_array($dateCreated)) {
			throw new \InvalidArgumentException('Invalid value for dateCreated, expected to be a not empty string but recieved '.gettype($dateCreated).'.');
		}
		
		if (is_numeric($dateCreated)) {
			$dateCreated = '@' . $dateCreated;
		}
		
		$this->dateCreated = $dateCreated instanceof \DateTime ? $dateCreated : new \DateTime($dateCreated);
		return $this;
	}

	/**
	 * Returns the dateCreated.
	 *
	 * @return \DateTime
	 */
	public function GetDateCreated()
	{
		return $this->dateCreated;
	}

	/**
	 * Sets the rating.
	 *
	 * @param integer $rating
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Feedback
	 */
	public function SetRating($rating)
	{
		if (is_string($rating) || is_array($rating) || is_object($rating) || !ctype_digit((string)$rating)) {
			throw new \InvalidArgumentException('Invalid value for rating.');
		}
		
		if (!in_array($rating, array(self::RATING_COMPLAINT, self::RATING_NEUTRAL, self::RATING_PRAISE))) {
			throw new \InvalidArgumentException('Invalid value for rating.');
		}
		
		$this->rating = $rating;
		return $this;
	}

	/**
	 * Returns the rating.
	 *
	 * @return int
	 */
	public function GetRating()
	{
		return $this->rating;
	}

	/**
	 * Sets the ratingOfBs.
	 *
	 * @param string $ratingOfBs
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Feedback
	 */
	public function SetRatingOfBs($ratingOfBs)
	{
		if (is_array($ratingOfBs) || is_object($ratingOfBs)) {
			throw new \InvalidArgumentException('Invalid value for ratingOfBs.');
		}
		
		if (!in_array(strtolower($ratingOfBs), array(self::SELLER, self::BUYER))) {
			throw new \InvalidArgumentException('Invalid value for ratingOfBs.');
		}
		
		$this->ratingOfBs = strtolower($ratingOfBs);
		return $this;
	}

	/**
	 * Returns the ratingOfBs.
	 *
	 * @return string
	 */
	public function GetRatingOfBs()
	{
		return $this->ratingOfBs;
	}

	/**
	 * Sets the comment.
	 *
	 * @param string $comment
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Feedback
	 */
	public function SetComment($comment)
	{
		if (empty($comment)) {
			throw new \InvalidArgumentException('Invalid value for comment, expected to be a not empty string but recieved '.gettype($comment).'.');
		}
		
		$this->comment = (string)$comment;
		return $this;
	}

	/**
	 * Returns the comment.
	 *
	 * @return string
	 */
	public function GetComment()
	{
		return $this->comment;
	}

	/**
	 * Sets the reply.
	 *
	 * @param string $reply
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Feedback
	 */
	public function SetReply($reply)
	{
		if (empty($reply)) {
			throw new \InvalidArgumentException('Invalid value for reply, expected to be a not empty string but recieved '.gettype($reply).'.');
		}
		
		$this->reply = (string)$reply;
		return $this;
	}

	/**
	 * Returns the reply.
	 *
	 * @return string
	 */
	public function GetReply()
	{
		return $this->reply;
	}

	
	public function SetAttributeValuesFromArray(array $values) 
	{
	}
}