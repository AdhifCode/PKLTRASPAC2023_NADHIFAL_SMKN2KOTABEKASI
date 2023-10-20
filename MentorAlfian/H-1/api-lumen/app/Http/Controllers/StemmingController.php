<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Sastrawi\Dictionary\ArrayDictionary;
use Sastrawi\Stemmer\Stemmer;


class StemmingController extends Controller
{
    protected $dictionary;
    protected $stemmer;

    public function StemmingAlgo() { 
        $stemmerFactory = new \Sastrawi\Stemmer\StemmerFactory();
        $stemmer  = $stemmerFactory->createStemmer();

        
        $word = 'Perekonomian Indonesia sedang dalam pertumbuhan yang membanggakan';
        $data   = $stemmer->stem($word);
        // ekonomi indonesia sedang dalam tumbuh yang bangga

                return $data;
            }
}
