<?php declare(strict_types=1);
/**
 * ProductTypeDefinition.
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
 * Selling Partner API for Product Type Definitions.
 *
 * The Selling Partner API for Product Type Definitions provides programmatic access to attribute and data requirements for product types in the Amazon catalog. Use this API to return the JSON Schema for a product type that you can then use with other Selling Partner APIs, such as the Selling Partner API for Listings Items, the Selling Partner API for Catalog Items, and the Selling Partner API for Feeds (for JSON-based listing feeds).  For more information, see the [Product Type Definitions API Use Case Guide](https://github.com/amzn/selling-partner-api-docs/blob/main/guides/en-US/use-case-guides/product-type-definitions-api-use-case-guide/definitions-product-types-api-use-case-guide_2020-09-01.md).
 *
 * The version of the OpenAPI document: 2020-09-01
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */
namespace AmazonPHP\SellingPartner\Model\ProductTypesDefinitions;

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
class ProductTypeDefinition implements \ArrayAccess, \JsonSerializable, ModelInterface
{
    public const DISCRIMINATOR = null;

    public const REQUIREMENTS_LISTING = 'LISTING';

    public const REQUIREMENTS_LISTING_PRODUCT_ONLY = 'LISTING_PRODUCT_ONLY';

    public const REQUIREMENTS_LISTING_OFFER_ONLY = 'LISTING_OFFER_ONLY';

    public const REQUIREMENTS_ENFORCED_ENFORCED = 'ENFORCED';

    public const REQUIREMENTS_ENFORCED_NOT_ENFORCED = 'NOT_ENFORCED';

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static string $openAPIModelName = 'ProductTypeDefinition';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static array $openAPITypes = [
        'meta_schema' => '\AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\SchemaLink',
        'schema' => '\AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\SchemaLink',
        'requirements' => 'string',
        'requirements_enforced' => 'string',
        'property_groups' => 'array<string,\AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\PropertyGroup>',
        'locale' => 'string',
        'marketplace_ids' => 'string[]',
        'product_type' => 'string',
        'product_type_version' => '\AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\ProductTypeVersion',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static array $openAPIFormats = [
        'meta_schema' => null,
        'schema' => null,
        'requirements' => null,
        'requirements_enforced' => null,
        'property_groups' => null,
        'locale' => null,
        'marketplace_ids' => null,
        'product_type' => null,
        'product_type_version' => null,
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static array $attributeMap = [
        'meta_schema' => 'metaSchema',
        'schema' => 'schema',
        'requirements' => 'requirements',
        'requirements_enforced' => 'requirementsEnforced',
        'property_groups' => 'propertyGroups',
        'locale' => 'locale',
        'marketplace_ids' => 'marketplaceIds',
        'product_type' => 'productType',
        'product_type_version' => 'productTypeVersion',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static array $setters = [
        'meta_schema' => 'setMetaSchema',
        'schema' => 'setSchema',
        'requirements' => 'setRequirements',
        'requirements_enforced' => 'setRequirementsEnforced',
        'property_groups' => 'setPropertyGroups',
        'locale' => 'setLocale',
        'marketplace_ids' => 'setMarketplaceIds',
        'product_type' => 'setProductType',
        'product_type_version' => 'setProductTypeVersion',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static array $getters = [
        'meta_schema' => 'getMetaSchema',
        'schema' => 'getSchema',
        'requirements' => 'getRequirements',
        'requirements_enforced' => 'getRequirementsEnforced',
        'property_groups' => 'getPropertyGroups',
        'locale' => 'getLocale',
        'marketplace_ids' => 'getMarketplaceIds',
        'product_type' => 'getProductType',
        'product_type_version' => 'getProductTypeVersion',
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
        $this->container['meta_schema'] = $data['meta_schema'] ?? null;
        $this->container['schema'] = $data['schema'] ?? null;
        $this->container['requirements'] = $data['requirements'] ?? null;
        $this->container['requirements_enforced'] = $data['requirements_enforced'] ?? null;
        $this->container['property_groups'] = $data['property_groups'] ?? null;
        $this->container['locale'] = $data['locale'] ?? null;
        $this->container['marketplace_ids'] = $data['marketplace_ids'] ?? null;
        $this->container['product_type'] = $data['product_type'] ?? null;
        $this->container['product_type_version'] = $data['product_type_version'] ?? null;
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
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getRequirementsAllowableValues() : array
    {
        return [
            self::REQUIREMENTS_LISTING,
            self::REQUIREMENTS_LISTING_PRODUCT_ONLY,
            self::REQUIREMENTS_LISTING_OFFER_ONLY,
        ];
    }

    /**
     * Gets allowable values of the enum.
     *
     * @return string[]
     */
    public function getRequirementsEnforcedAllowableValues() : array
    {
        return [
            self::REQUIREMENTS_ENFORCED_ENFORCED,
            self::REQUIREMENTS_ENFORCED_NOT_ENFORCED,
        ];
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties() : array
    {
        $invalidProperties = [];

        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }

        if ($this->container['requirements'] === null) {
            $invalidProperties[] = "'requirements' can't be null";
        }
        $allowedValues = $this->getRequirementsAllowableValues();

        if (null !== $this->container['requirements'] && !\in_array($this->container['requirements'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'requirements', must be one of '%s'",
                $this->container['requirements'],
                \implode("', '", $allowedValues)
            );
        }

        if ($this->container['requirements_enforced'] === null) {
            $invalidProperties[] = "'requirements_enforced' can't be null";
        }
        $allowedValues = $this->getRequirementsEnforcedAllowableValues();

        if (null !== $this->container['requirements_enforced'] && !\in_array($this->container['requirements_enforced'], $allowedValues, true)) {
            $invalidProperties[] = \sprintf(
                "invalid value '%s' for 'requirements_enforced', must be one of '%s'",
                $this->container['requirements_enforced'],
                \implode("', '", $allowedValues)
            );
        }

        if ($this->container['property_groups'] === null) {
            $invalidProperties[] = "'property_groups' can't be null";
        }

        if ($this->container['locale'] === null) {
            $invalidProperties[] = "'locale' can't be null";
        }

        if ($this->container['marketplace_ids'] === null) {
            $invalidProperties[] = "'marketplace_ids' can't be null";
        }

        if ($this->container['product_type'] === null) {
            $invalidProperties[] = "'product_type' can't be null";
        }

        if ($this->container['product_type_version'] === null) {
            $invalidProperties[] = "'product_type_version' can't be null";
        }

        return $invalidProperties;
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
     * Gets meta_schema.
     */
    public function getMetaSchema() : ?SchemaLink
    {
        return $this->container['meta_schema'];
    }

    /**
     * Sets meta_schema.
     *
     * @param null|\AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\SchemaLink $meta_schema meta_schema
     */
    public function setMetaSchema(?SchemaLink $meta_schema) : self
    {
        $this->container['meta_schema'] = $meta_schema;

        return $this;
    }

    /**
     * Gets schema.
     */
    public function getSchema() : SchemaLink
    {
        return $this->container['schema'];
    }

    /**
     * Sets schema.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\SchemaLink $schema schema
     */
    public function setSchema(SchemaLink $schema) : self
    {
        $this->container['schema'] = $schema;

        return $this;
    }

    /**
     * Gets requirements.
     */
    public function getRequirements() : string
    {
        return $this->container['requirements'];
    }

    /**
     * Sets requirements.
     *
     * @param string $requirements name of the requirements set represented in this product type definition
     */
    public function setRequirements(string $requirements) : self
    {
        $allowedValues = $this->getRequirementsAllowableValues();

        if (!\in_array($requirements, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'requirements', must be one of '%s'",
                    $requirements,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['requirements'] = $requirements;

        return $this;
    }

    /**
     * Gets requirements_enforced.
     */
    public function getRequirementsEnforced() : string
    {
        return $this->container['requirements_enforced'];
    }

    /**
     * Sets requirements_enforced.
     *
     * @param string $requirements_enforced Identifies if the required attributes for a requirements set are enforced by the product type definition schema. Non-enforced requirements enable structural validation of individual attributes without all of the required attributes being present (such as for partial updates).
     */
    public function setRequirementsEnforced(string $requirements_enforced) : self
    {
        $allowedValues = $this->getRequirementsEnforcedAllowableValues();

        if (!\in_array($requirements_enforced, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                \sprintf(
                    "Invalid value '%s' for 'requirements_enforced', must be one of '%s'",
                    $requirements_enforced,
                    \implode("', '", $allowedValues)
                )
            );
        }
        $this->container['requirements_enforced'] = $requirements_enforced;

        return $this;
    }

    /**
     * Gets property_groups.
     *
     * @return array<string,\AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\PropertyGroup>
     */
    public function getPropertyGroups() : array
    {
        return $this->container['property_groups'];
    }

    /**
     * Sets property_groups.
     *
     * @param array<string,\AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\PropertyGroup> $property_groups Mapping of property group names to property groups. Property groups represent logical groupings of schema properties that can be used for display or informational purposes.
     */
    public function setPropertyGroups(array $property_groups) : self
    {
        $this->container['property_groups'] = $property_groups;

        return $this;
    }

    /**
     * Gets locale.
     */
    public function getLocale() : string
    {
        return $this->container['locale'];
    }

    /**
     * Sets locale.
     *
     * @param string $locale locale of the display elements contained in the product type definition
     */
    public function setLocale(string $locale) : self
    {
        $this->container['locale'] = $locale;

        return $this;
    }

    /**
     * Gets marketplace_ids.
     *
     * @return string[]
     */
    public function getMarketplaceIds() : array
    {
        return $this->container['marketplace_ids'];
    }

    /**
     * Sets marketplace_ids.
     *
     * @param string[] $marketplace_ids amazon marketplace identifiers for which the product type definition is applicable
     */
    public function setMarketplaceIds(array $marketplace_ids) : self
    {
        $this->container['marketplace_ids'] = $marketplace_ids;

        return $this;
    }

    /**
     * Gets product_type.
     */
    public function getProductType() : string
    {
        return $this->container['product_type'];
    }

    /**
     * Sets product_type.
     *
     * @param string $product_type the name of the Amazon product type that this product type definition applies to
     */
    public function setProductType(string $product_type) : self
    {
        $this->container['product_type'] = $product_type;

        return $this;
    }

    /**
     * Gets product_type_version.
     */
    public function getProductTypeVersion() : ProductTypeVersion
    {
        return $this->container['product_type_version'];
    }

    /**
     * Sets product_type_version.
     *
     * @param \AmazonPHP\SellingPartner\Model\ProductTypesDefinitions\ProductTypeVersion $product_type_version product_type_version
     */
    public function setProductTypeVersion(ProductTypeVersion $product_type_version) : self
    {
        $this->container['product_type_version'] = $product_type_version;

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
