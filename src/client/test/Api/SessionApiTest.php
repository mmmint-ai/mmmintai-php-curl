<?php
/**
 * SessionApiTest
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
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
 * Please update the test case below to test the endpoint.
 */

namespace Swagger\Client;

use Swagger\Client\Configuration;
use Swagger\Client\ApiException;
use Swagger\Client\ObjectSerializer;

/**
 * SessionApiTest Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SessionApiTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test case for getAllSessionsSessionGet
     *
     * Get All Sessions.
     *
     */
    public function testGetAllSessionsSessionGet()
    {
    }

    /**
     * Test case for getAllSessionsSessionGet_0
     *
     * Get All Sessions.
     *
     */
    public function testGetAllSessionsSessionGet0()
    {
    }
}
