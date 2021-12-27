<?php
class Dance {
    //khai bao thuoc tinh
    public $name;
    public $gender;

    //khai bao phuong thuc
    public function __construct($name, $gender) {
        $this->name = $name;
        $this->gender = $gender;

    }
    public function getGender(): string {
        return $this->gender;
    }
    public function getName(): string {
        return $this->name;
    }
    
}
class SquareDance {
    public SplQueue $queueMale;
    public SplQueue $queueFemale;

    //khai bao phuong thuc 
    public function __construct() {
        $this->queueMale = new SplQueue();
        $this->queueFemale = new SplQueue();
    }

    public function addDance(Dance $dance): void
    {
        if ($dance->getGender() == 'MALE') {
            $this->queueMale->enqueue($dance);
        } else {
            $this->queueFemale->enqueue($dance);
        }
    }
    public function pairDance(): string
    {
        while (!$this->queueFemale->isEmpty() || !$this->queueMale->isEmpty()) {
            if ($this->queueMale->isEmpty()) {
                return count($this->queueFemale) . ' nữ đang chờ' . '<br>';
            }

            if ($this->queueFemale->isEmpty()) {
                return count($this->queueMale) . ' nam đang chờ' . '<br>';
            }

            echo 'cặp: ' . $this->queueMale->dequeue()->getName() . '-' . $this->queueFemale->dequeue()->getName() . '<br>';
        }
    }
}

$dance1 = new Dance("Na", 'MALE');
$dance2 = new Dance("Bi", "MALE");
$dance3 = new Dance("Bo", "MALE");
$dance4 = new Dance("Mi", "FEMALE");
$dance5 = new Dance("Nu", "FEMALE");

$squareDance = new SquareDance();
$squareDance->addDance($dance1);
$squareDance->addDance($dance2);
$squareDance->addDance($dance3);
$squareDance->addDance($dance4);
$squareDance->addDance($dance5);

echo $squareDance->pairDance();

?>







