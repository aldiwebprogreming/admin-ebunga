<!DOCTYPE html>
<html><head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head><style>
	table{
    border-collapse:collapse;
    font:normal normal 12px Verdana,Arial,Sans-Serif;
    color:#333333;
}
/* Mengatur warna latar, warna teks, ukruan font dan jenis bold (tebal) pada header tabel */
table th {
    background:#00BFFF;
    color:black;
    font-weight:bold;
    font-size:14px;
}
/* Mengatur border dan jarak/ruang pada kolom */
table th,
table td {
    vertical-align:top;
    padding:5px 10px;
    border:1px solid #696969;
}
/* Mengatur warna baris */
table tr {
    background:#F5FFFA;
}
/* Mengatur warna baris genap (akan menghasilkan warna selang seling pada baris tabel) */
table tr:nth-child(even) {
    background:#F0F8FF;
}
</style><body>


		<img src="logo/logo1.png" style='height: 100px; position: absolute; bottom: 50px; left:120 px; top:30px;'>

		<h3 style="text-align: center; margin-bottom: 60px;">LAPORAN DATA <?= $judul ?></h3>
			<h3 style="text-align: center;">PT.EBUNGA SUSKSES MAKMUR</h3>
			<p style="text-align: center;font-style: italic;"><strong>Jl.Cemara No.15 Medan Estate, Kabupaten Deliserdang, Sumatera Utara</strong></p>
			<hr style="border: 3px solid;">
		<br><br><br>

	<p><strong> Dicetak Pada Tanggal : <?= date('m-d-Y'); ?></strong></p>
		
	<table border="1"  style="font-size: 10px;">
		<tr>
			<th>No</th>
			<th width="">Kd Order</th>
			<th width="">Kd Token Item</th>
			<th width="">Kd Produk</th>
			<th width="">Nama Penerima</th>
			<th width="">Email Penerima</th>
			<th width="">Hp Penerima</th>
			<th width="">Tgl Kirim</th>
			<th width="">Alamat Kirim</th>
			<th width="">Kel Kirim</th>
			<th width="">Kec Kirim</th>
			<th width="">Kab Kirim</th>
			<th width="">Prov Kirim</th>
			<th width="">Message</th>
			<th width="">Send Card Email</th>
			<th width="">Waktu Kirim</th>
			<th width="">Sub Total</th>
			<th width="">Disc</th>
			<th width="">Total</th>
		
		</tr>	



			<?php 
				$no = 1;

					foreach ($item_order as $data) {

			 ?>

			 <?php 

		      $id_prov = $data['prov_kirim'];
		      $prov = $this->db->get_where('tbl_provinsi', array('id_prov' => $id_prov))->result_array();
		      foreach ($prov as $data_prov) {
		       
		      }

		       $id_kab = $data['kab_kirim'];
              $kab = $this->db->get_where('tbl_kabupaten', array('id_kab' => $id_kab))->result_array();

              foreach ($kab as $data_kab) {
            
              }

              $id_kec = $data['kec_kirim'];
              $kec = $this->db->get_where('tbl_kecamatan', array('id_kec' => $id_kec))->result_array();

              foreach ($kec as $data_kec) {
            
              }

			$id_kel = $data['kel_kirim'];
			  $kel = $this->db->get_where('tbl_kelurahan', array('id_kel' => $id_kel))->result_array();

			  foreach ($kel as $data_kel) {

			  }
		?>

		<tr>
			<td><?= $no++; ?></td>
			<td><?= $data['kd_order']; ?></td>
			<td><?= $data['kd_token_item'] ?></td>
			<td><?= $data['kd_produk'] ?></td>
			<td><?= $data['nama_penerima'] ?></td>
			<td><?= $data['email_penerima'] ?></td>
			<td><?= $data['hp_penerima'] ?></td>
			<td><?= $data['tanggal_kirim'] ?></td>
			<td><?= $data['alamat_kirim'] ?></td>
			<td><?= $data_kel['nama'] ?></td>
			<td><?= $data_kec['nama'] ?></td>
			<td><?= $data_kab['nama'] ?></td>
			<td><?= $data_prov['nama'] ?></td>
			<td><?= $data['message'] ?></td>
			<td><?= $data['send_card_email'] ?></td>
			<td><?= $data['waktu_kirim'] ?></td>
			<td><?= $data['sub_total'] ?></td>
			<td><?= $data['disc'] ?></td>
			<td><?= $data['total'] ?></td>
		
		</tr>

			<?php } ?>
	</table>

	<div class="" style="position: absolute; top :100%">
		<hr class="" style="border: 1px solid; color: black;" > 
		<small style="font-style: italic;">	<?= $footer; ?>  <?= date('m-d-Y'); ?> </small>

	</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body></html>