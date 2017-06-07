<?php

namespace App\Observer;

interface ObserverInterface {

    public function update($temperature, $humidity, $pressure);

}
