<?php
tcpdf();
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Loker');
$pdf->SetTitle($data_resume_download->name_resume);
$pdf->SetSubject('TCPDF Tutorial');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

// set default header data

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('helvetica', '', 10);
$pdf->SetPrintHeader(false);
$pdf->SetPrintFooter(false);
$pdf->AddPage();

$html = <<<EOF
<style>
    h1 {
	     color: #0fabbc ;
        font-family: helvetica;
        font-size: 15pt;
    	padding-top : 10px ;
    	padding-bottom : 10px ;        
    }
    p {
        font-family: helvetica;
        font-size: 8pt;
    }

    table {
        color: #003300;
        font-family: helvetica;
        font-size: 8pt;
        width : 100% ;
        border :none ;
    	padding-top : 10px ;
    	padding-bottom : 10px ;
    }
    img{
    	height : 300px ;
    }
    b {
    		     color: #0fabbc ;

    }
</style>

<h1 class="title">$data_resume_download->name_resume</h1>
<hr>
	<table>
	 <tr >
	  <td width="300"><p><b>Nama :</b> $data_resume_download->nama_kandidat </p></td>
	  <td width="300" rowspan="7"><img src="http://localhost/loker/assets/admin/images/$data_resume_download->picture"></td>
	 </tr>
	 <tr>
	  <td width="300"><p><b>Tahun Kelahiran :</b> $data_resume_download->birth_year </p></td>
	 </tr>
	 <tr>
	  <td width="300"><p><b>Jenis Kelamin :</b> $data_resume_download->gender </p></td>
	 </tr>
	 <tr>
	  <td width="300"><p><b>Status Pernikahan :</b> $data_resume_download->married </p></td>
	 </tr>	
	 <tr>
	  <td width="300"><p><b>Email :</b> $data_resume_download->email </p></td>
	 </tr>
	 <tr>
	  <td width="300"><p><b>No. Hp :</b> $data_resume_download->phone </p></td>
	 </tr>
	 <tr>
	  <td width="300"><p><b>Alamat :</b> $data_resume_download->name_provinces , $data_resume_download->name_regencies , $data_resume_download->name_districts, $data_resume_download->name_villages , $data_resume_download->location  </p></td>
	 </tr>	 	 		  	 	 
	</table>
	<h1>Ringkasan Profile</h1>
	<hr >	
	<p>$data_resume_download->profile</p>
	<h1>Riwayat Pendidikan</h1>
	<hr >	
	<p>$data_resume_download->history_education</p>
	<h1>Keahlian</h1>
	<hr >	
	<p>$data_resume_download->skill</p>
	<h1>Pengalaman Bekerja</h1>
	<hr >	
	<p>$data_resume_download->work_exp</p>
	<h1>Pendidikan Terakhir</h1>
	<hr >	
	<p>$data_resume_download->last_education</p>
	
EOF;

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// add a page

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_061.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
?>