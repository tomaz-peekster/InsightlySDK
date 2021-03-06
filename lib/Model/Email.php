<?php
/**
 * Email
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
 * Email Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Email implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Email';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email_id' => 'int',
        'gmail_message_id' => 'string',
        'email_date_utc' => '\DateTime',
        'email_from' => 'string',
        'email_to' => 'string',
        'email_cc' => 'string',
        'subject' => 'string',
        'body' => 'string',
        'body_extract' => 'string',
        'format' => 'string',
        'size' => 'int',
        'owner_user_id' => 'int',
        'date_created_utc' => '\DateTime',
        'visible_to' => 'string',
        'visible_team_id' => 'int',
        'visible_user_ids' => 'string',
        'emaillinks' => '\Swagger\Client\Model\APIEmailLink[]',
        'tags' => '\Swagger\Client\Model\APITag[]',
        'can_edit' => 'bool',
        'can_delete' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email_id' => 'int64',
        'gmail_message_id' => null,
        'email_date_utc' => 'date-time',
        'email_from' => null,
        'email_to' => null,
        'email_cc' => null,
        'subject' => null,
        'body' => null,
        'body_extract' => null,
        'format' => null,
        'size' => 'int64',
        'owner_user_id' => 'int32',
        'date_created_utc' => 'date-time',
        'visible_to' => null,
        'visible_team_id' => 'int64',
        'visible_user_ids' => null,
        'emaillinks' => null,
        'tags' => null,
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
        'email_id' => 'EMAIL_ID',
        'gmail_message_id' => 'GMAIL_MESSAGE_ID',
        'email_date_utc' => 'EMAIL_DATE_UTC',
        'email_from' => 'EMAIL_FROM',
        'email_to' => 'EMAIL_TO',
        'email_cc' => 'EMAIL_CC',
        'subject' => 'SUBJECT',
        'body' => 'BODY',
        'body_extract' => 'BODY_EXTRACT',
        'format' => 'FORMAT',
        'size' => 'SIZE',
        'owner_user_id' => 'OWNER_USER_ID',
        'date_created_utc' => 'DATE_CREATED_UTC',
        'visible_to' => 'VISIBLE_TO',
        'visible_team_id' => 'VISIBLE_TEAM_ID',
        'visible_user_ids' => 'VISIBLE_USER_IDS',
        'emaillinks' => 'EMAILLINKS',
        'tags' => 'TAGS',
        'can_edit' => 'CAN_EDIT',
        'can_delete' => 'CAN_DELETE'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email_id' => 'setEmailId',
        'gmail_message_id' => 'setGmailMessageId',
        'email_date_utc' => 'setEmailDateUtc',
        'email_from' => 'setEmailFrom',
        'email_to' => 'setEmailTo',
        'email_cc' => 'setEmailCc',
        'subject' => 'setSubject',
        'body' => 'setBody',
        'body_extract' => 'setBodyExtract',
        'format' => 'setFormat',
        'size' => 'setSize',
        'owner_user_id' => 'setOwnerUserId',
        'date_created_utc' => 'setDateCreatedUtc',
        'visible_to' => 'setVisibleTo',
        'visible_team_id' => 'setVisibleTeamId',
        'visible_user_ids' => 'setVisibleUserIds',
        'emaillinks' => 'setEmaillinks',
        'tags' => 'setTags',
        'can_edit' => 'setCanEdit',
        'can_delete' => 'setCanDelete'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email_id' => 'getEmailId',
        'gmail_message_id' => 'getGmailMessageId',
        'email_date_utc' => 'getEmailDateUtc',
        'email_from' => 'getEmailFrom',
        'email_to' => 'getEmailTo',
        'email_cc' => 'getEmailCc',
        'subject' => 'getSubject',
        'body' => 'getBody',
        'body_extract' => 'getBodyExtract',
        'format' => 'getFormat',
        'size' => 'getSize',
        'owner_user_id' => 'getOwnerUserId',
        'date_created_utc' => 'getDateCreatedUtc',
        'visible_to' => 'getVisibleTo',
        'visible_team_id' => 'getVisibleTeamId',
        'visible_user_ids' => 'getVisibleUserIds',
        'emaillinks' => 'getEmaillinks',
        'tags' => 'getTags',
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
        $this->container['email_id'] = isset($data['email_id']) ? $data['email_id'] : null;
        $this->container['gmail_message_id'] = isset($data['gmail_message_id']) ? $data['gmail_message_id'] : null;
        $this->container['email_date_utc'] = isset($data['email_date_utc']) ? $data['email_date_utc'] : null;
        $this->container['email_from'] = isset($data['email_from']) ? $data['email_from'] : null;
        $this->container['email_to'] = isset($data['email_to']) ? $data['email_to'] : null;
        $this->container['email_cc'] = isset($data['email_cc']) ? $data['email_cc'] : null;
        $this->container['subject'] = isset($data['subject']) ? $data['subject'] : null;
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['body_extract'] = isset($data['body_extract']) ? $data['body_extract'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['date_created_utc'] = isset($data['date_created_utc']) ? $data['date_created_utc'] : null;
        $this->container['visible_to'] = isset($data['visible_to']) ? $data['visible_to'] : null;
        $this->container['visible_team_id'] = isset($data['visible_team_id']) ? $data['visible_team_id'] : null;
        $this->container['visible_user_ids'] = isset($data['visible_user_ids']) ? $data['visible_user_ids'] : null;
        $this->container['emaillinks'] = isset($data['emaillinks']) ? $data['emaillinks'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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

        if (!is_null($this->container['gmail_message_id']) && (strlen($this->container['gmail_message_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'gmail_message_id', the character length must be smaller than or equal to 20.";
        }

        if (!is_null($this->container['gmail_message_id']) && (strlen($this->container['gmail_message_id']) < 0)) {
            $invalidProperties[] = "invalid value for 'gmail_message_id', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['email_from']) && (strlen($this->container['email_from']) > 500)) {
            $invalidProperties[] = "invalid value for 'email_from', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['email_from']) && (strlen($this->container['email_from']) < 0)) {
            $invalidProperties[] = "invalid value for 'email_from', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['email_to']) && (strlen($this->container['email_to']) > 500)) {
            $invalidProperties[] = "invalid value for 'email_to', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['email_to']) && (strlen($this->container['email_to']) < 0)) {
            $invalidProperties[] = "invalid value for 'email_to', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['email_cc']) && (strlen($this->container['email_cc']) > 500)) {
            $invalidProperties[] = "invalid value for 'email_cc', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['email_cc']) && (strlen($this->container['email_cc']) < 0)) {
            $invalidProperties[] = "invalid value for 'email_cc', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['subject']) && (strlen($this->container['subject']) > 500)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 500.";
        }

        if (!is_null($this->container['subject']) && (strlen($this->container['subject']) < 0)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['body']) && (strlen($this->container['body']) > 1000)) {
            $invalidProperties[] = "invalid value for 'body', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['body']) && (strlen($this->container['body']) < 0)) {
            $invalidProperties[] = "invalid value for 'body', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['body_extract']) && (strlen($this->container['body_extract']) > 1000)) {
            $invalidProperties[] = "invalid value for 'body_extract', the character length must be smaller than or equal to 1000.";
        }

        if (!is_null($this->container['body_extract']) && (strlen($this->container['body_extract']) < 0)) {
            $invalidProperties[] = "invalid value for 'body_extract', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['format']) && (strlen($this->container['format']) > 5)) {
            $invalidProperties[] = "invalid value for 'format', the character length must be smaller than or equal to 5.";
        }

        if (!is_null($this->container['format']) && (strlen($this->container['format']) < 0)) {
            $invalidProperties[] = "invalid value for 'format', the character length must be bigger than or equal to 0.";
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

        if (strlen($this->container['gmail_message_id']) > 20) {
            return false;
        }
        if (strlen($this->container['gmail_message_id']) < 0) {
            return false;
        }
        if (strlen($this->container['email_from']) > 500) {
            return false;
        }
        if (strlen($this->container['email_from']) < 0) {
            return false;
        }
        if (strlen($this->container['email_to']) > 500) {
            return false;
        }
        if (strlen($this->container['email_to']) < 0) {
            return false;
        }
        if (strlen($this->container['email_cc']) > 500) {
            return false;
        }
        if (strlen($this->container['email_cc']) < 0) {
            return false;
        }
        if (strlen($this->container['subject']) > 500) {
            return false;
        }
        if (strlen($this->container['subject']) < 0) {
            return false;
        }
        if (strlen($this->container['body']) > 1000) {
            return false;
        }
        if (strlen($this->container['body']) < 0) {
            return false;
        }
        if (strlen($this->container['body_extract']) > 1000) {
            return false;
        }
        if (strlen($this->container['body_extract']) < 0) {
            return false;
        }
        if (strlen($this->container['format']) > 5) {
            return false;
        }
        if (strlen($this->container['format']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets email_id
     *
     * @return int
     */
    public function getEmailId()
    {
        return $this->container['email_id'];
    }

    /**
     * Sets email_id
     *
     * @param int $email_id email_id
     *
     * @return $this
     */
    public function setEmailId($email_id)
    {
        $this->container['email_id'] = $email_id;

        return $this;
    }

    /**
     * Gets gmail_message_id
     *
     * @return string
     */
    public function getGmailMessageId()
    {
        return $this->container['gmail_message_id'];
    }

    /**
     * Sets gmail_message_id
     *
     * @param string $gmail_message_id gmail_message_id
     *
     * @return $this
     */
    public function setGmailMessageId($gmail_message_id)
    {
        if (!is_null($gmail_message_id) && (strlen($gmail_message_id) > 20)) {
            throw new \InvalidArgumentException('invalid length for $gmail_message_id when calling Email., must be smaller than or equal to 20.');
        }
        if (!is_null($gmail_message_id) && (strlen($gmail_message_id) < 0)) {
            throw new \InvalidArgumentException('invalid length for $gmail_message_id when calling Email., must be bigger than or equal to 0.');
        }

        $this->container['gmail_message_id'] = $gmail_message_id;

        return $this;
    }

    /**
     * Gets email_date_utc
     *
     * @return \DateTime
     */
    public function getEmailDateUtc()
    {
        return $this->container['email_date_utc'];
    }

    /**
     * Sets email_date_utc
     *
     * @param \DateTime $email_date_utc email_date_utc
     *
     * @return $this
     */
    public function setEmailDateUtc($email_date_utc)
    {
        $this->container['email_date_utc'] = $email_date_utc;

        return $this;
    }

    /**
     * Gets email_from
     *
     * @return string
     */
    public function getEmailFrom()
    {
        return $this->container['email_from'];
    }

    /**
     * Sets email_from
     *
     * @param string $email_from email_from
     *
     * @return $this
     */
    public function setEmailFrom($email_from)
    {
        if (!is_null($email_from) && (strlen($email_from) > 500)) {
            throw new \InvalidArgumentException('invalid length for $email_from when calling Email., must be smaller than or equal to 500.');
        }
        if (!is_null($email_from) && (strlen($email_from) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email_from when calling Email., must be bigger than or equal to 0.');
        }

        $this->container['email_from'] = $email_from;

        return $this;
    }

    /**
     * Gets email_to
     *
     * @return string
     */
    public function getEmailTo()
    {
        return $this->container['email_to'];
    }

    /**
     * Sets email_to
     *
     * @param string $email_to email_to
     *
     * @return $this
     */
    public function setEmailTo($email_to)
    {
        if (!is_null($email_to) && (strlen($email_to) > 500)) {
            throw new \InvalidArgumentException('invalid length for $email_to when calling Email., must be smaller than or equal to 500.');
        }
        if (!is_null($email_to) && (strlen($email_to) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email_to when calling Email., must be bigger than or equal to 0.');
        }

        $this->container['email_to'] = $email_to;

        return $this;
    }

    /**
     * Gets email_cc
     *
     * @return string
     */
    public function getEmailCc()
    {
        return $this->container['email_cc'];
    }

    /**
     * Sets email_cc
     *
     * @param string $email_cc email_cc
     *
     * @return $this
     */
    public function setEmailCc($email_cc)
    {
        if (!is_null($email_cc) && (strlen($email_cc) > 500)) {
            throw new \InvalidArgumentException('invalid length for $email_cc when calling Email., must be smaller than or equal to 500.');
        }
        if (!is_null($email_cc) && (strlen($email_cc) < 0)) {
            throw new \InvalidArgumentException('invalid length for $email_cc when calling Email., must be bigger than or equal to 0.');
        }

        $this->container['email_cc'] = $email_cc;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string $subject subject
     *
     * @return $this
     */
    public function setSubject($subject)
    {
        if (!is_null($subject) && (strlen($subject) > 500)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling Email., must be smaller than or equal to 500.');
        }
        if (!is_null($subject) && (strlen($subject) < 0)) {
            throw new \InvalidArgumentException('invalid length for $subject when calling Email., must be bigger than or equal to 0.');
        }

        $this->container['subject'] = $subject;

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
        if (!is_null($body) && (strlen($body) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $body when calling Email., must be smaller than or equal to 1000.');
        }
        if (!is_null($body) && (strlen($body) < 0)) {
            throw new \InvalidArgumentException('invalid length for $body when calling Email., must be bigger than or equal to 0.');
        }

        $this->container['body'] = $body;

        return $this;
    }

    /**
     * Gets body_extract
     *
     * @return string
     */
    public function getBodyExtract()
    {
        return $this->container['body_extract'];
    }

    /**
     * Sets body_extract
     *
     * @param string $body_extract body_extract
     *
     * @return $this
     */
    public function setBodyExtract($body_extract)
    {
        if (!is_null($body_extract) && (strlen($body_extract) > 1000)) {
            throw new \InvalidArgumentException('invalid length for $body_extract when calling Email., must be smaller than or equal to 1000.');
        }
        if (!is_null($body_extract) && (strlen($body_extract) < 0)) {
            throw new \InvalidArgumentException('invalid length for $body_extract when calling Email., must be bigger than or equal to 0.');
        }

        $this->container['body_extract'] = $body_extract;

        return $this;
    }

    /**
     * Gets format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
     * Sets format
     *
     * @param string $format format
     *
     * @return $this
     */
    public function setFormat($format)
    {
        if (!is_null($format) && (strlen($format) > 5)) {
            throw new \InvalidArgumentException('invalid length for $format when calling Email., must be smaller than or equal to 5.');
        }
        if (!is_null($format) && (strlen($format) < 0)) {
            throw new \InvalidArgumentException('invalid length for $format when calling Email., must be bigger than or equal to 0.');
        }

        $this->container['format'] = $format;

        return $this;
    }

    /**
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
     * Sets size
     *
     * @param int $size size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

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
     * Gets emaillinks
     *
     * @return \Swagger\Client\Model\APIEmailLink[]
     */
    public function getEmaillinks()
    {
        return $this->container['emaillinks'];
    }

    /**
     * Sets emaillinks
     *
     * @param \Swagger\Client\Model\APIEmailLink[] $emaillinks emaillinks
     *
     * @return $this
     */
    public function setEmaillinks($emaillinks)
    {
        $this->container['emaillinks'] = $emaillinks;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return \Swagger\Client\Model\APITag[]
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param \Swagger\Client\Model\APITag[] $tags tags
     *
     * @return $this
     */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;

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

