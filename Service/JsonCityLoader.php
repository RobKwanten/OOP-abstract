<?php

class JsonCityLoader implements CityLoaderInterface
{
    private $filename;

    public function __construct($jsonFilePath)
    {
        $this->filename = $jsonFilePath;
    }

    public function fetchAllCitiesData()
    {
        $jsonContents = file_get_contents($this->filename);

        return json_decode($jsonContents, true);
    }
}
