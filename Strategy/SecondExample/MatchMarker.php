<?php
namespace Strategy\SecondExample;

class MatchMarker extends Marker{
    public function mark($response)
    {
        return ($this->test == $response);
    }
}