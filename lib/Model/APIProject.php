<?php
/**
 * APIProject
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
 * APIProject Class Doc Comment
 *
 * @category Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class APIProject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'APIProject';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'project_id' => 'int',
        'project_name' => 'string',
        'status' => 'string',
        'project_details' => 'string',
        'opportunity_id' => 'int',
        'started_date' => '\DateTime',
        'completed_date' => '\DateTime',
        'image_url' => 'string',
        'responsible_user_id' => 'int',
        'owner_user_id' => 'int',
        'date_created_utc' => '\DateTime',
        'date_updated_utc' => '\DateTime',
        'category_id' => 'int',
        'pipeline_id' => 'int',
        'stage_id' => 'int',
        'visible_to' => 'string',
        'visible_team_id' => 'int',
        'visible_user_ids' => 'string',
        'customfields' => '\Swagger\Client\Model\APICustomField[]',
        'tags' => '\Swagger\Client\Model\APITag[]',
        'links' => '\Swagger\Client\Model\APILink[]',
        'can_edit' => 'bool',
        'can_delete' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'project_id' => 'int64',
        'project_name' => null,
        'status' => null,
        'project_details' => null,
        'opportunity_id' => 'int64',
        'started_date' => 'date-time',
        'completed_date' => 'date-time',
        'image_url' => null,
        'responsible_user_id' => 'int32',
        'owner_user_id' => 'int32',
        'date_created_utc' => 'date-time',
        'date_updated_utc' => 'date-time',
        'category_id' => 'int64',
        'pipeline_id' => 'int64',
        'stage_id' => 'int64',
        'visible_to' => null,
        'visible_team_id' => 'int64',
        'visible_user_ids' => null,
        'customfields' => null,
        'tags' => null,
        'links' => null,
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
        'project_id' => 'PROJECT_ID',
        'project_name' => 'PROJECT_NAME',
        'status' => 'STATUS',
        'project_details' => 'PROJECT_DETAILS',
        'opportunity_id' => 'OPPORTUNITY_ID',
        'started_date' => 'STARTED_DATE',
        'completed_date' => 'COMPLETED_DATE',
        'image_url' => 'IMAGE_URL',
        'responsible_user_id' => 'RESPONSIBLE_USER_ID',
        'owner_user_id' => 'OWNER_USER_ID',
        'date_created_utc' => 'DATE_CREATED_UTC',
        'date_updated_utc' => 'DATE_UPDATED_UTC',
        'category_id' => 'CATEGORY_ID',
        'pipeline_id' => 'PIPELINE_ID',
        'stage_id' => 'STAGE_ID',
        'visible_to' => 'VISIBLE_TO',
        'visible_team_id' => 'VISIBLE_TEAM_ID',
        'visible_user_ids' => 'VISIBLE_USER_IDS',
        'customfields' => 'CUSTOMFIELDS',
        'tags' => 'TAGS',
        'links' => 'LINKS',
        'can_edit' => 'CAN_EDIT',
        'can_delete' => 'CAN_DELETE'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'project_id' => 'setProjectId',
        'project_name' => 'setProjectName',
        'status' => 'setStatus',
        'project_details' => 'setProjectDetails',
        'opportunity_id' => 'setOpportunityId',
        'started_date' => 'setStartedDate',
        'completed_date' => 'setCompletedDate',
        'image_url' => 'setImageUrl',
        'responsible_user_id' => 'setResponsibleUserId',
        'owner_user_id' => 'setOwnerUserId',
        'date_created_utc' => 'setDateCreatedUtc',
        'date_updated_utc' => 'setDateUpdatedUtc',
        'category_id' => 'setCategoryId',
        'pipeline_id' => 'setPipelineId',
        'stage_id' => 'setStageId',
        'visible_to' => 'setVisibleTo',
        'visible_team_id' => 'setVisibleTeamId',
        'visible_user_ids' => 'setVisibleUserIds',
        'customfields' => 'setCustomfields',
        'tags' => 'setTags',
        'links' => 'setLinks',
        'can_edit' => 'setCanEdit',
        'can_delete' => 'setCanDelete'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'project_id' => 'getProjectId',
        'project_name' => 'getProjectName',
        'status' => 'getStatus',
        'project_details' => 'getProjectDetails',
        'opportunity_id' => 'getOpportunityId',
        'started_date' => 'getStartedDate',
        'completed_date' => 'getCompletedDate',
        'image_url' => 'getImageUrl',
        'responsible_user_id' => 'getResponsibleUserId',
        'owner_user_id' => 'getOwnerUserId',
        'date_created_utc' => 'getDateCreatedUtc',
        'date_updated_utc' => 'getDateUpdatedUtc',
        'category_id' => 'getCategoryId',
        'pipeline_id' => 'getPipelineId',
        'stage_id' => 'getStageId',
        'visible_to' => 'getVisibleTo',
        'visible_team_id' => 'getVisibleTeamId',
        'visible_user_ids' => 'getVisibleUserIds',
        'customfields' => 'getCustomfields',
        'tags' => 'getTags',
        'links' => 'getLinks',
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
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['project_name'] = isset($data['project_name']) ? $data['project_name'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['project_details'] = isset($data['project_details']) ? $data['project_details'] : null;
        $this->container['opportunity_id'] = isset($data['opportunity_id']) ? $data['opportunity_id'] : null;
        $this->container['started_date'] = isset($data['started_date']) ? $data['started_date'] : null;
        $this->container['completed_date'] = isset($data['completed_date']) ? $data['completed_date'] : null;
        $this->container['image_url'] = isset($data['image_url']) ? $data['image_url'] : null;
        $this->container['responsible_user_id'] = isset($data['responsible_user_id']) ? $data['responsible_user_id'] : null;
        $this->container['owner_user_id'] = isset($data['owner_user_id']) ? $data['owner_user_id'] : null;
        $this->container['date_created_utc'] = isset($data['date_created_utc']) ? $data['date_created_utc'] : null;
        $this->container['date_updated_utc'] = isset($data['date_updated_utc']) ? $data['date_updated_utc'] : null;
        $this->container['category_id'] = isset($data['category_id']) ? $data['category_id'] : null;
        $this->container['pipeline_id'] = isset($data['pipeline_id']) ? $data['pipeline_id'] : null;
        $this->container['stage_id'] = isset($data['stage_id']) ? $data['stage_id'] : null;
        $this->container['visible_to'] = isset($data['visible_to']) ? $data['visible_to'] : null;
        $this->container['visible_team_id'] = isset($data['visible_team_id']) ? $data['visible_team_id'] : null;
        $this->container['visible_user_ids'] = isset($data['visible_user_ids']) ? $data['visible_user_ids'] : null;
        $this->container['customfields'] = isset($data['customfields']) ? $data['customfields'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
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

        if ($this->container['project_name'] === null) {
            $invalidProperties[] = "'project_name' can't be null";
        }
        if ((strlen($this->container['project_name']) > 255)) {
            $invalidProperties[] = "invalid value for 'project_name', the character length must be smaller than or equal to 255.";
        }

        if ((strlen($this->container['project_name']) < 0)) {
            $invalidProperties[] = "invalid value for 'project_name', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if (!is_null($this->container['project_details']) && (strlen($this->container['project_details']) > 4000)) {
            $invalidProperties[] = "invalid value for 'project_details', the character length must be smaller than or equal to 4000.";
        }

        if (!is_null($this->container['project_details']) && (strlen($this->container['project_details']) < 0)) {
            $invalidProperties[] = "invalid value for 'project_details', the character length must be bigger than or equal to 0.";
        }

        if (!is_null($this->container['image_url']) && (strlen($this->container['image_url']) > 255)) {
            $invalidProperties[] = "invalid value for 'image_url', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['image_url']) && (strlen($this->container['image_url']) < 0)) {
            $invalidProperties[] = "invalid value for 'image_url', the character length must be bigger than or equal to 0.";
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

        if ($this->container['project_name'] === null) {
            return false;
        }
        if (strlen($this->container['project_name']) > 255) {
            return false;
        }
        if (strlen($this->container['project_name']) < 0) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        if (strlen($this->container['project_details']) > 4000) {
            return false;
        }
        if (strlen($this->container['project_details']) < 0) {
            return false;
        }
        if (strlen($this->container['image_url']) > 255) {
            return false;
        }
        if (strlen($this->container['image_url']) < 0) {
            return false;
        }
        return true;
    }


    /**
     * Gets project_id
     *
     * @return int
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param int $project_id project_id
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets project_name
     *
     * @return string
     */
    public function getProjectName()
    {
        return $this->container['project_name'];
    }

    /**
     * Sets project_name
     *
     * @param string $project_name project_name
     *
     * @return $this
     */
    public function setProjectName($project_name)
    {
        if ((strlen($project_name) > 255)) {
            throw new \InvalidArgumentException('invalid length for $project_name when calling APIProject., must be smaller than or equal to 255.');
        }
        if ((strlen($project_name) < 0)) {
            throw new \InvalidArgumentException('invalid length for $project_name when calling APIProject., must be bigger than or equal to 0.');
        }

        $this->container['project_name'] = $project_name;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets project_details
     *
     * @return string
     */
    public function getProjectDetails()
    {
        return $this->container['project_details'];
    }

    /**
     * Sets project_details
     *
     * @param string $project_details project_details
     *
     * @return $this
     */
    public function setProjectDetails($project_details)
    {
        if (!is_null($project_details) && (strlen($project_details) > 4000)) {
            throw new \InvalidArgumentException('invalid length for $project_details when calling APIProject., must be smaller than or equal to 4000.');
        }
        if (!is_null($project_details) && (strlen($project_details) < 0)) {
            throw new \InvalidArgumentException('invalid length for $project_details when calling APIProject., must be bigger than or equal to 0.');
        }

        $this->container['project_details'] = $project_details;

        return $this;
    }

    /**
     * Gets opportunity_id
     *
     * @return int
     */
    public function getOpportunityId()
    {
        return $this->container['opportunity_id'];
    }

    /**
     * Sets opportunity_id
     *
     * @param int $opportunity_id opportunity_id
     *
     * @return $this
     */
    public function setOpportunityId($opportunity_id)
    {
        $this->container['opportunity_id'] = $opportunity_id;

        return $this;
    }

    /**
     * Gets started_date
     *
     * @return \DateTime
     */
    public function getStartedDate()
    {
        return $this->container['started_date'];
    }

    /**
     * Sets started_date
     *
     * @param \DateTime $started_date started_date
     *
     * @return $this
     */
    public function setStartedDate($started_date)
    {
        $this->container['started_date'] = $started_date;

        return $this;
    }

    /**
     * Gets completed_date
     *
     * @return \DateTime
     */
    public function getCompletedDate()
    {
        return $this->container['completed_date'];
    }

    /**
     * Sets completed_date
     *
     * @param \DateTime $completed_date completed_date
     *
     * @return $this
     */
    public function setCompletedDate($completed_date)
    {
        $this->container['completed_date'] = $completed_date;

        return $this;
    }

    /**
     * Gets image_url
     *
     * @return string
     */
    public function getImageUrl()
    {
        return $this->container['image_url'];
    }

    /**
     * Sets image_url
     *
     * @param string $image_url image_url
     *
     * @return $this
     */
    public function setImageUrl($image_url)
    {
        if (!is_null($image_url) && (strlen($image_url) > 255)) {
            throw new \InvalidArgumentException('invalid length for $image_url when calling APIProject., must be smaller than or equal to 255.');
        }
        if (!is_null($image_url) && (strlen($image_url) < 0)) {
            throw new \InvalidArgumentException('invalid length for $image_url when calling APIProject., must be bigger than or equal to 0.');
        }

        $this->container['image_url'] = $image_url;

        return $this;
    }

    /**
     * Gets responsible_user_id
     *
     * @return int
     */
    public function getResponsibleUserId()
    {
        return $this->container['responsible_user_id'];
    }

    /**
     * Sets responsible_user_id
     *
     * @param int $responsible_user_id responsible_user_id
     *
     * @return $this
     */
    public function setResponsibleUserId($responsible_user_id)
    {
        $this->container['responsible_user_id'] = $responsible_user_id;

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
     * Gets category_id
     *
     * @return int
     */
    public function getCategoryId()
    {
        return $this->container['category_id'];
    }

    /**
     * Sets category_id
     *
     * @param int $category_id category_id
     *
     * @return $this
     */
    public function setCategoryId($category_id)
    {
        $this->container['category_id'] = $category_id;

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
     * Gets customfields
     *
     * @return \Swagger\Client\Model\APICustomField[]
     */
    public function getCustomfields()
    {
        return $this->container['customfields'];
    }

    /**
     * Sets customfields
     *
     * @param \Swagger\Client\Model\APICustomField[] $customfields customfields
     *
     * @return $this
     */
    public function setCustomfields($customfields)
    {
        $this->container['customfields'] = $customfields;

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
     * Gets links
     *
     * @return \Swagger\Client\Model\APILink[]
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     *
     * @param \Swagger\Client\Model\APILink[] $links links
     *
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

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

