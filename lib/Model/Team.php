<?php
/**
 * Team
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
 * Team Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Team implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Team';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'team_id' => 'int',
        'team_name' => 'string',
        'anonymous_team' => 'bool',
        'date_created_utc' => '\DateTime',
        'date_updated_utc' => '\DateTime',
        'teammembers' => '\Swagger\Client\Model\APITeamMember[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'team_id' => 'int64',
        'team_name' => null,
        'anonymous_team' => null,
        'date_created_utc' => 'date-time',
        'date_updated_utc' => 'date-time',
        'teammembers' => null
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
        'team_id' => 'TEAM_ID',
        'team_name' => 'TEAM_NAME',
        'anonymous_team' => 'ANONYMOUS_TEAM',
        'date_created_utc' => 'DATE_CREATED_UTC',
        'date_updated_utc' => 'DATE_UPDATED_UTC',
        'teammembers' => 'TEAMMEMBERS'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'team_id' => 'setTeamId',
        'team_name' => 'setTeamName',
        'anonymous_team' => 'setAnonymousTeam',
        'date_created_utc' => 'setDateCreatedUtc',
        'date_updated_utc' => 'setDateUpdatedUtc',
        'teammembers' => 'setTeammembers'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'team_id' => 'getTeamId',
        'team_name' => 'getTeamName',
        'anonymous_team' => 'getAnonymousTeam',
        'date_created_utc' => 'getDateCreatedUtc',
        'date_updated_utc' => 'getDateUpdatedUtc',
        'teammembers' => 'getTeammembers'
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
        $this->container['team_id'] = isset($data['team_id']) ? $data['team_id'] : null;
        $this->container['team_name'] = isset($data['team_name']) ? $data['team_name'] : null;
        $this->container['anonymous_team'] = isset($data['anonymous_team']) ? $data['anonymous_team'] : null;
        $this->container['date_created_utc'] = isset($data['date_created_utc']) ? $data['date_created_utc'] : null;
        $this->container['date_updated_utc'] = isset($data['date_updated_utc']) ? $data['date_updated_utc'] : null;
        $this->container['teammembers'] = isset($data['teammembers']) ? $data['teammembers'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['team_name']) && (strlen($this->container['team_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'team_name', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['team_name']) && (strlen($this->container['team_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'team_name', the character length must be bigger than or equal to 0.";
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

        if (strlen($this->container['team_name']) > 255) {
            return false;
        }
        if (strlen($this->container['team_name']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets team_id
     *
     * @return int
     */
    public function getTeamId()
    {
        return $this->container['team_id'];
    }

    /**
     * Sets team_id
     *
     * @param int $team_id team_id
     *
     * @return $this
     */
    public function setTeamId($team_id)
    {
        $this->container['team_id'] = $team_id;

        return $this;
    }

    /**
     * Gets team_name
     *
     * @return string
     */
    public function getTeamName()
    {
        return $this->container['team_name'];
    }

    /**
     * Sets team_name
     *
     * @param string $team_name team_name
     *
     * @return $this
     */
    public function setTeamName($team_name)
    {
        if (!is_null($team_name) && (strlen($team_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $team_name when calling Team., must be smaller than or equal to 255.');
        }
        if (!is_null($team_name) && (strlen($team_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $team_name when calling Team., must be bigger than or equal to 0.');
        }

        $this->container['team_name'] = $team_name;

        return $this;
    }

    /**
     * Gets anonymous_team
     *
     * @return bool
     */
    public function getAnonymousTeam()
    {
        return $this->container['anonymous_team'];
    }

    /**
     * Sets anonymous_team
     *
     * @param bool $anonymous_team anonymous_team
     *
     * @return $this
     */
    public function setAnonymousTeam($anonymous_team)
    {
        $this->container['anonymous_team'] = $anonymous_team;

        return $this;
    }

    /**
     * Gets date_created_utc
     *
     * @return \DateTime
     */
    public function getDateCreatedUtc()
    {
        return $this->container['date_created_utc'];
    }

    /**
     * Sets date_created_utc
     *
     * @param \DateTime $date_created_utc date_created_utc
     *
     * @return $this
     */
    public function setDateCreatedUtc($date_created_utc)
    {
        $this->container['date_created_utc'] = $date_created_utc;

        return $this;
    }

    /**
     * Gets date_updated_utc
     *
     * @return \DateTime
     */
    public function getDateUpdatedUtc()
    {
        return $this->container['date_updated_utc'];
    }

    /**
     * Sets date_updated_utc
     *
     * @param \DateTime $date_updated_utc date_updated_utc
     *
     * @return $this
     */
    public function setDateUpdatedUtc($date_updated_utc)
    {
        $this->container['date_updated_utc'] = $date_updated_utc;

        return $this;
    }

    /**
     * Gets teammembers
     *
     * @return \Swagger\Client\Model\APITeamMember[]
     */
    public function getTeammembers()
    {
        return $this->container['teammembers'];
    }

    /**
     * Sets teammembers
     *
     * @param \Swagger\Client\Model\APITeamMember[] $teammembers teammembers
     *
     * @return $this
     */
    public function setTeammembers($teammembers)
    {
        $this->container['teammembers'] = $teammembers;

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

