<?php
	include_once 'vendor/Michelf/Markdown.php';
	include_once 'PDFGenerator.php';

	use Michelf\Markdown;


	$cssText = $_POST['cssText'];
	$markdownTexts = $_POST['markdownText'];

	PDFGenerator::setup();

	
	PDFGenerator::addCSS($cssText);

	foreach($markdownTexts as $markdownText){
		$markdownText = convertToHtml($markdownText);
		PDFGenerator::addPage($markdownText);
	}

	PDFGenerator::generatePDF();
	


	

	

	




	function convertToHtml($myText){
		$my_html = Markdown::defaultTransform($myText);
		return $my_html;
	}

?>