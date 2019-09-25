<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * CreateCustomerCardRequest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class CreateCustomerCardRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'card_nonce' => 'string',
        'billing_address' => '\SquareConnect\Model\Address',
        'cardholder_name' => 'string',
        'verification_token' => 'string'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'card_nonce' => 'card_nonce',
        'billing_address' => 'billing_address',
        'cardholder_name' => 'cardholder_name',
        'verification_token' => 'verification_token'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'card_nonce' => 'setCardNonce',
        'billing_address' => 'setBillingAddress',
        'cardholder_name' => 'setCardholderName',
        'verification_token' => 'setVerificationToken'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'card_nonce' => 'getCardNonce',
        'billing_address' => 'getBillingAddress',
        'cardholder_name' => 'getCardholderName',
        'verification_token' => 'getVerificationToken'
    );
  
    /**
      * $card_nonce A card nonce representing the credit card to link to the customer.  Card nonces are generated by the `SqPaymentForm` that buyers enter their card information into. See [Embedding the payment form](https://developer.squareup.com/docs/payment-form/payment-form-walkthrough) for more information.  __Note:__ Card nonces generated by digital wallets (e.g., Apple Pay) cannot be used to create a customer card.
      * @var string
      */
    protected $card_nonce;
    /**
      * $billing_address Address information for the card on file. Only the `postal_code` field is required for payments in the US and Canada.
      * @var \SquareConnect\Model\Address
      */
    protected $billing_address;
    /**
      * $cardholder_name The full name printed on the credit card.
      * @var string
      */
    protected $cardholder_name;
    /**
      * $verification_token An identifying token generated by `SqPaymentForm.verifyBuyer()`. Verification tokens encapsulate customer device information and 3-D Secure challenge results to indicate that Square has verified the buyer identity.
      * @var string
      */
    protected $verification_token;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["card_nonce"])) {
              $this->card_nonce = $data["card_nonce"];
            } else {
              $this->card_nonce = null;
            }
            if (isset($data["billing_address"])) {
              $this->billing_address = $data["billing_address"];
            } else {
              $this->billing_address = null;
            }
            if (isset($data["cardholder_name"])) {
              $this->cardholder_name = $data["cardholder_name"];
            } else {
              $this->cardholder_name = null;
            }
            if (isset($data["verification_token"])) {
              $this->verification_token = $data["verification_token"];
            } else {
              $this->verification_token = null;
            }
        }
    }
    /**
     * Gets card_nonce
     * @return string
     */
    public function getCardNonce()
    {
        return $this->card_nonce;
    }
  
    /**
     * Sets card_nonce
     * @param string $card_nonce A card nonce representing the credit card to link to the customer.  Card nonces are generated by the `SqPaymentForm` that buyers enter their card information into. See [Embedding the payment form](https://developer.squareup.com/docs/payment-form/payment-form-walkthrough) for more information.  __Note:__ Card nonces generated by digital wallets (e.g., Apple Pay) cannot be used to create a customer card.
     * @return $this
     */
    public function setCardNonce($card_nonce)
    {
        $this->card_nonce = $card_nonce;
        return $this;
    }
    /**
     * Gets billing_address
     * @return \SquareConnect\Model\Address
     */
    public function getBillingAddress()
    {
        return $this->billing_address;
    }
  
    /**
     * Sets billing_address
     * @param \SquareConnect\Model\Address $billing_address Address information for the card on file. Only the `postal_code` field is required for payments in the US and Canada.
     * @return $this
     */
    public function setBillingAddress($billing_address)
    {
        $this->billing_address = $billing_address;
        return $this;
    }
    /**
     * Gets cardholder_name
     * @return string
     */
    public function getCardholderName()
    {
        return $this->cardholder_name;
    }
  
    /**
     * Sets cardholder_name
     * @param string $cardholder_name The full name printed on the credit card.
     * @return $this
     */
    public function setCardholderName($cardholder_name)
    {
        $this->cardholder_name = $cardholder_name;
        return $this;
    }
    /**
     * Gets verification_token
     * @return string
     */
    public function getVerificationToken()
    {
        return $this->verification_token;
    }
  
    /**
     * Sets verification_token
     * @param string $verification_token An identifying token generated by `SqPaymentForm.verifyBuyer()`. Verification tokens encapsulate customer device information and 3-D Secure challenge results to indicate that Square has verified the buyer identity.
     * @return $this
     */
    public function setVerificationToken($verification_token)
    {
        $this->verification_token = $verification_token;
        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\SquareConnect\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
