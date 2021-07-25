<?php
if (! defined('BASEPATH')) exit('No direct script access allowed');

class My_Pagination extends Pagination
{
	var $offset = 0;
	var $pagination_selector = 'page';
	var $index_page;

	function My_Pagination ()
	{
		parent::__construct();
		log_message('debug', "MY_Pagination Class Initialized");

		$this->index_page = config_item('index_page') != '' ? config_item('index_page') . '/' : '';
		$this->_set_pagination_offset();
	}

	function _set_pagination_offset ()
	{
		$CI = & get_instance();
		if (strstr($CI->uri->uri_string(), $this->pagination_selector)) {
			$segments = $CI->uri->segment_array();
			foreach ($segments as $key => $value) {
				if ($value == $this->pagination_selector) {
					$this->offset = $CI->uri->segment($key + 1);
					$this->uri_segment = $key + 1;
					$uri = $CI->uri->uri_string();
					$pos = strpos($uri, $this->pagination_selector);
					$this->base_url = '/'.$this->index_page . substr($uri, 0, $pos + strlen($this->pagination_selector.'/'));
				}
			}
		}
		else {
			$this->offset = 0;
			$this->uri_segment = 0;
			$this->base_url = '/'.$this->index_page . $CI->uri->uri_string() . '/' . $this->pagination_selector.'/';
		}
	}
}
