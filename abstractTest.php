
<?php
	
	abstract class TestAbstract{
		
		//abstract public  function function1(){
		//	echo $this-function1();
		//}
		
		public function function2(){
			echo $this->function3();
			echo "function2 \n";
		}
	}  
	
	
	class Child extends TestAbstract{
		
		//public function function1(){
		//	return echo "function1";
		//} 
		
		public function sum($a,$b){
			return $a+$b;
		}
		
		//public function function2(){
		//	return "function2";
		//}
		
		public function function3(){
			//return "function3";
			echo "function3 \n";
			//return false;
		}
		
		/*public function function3(){
			//return "function3";
			echo "function3 second";
			//return false;
		}*/
	}
	
	$childObj = new Child();
	print $childObj->sum(10,20);
	print $childObj->function2();
	print $childObj->function1();
