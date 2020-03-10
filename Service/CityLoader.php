<?php
abstract class CityLoader implements CityInterface
{
    private $DBM;

    public function __construct( DBManager $DBM)
    {
        $this->DBM = $DBM;
    }

    public function LoadCityPopulation($id)
    {

    }



    public function Load( $id = null )
    {
        $cities = array();

        $sql = "select * from images";
        if ( $id > 0 ) $sql .= " where img_id=$id";

        $data = $this->DBM->GetData($sql);
        foreach ( $data as $row )
        {
            $city = new City();

            $city->setId( $row['img_id'] );
            $city->setFileName( $row['img_filename'] );
            $city->setTitle( $row['img_title'] );
            $city->setWidth( $row['img_width'] );
            $city->setHeight( $row['img_height'] );

            $cities[] = $city;
        }

        return $cities;
    }

}