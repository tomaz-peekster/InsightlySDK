<?php
/**
 * APIPipelineStage
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
 * APIPipelineStage Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class APIPipelineStage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'APIPipelineStage';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'stage_id' => 'int',
        'pipeline_id' => 'int',
        'stage_name' => 'string',
        'stage_order' => 'int',
        'activityset_id' => 'int',
        'owner_user_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'stage_id' => 'int64',
        'pipeline_id' => 'int64',
        'stage_name' => null,
        'stage_order' => 'int32',
        'activityset_id' => 'int64',
        'owner_user_id' => 'int32'
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
        'stage_id' => 'STAGE_ID',
        'pipeline_id' => 'PIPELINE_ID',
        'stage_name' => 'STAGE_NAME',
        'stage_order' => 'STAGE_ORDER',
        'activityset_id' => 'ACTIVITYSET_ID',
        'owner_user_id' => 'OWNER_USER_ID'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'stage_id' => 'setStageId',
        'pipeline_id' => 'setPipelineId',
        'stage_name' => 'setStageName',
        'stage_order' => 'setStageOrder',
        'activityset_id' => 'setActivitysetId',
        'owner_user_id' => 'setOwnerUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'stage_id' => 'getStageId',
        'pipeline_id' => 'getPipelineId',
        'stage_name' => 'getStageName',
        'stage_order' => 'getStageOrder',
        'activityset_id' => 'getActivitysetId',
        'owner_user_id' => 'getOwnerUserId'
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
        $this->container['stage_id'] = isset($data['stage_id']) ? $data['stage_id'] : null;
        $this->container['pipeline_id'] = isset($data['pipeline_id']) ? $data['pipeline_id'] : null;
        $this->container['stage_name'] = isset($data['stage_name']) ? $data['stage_name'] : null;
        $this->container['stage_order'] = isset($data['stage_order']) ? $data['stage_order'] : null;
        $this->container['activityset_id'] = isset($data['activityset_id']) ? $data['activityset_id'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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

        return true;
    }


    /**
     * Gets stage_id
     *
     * @return int
     */
    public function getStageId()
    {
        return $this->container['stage_id'];
    }

    /**
     * Sets stage_id
     *
     * @param int $stage_id stage_id
     *
     * @return $this
     */
    public function setStageId($stage_id)
    {
        $this->container['stage_id'] = $stage_id;

        return $this;
    }

    /**
     * Gets pipeline_id
     *
     * @return int
     */
    public function getPipelineId()
    {
        return $this->container['pipeline_id'];
    }

    /**
     * Sets pipeline_id
     *
     * @param int $pipeline_id pipeline_id
     *
     * @return $this
     */
    public function setPipelineId($pipeline_id)
    {
        $this->container['pipeline_id'] = $pipeline_id;

        return $this;
    }

    /**
     * Gets stage_name
     *
     * @return string
     */
    public function getStageName()
    {
        return $this->container['stage_name'];
    }

    /**
     * Sets stage_name
     *
     * @param string $stage_name stage_name
     *
     * @return $this
     */
    public function setStageName($stage_name)
    {
        $this->container['stage_name'] = $stage_name;

        return $this;
    }

    /**
     * Gets stage_order
     *
     * @return int
     */
    public function getStageOrder()
    {
        return $this->container['stage_order'];
    }

    /**
     * Sets stage_order
     *
     * @param int $stage_order stage_order
     *
     * @return $this
     */
    public function setStageOrder($stage_order)
    {
        $this->container['stage_order'] = $stage_order;

        return $this;
    }

    /**
     * Gets activityset_id
     *
     * @return int
     */
    public function getActivitysetId()
    {
        return $this->container['activityset_id'];
    }

    /**
     * Sets activityset_id
     *
     * @param int $activityset_id activityset_id
     *
     * @return $this
     */
    public function setActivitysetId($activityset_id)
    {
        $this->container['activityset_id'] = $activityset_id;

        return $this;
    }

    /**
     * Gets owner_user_id
     *
     * @return int
     */
    public function getOwnerUserId()
    {
        return $this->container['owner_user_id'];
    }

    /**
     * Sets owner_user_id
     *
     * @param int $owner_user_id owner_user_id
     *
     * @return $this
     */
    public function setOwnerUserId($owner_user_id)
    {
        $this->container['owner_user_id'] = $owner_user_id;

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

