<?php
namespace Tests\Product\ProductTest;

use App\Models\Product;
use Tests\TestCase;

class ProductTest extends TestCase
{
    public function testCreateProduct()
    {
        $productData = [
            'title' => 'Testing3',
            'price' => 1000,
            'photo' => '1690434359031cec73b64877aea8c4e14181ceb5b1.jpg',
            'description' => 'Unit Testing3'
        ];

        $product = Product::factory()->create($productData);

        // dd($product);

        $this->assertTrue($product !== null);
    }
}


// include composer autoloader
require_once __DIR__ . '/vendor/autoload.php';

// create stemmer
// cukup dijalankan sekali saja, biasanya didaftarkan di service container
$stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
$stemmer  = $stemmerFactory->createStemmer();

// stem
$sentence = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
$output   = $stemmer->stem($sentence);

echo $output . "\n";
// ekonomi indonesia sedang dalam tumbuh yang bangga

echo $stemmer->stem('Mereka meniru-nirukannya') . "\n";
// mereka tiru
