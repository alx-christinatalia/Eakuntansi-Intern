<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
      <title>
         Laporan Monitoring BPN | eNotaris.com
      </title>
                
        <link rel="shortcut icon" href="<?php echo base_url("assets/img/logo/favicon.ico"); ?>">
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-32x32.png"); ?>" sizes="32x32" />
        <link rel="icon" type="image/png" href="<?php echo base_url("assets/img/logo/favicon-16x16.png"); ?>" sizes="16x16" />
      <style type="text/css">@page { 
             size: letter landscape 
         }
         body {
             margin-left: 20px;
             margin-right :20px;
             font-family: verdana, arial, sans-serif;
         }
         h3 {
             font-size: 20px;
         }
         table.ppat th {
           font-size :11px;
           font-weight :bold;
         }
         table.ppat td {
           font-size :11px;
         }
         table.table-list {
             border-width: 1px;
             border-color: #000;
             border-collapse: collapse;
         }
         table.table-list th {
             background-color: #c7c6c6;
             border-width: 1px;
             border-style: solid;
             border-color: #000;
             line-height: 25px;
             font-size: 12px;
             text-align: left;
             padding-left: 5px;
             font-weight: 500;
         }
         table.table-list td {
             font-size: 12px;
             border-width: 1px;
             padding: 8px;
             border-style: solid;
             border-color: #000;
         }
         table.table-jurnal {
             border-bottom: 1px solid #000;
             border-collapse: collapse;
         }
         table.table-jurnal tr {
             border-top: 1px solid #000;
         }
         table.table-jurnal th {
             background-color: #c7c6c6;
             line-height: 25px;
             font-size: 14px;
             text-align: left;
             padding-left: 5px;
             font-weight: 700;
             border-bottom: 1px solid #000;
             border-top: 1px solid #000;
             border-right: 0;
         }
         table.table-jurnal td {
             font-size: 12px;
             padding: 8px;
         }
         table.table-jurnal tr.hidden {
             font-size: 12px;
             padding: 8px;
             border-bottom: 0;
             border-top: 0;
         }
         table.table-laporankeluar {
             width: 30%;
             float: right;
             border-width: 0;
             border-collapse: collapse;
         }
         table.table-laporankeluar td {
             font-size: 12px;
             border-width: 0;
             padding: 8px;
         }
         .baris {
             margin: 30px 0;
         }
         .kwitansi_bordered {
             border: 1px solid #000;
             min-height: 470px;
             padding: 10px;
         }
         .kwitansi_nobordered {
             min-height: 470px;
             padding: 10px;
         }
         .title_notaris {
             text-transform: uppercase;
             font-weight: bolder;
             font-size: 20px;
         }
         .title_alamat, .title_telp {
             font-weight: 400;
             font-size: 14px;
         }
         .title_kwitansi {
             text-transform: uppercase;
             font-weight: bolder;
             font-size: 20px;
         }
         .title_nomor {
             font-weight: 400;
             font-size: 14px;
         }
         .title_nomor .span_no {
             letter-spacing: 2px;
         }
         .title_nomor .span_tgl {
             letter-spacing: 1px;
         }
         .judul_terbilang {
             background-color: #c7c6c6;
             border-top: 2px dotted gray;
             border-bottom: 2px dotted gray;
             height: 25px;
             text-transform: capitalize;
         }
         .judul {
             padding-left: 15px;
             font-weight: bolder;
         }
         .body_kwitansi {
             min-height: 200px;
             padding: 10px;
             margin: 10px 10px 10px -30px;
         }
         .footer_bawah {
             height: 170px;
             padding: 10px;
             margin: 10px 0;
         }
         #footer_left {
             float: left;
             margin: 10px 0;
         }
         #footer_left .jumlah {
             text-align: left;
             min-width: 330px;
             background-color: #c7c6c6;
             height: 20px;
             padding: 5px 50px 5px 25px;
             border-top: 5px double #000;
             border-bottom: 5px double #000;
             margin-bottom: 10px;
         }
         .footer_note {
             float: left;
             font-size: 13px;
             max-width: 460px;
         }
         #footer_right {
             float: right;
             margin: 10px 0;
         }
         #footer_right .ttd {
             padding: 5px 10px;
             text-align: center;
         }
         #footer_right .ttd .penerima {
             text-decoration: underline;
         }
         table.table-ttd2 {
             padding: 2px;
             font-size: 12px;
             max-width: 560px;
             border: 1px solid #000;
             border-collapse: collapse;
         }
         table.table-ttd2 th {
             border: 1px solid #000;
             width: 120px;
         }
         table.table-ttd2 td {
             font-size: 11px;
             border: 1px solid #000;
             height: 130px;
             vertical-align: bottom;
         }
         #page-wrap {
             width: 800px;
             margin: 0 auto;
         }
         #header {
             height: 15px;
             width: 100%;
             margin: 20px 0;
             text-align: center;
             color: #000;
             font: 700 28px Helvetica, Sans-Serif;
             text-transform: uppercase;
             letter-spacing: 2px;
             padding: 8px 0;
         }
         #address {
             height: 150px;
             float: left;
         }
         #customer {
             overflow: hidden;
             width: 100%}
         #detail {
             margin-top: 10px;
             padding: 5px;
             border: 1px solid #000;
             border-radius: 7px;
             -moz-border-radius: 7px;
             -webkit-border-radius: 7px;
         }
         #logo {
             text-align: left;
             position: relative;
             margin-top: 5px;
             font-weight: bolder;
             font-size: 18px;
         }
         #customer-title {
             font-size: 18px;
             float: left;
             left: 0;
             border: 1px solid #000;
             border-radius: 7px;
             -moz-border-radius: 7px;
             -webkit-border-radius: 7px;
             padding: 15px;
             max-width: 50%}
         #meta {
             margin-top: 1px;
             width: 352px;
             float: right;
         }
         #meta td {
             text-align: right;
         }
         #meta td.meta-head {
             text-align: left;
             background: #eee;
             width: 100px;
         }
         #items {
             clear: both;
             width: 100%;
             margin: 20px 0 0;
             border-collapse: collapse;
         }
         #items th {
             background: #eee;
             border: 1px solid #000;
         }
         #items td {
             border: 1px solid #000;
         }
         #items tr.item-row {
             border-bottom: 1px solid #000;
         }
         #items tr.item-row td {
             border: 1px solid #000;
             vertical-align: top;
             height: 200px;
         }
         #items td.description {
             width: 300px;
         }
         #items td.item-name {
             width: 175px;
         }
         #items td.total-line {
             font-weight: bolder;
         }
         #items td.total-value {
             padding: 10px;
             text-align: right;
             font-weight: bolder;
             font-size: 16px;
         }
         #items td.balance {
             background: #eee;
         }
         #items td.blank {
             padding: 11px;
             border: 0;
             vertical-align: top;
             text-align: right;
             font-weight: bolder;
             font-size: 16px;
         }
         #tbl-header {
             border: 0;
             width: 100%;
             margin-bottom: 20px;
             border-bottom: 1px solid #000;
         }
         #tbl-header td {
             border: 0;
         }
         #tbl-header tr {
             vertical-align: top;
         }
         .table {
             margin-bottom: 20px;
             width: 100%;
             border-spacing: 0;
             padding: 5px;
         }
         .table-bordered {
             border-collapse: collapse;
         }
         .table-bordered th {
             background-color: #c7c6c6;
             font-size: 13px;
             border: 1px solid #000;
             height: 22px;
             border-collapse: collapse;
             padding: 5px;
             text-align:left;
         }
         .table-bordered td {
             font-size: 12px;
             border: 1px solid #000;
             height: 18px;
             border-collapse: collapse;
             padding: 5px;
         }

         .table th.left, .table td.left {
             text-align:left;
         }
         .table th.center, .table td.center {
             text-align:center;
         }
         .table th.right, .table td.right {
             text-align:right;
         }</style>
       <script src="<?php echo base_url("assets/js/public.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/plugins/ifvisible.min.js"); ?>" type="text/javascript"></script>
        <!-- Date Picker -->
        <script src="<?php echo base_url("assets/plugins/jquery.form.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/jquery-ui.js"); ?>" type="text/javascript"></script>
        <!-- End Date Picker -->
        <script src="<?php echo base_url("assets/js/metronic.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/dashboard.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/layout.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/demo.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/js/app.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/daterange/moment.min.js"); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url("assets/daterange/daterangepicker.js"); ?>" type="text/javascript"></script>
      <script type="text/javascript">
         $(document).ready(function () {
             $.when(get_notaris()).done(function(){
                 window.focus();
                 window.print();
             })
             //window.close();
         })
      </script>       
   </head>
   <body>
      <div>
         <table width ="100%" style ="border-bottom :1px solid black">
            <tbody >
               <tr>
                  <td width ="75%" >
                     <h3 class="notaris"></h3>
                  </td>
                  <td align ="right">
                     <img src="<?php echo base_url() ?>assets/img/logo/print.png" alt=""/>
                  </td>
               </tr>
            </tbody>
         </table>
      </div>
      <div style ="margin: 10px 5px;">
         <p style ="text-align :center; font-size:20px; font-weight :bold ;">
            Laporan Monitoring BPN
         </p>
      </div>
      <table class='table table-bordered'>
         <thead>
            <tr>
               <th style='width:5%' class='center'>No. Order</th>
               <th>Klien</th>
               <th>Layanan</th>
               <th>Perihal</th>
               <th style='width:9%' class='center'>Tgl Masuk</th>
               <th style='width:9%' class='center'>Tgl Target</th>
               <th style='width:9%' class='center'>Status</th>
               <th style='width:9%' class='center'>Tgl Selesai</th>
               <th>Warning</th>
            </tr>
         </thead>
         <tbody>
         <?php foreach ($data->Data as $resp) { ?>
            <tr>
               <td class='center'><?php echo $resp->id_order ?></td>
               <td><?php echo $klien[$resp->id_order]->nama_klien ?></td>
               <td><?php echo $klien[$resp->id_order]->nama_layanan ?></td>
               <td class="_pengurusan"><?php echo $resp->item_pengurusan ?></td>
               <td class='center _tgl'><?php echo $resp->tgl_dokumen_masuk ?></td>
               <td class='center _tgl'><?php echo $resp->tgl_target_selesai ?></td>
               <td class='center _status'><?php echo $resp->status ?></td>
               <td class='center _tgl'><?php echo $resp->tgl_dokumen_masuk ?></td>
               <td class="telat"><?php 
                    $currentDate = strtotime(date("Y-m-d"));
                    $tglTarget = strtotime($resp->tgl_target_selesai);

                    if($currentDate > $tglTarget){
                         echo "Telat";
                    }
                ?></td>
            </tr>
        <?php } ?>
         </tbody>
      </table>
      <script type="text/javascript">
      $(document).ready(function(){
        refid()
      })
          function refid()
            {


                $("._tgl").each(function(){
                    $(this).html(tglIndo($(this).html()))
                })
                $("._pengurusan").each(function(){
                    a= $(this).html();
                    b = ''
                    switch(a){
                        case "1":
                            b = "Checking"
                            break;
                        case "2":
                            b = "Roya"
                            break;
                        case "3":
                            b = "Balik Nama"
                            break;
                        case "4":
                            b = "Ganti Blanko"
                            break;
                        case "5":
                            b = "Split"
                            break;
                        case "6":
                            b = "Penggabungan"
                            break;
                        case "7":
                            b = "Ralat"
                            break;
                        case "8":
                            b = "Peningkatan"
                            break;
                        case "9":
                            b = "HT/SHT"
                            break;
                        case "10":
                            b = "Roya + HT"
                            break;
                        case "11":
                            b = "Balik Nama + HT"
                            break;
                    }
                    $(this).html(b);
                })
                $("._status").each(function(){
                    a= $(this).html();
                    b = '';
                    switch(a){
                        case "0":
                            b= "Open"
                            break;
                        case "1":
                            b= "Close"
                            break;
                        case "2":
                            b= "Batal"
                            break;
                    }
                    $(this).html(b)
                })   
            }
      </script>
   </body>
</html>