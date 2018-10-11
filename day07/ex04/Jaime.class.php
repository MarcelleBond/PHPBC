<?php

class Jaime extends Lannister
{
    public function sleepWith($name)
    {
        if (get_class($name) == "Tyrion")
            print("Not even if I'm drunk !\n");
        else if (get_class($name) == "Sansa")
            print("Let's do this.\n");
        else if (get_class($name) == "Cersei")
            print("With pleasure, but only in a tower in Winterfell, then.\n");
    }
}
?>