<?php
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace SquareConnect\Model;

use \ArrayAccess;
/**
 * RetrieveCatalogObjectRequest Class Doc Comment
 *
 * @category Class
 * @package  SquareConnect
 * @author   Square Inc.
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache License v2
 * @link     https://squareup.com/developers
 */
class RetrieveCatalogObjectRequest implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'include_related_objects' => 'bool'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'include_related_objects' => 'include_related_objects'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'include_related_objects' => 'setIncludeRelatedObjects'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'include_related_objects' => 'getIncludeRelatedObjects'
    );
  
    /**
      * $include_related_objects If `true`, the response will include additional objects that are related to the requested object, as follows:  If the `object` field of the response contains a `CatalogItem`, its associated `CatalogCategory](#type-catalogcategory), [CatalogTax`es, `CatalogImage](#type-catalogimage)s and [CatalogModifierList`s will be returned in the `related_objects` field of the response. If the `object` field of the response contains a `CatalogItemVariation`, its parent `CatalogItem` will be returned in the `related_objects` field of  the response.  Default value: `false`
      * @var bool
      */
    protected $include_related_objects;

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initializing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            if (isset($data["include_related_objects"])) {
              $this->include_related_objects = $data["include_related_objects"];
            } else {
              $this->include_related_objects = null;
            }
        }
    }
    /**
     * Gets include_related_objects
     * @return bool
     */
    public function getIncludeRelatedObjects()
    {
        return $this->include_related_objects;
    }
  
    /**
     * Sets include_related_objects
     * @param bool $include_related_objects If `true`, the response will include additional objects that are related to the requested object, as follows:  If the `object` field of the response contains a `CatalogItem`, its associated `CatalogCategory](#type-catalogcategory), [CatalogTax`es, `CatalogImage](#type-catalogimage)s and [CatalogModifierList`s will be returned in the `related_objects` field of the response. If the `object` field of the response contains a `CatalogItemVariation`, its parent `CatalogItem` will be returned in the `related_objects` field of  the response.  Default value: `false`
     * @return $this
     */
    public function setIncludeRelatedObjects($include_related_objects)
    {
        $this->include_related_objects = $include_related_objects;
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
