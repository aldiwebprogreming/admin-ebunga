<?php
// Skrip berikut ini adalah skrip yang bertugas untuk meng-export data tadi ke excell
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=data blog.xls");
?>

<h3>Data Blog</h3>
		
<table border="1" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Kode Article</th>
        <th>Title</th>
        <th>Sub Title</th>
        <th>Isi</th>
         <th>Date Publish</th>
         <th>Publish</th>
         <th>Active</th>
         <th>Kategori</th>
	</tr>
	<?php
	$no = 1;
	foreach ($blog as $data) { ?>
	<tr>
		<td><?= $no++; ?></td>
		<td><?= $data['kd_article'] ?></td>
		<td><?= $data['title']  ?></td>
		<td><?= $data['sub_title'] ?></td>
		<td><?= $data['isi'] ?></td>
		<td><?= $data['date_publish'] ?></td>
		<td><?= $data['publish'] ?></td>
		<td><?= $data['active'] ?></td>
		<td><?= $data['kategori'] ?></td>
	</tr>

<?php } ?>
</table>
