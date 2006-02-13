<?php

class Layout extends TTemplateControl
{
	public function onLoad($param)
	{
		$num = str_replace('Ticket','',get_class($this->getPage()));
		$this->getPage()->setTitle("Verifying Ticket $num");
		$this->ticketlink->setText("Verifying Ticket $num");
		$this->ticketlink->setNavigateUrl("http://trac.pradosoft.com/ticket/{$num}");
	}
}

?>