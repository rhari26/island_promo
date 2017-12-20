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
$content = '<!DOCTYPE html><html>
    <span><span align="center"><h1 color= "#0575E6">Island Promo</h1></span></span>
    <table cellpadding="10">
        <tr>
            <td align="left"><span><b>Order Date: </b>Jan 17, 2016<br /><b>Order Status: </b><span>Pending</span><br /><b>Order ID: </b> #123456<br /></span></td>
            <td align="right"><span><b>Invoice</b><br /><small>2016-04-23654789</small></span></td>
        </tr>
    </table>

    <table cellpadding="5">
        <thead>
            <tr><th style="border: 1px solid #f1f1f1; height: 25px; text-align: center; line-height: 18px; font-size: 8px; font-weight: bold;">#</th>
            <th style="border: 1px solid #f1f1f1; height: 25px; text-align: center; line-height: 18px; font-size: 8px; font-weight: bold;">Item</th>
            <th style="border: 1px solid #f1f1f1; height: 25px; text-align: center; line-height: 18px; font-size: 8px; font-weight: bold;">Description</th>
            <th style="border: 1px solid #f1f1f1; height: 25px; text-align: center; line-height: 18px; font-size: 8px; font-weight: bold;">Quantity</th>
            <th style="border: 1px solid #f1f1f1; height: 25px; text-align: center; line-height: 18px; font-size: 8px; font-weight: bold;">Unit Cost</th>
            <th style="border: 1px solid #f1f1f1; height: 25px; text-align: center; line-height: 18px; font-size: 8px; font-weight: bold;">Total</th>
        </tr></thead>
        <tbody>
            <tr>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">1</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">LCD</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">Lorem ipsum dolor sit amet.</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">1</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">$380</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">$380</td>
            </tr>
            <tr>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">2</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">Mobile</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">Lorem ipsum dolor sit amet.</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">5</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">$50</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">$250</td>
            </tr>
            <tr>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">3</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">LED</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">Lorem ipsum dolor sit amet.</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">2</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">$500</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">$1000</td>
            </tr>
            <tr>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">4</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">LCD</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">Lorem ipsum dolor sit amet.</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">3</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">$300</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">$900</td>
            </tr>
            <tr>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">5</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">Mobile</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">Lorem ipsum dolor sit amet.</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">5</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">$80</td>
                <td style="border: 1px solid #f1f1f1; text-align: center; font-size: 8px; color: #383838; ">$400</td>
            </tr>
            <tr>
                <td colspan="4"></td>
                <td colspan="2"  align="right" style=" border: 1px solid #f1f1f1; text-align: center; font-size: 9px; color: #0575E6; "><b>Total $400</b></td>
            </tr>
        </tbody>
    </table>
    <table cellpadding="10">
        <tr>
            <td align="right"><span><span><b>Sub-total:</b> 2930.00<br /></span><span>Discout: 12.9%<br /></span><span>VAT: 12.9%<br /></span><span><h3>USD 2930.00</h3></span></span></td>
        </tr>
    </table>

  <div align="center" style="font-size: 8px; color: #aaaaa;">
    2016 © Island Promo.
  </div>

</body>
</html>';
// ob_end_clean();
$obj_pdf->writeHTML($content, true, false, true, false, '');
$obj_pdf->Output('output.pdf', 'I');
?>