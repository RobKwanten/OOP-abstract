<?php


interface CityInterface
{
    /**
     * Returns something for city by id
     *
     * @param integer $id
     * @return array
     */
    public function LoadCityPopulation($id);

}