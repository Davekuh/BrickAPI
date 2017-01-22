<?php

namespace OneTree\BrickAPI\Element;

use OneTree\BrickAPI\Element as ElementInterface;

/**
 * The Cost class represents the costs of a Bricklink order.
 */
class Cost implements ElementInterface
{
	/**
	 * The currency code.
	 * @var string
	 */
	protected $currency = null;
	/**
	 * The subtotal.
	 * @var float
	 */
	protected $subtotal = 0.0;
	/**
	 * The grandtotal.
	 * @var float
	 */
	protected $grandtotal = 0.0;
	/**
	 * The extra 1 costs.
	 * @var float
	 */
	protected $etc1 = 0.0;
	/**
	 * The extra 2 costs.
	 * @var float
	 */
	protected $etc2 = 0.0;
	/**
	 * The insurance costs.
	 * @var float
	 */
	protected $insurance = 0.0;
	/**
	 * The shipping costs.
	 * @var float
	 */
	protected $shipping = 0.0;
	/**
	 * The credit received.
	 * @var float
	 */
	protected $credit = 0.0;
	/**
	 * The couppon amount.
	 * @var float
	 */
	protected $coupon = 0.0;
	/**
	 * The VAT percentage.
	 * @var float
	 */
	protected $vatRate = 0.0;
	/**
	 * The VAT amount.
	 * @var float
	 */
	protected $vatAmount = 0.0;
	
	/**
	 * Set the currency.
	 * 
	 * @param string $currency
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Cost
	 */
	public function SetCurrency($currency)
	{
		if (empty($currency)) {
			throw new \InvalidArgumentException('Currency can\'t be empty.');
		}
		
		$this->currency = $currency;
		return $this;
	}
	
	/**
	 * Returns the currency.
	 * 
	 * @return string
	 */
	public function GetCurrency()
	{
		return $this->currency;
	}
	
	/**
	 * Sets the subtotal.
	 * 
	 * @param int|float $subtotal
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Cost
	 */
	public function SetSubtotal($subtotal) 
	{
		$this->CheckAmountValidOrThrowException($subtotal, 'subtotal');
		$this->subtotal = $subtotal;
		return $this;
	}
	
	/**
	 * Returns the subtotal.
	 *
	 * @return float
	 */
	public function GetSubtotal()
	{
		return $this->subtotal;
	}

	/**
	 * Sets the grandtotal.
	 * 
	 * @param int|float $grandtotal
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Cost
	 */
	public function SetGrandtotal($grandtotal) 
	{
		$this->CheckAmountValidOrThrowException($grandtotal, 'grandtotal');
		$this->grandtotal = $grandtotal;
		return $this;
	}
	
	/**
	 * Returns the grandtotal.
	 *
	 * @return float
	 */
	public function GetGrandtotal()
	{
		return $this->grandtotal;
	}

	/**
	 * Sets the etc1.
	 * 
	 * @param int|float $etc1
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Cost
	 */
	public function SetEtc1($etc1) 
	{
		$this->CheckAmountValidOrThrowException($etc1, 'etc1');
		$this->etc1 = $etc1;
		return $this;
	}
	
	/**
	 * Returns the etc1.
	 *
	 * @return float
	 */
	public function GetEtc1()
	{
		return $this->etc1;
	}

	/**
	 * Sets the etc2.
	 * 
	 * @param int|float $etc2
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Cost
	 */
	public function SetEtc2($etc2) 
	{
		$this->CheckAmountValidOrThrowException($etc2, 'etc2');
		$this->etc2 = $etc2;
		return $this;
	}
	
	/**
	 * Returns the etc2.
	 *
	 * @return float
	 */
	public function GetEtc2()
	{
		return $this->etc2;
	}

	/**
	 * Sets the insurance.
	 * 
	 * @param int|float $insurance
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Cost
	 */
	public function SetInsurance($insurance) 
	{
		$this->CheckAmountValidOrThrowException($insurance, 'insurance');
		$this->insurance = $insurance;
		return $this;
	}
	
	/**
	 * Returns the insurance.
	 *
	 * @return float
	 */
	public function GetInsurance()
	{
		return $this->insurance;
	}

	/**
	 * Sets the shipping.
	 * 
	 * @param int|float $shipping
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Cost
	 */
	public function SetShipping($shipping) 
	{
		$this->CheckAmountValidOrThrowException($shipping, 'shipping');
		$this->shipping = $shipping;
		return $this;
	}
	
	/**
	 * Returns the shipping.
	 *
	 * @return float
	 */
	public function GetShipping()
	{
		return $this->shipping;
	}

	/**
	 * Sets the credit.
	 * 
	 * @param int|float $credit
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Cost
	 */
	public function SetCredit($credit) 
	{
		$this->CheckAmountValidOrThrowException($credit, 'credit');
		$this->credit = $credit;
		return $this;
	}
	
	/**
	 * Returns the credit.
	 *
	 * @return float
	 */
	public function GetCredit()
	{
		return $this->credit;
	}

	/**
	 * Sets the coupon.
	 * 
	 * @param int|float $coupon
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Cost
	 */
	public function SetCoupon($coupon) 
	{
		$this->CheckAmountValidOrThrowException($coupon, 'coupon');
		$this->coupon = $coupon;
		return $this;
	}
	
	/**
	 * Returns the coupon.
	 *
	 * @return float
	 */
	public function GetCoupon()
	{
		return $this->coupon;
	}

	/**
	 * Sets the vatRate.
	 * 
	 * @param int|float $vatRate
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Cost
	 */
	public function SetVatRate($vatRate) 
	{
		$this->CheckAmountValidOrThrowException($vatRate, 'vatRate');
		$this->vatRate = $vatRate;
		return $this;
	}
	
	/**
	 * Returns the vatRate.
	 *
	 * @return float
	 */
	public function GetVatRate()
	{
		return $this->vatRate;
	}

	/**
	 * Sets the vatAmount.
	 * 
	 * @param int|float $vatAmount
	 * @throws \InvalidArgumentException
	 * @return \OneTree\BrickAPI\Element\Cost
	 */
	public function SetVatAmount($vatAmount) 
	{
		$this->CheckAmountValidOrThrowException($vatAmount, 'vatAmount');
		$this->vatAmount = $vatAmount;
		return $this;
	}
	
	/**
	 * Returns the vatAmount.
	 *
	 * @return float
	 */
	public function GetVatAmount()
	{
		return $this->vatAmount;
	}
	
	/**
	 * {@inheritdoc}
	 */
	public function SetAttributeValuesFromArray(array $values) 
	{
		$this->SetCurrency(isset($values['currency']) ? $values['currency'] : 0);
		$this->SetSubtotal(isset($values['subtotal']) ? $values['subtotal'] : 0);
		$this->SetGrandtotal(isset($values['grand_total']) ? $values['grand_total'] : 0);
		$this->SetEtc1(isset($values['etc1']) ? $values['etc1'] : 0);
		$this->SetEtc2(isset($values['etc2']) ? $values['etc2'] : 0);
		$this->SetInsurance(isset($values['insurance']) ? $values['insurance'] : 0);
		$this->SetShipping(isset($values['shipping']) ? $values['shipping'] : 0);
		$this->SetCredit(isset($values['credit']) ? $values['credit'] : 0);
		$this->SetCoupon(isset($values['coupon']) ? $values['coupon'] : 0);
		$this->SetVatRate(isset($values['vat_rate']) ? $values['vat_rate'] : 0);
		$this->SetVatAmount(isset($values['vat_amount']) ? $values['vat_amount'] : 0);
	}
	
	/**
	 * Checks if the given amount is valid.
	 * 
	 * A valid amount is an integer or a float, and greater then or equal to zero.
	 * 
	 * If it isn't, an exception is thrown, if it is no further action is 
	 * taken.
	 * 
	 * @param int|float	$amount	The amount to check
	 * @param string	$name	The name to use in the exception
	 * @throws \InvalidArgumentException
	 * @return void
	 */
	protected function CheckAmountValidOrThrowException($amount, $name)
	{
		if (!$this->IsValidNumber($amount)) {
			throw new \InvalidArgumentException(''.$name.' needs to be a numeric value, '.  gettype($amount).' given.');
		}
		if (!$this->IsValidAmount($amount)) {
			throw new \InvalidArgumentException(''.$name.' can\'t be a negative number.');
		}
	}
	
	/**
	 * Checks if the given amount is an integer or a float.
	 * 
	 * @param float|int $number
	 * @return bool
	 */
	protected function IsValidNumber($number)
	{
		return is_float($number) || is_int($number) || is_numeric($number);
	}
	
	/**
	 * Checks if the amount is bigger then or equal to zero.
	 * 
	 * @param float|int $amount
	 * @return bool
	 */
	protected function IsValidAmount($amount)
	{
		return $amount >= 0;
	}
}