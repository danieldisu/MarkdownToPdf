<?php
	include_once 'vendor/wkhtmltopdfphp/WkHtmlToPdf.php';

	Class PDFGenerator{


		public static $pdf;
		private static $css;

		public static function setup(){
			//$options['bin'] = "wkhtmltopdf/wkhtmltopdf.sh";
			$options['bin'] = "wkhtmltopdf/linux/wkhtmltopdf-i386";
			self::$pdf = new WkHtmlToPdf($options);
		}

		public static function addCSS($css){
			self::$css = $css;
		}

		public static function addPage($htmlPage){
			self::$pdf->addPage('<html><meta charset="utf-8"><style>'.self::$css.'</style>' . $htmlPage. '</html>');
		}

		public static function generatePDF(){
			if(!self::$pdf->send('document.pdf'))
				throw new Exception('Could not create PDF: '.self::$pdf->getError());
		}
	}
/*
	$basename = dirname(__FILE__);
		$binLocation['windows'] = $basename . "/wkhtmltopdf/windows/wkhtmltopdf.exe"; 
		$binLocation['linux'] = "wkhtmltopdf/wkhtmltopdf.sh";


		$options['bin'] = $binLocation['linux'];


		

		$pdf->addPage('http://www.google.com');


		$outputFolder = "/home/ddiaz/projects/markdown/";

		if(!$pdf->saveAs("/home/ddiaz/projects/markdown/pdf.pdf"))
		    throw new Exception('Could not create PDF: '.$pdf->getError());
*/