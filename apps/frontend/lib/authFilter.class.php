<?php

class authFilter extends sfFilter 
{
	
	public function execute($filterChain){

		if ($this->isFirstCall())
		{
			$user = $this->getContext()->getUser();
			if ($user->getAttribute('id')) $user->idLogin($user->getAttribute('id'));
		}

		$filterChain->execute();
	}
	
}