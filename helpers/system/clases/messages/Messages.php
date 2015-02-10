<?php 
	class Messages{

		private $type;
		private $message;
		private $redirection;

		public function __construct($type,$message,$redirection){
			$this->type=$type;
			$this->message=$message;
			$this->redirection=$redirection;
		}

		public function get(){
			if($this->type == 'alert'){
				
			}
			else if($this->type == 'delete'){
				
			}
			else if($this->type == 'edit'){
				
			}
			else{

			}
		}


	}
 ?>