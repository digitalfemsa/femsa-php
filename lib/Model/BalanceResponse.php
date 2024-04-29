<?php
/**
 * BalanceResponse
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
 * BalanceResponse Class Doc Comment
 *
 * @category Class
 * @description balance model
 * @package  DigitalFemsa
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BalanceResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'balance_response';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'available' => '\DigitalFemsa\Model\BalanceCommonField[]',
        'cashout_retention_amount' => '\DigitalFemsa\Model\BalanceCommonField[]',
        'conekta_retention' => '\DigitalFemsa\Model\BalanceCommonField[]',
        'gateway' => '\DigitalFemsa\Model\BalanceCommonField[]',
        'pending' => '\DigitalFemsa\Model\BalanceCommonField[]',
        'retained' => '\DigitalFemsa\Model\BalanceCommonField[]',
        'retention_amount' => '\DigitalFemsa\Model\BalanceCommonField[]',
        'target_collateral_amount' => 'object',
        'target_retention_amount' => '\DigitalFemsa\Model\BalanceCommonField[]',
        'temporarily_retained' => '\DigitalFemsa\Model\BalanceCommonField[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'available' => null,
        'cashout_retention_amount' => null,
        'conekta_retention' => null,
        'gateway' => null,
        'pending' => null,
        'retained' => null,
        'retention_amount' => null,
        'target_collateral_amount' => null,
        'target_retention_amount' => null,
        'temporarily_retained' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'available' => false,
        'cashout_retention_amount' => false,
        'conekta_retention' => false,
        'gateway' => false,
        'pending' => false,
        'retained' => false,
        'retention_amount' => false,
        'target_collateral_amount' => false,
        'target_retention_amount' => false,
        'temporarily_retained' => false
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
        'available' => 'available',
        'cashout_retention_amount' => 'cashout_retention_amount',
        'conekta_retention' => 'conekta_retention',
        'gateway' => 'gateway',
        'pending' => 'pending',
        'retained' => 'retained',
        'retention_amount' => 'retention_amount',
        'target_collateral_amount' => 'target_collateral_amount',
        'target_retention_amount' => 'target_retention_amount',
        'temporarily_retained' => 'temporarily_retained'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'available' => 'setAvailable',
        'cashout_retention_amount' => 'setCashoutRetentionAmount',
        'conekta_retention' => 'setConektaRetention',
        'gateway' => 'setGateway',
        'pending' => 'setPending',
        'retained' => 'setRetained',
        'retention_amount' => 'setRetentionAmount',
        'target_collateral_amount' => 'setTargetCollateralAmount',
        'target_retention_amount' => 'setTargetRetentionAmount',
        'temporarily_retained' => 'setTemporarilyRetained'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'available' => 'getAvailable',
        'cashout_retention_amount' => 'getCashoutRetentionAmount',
        'conekta_retention' => 'getConektaRetention',
        'gateway' => 'getGateway',
        'pending' => 'getPending',
        'retained' => 'getRetained',
        'retention_amount' => 'getRetentionAmount',
        'target_collateral_amount' => 'getTargetCollateralAmount',
        'target_retention_amount' => 'getTargetRetentionAmount',
        'temporarily_retained' => 'getTemporarilyRetained'
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
        $this->setIfExists('available', $data ?? [], null);
        $this->setIfExists('cashout_retention_amount', $data ?? [], null);
        $this->setIfExists('conekta_retention', $data ?? [], null);
        $this->setIfExists('gateway', $data ?? [], null);
        $this->setIfExists('pending', $data ?? [], null);
        $this->setIfExists('retained', $data ?? [], null);
        $this->setIfExists('retention_amount', $data ?? [], null);
        $this->setIfExists('target_collateral_amount', $data ?? [], null);
        $this->setIfExists('target_retention_amount', $data ?? [], null);
        $this->setIfExists('temporarily_retained', $data ?? [], null);
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
     * Gets available
     *
     * @return \DigitalFemsa\Model\BalanceCommonField[]|null
     */
    public function getAvailable()
    {
        return $this->container['available'];
    }

    /**
     * Sets available
     *
     * @param \DigitalFemsa\Model\BalanceCommonField[]|null $available The balance's available
     *
     * @return self
     */
    public function setAvailable($available)
    {
        if (is_null($available)) {
            throw new \InvalidArgumentException('non-nullable available cannot be null');
        }
        $this->container['available'] = $available;

        return $this;
    }

    /**
     * Gets cashout_retention_amount
     *
     * @return \DigitalFemsa\Model\BalanceCommonField[]|null
     */
    public function getCashoutRetentionAmount()
    {
        return $this->container['cashout_retention_amount'];
    }

    /**
     * Sets cashout_retention_amount
     *
     * @param \DigitalFemsa\Model\BalanceCommonField[]|null $cashout_retention_amount The balance's cashout retention amount
     *
     * @return self
     */
    public function setCashoutRetentionAmount($cashout_retention_amount)
    {
        if (is_null($cashout_retention_amount)) {
            throw new \InvalidArgumentException('non-nullable cashout_retention_amount cannot be null');
        }
        $this->container['cashout_retention_amount'] = $cashout_retention_amount;

        return $this;
    }

    /**
     * Gets conekta_retention
     *
     * @return \DigitalFemsa\Model\BalanceCommonField[]|null
     */
    public function getConektaRetention()
    {
        return $this->container['conekta_retention'];
    }

    /**
     * Sets conekta_retention
     *
     * @param \DigitalFemsa\Model\BalanceCommonField[]|null $conekta_retention The balance's Femsa retention
     *
     * @return self
     */
    public function setConektaRetention($conekta_retention)
    {
        if (is_null($conekta_retention)) {
            throw new \InvalidArgumentException('non-nullable conekta_retention cannot be null');
        }
        $this->container['conekta_retention'] = $conekta_retention;

        return $this;
    }

    /**
     * Gets gateway
     *
     * @return \DigitalFemsa\Model\BalanceCommonField[]|null
     */
    public function getGateway()
    {
        return $this->container['gateway'];
    }

    /**
     * Sets gateway
     *
     * @param \DigitalFemsa\Model\BalanceCommonField[]|null $gateway The balance's gateway
     *
     * @return self
     */
    public function setGateway($gateway)
    {
        if (is_null($gateway)) {
            throw new \InvalidArgumentException('non-nullable gateway cannot be null');
        }
        $this->container['gateway'] = $gateway;

        return $this;
    }

    /**
     * Gets pending
     *
     * @return \DigitalFemsa\Model\BalanceCommonField[]|null
     */
    public function getPending()
    {
        return $this->container['pending'];
    }

    /**
     * Sets pending
     *
     * @param \DigitalFemsa\Model\BalanceCommonField[]|null $pending The balance's pending
     *
     * @return self
     */
    public function setPending($pending)
    {
        if (is_null($pending)) {
            throw new \InvalidArgumentException('non-nullable pending cannot be null');
        }
        $this->container['pending'] = $pending;

        return $this;
    }

    /**
     * Gets retained
     *
     * @return \DigitalFemsa\Model\BalanceCommonField[]|null
     */
    public function getRetained()
    {
        return $this->container['retained'];
    }

    /**
     * Sets retained
     *
     * @param \DigitalFemsa\Model\BalanceCommonField[]|null $retained The balance's retained
     *
     * @return self
     */
    public function setRetained($retained)
    {
        if (is_null($retained)) {
            throw new \InvalidArgumentException('non-nullable retained cannot be null');
        }
        $this->container['retained'] = $retained;

        return $this;
    }

    /**
     * Gets retention_amount
     *
     * @return \DigitalFemsa\Model\BalanceCommonField[]|null
     */
    public function getRetentionAmount()
    {
        return $this->container['retention_amount'];
    }

    /**
     * Sets retention_amount
     *
     * @param \DigitalFemsa\Model\BalanceCommonField[]|null $retention_amount The balance's retention amount
     *
     * @return self
     */
    public function setRetentionAmount($retention_amount)
    {
        if (is_null($retention_amount)) {
            throw new \InvalidArgumentException('non-nullable retention_amount cannot be null');
        }
        $this->container['retention_amount'] = $retention_amount;

        return $this;
    }

    /**
     * Gets target_collateral_amount
     *
     * @return object|null
     */
    public function getTargetCollateralAmount()
    {
        return $this->container['target_collateral_amount'];
    }

    /**
     * Sets target_collateral_amount
     *
     * @param object|null $target_collateral_amount The balance's target collateral amount
     *
     * @return self
     */
    public function setTargetCollateralAmount($target_collateral_amount)
    {
        if (is_null($target_collateral_amount)) {
            throw new \InvalidArgumentException('non-nullable target_collateral_amount cannot be null');
        }
        $this->container['target_collateral_amount'] = $target_collateral_amount;

        return $this;
    }

    /**
     * Gets target_retention_amount
     *
     * @return \DigitalFemsa\Model\BalanceCommonField[]|null
     */
    public function getTargetRetentionAmount()
    {
        return $this->container['target_retention_amount'];
    }

    /**
     * Sets target_retention_amount
     *
     * @param \DigitalFemsa\Model\BalanceCommonField[]|null $target_retention_amount The balance's target retention amount
     *
     * @return self
     */
    public function setTargetRetentionAmount($target_retention_amount)
    {
        if (is_null($target_retention_amount)) {
            throw new \InvalidArgumentException('non-nullable target_retention_amount cannot be null');
        }
        $this->container['target_retention_amount'] = $target_retention_amount;

        return $this;
    }

    /**
     * Gets temporarily_retained
     *
     * @return \DigitalFemsa\Model\BalanceCommonField[]|null
     */
    public function getTemporarilyRetained()
    {
        return $this->container['temporarily_retained'];
    }

    /**
     * Sets temporarily_retained
     *
     * @param \DigitalFemsa\Model\BalanceCommonField[]|null $temporarily_retained The balance's temporarily retained
     *
     * @return self
     */
    public function setTemporarilyRetained($temporarily_retained)
    {
        if (is_null($temporarily_retained)) {
            throw new \InvalidArgumentException('non-nullable temporarily_retained cannot be null');
        }
        $this->container['temporarily_retained'] = $temporarily_retained;

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


