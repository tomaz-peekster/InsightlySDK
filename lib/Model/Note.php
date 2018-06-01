<?php
/**
 * Note
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
 * Note Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Note implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Note';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'note_id' => 'int',
        'title' => 'string',
        'body' => 'string',
        'link_subject_id' => 'int',
        'link_subject_type' => 'string',
        'owner_user_id' => 'int',
        'date_created_utc' => '\DateTime',
        'date_updated_utc' => '\DateTime',
        'visible_to' => 'string',
        'visible_team_id' => 'int',
        'visible_user_ids' => 'string',
        'notelinks' => '\Swagger\Client\Model\APINoteLink[]',
        'can_edit' => 'bool',
        'can_delete' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'note_id' => 'int64',
        'title' => null,
        'body' => null,
        'link_subject_id' => 'int64',
        'link_subject_type' => null,
        'owner_user_id' => 'int32',
        'date_created_utc' => 'date-time',
        'date_updated_utc' => 'date-time',
        'visible_to' => null,
        'visible_team_id' => 'int64',
        'visible_user_ids' => null,
        'notelinks' => null,
        'can_edit' => null,
        'can_delete' => null
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
        'note_id' => 'NOTE_ID',
        'title' => 'TITLE',
        'body' => 'BODY',
        'link_subject_id' => 'LINK_SUBJECT_ID',
        'link_subject_type' => 'LINK_SUBJECT_TYPE',
        'owner_user_id' => 'OWNER_USER_ID',
        'date_created_utc' => 'DATE_CREATED_UTC',
        'date_updated_utc' => 'DATE_UPDATED_UTC',
        'visible_to' => 'VISIBLE_TO',
        'visible_team_id' => 'VISIBLE_TEAM_ID',
        'visible_user_ids' => 'VISIBLE_USER_IDS',
        'notelinks' => 'NOTELINKS',
        'can_edit' => 'CAN_EDIT',
        'can_delete' => 'CAN_DELETE'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'note_id' => 'setNoteId',
        'title' => 'setTitle',
        'body' => 'setBody',
        'link_subject_id' => 'setLinkSubjectId',
        'link_subject_type' => 'setLinkSubjectType',
        'owner_user_id' => 'setOwnerUserId',
        'date_created_utc' => 'setDateCreatedUtc',
        'date_updated_utc' => 'setDateUpdatedUtc',
        'visible_to' => 'setVisibleTo',
        'visible_team_id' => 'setVisibleTeamId',
        'visible_user_ids' => 'setVisibleUserIds',
        'notelinks' => 'setNotelinks',
        'can_edit' => 'setCanEdit',
        'can_delete' => 'setCanDelete'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'note_id' => 'getNoteId',
        'title' => 'getTitle',
        'body' => 'getBody',
        'link_subject_id' => 'getLinkSubjectId',
        'link_subject_type' => 'getLinkSubjectType',
        'owner_user_id' => 'getOwnerUserId',
        'date_created_utc' => 'getDateCreatedUtc',
        'date_updated_utc' => 'getDateUpdatedUtc',
        'visible_to' => 'getVisibleTo',
        'visible_team_id' => 'getVisibleTeamId',
        'visible_user_ids' => 'getVisibleUserIds',
        'notelinks' => 'getNotelinks',
        'can_edit' => 'getCanEdit',
        'can_delete' => 'getCanDelete'
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
        $this->container['note_id'] = isset($data['note_id']) ? $data['note_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['link_subject_id'] = isset($data['link_subject_id']) ? $data['link_subject_id'] : null;
        $this->container['link_subject_type'] = isset($data['link_subject_type']) ? $data['link_subject_type'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['date_created_utc'] = isset($data['date_created_utc']) ? $data['date_created_utc'] : null;
        $this->container['date_updated_utc'] = isset($data['date_updated_utc']) ? $data['date_updated_utc'] : null;
        $this->container['visible_to'] = isset($data['visible_to']) ? $data['visible_to'] : null;
        $this->container['visible_team_id'] = isset($data['visible_team_id']) ? $data['visible_team_id'] : null;
        $this->container['visible_user_ids'] = isset($data['visible_user_ids']) ? $data['visible_user_ids'] : null;
        $this->container['notelinks'] = isset($data['notelinks']) ? $data['notelinks'] : null;
        $this->container['can_edit'] = isset($data['can_edit']) ? $data['can_edit'] : null;
        $this->container['can_delete'] = isset($data['can_delete']) ? $data['can_delete'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['title'] === null) {
            $invalidProperties[] = "'title' can't be null";
        }
        if ((strlen($this->container['title']) > 500)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 500.";
        }

        if ((strlen($this->container['title']) < 0)) {
            $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['link_subject_id'] === null) {
            $invalidProperties[] = "'link_subject_id' can't be null";
        }
        if ($this->container['link_subject_type'] === null) {
            $invalidProperties[] = "'link_subject_type' can't be null";
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

        if ($this->container['title'] === null) {
            return false;
        }
        if (strlen($this->container['title']) > 500) {
            return false;
        }
        if (strlen($this->container['title']) < 0) {
            return false;
        }
        if ($this->container['link_subject_id'] === null) {
            return false;
        }
        if ($this->container['link_subject_type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets note_id
     *
     * @return int
     */
    public function getNoteId()
    {
        return $this->container['note_id'];
    }

    /**
     * Sets note_id
     *
     * @param int $note_id note_id
     *
     * @return $this
     */
    public function setNoteId($note_id)
    {
        $this->container['note_id'] = $note_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        if ((strlen($title) > 500)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Note., must be smaller than or equal to 500.');
        }
        if ((strlen($title) < 0)) {
            throw new \InvalidArgumentException('invalid length for $title when calling Note., must be bigger than or equal to 0.');
        }

        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets body
     *
     * @return string
     */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
     * Sets body
     *
     * @param string $body body
     *
     * @return $this
     */
    public function setBody($body)
    {
        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets link_subject_id
     *
     * @return int
     */
    public function getLinkSubjectId()
    {
        return $this->container['link_subject_id'];
    }

    /**
     * Sets link_subject_id
     *
     * @param int $link_subject_id link_subject_id
     *
     * @return $this
     */
    public function setLinkSubjectId($link_subject_id)
    {
        $this->container['link_subject_id'] = $link_subject_id;

        return $this;
    }

    /**
     * Gets link_subject_type
     *
     * @return string
     */
    public function getLinkSubjectType()
    {
        return $this->container['link_subject_type'];
    }

    /**
     * Sets link_subject_type
     *
     * @param string $link_subject_type link_subject_type
     *
     * @return $this
     */
    public function setLinkSubjectType($link_subject_type)
    {
        $this->container['link_subject_type'] = $link_subject_type;

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
     * Gets visible_to
     *
     * @return string
     */
    public function getVisibleTo()
    {
        return $this->container['visible_to'];
    }

    /**
     * Sets visible_to
     *
     * @param string $visible_to visible_to
     *
     * @return $this
     */
    public function setVisibleTo($visible_to)
    {
        $this->container['visible_to'] = $visible_to;

        return $this;
    }

    /**
     * Gets visible_team_id
     *
     * @return int
     */
    public function getVisibleTeamId()
    {
        return $this->container['visible_team_id'];
    }

    /**
     * Sets visible_team_id
     *
     * @param int $visible_team_id visible_team_id
     *
     * @return $this
     */
    public function setVisibleTeamId($visible_team_id)
    {
        $this->container['visible_team_id'] = $visible_team_id;

        return $this;
    }

    /**
     * Gets visible_user_ids
     *
     * @return string
     */
    public function getVisibleUserIds()
    {
        return $this->container['visible_user_ids'];
    }

    /**
     * Sets visible_user_ids
     *
     * @param string $visible_user_ids visible_user_ids
     *
     * @return $this
     */
    public function setVisibleUserIds($visible_user_ids)
    {
        $this->container['visible_user_ids'] = $visible_user_ids;

        return $this;
    }

    /**
     * Gets notelinks
     *
     * @return \Swagger\Client\Model\APINoteLink[]
     */
    public function getNotelinks()
    {
        return $this->container['notelinks'];
    }

    /**
     * Sets notelinks
     *
     * @param \Swagger\Client\Model\APINoteLink[] $notelinks notelinks
     *
     * @return $this
     */
    public function setNotelinks($notelinks)
    {
        $this->container['notelinks'] = $notelinks;

        return $this;
    }

    /**
     * Gets can_edit
     *
     * @return bool
     */
    public function getCanEdit()
    {
        return $this->container['can_edit'];
    }

    /**
     * Sets can_edit
     *
     * @param bool $can_edit can_edit
     *
     * @return $this
     */
    public function setCanEdit($can_edit)
    {
        $this->container['can_edit'] = $can_edit;

        return $this;
    }

    /**
     * Gets can_delete
     *
     * @return bool
     */
    public function getCanDelete()
    {
        return $this->container['can_delete'];
    }

    /**
     * Sets can_delete
     *
     * @param bool $can_delete can_delete
     *
     * @return $this
     */
    public function setCanDelete($can_delete)
    {
        $this->container['can_delete'] = $can_delete;

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

