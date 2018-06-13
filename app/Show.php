<?php

namespace App;

class Show
{
    public $name;
    public $status;
    public $network;
    public $imdb;
    public $image;

    public function __construct(string $name, string $status, string $network, string $imdb)
    {
        $this->name = $name;
        $this->status = $status;
        $this->network = $network;
        $this->imdb = "http://www.imdb.com/title/{$imdb}";
        $this->image = asset('storage/'. str_slug($name). '.jpg');
    }
}
