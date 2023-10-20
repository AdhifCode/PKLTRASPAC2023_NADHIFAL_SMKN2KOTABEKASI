<?php
namespace Tests\Stemmer;

use Tests\TestCase;

class StemmerTest extends TestCase
{
    public function testStemming()
    {
        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();

        $Dialog = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
        $Expect = 'ekonomi indonesia sedang dalam tumbuh yang bangga';

        $dialoged   = $stemmer->stem($Dialog);

        $this->assertEquals($Expect,$dialoged);
    }

}


