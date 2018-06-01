<?php
/**
 * APIContactInfo
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
 * APIContactInfo Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class APIContactInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'APIContactInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'contact_info_id' => 'int',
        'type' => 'string',
        'subtype' => 'string',
        'label' => 'string',
        'detail' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'contact_info_id' => 'int64',
        'type' => null,
        'subtype' => null,
        'label' => null,
        'detail' => null
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
        'contact_info_id' => 'CONTACT_INFO_ID',
        'type' => 'TYPE',
        'subtype' => 'SUBTYPE',
        'label' => 'LABEL',
        'detail' => 'DETAIL'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contact_info_id' => 'setContactInfoId',
        'type' => 'setType',
        'subtype' => 'setSubtype',
        'label' => 'setLabel',
        'detail' => 'setDetail'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contact_info_id' => 'getContactInfoId',
        'type' => 'getType',
        'subtype' => 'getSubtype',
        'label' => 'getLabel',
        'detail' => 'getDetail'
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
        $this->container['contact_info_id'] = isset($data['contact_info_id']) ? $data['contact_info_id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['subtype'] = isset($data['subtype']) ? $data['subtype'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if (!is_null($this->container['subtype']) && (strlen($this->container['subtype']) > 50)) {
            $invalidProperties[] = "invalid value for 'subtype', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['subtype']) && (strlen($this->container['subtype']) < 0)) {
            $invalidProperties[] = "invalid value for 'subtype', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['label']) && (strlen($this->container['label']) > 50)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['label']) && (strlen($this->container['label']) < 0)) {
            $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['detail'] === null) {
            $invalidProperties[] = "'detail' can't be null";
        }
        if ((strlen($this->container['detail']) > 255)) {
            $invalidProperties[] = "invalid value for 'detail', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['detail']) < 0)) {
            $invalidProperties[] = "invalid value for 'detail', the character length must be bigger than or equal to 0.";
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

        if ($this->container['type'] === null) {
            return false;
        }
        if (strlen($this->container['subtype']) > 50) {
            return false;
        }
        if (strlen($this->container['subtype']) < 0) {
            return false;
        }
        if (strlen($this->container['label']) > 50) {
            return false;
        }
        if (strlen($this->container['label']) < 0) {
            return false;
        }
        if ($this->container['detail'] === null) {
            return false;
        }
        if (strlen($this->container['detail']) > 255) {
            return false;
        }
        if (strlen($this->container['detail']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets contact_info_id
     *
     * @return int
     */
    public function getContactInfoId()
    {
        return $this->container['contact_info_id'];
    }

    /**
     * Sets contact_info_id
     *
     * @param int $contact_info_id contact_info_id
     *
     * @return $this
     */
    public function setContactInfoId($contact_info_id)
    {
        $this->container['contact_info_id'] = $contact_info_id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets subtype
     *
     * @return string
     */
    public function getSubtype()
    {
        return $this->container['subtype'];
    }

    /**
     * Sets subtype
     *
     * @param string $subtype subtype
     *
     * @return $this
     */
    public function setSubtype($subtype)
    {
        if (!is_null($subtype) && (strlen($subtype) > 50)) {
            throw new \InvalidArgumentException('invalid length for $subtype when calling APIContactInfo., must be smaller than or equal to 50.');
        }
        if (!is_null($subtype) && (strlen($subtype) < 0)) {
            throw new \InvalidArgumentException('invalid length for $subtype when calling APIContactInfo., must be bigger than or equal to 0.');
        }

        $this->container['subtype'] = $subtype;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        if (!is_null($label) && (strlen($label) > 50)) {
            throw new \InvalidArgumentException('invalid length for $label when calling APIContactInfo., must be smaller than or equal to 50.');
        }
        if (!is_null($label) && (strlen($label) < 0)) {
            throw new \InvalidArgumentException('invalid length for $label when calling APIContactInfo., must be bigger than or equal to 0.');
        }

        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets detail
     *
     * @return string
     */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
     * Sets detail
     *
     * @param string $detail detail
     *
     * @return $this
     */
    public function setDetail($detail)
    {
        if ((strlen($detail) > 255)) {
            throw new \InvalidArgumentException('invalid length for $detail when calling APIContactInfo., must be smaller than or equal to 255.');
        }
        if ((strlen($detail) < 0)) {
            throw new \InvalidArgumentException('invalid length for $detail when calling APIContactInfo., must be bigger than or equal to 0.');
        }

        $this->container['detail'] = $detail;

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

