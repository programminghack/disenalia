<?php
	class SessionGenerate{
		private $_id;
		private $_user;
		private $_type;

		public function getSession($id = null, $user = null, $type = null)
		{
			$this->_id = $id;
			$this->_user = $user;
			$this->_type = $type;
			$_SESSION['id'] = $this->_id;
			$_SESSION['type'] = $this->_type;
			return $_SESSION['user'] = $this->_user;

		}
	}