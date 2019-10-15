<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Htmllib {

  private $js = array();
	private $css = array();
	private $image = array();

    public function __construct() {
		$this->_set_default_css();
		$this->_set_default_js();
		$this->_set_default_font_awesome();
    }

	private function _set_default_js()
	{
		$this->js[] = 'jquery-2.1.1.js';
		//$this->js[] = 'jquery-1.3.3.js';
		$this->js[] = 'bootstrap.js';
		$this->js[] = 'jcanvas.min.js';
		$this->js[] = 'plugins/metisMenu/jquery.metisMenu.js';
		$this->js[] = 'plugins/slimscroll/jquery.slimscroll.min.js';
		$this->js[] = 'inspinia.js';
		$this->js[] = 'plugins/pace/pace.min.js';
		$this->js[] = 'plugins/toastr/toastr.min.js';
		$this->js[] = "plugins/bootstrap-select/ajax-bootstrap-select.min.js";

	}

	private function _set_default_css()
	{

		$this->css[] = "bootstrap.css";
		$this->css[] = "animate.css";
		$this->css[] = "style.css";
		$this->css[] = "custom.css";
		$this->css[] = "plugins/toastr/toastr.min.css";
		$this->css[] = "plugins/bootstrap-select/ajax-bootstrap-select.min.css";

	}

	private function _set_default_font_awesome()
	{
		$this->font_awesome[] = "css/font-awesome.css";
	}
	public function set_menu_js()
	{
//		$this->js[] = 'app/custom.js';
	}

	public function _set_form_css()
	{
    	$this->css[] = 'plugins/iCheck/custom.css';
    	$this->css[] = 'plugins/chosen/chosen.css';
    	$this->css[] = 'plugins/colorpicker/bootstrap-colorpicker.min.css';
    	$this->css[] = 'plugins/cropper/cropper.min.css';
    	$this->css[] = 'plugins/switchery/switchery.css';
    	$this->css[] = 'plugins/jasny/jasny-bootstrap.min.css';
    	$this->css[] = 'plugins/nouslider/jquery.nouislider.css';
    	$this->css[] = 'plugins/datapicker/datepicker3.css';
    	$this->css[] = 'plugins/ionRangeSlider/ion.rangeSlider.css';
    	$this->css[] = 'plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css';
    	$this->css[] = 'plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css';
		$this->css[] = 'plugins/touchspin/jquery.bootstrap-touchspin.min.css';
		$this->css[] = 'plugins/select2/select2.min.css';
		$this->css[] = 'plugins/daterangepicker/daterangepicker-bs3.css';
		$this->css[] = 'plugins/clockpicker/clockpicker.css';
		$this->css[] = 'plugins/steps/jquery.steps.css';

		$this->css[] = "plugins/bootstrap-select/ajax-bootstrap-select.min.css";
		$this->css[] = "plugins/bootstrap-select/bootstrap-dialog.min.css";
		$this->css[] = "plugins/bootstrap-select/bootstrap-select.min.css";
		//$this->css[] = 'bootstrap-validator/bootstrap-validator.css';
	}

	public function _set_form_js()
	{
		//$this->js[] = 'plugins/bootstrap-validator/bootstrapValidator-conf.js';
		//$this->js[] = 'plugins/eproc-validator.js';
		//$this->js[] = 'plugins/bootstrap-validator/bootstrapValidator.min.js';
		$this->js[] = 'plugins/chosen/chosen.jquery.js';
		$this->js[] = 'plugins/jsKnob/jquery.knob.js';
		$this->js[] = 'plugins/jasny/jasny-bootstrap.min.js';
		$this->js[] = 'plugins/datapicker/bootstrap-datepicker.js';
		$this->js[] = 'plugins/nouslider/jquery.nouislider.min.js';
		$this->js[] = 'plugins/switchery/switchery.js';
		$this->js[] = 'plugins/ionRangeSlider/ion.rangeSlider.min.js';
		$this->js[] = 'plugins/iCheck/icheck.min.js';
		$this->js[] = 'plugins/colorpicker/bootstrap-colorpicker.min.js';
		$this->js[] = 'plugins/clockpicker/clockpicker.js';
		$this->js[] = 'plugins/cropper/cropper.min.js';
		$this->js[] = 'plugins/fullcalendar/moment.min.js';
		$this->js[] = 'bootstrap-datetime.js';
		$this->js[] = 'plugins/daterangepicker/daterangepicker.js';
		$this->js[] = 'plugins/select2/select2.full.min.js';
		$this->js[] = 'plugins/touchspin/jquery.bootstrap-touchspin.min.js';
		$this->js[] = 'plugins/validate/jquery.validate.min.js';
		$this->js[] = 'plugins/staps/jquery.steps.min.js';
		$this->js[] = 'plugins/gmaps/gmaps.js';

		$this->js[] = "plugins/bootstrap-select/ajax-bootstrap-select.min.js";
		$this->js[] = "plugins/bootstrap-select/bootstrap-select.min.js";
		$this->js[] = "plugins/bootstrap-select/bootstrap-dialog.min.js";
	}

	public function set_table_js()
	{
    	$this->js[] = "plugins/jeditable/jquery.jeditable.js";
    	$this->js[] = "plugins/dataTables/datatables.min.js";
    }

	public function set_table_cs()
	{
		$this->css[]= "plugins/dataTables/datatables.min.css";
	}

	public function set_graph_js()
	{
		$this->js[] = "plugins/canvas/canvasjs.min.js";
		//$this->js[] = "demo/chartjs-demo.js";
	}

	public function add_js($js)
	{
		$this->js[] = $js;
	}

	public function add_css($css)
	{
		$this->css[] = $css;
	}

	public function declare_js()
	{
		$min_script = array();

		foreach ($this->js as $url) {
			$script[] = '<script type="text/javascript" src="' .base_url().'assets/js/'.$url. '"></script>';
		}

		foreach ($script as $tag_html) {
			echo $tag_html;
		}
	}

	public function declare_css()
	{
		$min_script = array();

		foreach ($this->css as $url) {
			$script[] = '<link rel="stylesheet" href="' .base_url().'assets/css/'.$url. '" />';
		}

		foreach ($script as $tag_html) {
			echo $tag_html;
		}
	}

	public function declare_font_awesome()
	{
		$min_script = array();

		foreach ($this->font_awesome as $url) {
			$script[] = '<link rel="stylesheet" href="' .base_url().'assets/font-awesome/'.$url. '" />';
		}

		foreach ($script as $tag_html) {
			echo $tag_html;
		}
	}

}

?>
