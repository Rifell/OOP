<?php
class Worker {

    private $name;
    private $age;
    private $salary;

    public function setName($name)
    {
    $this->name = $name;
    }
    
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function setAge($age)
    {
        if ($age >= 18 && $age <= 65)
        {
            $this->age = $age;
        }
        else {
            echo "Введен некорректный возраст <br>";
        } 
    }

    public function getName()
    { 
        return  $this->name;
    }
    
    public function getSalary()
    {
       return $this->salary;
    }

    public function getAge()
    {
       return $this->age;
    } 
}

$Ivan = new Worker();
$Ivan->setName("Ваня");
$Ivan->setAge(25);
$Ivan->setSalary(1000);

$Vasya = new Worker();
$Vasya->setName("Василий");
$Vasya->setAge(26);
$Vasya->setSalary(2000);

$summary_salary = $Vasya->getSalary() + $Ivan->getSalary();
$summary_age = $Vasya->getAge() + $Ivan->getAge();

echo "Cумма зарплат мужичков: ". $summary_salary . "<br>";
echo "Суммарный возраст: ". $summary_age;