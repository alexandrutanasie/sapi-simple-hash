<?php
namespace Sapi\SimpleHash;

class Str {
    public $str;
    private $str_decoded;
    private $str_encoded;
    
    private $codes = [
        0 => 'xa',
        1 => 'wg',
        2 => 'tx',
        3 => 'ic',
        4 => 'sm',
        5 => 'ik',
        6 => 'lp',
        7 => 'dt',
        8 => 'nu',
        9 => 'vq'
    ];

    public function __construct($codes = [])
    {
        if(!empty($codes)){
            $this->codes = $codes;
        }
    }

    public function encode( int $number):object {
        $strs = str_split($number);
        $encoded = '';

        $errors = 0;

        foreach ($strs as $char) {
            $key = isset($this->codes[$char])?$this->codes[$char]:false;
            
            if ($key !== false) {
                $encoded .= $key;
            } else {
                $errors++;
            }
        }

        $this->str_encoded = ($errors === 0)?$encoded:null;

        return $this;
    }

    public function decode(string $str = null):object {
        if($str === null){
            $str = $this->str_encoded;
        }

        $strs = str_split($str, 2);
        $decoded = '';
        $errors = 0;

        $codes = array_flip($this->codes);

        foreach ($strs as $char) {
            if (isset($codes[$char])) {
                $decoded .= $codes[$char];
            } else {
                $errors++;
            }
        }

        $this->str_decoded = ($errors === 0)?$decoded:null;
        return $this;
    }


    public function getEncodedString(){
        return $this->str_encoded;
    }


    public function getDecodedString(){
        return $this->str_decoded;
    }
}
