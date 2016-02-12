<?php
class Robot{
	//プロパティを設定
	//名前のプロパティ
	private $name;
　　//食べ物のプロパティ
	private $food;

    function __construct(){
 
    }
	//talkメソッド
	private function　talk(){
        echo 'こんにちは、僕の名前は'.$this->$name.'です。<br>';
	}
	//eat()メソッド
	private function　eat(){
        echo '好きな食べ物は'.$this->$food.'です。<br>'
	}
	//greeting()メソッド
	public function　greeting(){
        $this->$talk();
        $this->$eat();
	}

	//引数をnameプロパティに格納
	public function setName($namae){
		$this->$name = $namae;
	}

    //引数をfoodプロパティに格納
    public function setFood($tabemono){
    	$this->$food = $tabemono;
    }

    //nameのsetter、getter
    private function setterName($n){
        if($name!=''){
            $this->$name = $n;
        }
    }

    private function getterName(){
    	return $this->$name;
    }

    //foodのsetter,getter
    private function setterFood($){
    	$this->$food = $f;
    }

    private function getterFood(){
    	return $this-> $food;
    }
}

$robot1 = new robot();

 ?>