<?php

class Tyrion extends Lannister
{
    public function sleepWith($name)
    {
        if (get_class($name) == "Sansa")
            print("Let's do this.\n");
        else
        print("Not even if I'm drunk !\n");
    }
}
?>