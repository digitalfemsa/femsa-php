<?php
/**
 * CustomerResponse
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
 * Generator version: 7.5.0
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
 * CustomerResponse Class Doc Comment
 *
 * @category Class
 * @description customer response
 * @package  DigitalFemsa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CustomerResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'customer_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'antifraud_info' => '\DigitalFemsa\Model\CustomerAntifraudInfoResponse',
        'corporate' => 'bool',
        'created_at' => 'int',
        'custom_reference' => 'string',
        'default_fiscal_entity_id' => 'string',
        'default_shipping_contact_id' => 'string',
        'default_payment_source_id' => 'string',
        'email' => 'string',
        'fiscal_entities' => '\DigitalFemsa\Model\CustomerFiscalEntitiesResponse',
        'id' => 'string',
        'livemode' => 'bool',
        'name' => 'string',
        'metadata' => 'array<string,mixed>',
        'object' => 'string',
        'payment_sources' => '\DigitalFemsa\Model\CustomerPaymentMethodsResponse',
        'phone' => 'string',
        'shipping_contacts' => '\DigitalFemsa\Model\CustomerResponseShippingContacts'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'antifraud_info' => null,
        'corporate' => null,
        'created_at' => 'int64',
        'custom_reference' => null,
        'default_fiscal_entity_id' => null,
        'default_shipping_contact_id' => null,
        'default_payment_source_id' => null,
        'email' => 'email',
        'fiscal_entities' => null,
        'id' => null,
        'livemode' => null,
        'name' => null,
        'metadata' => null,
        'object' => null,
        'payment_sources' => null,
        'phone' => null,
        'shipping_contacts' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'antifraud_info' => true,
        'corporate' => false,
        'created_at' => false,
        'custom_reference' => false,
        'default_fiscal_entity_id' => true,
        'default_shipping_contact_id' => false,
        'default_payment_source_id' => true,
        'email' => false,
        'fiscal_entities' => false,
        'id' => false,
        'livemode' => false,
        'name' => false,
        'metadata' => false,
        'object' => false,
        'payment_sources' => false,
        'phone' => false,
        'shipping_contacts' => false
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
        'antifraud_info' => 'antifraud_info',
        'corporate' => 'corporate',
        'created_at' => 'created_at',
        'custom_reference' => 'custom_reference',
        'default_fiscal_entity_id' => 'default_fiscal_entity_id',
        'default_shipping_contact_id' => 'default_shipping_contact_id',
        'default_payment_source_id' => 'default_payment_source_id',
        'email' => 'email',
        'fiscal_entities' => 'fiscal_entities',
        'id' => 'id',
        'livemode' => 'livemode',
        'name' => 'name',
        'metadata' => 'metadata',
        'object' => 'object',
        'payment_sources' => 'payment_sources',
        'phone' => 'phone',
        'shipping_contacts' => 'shipping_contacts'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'antifraud_info' => 'setAntifraudInfo',
        'corporate' => 'setCorporate',
        'created_at' => 'setCreatedAt',
        'custom_reference' => 'setCustomReference',
        'default_fiscal_entity_id' => 'setDefaultFiscalEntityId',
        'default_shipping_contact_id' => 'setDefaultShippingContactId',
        'default_payment_source_id' => 'setDefaultPaymentSourceId',
        'email' => 'setEmail',
        'fiscal_entities' => 'setFiscalEntities',
        'id' => 'setId',
        'livemode' => 'setLivemode',
        'name' => 'setName',
        'metadata' => 'setMetadata',
        'object' => 'setObject',
        'payment_sources' => 'setPaymentSources',
        'phone' => 'setPhone',
        'shipping_contacts' => 'setShippingContacts'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'antifraud_info' => 'getAntifraudInfo',
        'corporate' => 'getCorporate',
        'created_at' => 'getCreatedAt',
        'custom_reference' => 'getCustomReference',
        'default_fiscal_entity_id' => 'getDefaultFiscalEntityId',
        'default_shipping_contact_id' => 'getDefaultShippingContactId',
        'default_payment_source_id' => 'getDefaultPaymentSourceId',
        'email' => 'getEmail',
        'fiscal_entities' => 'getFiscalEntities',
        'id' => 'getId',
        'livemode' => 'getLivemode',
        'name' => 'getName',
        'metadata' => 'getMetadata',
        'object' => 'getObject',
        'payment_sources' => 'getPaymentSources',
        'phone' => 'getPhone',
        'shipping_contacts' => 'getShippingContacts'
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
        $this->setIfExists('antifraud_info', $data ?? [], null);
        $this->setIfExists('corporate', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('custom_reference', $data ?? [], null);
        $this->setIfExists('default_fiscal_entity_id', $data ?? [], null);
        $this->setIfExists('default_shipping_contact_id', $data ?? [], null);
        $this->setIfExists('default_payment_source_id', $data ?? [], null);
        $this->setIfExists('email', $data ?? [], null);
        $this->setIfExists('fiscal_entities', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('livemode', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('metadata', $data ?? [], null);
        $this->setIfExists('object', $data ?? [], null);
        $this->setIfExists('payment_sources', $data ?? [], null);
        $this->setIfExists('phone', $data ?? [], null);
        $this->setIfExists('shipping_contacts', $data ?? [], null);
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

        if ($this->container['created_at'] === null) {
            $invalidProperties[] = "'created_at' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['livemode'] === null) {
            $invalidProperties[] = "'livemode' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!is_null($this->container['metadata']) && (count($this->container['metadata']) > 100)) {
            $invalidProperties[] = "invalid value for 'metadata', number of items must be less than or equal to 100.";
        }

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
     * Gets antifraud_info
     *
     * @return \DigitalFemsa\Model\CustomerAntifraudInfoResponse|null
     */
    public function getAntifraudInfo()
    {
        return $this->container['antifraud_info'];
    }

    /**
     * Sets antifraud_info
     *
     * @param \DigitalFemsa\Model\CustomerAntifraudInfoResponse|null $antifraud_info antifraud_info
     *
     * @return self
     */
    public function setAntifraudInfo($antifraud_info)
    {
        if (is_null($antifraud_info)) {
            array_push($this->openAPINullablesSetToNull, 'antifraud_info');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('antifraud_info', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['antifraud_info'] = $antifraud_info;

        return $this;
    }

    /**
     * Gets corporate
     *
     * @return bool|null
     */
    public function getCorporate()
    {
        return $this->container['corporate'];
    }

    /**
     * Sets corporate
     *
     * @param bool|null $corporate true if the customer is a company
     *
     * @return self
     */
    public function setCorporate($corporate)
    {
        if (is_null($corporate)) {
            throw new \InvalidArgumentException('non-nullable corporate cannot be null');
        }
        $this->container['corporate'] = $corporate;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return int
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param int $created_at Creation date of the object
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets custom_reference
     *
     * @return string|null
     */
    public function getCustomReference()
    {
        return $this->container['custom_reference'];
    }

    /**
     * Sets custom_reference
     *
     * @param string|null $custom_reference Custom reference
     *
     * @return self
     */
    public function setCustomReference($custom_reference)
    {
        if (is_null($custom_reference)) {
            throw new \InvalidArgumentException('non-nullable custom_reference cannot be null');
        }
        $this->container['custom_reference'] = $custom_reference;

        return $this;
    }

    /**
     * Gets default_fiscal_entity_id
     *
     * @return string|null
     */
    public function getDefaultFiscalEntityId()
    {
        return $this->container['default_fiscal_entity_id'];
    }

    /**
     * Sets default_fiscal_entity_id
     *
     * @param string|null $default_fiscal_entity_id default_fiscal_entity_id
     *
     * @return self
     */
    public function setDefaultFiscalEntityId($default_fiscal_entity_id)
    {
        if (is_null($default_fiscal_entity_id)) {
            array_push($this->openAPINullablesSetToNull, 'default_fiscal_entity_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_fiscal_entity_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_fiscal_entity_id'] = $default_fiscal_entity_id;

        return $this;
    }

    /**
     * Gets default_shipping_contact_id
     *
     * @return string|null
     */
    public function getDefaultShippingContactId()
    {
        return $this->container['default_shipping_contact_id'];
    }

    /**
     * Sets default_shipping_contact_id
     *
     * @param string|null $default_shipping_contact_id default_shipping_contact_id
     *
     * @return self
     */
    public function setDefaultShippingContactId($default_shipping_contact_id)
    {
        if (is_null($default_shipping_contact_id)) {
            throw new \InvalidArgumentException('non-nullable default_shipping_contact_id cannot be null');
        }
        $this->container['default_shipping_contact_id'] = $default_shipping_contact_id;

        return $this;
    }

    /**
     * Gets default_payment_source_id
     *
     * @return string|null
     */
    public function getDefaultPaymentSourceId()
    {
        return $this->container['default_payment_source_id'];
    }

    /**
     * Sets default_payment_source_id
     *
     * @param string|null $default_payment_source_id default_payment_source_id
     *
     * @return self
     */
    public function setDefaultPaymentSourceId($default_payment_source_id)
    {
        if (is_null($default_payment_source_id)) {
            array_push($this->openAPINullablesSetToNull, 'default_payment_source_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('default_payment_source_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['default_payment_source_id'] = $default_payment_source_id;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string|null
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string|null $email email
     *
     * @return self
     */
    public function setEmail($email)
    {
        if (is_null($email)) {
            throw new \InvalidArgumentException('non-nullable email cannot be null');
        }
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets fiscal_entities
     *
     * @return \DigitalFemsa\Model\CustomerFiscalEntitiesResponse|null
     */
    public function getFiscalEntities()
    {
        return $this->container['fiscal_entities'];
    }

    /**
     * Sets fiscal_entities
     *
     * @param \DigitalFemsa\Model\CustomerFiscalEntitiesResponse|null $fiscal_entities fiscal_entities
     *
     * @return self
     */
    public function setFiscalEntities($fiscal_entities)
    {
        if (is_null($fiscal_entities)) {
            throw new \InvalidArgumentException('non-nullable fiscal_entities cannot be null');
        }
        $this->container['fiscal_entities'] = $fiscal_entities;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id Customer's ID
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets livemode
     *
     * @return bool
     */
    public function getLivemode()
    {
        return $this->container['livemode'];
    }

    /**
     * Sets livemode
     *
     * @param bool $livemode true if the object exists in live mode or the value false if the object exists in test mode
     *
     * @return self
     */
    public function setLivemode($livemode)
    {
        if (is_null($livemode)) {
            throw new \InvalidArgumentException('non-nullable livemode cannot be null');
        }
        $this->container['livemode'] = $livemode;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name Customer's name
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,mixed>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,mixed>|null $metadata metadata
     *
     * @return self
     */
    public function setMetadata($metadata)
    {
        if (is_null($metadata)) {
            throw new \InvalidArgumentException('non-nullable metadata cannot be null');
        }

        if ((count($metadata) > 100)) {
            throw new \InvalidArgumentException('invalid value for $metadata when calling CustomerResponse., number of items must be less than or equal to 100.');
        }
        $this->container['metadata'] = $metadata;

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
     * Gets payment_sources
     *
     * @return \DigitalFemsa\Model\CustomerPaymentMethodsResponse|null
     */
    public function getPaymentSources()
    {
        return $this->container['payment_sources'];
    }

    /**
     * Sets payment_sources
     *
     * @param \DigitalFemsa\Model\CustomerPaymentMethodsResponse|null $payment_sources payment_sources
     *
     * @return self
     */
    public function setPaymentSources($payment_sources)
    {
        if (is_null($payment_sources)) {
            throw new \InvalidArgumentException('non-nullable payment_sources cannot be null');
        }
        $this->container['payment_sources'] = $payment_sources;

        return $this;
    }

    /**
     * Gets phone
     *
     * @return string|null
     */
    public function getPhone()
    {
        return $this->container['phone'];
    }

    /**
     * Sets phone
     *
     * @param string|null $phone Customer's phone number
     *
     * @return self
     */
    public function setPhone($phone)
    {
        if (is_null($phone)) {
            throw new \InvalidArgumentException('non-nullable phone cannot be null');
        }
        $this->container['phone'] = $phone;

        return $this;
    }

    /**
     * Gets shipping_contacts
     *
     * @return \DigitalFemsa\Model\CustomerResponseShippingContacts|null
     */
    public function getShippingContacts()
    {
        return $this->container['shipping_contacts'];
    }

    /**
     * Sets shipping_contacts
     *
     * @param \DigitalFemsa\Model\CustomerResponseShippingContacts|null $shipping_contacts shipping_contacts
     *
     * @return self
     */
    public function setShippingContacts($shipping_contacts)
    {
        if (is_null($shipping_contacts)) {
            throw new \InvalidArgumentException('non-nullable shipping_contacts cannot be null');
        }
        $this->container['shipping_contacts'] = $shipping_contacts;

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


