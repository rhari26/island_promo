<?php 
tcpdf();
$obj_pdf = new TCPDF('P', PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
$obj_pdf->SetCreator(PDF_CREATOR);
$title = "PDF Report";
$obj_pdf->SetTitle($title);
$obj_pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, $title, PDF_HEADER_STRING);
$obj_pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$obj_pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
$obj_pdf->SetDefaultMonospacedFont('helvetica');
$obj_pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$obj_pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
$obj_pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$obj_pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
// $obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
ob_start();
// we can have any view part here like HTML, PHP etc
$content = '<table style="max-width: 900px; margin: 0 auto; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;"><tbody style="width: 100%;"><tr style="width: 100%;"><td style="width: 100%; background-color: #ffffff; "><div style=" padding: 20px ; text-align: center; height: 75px; background-color: #3551b5; "><h5 style="font-size: 35px; font-weight: 500; color: #ffffff; margin: 10px 0px;">Island Promo</h5></div><div style="max-width: 800px; margin:0 auto; padding: 25px 50px; background-color: #ffffff; border-radius: 3px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box;"><div style="width: 100%; padding: 20px 0px;"><div style="width: 100%; float: left; margin-bottom: 25px;"><address><strong>Twitter, Inc.</strong><br>795 Folsom Ave, Suite 600<br>San Francisco, CA 94107<br><abbr title="Phone">P:</abbr> (123) 456-7890</address></div></div><table style="margin-bottom: 20px;"></table><table style="margin-bottom: 20px;"><thead style="margin-bottom: 20px;"><tr><th style="border: 1px solid #f1f1f1; padding: 10px;>#</th><th style="border: 1px solid #f1f1f1; padding: 10px;>Item</th><th style="border: 1px solid #f1f1f1; padding: 10px;>Description</th><th style="border: 1px solid #f1f1f1; padding: 10px;>Quantity</th><th style="border: 1px solid #f1f1f1; padding: 10px;>Unit Cost</th><th style="border: 1px solid #f1f1f1; padding: 10px;>Total</th></tr></thead><tbody><tr><td style="border-top: 1px solid #f1f1f1; padding: 10px;>1</td><td style="border-top: 1px solid #f1f1f1; padding: 10px;>LCD</td><td style="border-top: 1px solid #f1f1f1; padding: 10px;>Lorem ipsum dolor sit amet.</td><td style="border-top: 1px solid #f1f1f1; padding: 10px;>1</td><td style="border-top: 1px solid #f1f1f1; padding: 10px;>$380</td><td style="border-top: 1px solid #f1f1f1; padding: 10px;>$380</td></tr><tr><td style="border-top: 1px solid #f1f1f1; padding: 10px;>2</td><td style="border-top: 1px solid #f1f1f1; padding: 10px;>Mobile</td><td style="border-top: 1px solid #f1f1f1; padding: 10px;>Lorem ipsum dolor sit amet.</td><td style="border-top: 1px solid #f1f1f1; padding: 10px;>5</td><td style="border-top: 1px solid #f1f1f1; padding: 10px;>$50</td><td style="border-top: 1px solid #f1f1f1;padding: 10px;>$250</td></tr><tr><td style="border-top: 1px solid #f1f1f1; padding: 10px;>3</td><td style="border-top: 1px solid #f1f1f1; padding: 10px;>LED</td><td style="border-top: 1px solid #f1f1f1; padding: 10px;>Lorem ipsum dolor sit amet.</td><td style="border-top: 1px solid #f1f1f1;padding: 10px;>2</td><td style="border-top: 1px solid #f1f1f1 padding: 10px;">$500</td><td style="border-top: 1px solid #f1f1f1; padding: 10px;>$1000</td></tr></tbody></table></div></div></td></tr></tbody><tfoot  style="width: 100%;"><tr style="width: 100%; margin-bottom: 20px;"><td style="width: 100%;"><div style="width: 60%; margin:0 auto;"><p style="font-size: 13px; text-align:center; margin-top: 5px;">Copyright &copy; 2017 Island Promo. All rights reserved.</p></div></td></tr></tfoot></table>';
ob_clean();
$obj_pdf->writeHTML($content, true, 0, true, 0);
$obj_pdf->Output('output.pdf', 'I');
?>
