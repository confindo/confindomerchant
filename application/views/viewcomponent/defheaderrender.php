<?php
	class Render{
		private $_defHeader = array(
			'viewcomponent/defjs',
			'viewcomponent/defcss'
		);

		private $_finalHeader;

		public function __construct($optionalHeader = NULL){
			$finalHeader = (empty($optionalHeader)) ? $this->_defHeader : array_merge($this->_defHeader,$optionalHeader);
			$this->_finalHeader = $finalHeader;
		}

		public function getHeader(){
			return $this->_finalHeader;
		}
	}
?>