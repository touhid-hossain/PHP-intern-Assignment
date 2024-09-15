<!-- Task 3: Encapsulation -->
 
class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName() {
        return $this->name;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($newSalary) {
        if ($newSalary > 0) {
            $this->salary = $newSalary;
        } else {
            throw new InvalidArgumentException('Salary must be a positive value');
        }
    }
}