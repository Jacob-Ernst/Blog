<?php
    
use Carbon\Carbon;

class BaseModel extends Eloquent {
    
    public function getCreatedAtAttribute($value)
    {  
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
    }
    public function getUpdatedAtAttribute($value){
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('America/Chicago');
    }
    public function setCreatedAtAttribute($value)
    {  
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('UTC');
    }
    public function setUpdatedAtAttribute($value){
        $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
        return $utc->setTimezone('UTC');
    }
}
