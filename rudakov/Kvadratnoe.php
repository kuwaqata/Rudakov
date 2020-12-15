<?php
Class Kvadratnoe extends Lineynoe {
    protected function dis($a, $b, $c) {
		$x = ($b**2)-4*$a*$c;
		return $x;
	}
	public function qu_solve($a, $b, $c){
		$d = $this->dis($a,$b,$c);
		if($a == 0){
			return $this->solve($b,$c);
		}
		if ($d > 0) {
			return $this->X=array (
				-($b+sqrt($d)/(2*$a)),
				-($b-sqrt($d)/(2*$a))
			);
		}
		
		if ($d == 0) {
			return $this->X=array(-($b/(2*$a)));
		}
		return $this->X=NULL;
	}
}
?>