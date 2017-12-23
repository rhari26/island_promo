<?php $this->load->view('session_page'); ?>
<?php //$this->load->view('head_bar'); ?>
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
$obj_pdf->SetFont('helvetica', '', 9);
$obj_pdf->setFontSubsetting(false);
$obj_pdf->AddPage();
// ob_start();
// we can have any view part here like HTML, PHP etc
$msg = '';

$total = $campaign[0]['amount'] * count($camp_dates);
$client = $this->application->get_client_data($campaign[0]['client_id']);
$date = date("M d Y");
foreach($camp_dates as $date){
$msg = '<tr>
	<td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">#</td>
	<td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">'.$date['camp_date'].'</td>
	<td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">'.$campaign[0]['subject'].'</td>
	<td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">'.$campaign[0]['amount'].'</td>
	<td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; "></td>
</tr>'.$msg;
 }
$content = '<!DOCTYPE html><html>
    <span><span align="center"><h1 color= "#0575E6" style="font-size: 20px;">Island Promo</h1></span></span>

    <div>
        <table>
            <tr>
                <td align="left" style="line-height: 18px;"><span><b>Order Date: </b><br /><b>Order ID: </b> #'.$campaign[0]['id'].' <br /></span></td>
                <td align="right" style="line-height: 18px;"><span><b>Invoice</b><br /><small>2016-04-23654789</small></span></td>
            </tr>
        </table>
    </div>
    <div>
        <table cellpadding="5">
            <thead>
                <tr><th style="border: 1px solid #f1f1f1; height: 25px; text-align: center; line-height: 18px; font-size: 8px; font-weight: bold;">#</th>
                <th style="border: 1px solid #f1f1f1; height: 25px; text-align: center; line-height: 18px; font-size: 8px; font-weight: bold;">Date</th>
                <th style="border: 1px solid #f1f1f1; height: 25px; text-align: center; line-height: 18px; font-size: 8px; font-weight: bold;">Description</th>
                <th style="border: 1px solid #f1f1f1; height: 25px; text-align: center; line-height: 18px; font-size: 8px; font-weight: bold;">Amount</th>
                <th style="border: 1px solid #f1f1f1; height: 25px; text-align: center; line-height: 18px; font-size: 8px; font-weight: bold;">Total</th>
            </tr></thead>
            <tbody>'.$msg.'
                <tr>
                    <td colspan="4"></td>
                    <td colspan="2"  align="right" style=" border: 1px solid #f1f1f1; text-align: center; font-size: 9px; color: #0575E6; "><b>Total '.$total.'</b></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div>
        <table>
            <tr>
                <td align="right" style="line-height: 18px;"><span><span><b>Sub-total:</b> '.$total.'<br /></span><span>Discout: '.$client[0]['discount'].'%<br /></span><span><h3>USD '.$total.'</h3></span></span></td>
            </tr>
        </table>
    </div>

  <div align="center" style="font-size: 8px; color: #aaaaa;">
    2016 © Island Promo.
  </div>

</body>
</html>';
// ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$path = base_url()."uploads/output.pdf";
ob_clean();
$obj_pdf->Output("uploads/output.pdf", 'F');
    $this->load->library('email');
    $config = array();
    $config['protocol'] = 'smtp';
    $config['smtp_host'] = 'xxx';
    $config['smtp_user'] = 'xxx';
    $config['smtp_pass'] = 'xxx';
    $config['smtp_port'] = 25;
    $this->email->initialize($config);
     
    $this->email->set_newline("\r\n");
    
    $this->email->from('info@islandpromotionlk.com', 'Identification');
    $this->email->to($client[0]['email']);
    $this->email->subject('Invoice from Island Promotion');
    $this->email->message('Hi! '.$client[0]['client_name'].' we have sent you the invoice');
    $this->email->attach($path);
    if($this->email->send())
    {
        echo "string";
    }





?>