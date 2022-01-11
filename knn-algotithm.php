<?php

class Knn
{

    private $snoop_dog = [];
    private $gezzi = [];
    private $adel_shakal = [];
    private $weeders = [];
    private $nearst_neighbors = [];

    public function __construct()
    {
        $this->snoop_dog['drugs'] = 5;
        $this->snoop_dog['bills'] = 3;
        $this->snoop_dog['cock'] = 2;
        $this->snoop_dog['pango'] = 4;
        $this->snoop_dog['stroks'] = 1;

        $this->gezzi['drugs'] = 3;
        $this->gezzi['bills'] = 1;
        $this->gezzi['cock'] = 5;
        $this->gezzi['pango'] = 2;
        $this->gezzi['stroks'] = 4;

        $this->adel_shakal['drugs'] = 3;
        $this->adel_shakal['bills'] = 2;
        $this->adel_shakal['cock'] = 1;
        $this->adel_shakal['pango'] = 5;
        $this->adel_shakal['stroks'] = 5;

        $this->weeders = ['snoop_dog','gezzi', 'adel_shakal'];
    }

    public function search(array $k)
    {
        foreach ($this->weeders as $weeder) {
            $distance = 0;
            foreach ($this->$weeder as $drug => $drug_value) {
                $distance += pow(($k[$drug] - $drug_value), 2);
            }
            $distance = floor(sqrt($distance));
            $this->nearst_neighbors[$weeder] = $distance;
        }
        return $this->nearst_neighbors;
    }
}


$testing = new Knn();

$shwaha['drugs'] = 4;
$shwaha['bills'] = 2;
$shwaha['cock'] = 1;
$shwaha['pango'] = 3;
$shwaha['stroks'] = 0;

print_r($testing->search($shwaha));
echo '<br/> the nearst ones should have the smallest numbers';