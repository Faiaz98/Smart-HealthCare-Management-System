<?php

//pdf.php

//require_once '../class/pdf/dompdf/autoload.inc.php';
//require_once '../class/pdf/dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
require_once '../class/pdf/dompdf/lib/php-svg-lib/src/autoload.php';
require_once '../class/pdf/dompdf/src/Autoloader.php';
require_once '../class/pdf/dompdf/lib/html5lib/Parser.php';
Dompdf\Autoloader::register();
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$options = $dompdf->getOptions();
$options->setDefaultFont('Courier');
$dompdf->setOptions($options);


/*class Pdf extends Dompdf
{
	public function __construct()
	{
		parent::__construct();
	}
}*/


?>