<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// require_once("./vendor/dompdf/dompdf/autoload.inc.php");
require_once(dirname(__FILE__) . '/dompdf/autoload.inc.php');
use Dompdf\Dompdf;

class Pdfgenerator {

  protected function ci()
  {
      return get_instance();
  }

  public function generate($view, $data = array(), $filename='', $stream=TRUE, $paper = 'A4', $orientation = "portrait")
  {
    $html = $this->ci()->load->view($view, $data, TRUE);
    $dompdf = new DOMPDF();
    $dompdf->loadHtml($html);
    $dompdf->setPaper($paper, $orientation);
    $dompdf->render();
    if ($stream) {
        $dompdf->stream($filename.".pdf", array("Attachment" => false));
    } else {
        return $dompdf->output();
    }
  }
}