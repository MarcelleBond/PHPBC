<?php

class Targaryen
{
    public function GetBurned()
    {
        if ($this->resistsFire())
            return("emerges naked but unharmed"); 
        else
            return("burns alive");
    }
    public function resistsFire()
    {
        return false;
    }
}

?>