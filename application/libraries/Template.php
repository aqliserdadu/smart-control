<?php
class Template {
	protected $_ci;
	
	function __construct()
		{
			$this->_ci=&get_instance();
		}
	
	function admin($template,$data=null)
	{
		$data['content'] = $this->_ci->load->view($template,$data,true);
		$this->_ci->load->view('template/template',$data);
	}
	function publics($content, $data = NULL)
	{
		  $data['isicontent'] = $this->_ci->load->view($content, $data, TRUE);
        
        $this->_ci->load->view('template/templatePublik', $data);
		
	}
	
	function controlData($template,$data=null)
	{
		$data['content'] = $this->_ci->load->view($template,$data,true);
		$this->_ci->load->view('template/templateControlData',$data);
	}
	

	
	
}
