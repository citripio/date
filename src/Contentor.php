<?php 
namespace Citripio;

class Date {
	public $lang;

	public function __construct($args) {
		$this->lang = $args["lang"];
	}

	function is_today($date){
		return date('Ymd') == date('Ymd', strtotime($date));
	}

	function is_yesterday($date){
		$d = date('Ymd');
		return date('Ymd',strtotime($d. " - 1 days")) == date('Ymd', strtotime($date));
	}

	function month($month_number) {
		$months = [];
		switch ($this->lang) {
			case 'en':
				$months = array(1 => "January", 2 => "February", 3 => "March", 4 => "April", 5 => "May", 6 => "June", 7 => "July", 8 => "August", 9 => "September", 10 => "October", 11 => "November", 12 =>"December");
				break;
			case 'pt':
				$months = array(1 => "Janeiro", 2 => "Fevereiro", 3 => "Março", 4 => "Abril", 5 => "Maio", 6 => "Junho", 7 => "Julho", 8 => "Agosto", 9 => "Setembro", 10 => "Outubro", 11 => "Novembro", 12 =>"Dezembro");
				break;
			case 'es':
			default:
				$months = array(1 => "Enero", 2 => "Febrero", 3 => "Marzo", 4 => "Abril", 5 => "Mayo", 6 => "Junio", 7 => "Julio", 8 => "Agosto", 9 => "Septiembre", 10 => "Octubre", 11 => "Noviembre", 12 =>"Diciembre");
				break;
		}
		return($months[$month_number]);
	}

	function day($day_number) {
		$days = [];
		switch ($this->lang) {
			case 'en':
				$days = array(1 => "Monday", 2 => "Tuesday", 3 => "Wednesday", 4 => "Thursday", 5 => "Friday", 6 => "Saturday", 7 => "Sunday");
				break;
			case 'pt':
				$days = array(1 => "Segunda-feira", 2 => "Terça-Feira", 3 => "Quarta-Feira", 4 => "Quinta-Feira", 5 => "Sexta-Feira", 6 => "Sábado", 7 => "Domingo");
				break;
			case 'es':
			default:
				$days = array(1 => "Lunes", 2 => "Martes", 3 => "Miércoles", 4 => "Jueves", 5 => "Viernes", 6 => "Sábado", 7 => "Domingo");
				break;
		}
		return($days[$day_number]);
	}
}
?>
