<?php
$kid = new Kid();
$kid->setName('ドラミ');
$kid->setSex('girl');

echo $kid->showName();


$kid2 = new Kid();
$kid2->setName('ジャイアン');
$kid2->setSex('boy');

echo $kid2->showName();

class Kid{
	private $name;
	private $sex;
	private $age;

	function __construct(){
		$this->name = 'Seed';
		$this->sex = 'boy';
	}

	public function setName($namae){
		$this->name=$namae;
	}

	public function getName(){
		return $this->name;
	}

	public function setSex($gender){
		return $this->sex = $gender;
	}

	public function getSex(){
        return $this->sex;
	}

	public function setAge($years){
		$this->age=$years;
	}

	public function getAge(){
		return $this->age;
	}

	public function showName(){
		if($this->age<12){
            if ($this->sex == 'boy') {
        	    return $this->name.'くん<br>';
            }elseif($this->sex == 'girl') {
        	    return $this->name.'ちゃん<br>';
            }else{
        	    return $this->name.'の性別不明ですー。';
            }
        }else{
        	if ($this->sex == 'boy') {
        	    return $this->name.'君<br>';
            }elseif($this->sex == 'girl') {
        	    return $this->name.'さん<br>';
            }else{
        	    return $this->name.'の性別不明ですー。';
            }
        }
	}
}




 ?>