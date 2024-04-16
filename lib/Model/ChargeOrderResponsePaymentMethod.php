<?php
/**
 * ChargeOrderResponsePaymentMethod
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  DigitalFemsa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Femsa API
 *
 * Femsa sdk
 *
 * The version of the OpenAPI document: 2.1.0
 * Contact: engineering@femsa.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.2.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DigitalFemsa\Model;

use \ArrayAccess;
use \DigitalFemsa\ObjectSerializer;

/**
 * ChargeOrderResponsePaymentMethod Class Doc Comment
 *
 * @category Class
 * @package  DigitalFemsa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ChargeOrderResponsePaymentMethod implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = 'object';

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'charge_order_response_payment_method';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'type' => 'string',
        'object' => 'string',
        'auth_code' => 'int',
        'cashier_id' => 'string',
        'reference' => 'string',
        'barcode_url' => 'string',
        'expires_at' => 'int',
        'service_name' => 'string',
        'store' => 'string',
        'store_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'type' => null,
        'object' => null,
        'auth_code' => null,
        'cashier_id' => null,
        'reference' => null,
        'barcode_url' => null,
        'expires_at' => 'int64',
        'service_name' => null,
        'store' => null,
        'store_name' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'type' => false,
        'object' => false,
        'auth_code' => true,
        'cashier_id' => true,
        'reference' => false,
        'barcode_url' => false,
        'expires_at' => false,
        'service_name' => false,
        'store' => true,
        'store_name' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'type' => 'type',
        'object' => 'object',
        'auth_code' => 'auth_code',
        'cashier_id' => 'cashier_id',
        'reference' => 'reference',
        'barcode_url' => 'barcode_url',
        'expires_at' => 'expires_at',
        'service_name' => 'service_name',
        'store' => 'store',
        'store_name' => 'store_name'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'object' => 'setObject',
        'auth_code' => 'setAuthCode',
        'cashier_id' => 'setCashierId',
        'reference' => 'setReference',
        'barcode_url' => 'setBarcodeUrl',
        'expires_at' => 'setExpiresAt',
        'service_name' => 'setServiceName',
        'store' => 'setStore',
        'store_name' => 'setStoreName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'object' => 'getObject',
        'auth_code' => 'getAuthCode',
        'cashier_id' => 'getCashierId',
        'reference' => 'getReference',
        'barcode_url' => 'getBarcodeUrl',
        'expires_at' => 'getExpiresAt',
        'service_name' => 'getServiceName',
        'store' => 'getStore',
        'store_name' => 'getStoreName'
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
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], null);
        $this->setIfExists('auth_code', $data ?? [], null);
        $this->setIfExists('cashier_id', $data ?? [], null);
        $this->setIfExists('reference', $data ?? [], null);
        $this->setIfExists('barcode_url', $data ?? [], null);
        $this->setIfExists('expires_at', $data ?? [], null);
        $this->setIfExists('service_name', $data ?? [], null);
        $this->setIfExists('store', $data ?? [], null);
        $this->setIfExists('store_name', $data ?? [], null);

        // Initialize discriminator property with the model name.
        $this->container['object'] = static::$openAPIModelName;
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['object'] === null) {
            $invalidProperties[] = "'object' can't be null";
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
     * Gets type
     *
     * @return string|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets object
     *
     * @return string
     */
    public function getObject()
    {
        return $this->container['object'];
    }

    /**
     * Sets object
     *
     * @param string $object object
     *
     * @return self
     */
    public function setObject($object)
    {
        if (is_null($object)) {
            throw new \InvalidArgumentException('non-nullable object cannot be null');
        }
        $this->container['object'] = $object;

        return $this;
    }

    /**
     * Gets auth_code
     *
     * @return int|null
     */
    public function getAuthCode()
    {
        return $this->container['auth_code'];
    }

    /**
     * Sets auth_code
     *
     * @param int|null $auth_code auth_code
     *
     * @return self
     */
    public function setAuthCode($auth_code)
    {
        if (is_null($auth_code)) {
            array_push($this->openAPINullablesSetToNull, 'auth_code');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('auth_code', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['auth_code'] = $auth_code;

        return $this;
    }

    /**
     * Gets cashier_id
     *
     * @return string|null
     */
    public function getCashierId()
    {
        return $this->container['cashier_id'];
    }

    /**
     * Sets cashier_id
     *
     * @param string|null $cashier_id cashier_id
     *
     * @return self
     */
    public function setCashierId($cashier_id)
    {
        if (is_null($cashier_id)) {
            array_push($this->openAPINullablesSetToNull, 'cashier_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cashier_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cashier_id'] = $cashier_id;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string|null
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string|null $reference reference
     *
     * @return self
     */
    public function setReference($reference)
    {
        if (is_null($reference)) {
            throw new \InvalidArgumentException('non-nullable reference cannot be null');
        }
        $this->container['reference'] = $reference;

        return $this;
    }

    /**
     * Gets barcode_url
     *
     * @return string|null
     */
    public function getBarcodeUrl()
    {
        return $this->container['barcode_url'];
    }

    /**
     * Sets barcode_url
     *
     * @param string|null $barcode_url barcode_url
     *
     * @return self
     */
    public function setBarcodeUrl($barcode_url)
    {
        if (is_null($barcode_url)) {
            throw new \InvalidArgumentException('non-nullable barcode_url cannot be null');
        }
        $this->container['barcode_url'] = $barcode_url;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return int|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param int|null $expires_at expires_at
     *
     * @return self
     */
    public function setExpiresAt($expires_at)
    {
        if (is_null($expires_at)) {
            throw new \InvalidArgumentException('non-nullable expires_at cannot be null');
        }
        $this->container['expires_at'] = $expires_at;

        return $this;
    }

    /**
     * Gets service_name
     *
     * @return string|null
     */
    public function getServiceName()
    {
        return $this->container['service_name'];
    }

    /**
     * Sets service_name
     *
     * @param string|null $service_name service_name
     *
     * @return self
     */
    public function setServiceName($service_name)
    {
        if (is_null($service_name)) {
            throw new \InvalidArgumentException('non-nullable service_name cannot be null');
        }
        $this->container['service_name'] = $service_name;

        return $this;
    }

    /**
     * Gets store
     *
     * @return string|null
     */
    public function getStore()
    {
        return $this->container['store'];
    }

    /**
     * Sets store
     *
     * @param string|null $store store
     *
     * @return self
     */
    public function setStore($store)
    {
        if (is_null($store)) {
            array_push($this->openAPINullablesSetToNull, 'store');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('store', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['store'] = $store;

        return $this;
    }

    /**
     * Gets store_name
     *
     * @return string|null
     */
    public function getStoreName()
    {
        return $this->container['store_name'];
    }

    /**
     * Sets store_name
     *
     * @param string|null $store_name store_name
     *
     * @return self
     */
    public function setStoreName($store_name)
    {
        if (is_null($store_name)) {
            throw new \InvalidArgumentException('non-nullable store_name cannot be null');
        }
        $this->container['store_name'] = $store_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


