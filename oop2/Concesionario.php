<?php

	class Compra_vehiculo{

		private $precio_base;

		protected static $subsidio=0;


		function __construct($gama){

			$str = self::str_purifier($gama);

			if ($str == "urbano"){

					$this->precio_base=10000;

			} else if($str == "compacto"){

					$this->precio_base=20000;

			}	else if($str == "berlina"){

					$this->precio_base=30000;

			}

		}// fin constructor

		static function subsidio($monto) {

			// Tiene que usarse en ese orden: month-day-year
			if (date("m-d-y") > "07-08-2017") {
				self::$subsidio = $monto;
			}
		}




		function climatizador(){
				$this->precio_base+=2000;
		}// fin climatizador


		function navegador_gps(){
			$this->precio_base+=2500;
		}//fin navegador gps



		function tapiceria_cuero($color){

			$str = self::str_purifier($color);

			if($str == "blanco"){
				$this->precio_base+=3000;
			}	else if($str == "beige"){
				$this->precio_base+=3500;
			}	else{
				$this->precio_base+=5000;
			}

		}// fin tapicería

		public static function str_purifier($str) {
			return str_replace(" ", "", strtolower($str));
		}



		function precio_final(){
			$valor_final = $this->precio_base - self::$subsidio;
			return $valor_final;
		}// fin precio final



	}// fin clase


?>
