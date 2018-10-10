<?php
require_once ('../ex01/Vertex.class.php');
class vector
{
	private $_x;
	private $_y;
	private $_z;
	private $_w;
	static $verbose = false;

	public function __construct($value)
	{
		if (isset($value['dest']) && !empty($value['dest']))
		{
			$dest = $value['dest'];
			if (isset($value['orig']) && !empty($value['orig']))
			{
				$orig = $value['orig'];
			}
			else
			{
				$orig = new Vertex(array('x' => 0,'y' => 0,'z' => 0));
			}
			$this->_x = $dest->getX() - $orig->getX();
			$this->_y = $dest->getY() - $orig->getY();
			$this->_z = $dest->getZ() - $orig->getZ();
			$this->_w = 0;
		}
		if (Self::$verbose)
        {
             printf("Vector( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f, ) constructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
        }
	}

	public function __destruct()
	{
		if (Self::$verbose)
        {
             printf("Vertex( x:%0.2f, y:%0.2f, z:%0.2f, w:%0.2f ) destructed\n", $this->_x, $this->_y, $this->_z, $this->_w);
        }
	}

	function __toString()
    {
        if (Self::$verbose)
	        return (vsprintf("Vector( x:%0.2f, y: %0.2f, z:%0.2f, w:%0.2f )", array($this->_x, $this->_y, $this->_z, $this->_w)));
	}

	public function magnitude()
	{
		return sqrt(($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z));
	}

	public function normalize()
	{
		$mag = $this->magnitude();
		if ($mag == 1)
			return clone $this;
		return new Vector(array('dest' => new Vertex(array('x' => $this->_x / $mag,'y' => $this->_y / $mag,'z' => $this->_z / $mag))));
	}

	public function add( Vector $rhs )
	{
		return new Vector(array('dest' => new Vertex(array('x' => $this->_x + $rhs->_x,'y' => $this->_y + $rhs->_y,'z' => $this->_z + $rhs->_z))));
	}

	public function  sub( Vector $rhs )
	{
		return new Vector(array('dest' => new Vertex(array('x' => $this->_x - $rhs->_x,'y' => $this->_y - $rhs->_y,'z' => $this->_z - $rhs->_z))));
	}

	public function opposite()
	{
		return new Vector(array('dest' => new Vertex(array('x' => -$this->_x,'y' => -$this->_y,'z' => -$this->_z))));
	}

	public function  scalarProduct( $k )
	{
		return new Vector(array('dest' => new Vertex(array('x' => $this->_x * $k,'y' => $this->_y * $k,'z' => $this->_z * $k))));
	}

	public function dotProduct( Vector $rhs )
	{
		return ($this->_x * $rhs->_x + $this->_y * $rhs->_y + $this->_z * $rhs->_z);
	}
	public function cos(Vector $ret)
	{
		return ((($this->_x * $ret->_x) + ($this->_y * $ret->_y) + ($this->_z * $ret->_z)) / sqrt((($this->_x * $this->_x) + ($this->_y * $this->_y) + ($this->_z * $this->_z)) * (($ret->_x * $ret->_x) + ($ret->_y * $ret->_y) + ($ret->_z * $ret->_z))));
	}
	public function crossProduct( Vector $rhs )
	{
		return new Vector(array('dest' => new Vertex(array('x' => $this->_y * $rhs->_z - $this->_z * $rhs->_y,'y' => $this->_z * $rhs->_x - $this->_x * $rhs->_z,'z' =>  $this->_x * $rhs->_y - $this->_y * $rhs->_x))));

	}
	public static function doc()
	{
		$read = fopen("Vector.doc.txt", 'r');
		echo "\n";
		while ($read && !feof($read))
			echo fgets($read);
		echo "\n";
	}
}

?>
