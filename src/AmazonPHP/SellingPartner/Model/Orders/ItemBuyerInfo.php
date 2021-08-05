<?php declare(strict_types=1);
/**
 * ItemBuyerInfo.
 *
 * PHP version 7.4
 *
 * @category Class
 *
 * @author   OpenAPI Generator team
 *
 * @link     https://openapi-generator.tech
 */

/**
 * Selling Partner API for Orders.
 *
 * The Selling Partner API for Orders helps you programmatically retrieve order information. These APIs let you develop fast, flexible, custom applications in areas like order synchronization, order research, and demand-based decision support tools.
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\Orders;

use AmazonPHP\SellingPartner\ModelInterface;
use AmazonPHP\SellingPartner\ObjectSerializer;

/**
 * This class was auto-generated by https://github.com/OpenAPITools/openapi-generator/.
 * Do not change it, it will be overwritten with next execution of /bin/generate.sh.
 *
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ItemBuyerInfo implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ItemBuyerInfo';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'buyer_customized_info' => '\AmazonPHP\SellingPartner\Model\Orders\BuyerCustomizedInfoDetail',
        'gift_wrap_price' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'gift_wrap_tax' => '\AmazonPHP\SellingPartner\Model\Orders\Money',
        'gift_message_text' => 'string',
        'gift_wrap_level' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'buyer_customized_info' => null,
        'gift_wrap_price' => null,
        'gift_wrap_tax' => null,
        'gift_message_text' => null,
        'gift_wrap_level' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'buyer_customized_info' => 'BuyerCustomizedInfo',
        'gift_wrap_price' => 'GiftWrapPrice',
        'gift_wrap_tax' => 'GiftWrapTax',
        'gift_message_text' => 'GiftMessageText',
        'gift_wrap_level' => 'GiftWrapLevel',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'buyer_customized_info' => 'setBuyerCustomizedInfo',
        'gift_wrap_price' => 'setGiftWrapPrice',
        'gift_wrap_tax' => 'setGiftWrapTax',
        'gift_message_text' => 'setGiftMessageText',
        'gift_wrap_level' => 'setGiftWrapLevel',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'buyer_customized_info' => 'getBuyerCustomizedInfo',
        'gift_wrap_price' => 'getGiftWrapPrice',
        'gift_wrap_tax' => 'getGiftWrapTax',
        'gift_message_text' => 'getGiftMessageText',
        'gift_wrap_level' => 'getGiftWrapLevel',
    ];

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected array $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['buyer_customized_info'] = $data['buyer_customized_info'] ?? null;
        $this->container['gift_wrap_price'] = $data['gift_wrap_price'] ?? null;
        $this->container['gift_wrap_tax'] = $data['gift_wrap_tax'] ?? null;
        $this->container['gift_message_text'] = $data['gift_message_text'] ?? null;
        $this->container['gift_wrap_level'] = $data['gift_wrap_level'] ?? null;
    }

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return string[]
     */
    public static function openAPITypes() : array
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return null[]|string[]
     */
    public static function openAPIFormats() : array
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return string[]
     */
    public static function attributeMap() : array
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return string[]
     */
    public static function setters() : array
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return string[]
     */
    public static function getters() : array
    {
        return self::$getters;
    }

    /**
     * Gets the string presentation of the object.
     */
    public function __toString() : string
    {
        return \json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * The original name of the model.
     */
    public function getModelName() : string
    {
        return self::$openAPIModelName;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        return [];
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid() : bool
    {
        return \count($this->listInvalidProperties()) === 0;
    }

    /**
     * Gets buyer_customized_info.
     */
    public function getBuyerCustomizedInfo() : ?BuyerCustomizedInfoDetail
    {
        return $this->container['buyer_customized_info'];
    }

    /**
     * Sets buyer_customized_info.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\BuyerCustomizedInfoDetail $buyer_customized_info buyer_customized_info
     */
    public function setBuyerCustomizedInfo(?BuyerCustomizedInfoDetail $buyer_customized_info) : self
    {
        $this->container['buyer_customized_info'] = $buyer_customized_info;

        return $this;
    }

    /**
     * Gets gift_wrap_price.
     */
    public function getGiftWrapPrice() : ?Money
    {
        return $this->container['gift_wrap_price'];
    }

    /**
     * Sets gift_wrap_price.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\Money $gift_wrap_price gift_wrap_price
     */
    public function setGiftWrapPrice(?Money $gift_wrap_price) : self
    {
        $this->container['gift_wrap_price'] = $gift_wrap_price;

        return $this;
    }

    /**
     * Gets gift_wrap_tax.
     */
    public function getGiftWrapTax() : ?Money
    {
        return $this->container['gift_wrap_tax'];
    }

    /**
     * Sets gift_wrap_tax.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\Orders\Money $gift_wrap_tax gift_wrap_tax
     */
    public function setGiftWrapTax(?Money $gift_wrap_tax) : self
    {
        $this->container['gift_wrap_tax'] = $gift_wrap_tax;

        return $this;
    }

    /**
     * Gets gift_message_text.
     */
    public function getGiftMessageText() : ?string
    {
        return $this->container['gift_message_text'];
    }

    /**
     * Sets gift_message_text.
     *
     * @param null|string $gift_message_text a gift message provided by the buyer
     */
    public function setGiftMessageText(?string $gift_message_text) : self
    {
        $this->container['gift_message_text'] = $gift_message_text;

        return $this;
    }

    /**
     * Gets gift_wrap_level.
     */
    public function getGiftWrapLevel() : ?string
    {
        return $this->container['gift_wrap_level'];
    }

    /**
     * Sets gift_wrap_level.
     *
     * @param null|string $gift_wrap_level the gift wrap level specified by the buyer
     */
    public function setGiftWrapLevel(?string $gift_wrap_level) : self
    {
        $this->container['gift_wrap_level'] = $gift_wrap_level;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     */
    public function offsetExists($offset) : bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return null|mixed
     */
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param null|int $offset Offset
     * @param mixed $value Value to be set
     */
    public function offsetSet($offset, $value) : void
    {
        if (null === $offset) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     */
    public function offsetUnset($offset) : void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     *
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed returns data which can be serialized by json_encode(), which is a value
     *               of any type other than a resource
     */
    public function jsonSerialize() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }

    /**
     * Gets a header-safe presentation of the object.
     */
    public function toHeaderValue() : string
    {
        return \json_encode(ObjectSerializer::sanitizeForSerialization($this), JSON_THROW_ON_ERROR);
    }
}
