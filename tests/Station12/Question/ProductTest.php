<?php declare(strict_types=1);

namespace Tests\Station12\Question;

use PHPUnit\Framework\TestCase;
use ReflectionClass;
use ReflectionException;
use Src\Station12\Question\Product;

/**
 * @group station12
 */
class ProductTest extends TestCase
{
    /**
     *
     */
    public function testOriginalPriceプロパティが定義されている(): void
    {
        $product = new ReflectionClass(Product::class);

        try {

            $product->getProperty('originalPrice');
            $this->assertTrue(true);

        } catch (ReflectionException $e) {
            $this->fail($e->getMessage());
        }
    }
}
