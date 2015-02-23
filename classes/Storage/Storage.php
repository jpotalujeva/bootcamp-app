<?php

namespace Bootcamp\Demo\Storage;

interface Storage
{
    public function store($data, $place);
    public function get($place);
}
