<?php
class User {

    protected $name;
    protected $age;

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }
}

class Worker extends User {

    protected $salary;

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$Ivan = new Worker();
$Ivan->setName("Ванек");
$Ivan->setAge(25);
$Ivan->setSalary(1000);

$Vasya = new Worker();
$Vasya->setName("Василий");
$Vasya->setAge(26);
$Vasya->setSalary(2000);

$summary_salary = $Vasya->getSalary() + $Ivan->getSalary();
echo "Cумма зарплат мужичков: ". $summary_salary . "<br>";

class Student extends User {

    private $grants;
    private $course;

    public function setGrants($grants)
    {
        $this->grants = $grants;
    }

    public function setCourse($course)
    {
        $this->course = $course;
    }

    public function getGrants()
    {
        return $this->grants;
    }
    public function getCourse()
    {
        return $this->course;
    }
}

$Alex = new Student();
$Alex->setName("Алеша");
$Alex->setAge(21);
$Alex->setGrants(5000);
$Alex->setCourse(4);

class Driver extends Worker {

    private $driving_exp;
    private $driving_cat;

    public function setExp($driving_exp)
    {
        $this->driving_exp = $driving_exp;
    }

    public function setCat($driving_cat)
    {
        $this->driving_cat = $driving_cat;
    }
}

$Semen = new Driver();
$Semen->setExp(15);
$Semen->setCat("B");