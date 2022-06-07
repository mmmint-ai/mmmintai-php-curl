<?php
/**
 * ModelInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client\Model
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MMMint.ai - Registration Recognition API
 *
 * ## General Information   This API is hosted by MMM Intelligence UG (haftungsbeschränkt) providing smart solutions, [imprint](https://mmmint.ai/impressum).   ## Support   For support reach out to [support@mmmint.ai](mailto:support@mmmint.ai). For usage of the registration recognition API an **APIKey** (`access_token`) is required.   ## Usage Information   1. In order to use the registration recognition API you start by submitting an image via file upload, or with a publicly accessible image of the registration, using a `POST` to `/fahrzeugschein`.   1. The asynchronous processing of the the recognition can be checked using the `/fahrzeugschein/status/{sessionId}` resource.   1. After the status is `finished`, the recognized data can be retrieved using `/fahrzeugschein/{id}` resource.   1. The bounding boxes and associated cropped images can be retrieved using the `/detection` resources.   1. To retrieve all sessions for the submitted registration use the `/session` resource. The sessions will also indicate the status of all submissions.   ## Encryption Information   The provided service is hosted in german datacenters. Submitted data is encrypted in transit and at rest. The submitted date can only be accessed using the used APIKey.   ## Security Information   In case of a leaked APIKey reach out to us immediately. All submitted data can be deleted upon request within 30 days upon notice.
 *
 * OpenAPI spec version: 2.1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

/**
 * Interface abstracting model access.
 *
 * @package Swagger\Client\Model
 * @author  Swagger Codegen team
 */
interface ModelInterface
{
    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName();

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes();

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats();

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     *
     * @return array
     */
    public static function attributeMap();

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters();

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters();

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array
     */
    public function listInvalidProperties();

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool
     */
    public function valid();
}
