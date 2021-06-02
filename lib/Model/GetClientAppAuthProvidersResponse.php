<?php
/**
 * GetClientAppAuthProvidersResponse
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  Jalismrs\Stalactite\Client\Auth
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Stalactite Auth API client
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: 1.0.1-dev.3482ce7575f291f4456d47231ea35d7e15dbc877
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Jalismrs\Stalactite\Client\Auth\Model;

use \ArrayAccess;
use \Jalismrs\Stalactite\Client\Auth\ObjectSerializer;

/**
 * GetClientAppAuthProvidersResponse Class Doc Comment
 *
 * @category Class
 * @package  Jalismrs\Stalactite\Client\Auth
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class GetClientAppAuthProvidersResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'GetClientAppAuthProvidersResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'google' => '\Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider[]',
        'firebase' => '\Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'google' => null,
        'firebase' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'google' => 'google',
        'firebase' => 'firebase'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'google' => 'setGoogle',
        'firebase' => 'setFirebase'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'google' => 'getGoogle',
        'firebase' => 'getFirebase'
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
        return self::$openAPIModelName;
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
        $this->container['google'] = $data['google'] ?? null;
        $this->container['firebase'] = $data['firebase'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['google'] === null) {
            $invalidProperties[] = "'google' can't be null";
        }
        if ($this->container['firebase'] === null) {
            $invalidProperties[] = "'firebase' can't be null";
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
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets google
     *
     * @return \Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider[]
     */
    public function getGoogle()
    {
        return $this->container['google'];
    }

    /**
     * Sets google
     *
     * @param \Jalismrs\Stalactite\Client\Auth\Model\GoogleAuthProvider[] $google google
     *
     * @return self
     */
    public function setGoogle($google)
    {
        $this->container['google'] = $google;

        return $this;
    }

    /**
     * Gets firebase
     *
     * @return \Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider[]
     */
    public function getFirebase()
    {
        return $this->container['firebase'];
    }

    /**
     * Sets firebase
     *
     * @param \Jalismrs\Stalactite\Client\Auth\Model\FirebaseAuthProvider[] $firebase firebase
     *
     * @return self
     */
    public function setFirebase($firebase)
    {
        $this->container['firebase'] = $firebase;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
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
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


