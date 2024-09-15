<!-- Task 1: Class Inheritance -->

// Abstract class Shape
abstract class Shape {
    protected $name;

    public function __construct($name) {
        $this->name = $name;
    }

    abstract public function calculateArea();
}

// Circle class extending Shape
class Circle extends Shape {
    private $radius;

    public function __construct($name, $radius) {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }
}
 
// Rectangle class extending Shape
class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($name, $length, $width) {
        parent::__construct($name);
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}