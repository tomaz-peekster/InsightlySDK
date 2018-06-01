<?php
/**
 * APIAddress
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Insightly API v2.2
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: v2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * APIAddress Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class APIAddress implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'APIAddress';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address_id' => 'int',
        'address_type' => 'string',
        'street' => 'string',
        'city' => 'string',
        'state' => 'string',
        'postcode' => 'string',
        'country' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address_id' => 'int64',
        'address_type' => null,
        'street' => null,
        'city' => null,
        'state' => null,
        'postcode' => null,
        'country' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'address_id' => 'ADDRESS_ID',
        'address_type' => 'ADDRESS_TYPE',
        'street' => 'STREET',
        'city' => 'CITY',
        'state' => 'STATE',
        'postcode' => 'POSTCODE',
        'country' => 'COUNTRY'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address_id' => 'setAddressId',
        'address_type' => 'setAddressType',
        'street' => 'setStreet',
        'city' => 'setCity',
        'state' => 'setState',
        'postcode' => 'setPostcode',
        'country' => 'setCountry'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address_id' => 'getAddressId',
        'address_type' => 'getAddressType',
        'street' => 'getStreet',
        'city' => 'getCity',
        'state' => 'getState',
        'postcode' => 'getPostcode',
        'country' => 'getCountry'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['address_id'] = isset($data['address_id']) ? $data['address_id'] : null;
        $this->container['address_type'] = isset($data['address_type']) ? $data['address_type'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['postcode'] = isset($data['postcode']) ? $data['postcode'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address_type'] === null) {
            $invalidProperties[] = "'address_type' can't be null";
        }
        if (!is_null($this->container['street']) && (strlen($this->container['street']) > 255)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['street']) && (strlen($this->container['street']) < 0)) {
            $invalidProperties[] = "invalid value for 'street', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['city']) && (strlen($this->container['city']) > 255)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['city']) && (strlen($this->container['city']) < 0)) {
            $invalidProperties[] = "invalid value for 'city', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['state']) && (strlen($this->container['state']) > 255)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['state']) && (strlen($this->container['state']) < 0)) {
            $invalidProperties[] = "invalid value for 'state', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['postcode']) && (strlen($this->container['postcode']) > 128)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['postcode']) && (strlen($this->container['postcode']) < 0)) {
            $invalidProperties[] = "invalid value for 'postcode', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['country']) && (strlen($this->container['country']) > 255)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['country']) && (strlen($this->container['country']) < 0)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['address_type'] === null) {
            return false;
        }
        if (strlen($this->container['street']) > 255) {
            return false;
        }
        if (strlen($this->container['street']) < 0) {
            return false;
        }
        if (strlen($this->container['city']) > 255) {
            return false;
        }
        if (strlen($this->container['city']) < 0) {
            return false;
        }
        if (strlen($this->container['state']) > 255) {
            return false;
        }
        if (strlen($this->container['state']) < 0) {
            return false;
        }
        if (strlen($this->container['postcode']) > 128) {
            return false;
        }
        if (strlen($this->container['postcode']) < 0) {
            return false;
        }
        if (strlen($this->container['country']) > 255) {
            return false;
        }
        if (strlen($this->container['country']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets address_id
     *
     * @return int
     */
    public function getAddressId()
    {
        return $this->container['address_id'];
    }

    /**
     * Sets address_id
     *
     * @param int $address_id address_id
     *
     * @return $this
     */
    public function setAddressId($address_id)
    {
        $this->container['address_id'] = $address_id;

        return $this;
    }

    /**
     * Gets address_type
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->container['address_type'];
    }

    /**
     * Sets address_type
     *
     * @param string $address_type address_type
     *
     * @return $this
     */
    public function setAddressType($address_type)
    {
        $this->container['address_type'] = $address_type;

        return $this;
    }

    /**
     * Gets street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     *
     * @param string $street street
     *
     * @return $this
     */
    public function setStreet($street)
    {
        if (!is_null($street) && (strlen($street) > 255)) {
            throw new \InvalidArgumentException('invalid length for $street when calling APIAddress., must be smaller than or equal to 255.');
        }
        if (!is_null($street) && (strlen($street) < 0)) {
            throw new \InvalidArgumentException('invalid length for $street when calling APIAddress., must be bigger than or equal to 0.');
        }

        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city city
     *
     * @return $this
     */
    public function setCity($city)
    {
        if (!is_null($city) && (strlen($city) > 255)) {
            throw new \InvalidArgumentException('invalid length for $city when calling APIAddress., must be smaller than or equal to 255.');
        }
        if (!is_null($city) && (strlen($city) < 0)) {
            throw new \InvalidArgumentException('invalid length for $city when calling APIAddress., must be bigger than or equal to 0.');
        }

        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        if (!is_null($state) && (strlen($state) > 255)) {
            throw new \InvalidArgumentException('invalid length for $state when calling APIAddress., must be smaller than or equal to 255.');
        }
        if (!is_null($state) && (strlen($state) < 0)) {
            throw new \InvalidArgumentException('invalid length for $state when calling APIAddress., must be bigger than or equal to 0.');
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets postcode
     *
     * @return string
     */
    public function getPostcode()
    {
        return $this->container['postcode'];
    }

    /**
     * Sets postcode
     *
     * @param string $postcode postcode
     *
     * @return $this
     */
    public function setPostcode($postcode)
    {
        if (!is_null($postcode) && (strlen($postcode) > 128)) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling APIAddress., must be smaller than or equal to 128.');
        }
        if (!is_null($postcode) && (strlen($postcode) < 0)) {
            throw new \InvalidArgumentException('invalid length for $postcode when calling APIAddress., must be bigger than or equal to 0.');
        }

        $this->container['postcode'] = $postcode;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        if (!is_null($country) && (strlen($country) > 255)) {
            throw new \InvalidArgumentException('invalid length for $country when calling APIAddress., must be smaller than or equal to 255.');
        }
        if (!is_null($country) && (strlen($country) < 0)) {
            throw new \InvalidArgumentException('invalid length for $country when calling APIAddress., must be bigger than or equal to 0.');
        }

        $this->container['country'] = $country;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param  integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param  integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param  integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

