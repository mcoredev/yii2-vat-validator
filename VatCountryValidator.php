<?php

namespace app\components\validators;

use Yii;
use yii\validators\Validator;

class VatCountryValidator extends Validator
{

    public function validateAttribute($model, $attribute)
    {	
      /*
       
        If you using messages error in YII - change this 'app/error' to your path error message

    	  $attributeMessage = Yii::t('app/error','not_equal_format_vat');

        $model->country_id - country code
        $model->vat        - field Vat data

      */

      $vat = $model->vat; #change to your field name
      $country_id = $model->country_id; #change to your field name

      $attributeMessage = 'Your global message...'

      //SK
      if( $country_id == 421 && !preg_match('/(^SK)([0-9]{10})/', $vat) ) {
        $this->addError($model, $attribute, $attributeMessage);
      }

      //CZ
    	if($country_id == 420 &&  !preg_match('/(^CZ)([0-9]{10}|[0-9]{9}|[0-9]{8})/', $vat)) {
    		$this->addError($model, $attribute, $attributeMessage);
    	}

    	//HU
    	if($country_id == 36 && !preg_match('/(^HU)([0-9]{8})/', $vat)){
            $this->addError($model, $attribute, $attributeMessage);    	
        }

    	//AT
    	if($country_id == 43 && !preg_match('/(^ATU)([0-9]{8})/', $vat)){
            $this->addError($model, $attribute, $attributeMessage);
        }

    	//DE
  		if($country_id == 49 && !preg_match('/(^DE)([0-9]{9})/', $vat)){
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//PL
  		if($country_id == 48 && !preg_match('/(^PL)([0-9]{10})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//BE
  		if($country_id == 32 && !preg_match('/(^BE)([0-9]{10})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//DK
  		if($country_id == 45 && !preg_match('/(^DK)([0-9]{2})\s([0-9]{2})\s([0-9]{2})\s([0-9]{2})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//FR
  		if($country_id == 33 && !preg_match('/(^(FR)[A-Z]{2})([0-9]{9})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//NL
  		if($country_id == 31 && !preg_match('/(^NL)([0-9]{12})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//LU
  		if($country_id == 352 && !preg_match('/(^LU)([0-9]{8})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//SI
  		if($country_id == 386 && !preg_match('/(^SI)([0-9]{8})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//IT
  		if($country_id == 386 && !preg_match('/(^IT)([0-9]{11})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//GB
  		if($country_id == 44 && !preg_match('/(^GB)([0-9]{12}|[0-9]{9})|(^GBGD)([0-9]{3})|(^GBHA)([0-9]{3})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//BGF
  		if($country_id == 359 && !preg_match('/(^BG)([0-9]{10}|[0-9]{9})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//ET
  		if($country_id == 372 && !preg_match('/(^ET)([0-9]{9})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//FI
  		if($country_id == 358 && !preg_match('/(^FI)([0-9]{8})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//IE
  		if($country_id == 353 && !preg_match('/(^IE)([0-9A-Z]{9}|[0-9A-Z]{8})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//LT
  		if($country_id == 370 && !preg_match('/(^LT)([0-9]{12}|[0-9]{9})/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//PT
  		if($country_id == 351 && !preg_match('/(^PT)([0-9]{9}))/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//RO
  		if($country_id == 40 && !preg_match('/(^RO)([0-9]{2,10}))/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//SE
  		if($country_id == 46 && !preg_match('/(^SE)([0-9]{12}))/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//EL
  		if($country_id == 30 && !preg_match('/(^EL)([0-9]{9}))/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//HR
  		if($country_id == 385 && !preg_match('/(^HR)([0-9]{11}))/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

  		//HR
  		if($country_id == 385 && !preg_match('/(^HR)([0-9]{11}))/', $vat)) {
  			$this->addError($model, $attribute, $attributeMessage);
  		}

    }
}