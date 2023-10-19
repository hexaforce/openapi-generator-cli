<?php

/**
 * Fpv Japan Event
 * PHP version 7.4
 *
 * @package OpenAPIServer
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 */

/**
 * This is a sample server Petstore server. For this sample, you can use the api key `special-key` to test the authorization filters.
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://github.com/openapitools/openapi-generator.git
 */

/**
 * NOTE: This class is auto generated by the openapi generator program.
 * https://github.com/openapitools/openapi-generator
 * Please update the test case below to test the model.
 */
namespace OpenAPIServer\Model;

use PHPUnit\Framework\TestCase;
use OpenAPIServer\Model\Order;

/**
 * OrderTest Class Doc Comment
 *
 * @package OpenAPIServer\Model
 * @author  OpenAPI Generator team
 * @link    https://github.com/openapitools/openapi-generator
 *
 * @coversDefaultClass \OpenAPIServer\Model\Order
 */
class OrderTest extends TestCase
{

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "Order"
     */
    public function testOrder()
    {
        $testOrder = new Order();
        $namespacedClassname = Order::getModelsNamespace() . '\\Order';
        $this->assertSame('\\' . Order::class, $namespacedClassname);
        $this->assertTrue(
            class_exists($namespacedClassname),
            sprintf('Assertion failed that "%s" class exists', $namespacedClassname)
        );
        $this->markTestIncomplete(
            'Test of "Order" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "id"
     */
    public function testPropertyId()
    {
        $this->markTestIncomplete(
            'Test of "id" property in "Order" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "petId"
     */
    public function testPropertyPetId()
    {
        $this->markTestIncomplete(
            'Test of "petId" property in "Order" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "quantity"
     */
    public function testPropertyQuantity()
    {
        $this->markTestIncomplete(
            'Test of "quantity" property in "Order" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "shipDate"
     */
    public function testPropertyShipDate()
    {
        $this->markTestIncomplete(
            'Test of "shipDate" property in "Order" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "status"
     */
    public function testPropertyStatus()
    {
        $this->markTestIncomplete(
            'Test of "status" property in "Order" model has not been implemented yet.'
        );
    }

    /**
     * Test attribute "complete"
     */
    public function testPropertyComplete()
    {
        $this->markTestIncomplete(
            'Test of "complete" property in "Order" model has not been implemented yet.'
        );
    }

    /**
     * Test getOpenApiSchema static method
     * @covers ::getOpenApiSchema
     */
    public function testGetOpenApiSchema()
    {
        $schemaArr = Order::getOpenApiSchema();
        $this->assertIsArray($schemaArr);
    }
}