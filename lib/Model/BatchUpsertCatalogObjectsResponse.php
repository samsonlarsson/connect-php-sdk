<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * BatchUpsertCatalogObjectsResponse Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class BatchUpsertCatalogObjectsResponse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'errors' => '\SquareConnect\Model\Error[]',
        'objects' => '\SquareConnect\Model\CatalogObject[]',
        'updated_at' => 'string',
        'id_mappings' => '\SquareConnect\Model\CatalogIdMapping[]'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'errors' => 'errors',
        'objects' => 'objects',
        'updated_at' => 'updated_at',
        'id_mappings' => 'id_mappings'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'errors' => 'setErrors',
        'objects' => 'setObjects',
        'updated_at' => 'setUpdatedAt',
        'id_mappings' => 'setIdMappings'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'errors' => 'getErrors',
        'objects' => 'getObjects',
        'updated_at' => 'getUpdatedAt',
        'id_mappings' => 'getIdMappings'
    );
  
    /**
      * $errors Information on any errors that encountered.
      * @var \SquareConnect\Model\Error[]
      */
    protected $errors;
    /**
      * $objects The created successfully created CatalogObjects.
      * @var \SquareConnect\Model\CatalogObject[]
      */
    protected $objects;
    /**
      * $updated_at The database [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates) of this update in RFC 3339 format, e.g., \"2016-09-04T23:59:33.123Z\".
      * @var string
      */
    protected $updated_at;
    /**
      * $id_mappings The mapping between client and server IDs for this upsert.
      * @var \SquareConnect\Model\CatalogIdMapping[]
      */
    protected $id_mappings;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["errors"])) {
              $this->errors = $data["errors"];
            } else {
              $this->errors = null;
            }
            if (isset($data["objects"])) {
              $this->objects = $data["objects"];
            } else {
              $this->objects = null;
            }
            if (isset($data["updated_at"])) {
              $this->updated_at = $data["updated_at"];
            } else {
              $this->updated_at = null;
            }
            if (isset($data["id_mappings"])) {
              $this->id_mappings = $data["id_mappings"];
            } else {
              $this->id_mappings = null;
            }
        }
    }
    /**
     * Gets errors
     * @return \SquareConnect\Model\Error[]
     */
    public function getErrors()
    {
        return $this->errors;
    }
  
    /**
     * Sets errors
     * @param \SquareConnect\Model\Error[] $errors Information on any errors that encountered.
     * @return $this
     */
    public function setErrors($errors)
    {
        $this->errors = $errors;
        return $this;
    }
    /**
     * Gets objects
     * @return \SquareConnect\Model\CatalogObject[]
     */
    public function getObjects()
    {
        return $this->objects;
    }
  
    /**
     * Sets objects
     * @param \SquareConnect\Model\CatalogObject[] $objects The created successfully created CatalogObjects.
     * @return $this
     */
    public function setObjects($objects)
    {
        $this->objects = $objects;
        return $this;
    }
    /**
     * Gets updated_at
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }
  
    /**
     * Sets updated_at
     * @param string $updated_at The database [timestamp](https://developer.squareup.com/docs/build-basics/working-with-dates) of this update in RFC 3339 format, e.g., \"2016-09-04T23:59:33.123Z\".
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->updated_at = $updated_at;
        return $this;
    }
    /**
     * Gets id_mappings
     * @return \SquareConnect\Model\CatalogIdMapping[]
     */
    public function getIdMappings()
    {
        return $this->id_mappings;
    }
  
    /**
     * Sets id_mappings
     * @param \SquareConnect\Model\CatalogIdMapping[] $id_mappings The mapping between client and server IDs for this upsert.
     * @return $this
     */
    public function setIdMappings($id_mappings)
    {
        $this->id_mappings = $id_mappings;
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
