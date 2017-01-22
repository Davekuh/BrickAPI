<?php

use OneTree\BrickAPI\Element\Cost;

/**
 * Tests the Cost Element
 */
class CostTest extends PHPUnit_Framework_TestCase 
{
	/**
	 * @var \OneTree\BrickAPI\Element\Cost
	 */
	protected $cost;
	
	public function setUp() 
	{
		$this->cost = new Cost();
		parent::setUp();
	}
	
	public function testClassImplementation()
	{
		$this->assertInstanceOf(\OneTree\BrickAPI\Element::class, $this->cost);
	}
	
	public function testValidCurrency()
	{
		$this->cost->SetCurrency('EUR');
		$this->assertEquals('EUR', $this->cost->GetCurrency());
		
		$this->cost->SetCurrency('Some other string');
		$this->assertEquals('Some other string', $this->cost->GetCurrency());
		
		$this->cost->SetCurrency(100);
		$this->assertEquals(100, $this->cost->GetCurrency());
	}
	
	public function testInvalidCurrencyNull() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCurrency(null);
	}
	
	public function testInvalidCurrencyZero() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCurrency(0);
	}
	
	public function testInvalidCurrencyEmpty() 
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCurrency('');
	}
	
	

	public function testValidSubtotal()
	{
		$this->cost->SetSubtotal(1);
		$this->assertEquals(1, $this->cost->GetSubtotal());
		
		$this->cost->SetSubtotal(100.93);
		$this->assertEquals(100.93, $this->cost->GetSubtotal());
		
		$this->cost->SetSubtotal('3e10');
		$this->assertEquals('3e10', $this->cost->GetSubtotal());
	}
	
	public function testInvalidSubtotalString()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetSubtotal('string');
	}
	
	public function testInvalidSubtotalNegativeInteger()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetSubtotal(-100);
	}
	
	public function testInvalidSubtotalNegativeFloat()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetSubtotal(-100.93);
	}
	
	public function testInvalidSubtotalNegativeNumber()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetSubtotal('-3e10');
	}
	
	public function testInvalidSubtotalNull()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetSubtotal(null);
	}
	
	public function testInvalidSubtotalEmpty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetSubtotal('');
	}
	
	public function testInvalidSubtotalType()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetSubtotal(array());
	}

	public function testValidGrandtotal()
	{
		$this->cost->SetGrandtotal(1);
		$this->assertEquals(1, $this->cost->GetGrandtotal());
		
		$this->cost->SetGrandtotal(100.93);
		$this->assertEquals(100.93, $this->cost->GetGrandtotal());
		
		$this->cost->SetGrandtotal('3e10');
		$this->assertEquals('3e10', $this->cost->GetGrandtotal());
	}
	
	public function testInvalidGrandtotalString()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetGrandtotal('string');
	}
	
	public function testInvalidGrandtotalNegativeInteger()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetGrandtotal(-100);
	}
	
	public function testInvalidGrandtotalNegativeFloat()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetGrandtotal(-100.93);
	}
	
	public function testInvalidGrandtotalNegativeNumber()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetGrandtotal('-3e10');
	}
	
	public function testInvalidGrandtotalNull()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetGrandtotal(null);
	}
	
	public function testInvalidGrandtotalEmpty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetGrandtotal('');
	}
	
	public function testInvalidGrandtotalType()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetGrandtotal(array());
	}

	public function testValidEtc1()
	{
		$this->cost->SetEtc1(1);
		$this->assertEquals(1, $this->cost->GetEtc1());
		
		$this->cost->SetEtc1(100.93);
		$this->assertEquals(100.93, $this->cost->GetEtc1());
		
		$this->cost->SetEtc1('3e10');
		$this->assertEquals('3e10', $this->cost->GetEtc1());
	}
	
	public function testInvalidEtc1String()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc1('string');
	}
	
	public function testInvalidEtc1NegativeInteger()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc1(-100);
	}
	
	public function testInvalidEtc1NegativeFloat()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc1(-100.93);
	}
	
	public function testInvalidEtc1NegativeNumber()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc1('-3e10');
	}
	
	public function testInvalidEtc1Null()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc1(null);
	}
	
	public function testInvalidEtc1Empty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc1('');
	}
	
	public function testInvalidEtc1Type()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc1(array());
	}

	public function testValidEtc2()
	{
		$this->cost->SetEtc2(1);
		$this->assertEquals(1, $this->cost->GetEtc2());
		
		$this->cost->SetEtc2(100.93);
		$this->assertEquals(100.93, $this->cost->GetEtc2());
		
		$this->cost->SetEtc2('3e10');
		$this->assertEquals('3e10', $this->cost->GetEtc2());
	}
	
	public function testInvalidEtc2String()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc2('string');
	}
	
	public function testInvalidEtc2NegativeInteger()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc2(-100);
	}
	
	public function testInvalidEtc2NegativeFloat()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc2(-100.93);
	}
	
	public function testInvalidEtc2NegativeNumber()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc2('-3e10');
	}
	
	public function testInvalidEtc2Null()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc2(null);
	}
	
	public function testInvalidEtc2Empty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc2('');
	}
	
	public function testInvalidEtc2Type()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetEtc2(array());
	}

	public function testValidInsurance()
	{
		$this->cost->SetInsurance(1);
		$this->assertEquals(1, $this->cost->GetInsurance());
		
		$this->cost->SetInsurance(100.93);
		$this->assertEquals(100.93, $this->cost->GetInsurance());
		
		$this->cost->SetInsurance('3e10');
		$this->assertEquals('3e10', $this->cost->GetInsurance());
	}
	
	public function testInvalidInsuranceString()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetInsurance('string');
	}
	
	public function testInvalidInsuranceNegativeInteger()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetInsurance(-100);
	}
	
	public function testInvalidInsuranceNegativeFloat()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetInsurance(-100.93);
	}
	
	public function testInvalidInsuranceNegativeNumber()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetInsurance('-3e10');
	}
	
	public function testInvalidInsuranceNull()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetInsurance(null);
	}
	
	public function testInvalidInsuranceEmpty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetInsurance('');
	}
	
	public function testInvalidInsuranceType()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetInsurance(array());
	}

	public function testValidShipping()
	{
		$this->cost->SetShipping(1);
		$this->assertEquals(1, $this->cost->GetShipping());
		
		$this->cost->SetShipping(100.93);
		$this->assertEquals(100.93, $this->cost->GetShipping());
		
		$this->cost->SetShipping('3e10');
		$this->assertEquals('3e10', $this->cost->GetShipping());
	}
	
	public function testInvalidShippingString()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetShipping('string');
	}
	
	public function testInvalidShippingNegativeInteger()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetShipping(-100);
	}
	
	public function testInvalidShippingNegativeFloat()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetShipping(-100.93);
	}
	
	public function testInvalidShippingNegativeNumber()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetShipping('-3e10');
	}
	
	public function testInvalidShippingNull()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetShipping(null);
	}
	
	public function testInvalidShippingEmpty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetShipping('');
	}
	
	public function testInvalidShippingType()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetShipping(array());
	}

	public function testValidCredit()
	{
		$this->cost->SetCredit(1);
		$this->assertEquals(1, $this->cost->GetCredit());
		
		$this->cost->SetCredit(100.93);
		$this->assertEquals(100.93, $this->cost->GetCredit());
		
		$this->cost->SetCredit('3e10');
		$this->assertEquals('3e10', $this->cost->GetCredit());
	}
	
	public function testInvalidCreditString()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCredit('string');
	}
	
	public function testInvalidCreditNegativeInteger()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCredit(-100);
	}
	
	public function testInvalidCreditNegativeFloat()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCredit(-100.93);
	}
	
	public function testInvalidCreditNegativeNumber()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCredit('-3e10');
	}
	
	public function testInvalidCreditNull()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCredit(null);
	}
	
	public function testInvalidCreditEmpty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCredit('');
	}
	
	public function testInvalidCreditType()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCredit(array());
	}

	public function testValidCoupon()
	{
		$this->cost->SetCoupon(1);
		$this->assertEquals(1, $this->cost->GetCoupon());
		
		$this->cost->SetCoupon(100.93);
		$this->assertEquals(100.93, $this->cost->GetCoupon());
		
		$this->cost->SetCoupon('3e10');
		$this->assertEquals('3e10', $this->cost->GetCoupon());
	}
	
	public function testInvalidCouponString()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCoupon('string');
	}
	
	public function testInvalidCouponNegativeInteger()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCoupon(-100);
	}
	
	public function testInvalidCouponNegativeFloat()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCoupon(-100.93);
	}
	
	public function testInvalidCouponNegativeNumber()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCoupon('-3e10');
	}
	
	public function testInvalidCouponNull()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCoupon(null);
	}
	
	public function testInvalidCouponEmpty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCoupon('');
	}
	
	public function testInvalidCouponType()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetCoupon(array());
	}

	public function testValidVatRate()
	{
		$this->cost->SetVatRate(1);
		$this->assertEquals(1, $this->cost->GetVatRate());
		
		$this->cost->SetVatRate(100.93);
		$this->assertEquals(100.93, $this->cost->GetVatRate());
		
		$this->cost->SetVatRate('3e10');
		$this->assertEquals('3e10', $this->cost->GetVatRate());
	}
	
	public function testInvalidVatRateString()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatRate('string');
	}
	
	public function testInvalidVatRateNegativeInteger()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatRate(-100);
	}
	
	public function testInvalidVatRateNegativeFloat()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatRate(-100.93);
	}
	
	public function testInvalidVatRateNegativeNumber()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatRate('-3e10');
	}
	
	public function testInvalidVatRateNull()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatRate(null);
	}
	
	public function testInvalidVatRateEmpty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatRate('');
	}
	
	public function testInvalidVatRateType()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatRate(array());
	}

	public function testValidVatAmount()
	{
		$this->cost->SetVatAmount(1);
		$this->assertEquals(1, $this->cost->GetVatAmount());
		
		$this->cost->SetVatAmount(100.93);
		$this->assertEquals(100.93, $this->cost->GetVatAmount());
		
		$this->cost->SetVatAmount('3e10');
		$this->assertEquals('3e10', $this->cost->GetVatAmount());
	}
	
	public function testInvalidVatAmountString()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatAmount('string');
	}
	
	public function testInvalidVatAmountNegativeInteger()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatAmount(-100);
	}
	
	public function testInvalidVatAmountNegativeFloat()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatAmount(-100.93);
	}
	
	public function testInvalidVatAmountNegativeNumber()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatAmount('-3e10');
	}
	
	public function testInvalidVatAmountNull()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatAmount(null);
	}
	
	public function testInvalidVatAmountEmpty()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatAmount('');
	}
	
	public function testInvalidVatAmountType()
	{
		$this->expectException(\InvalidArgumentException::class);
		$this->cost->SetVatAmount(array());
	}

}