<div class="header">
	<h4 class="title"><?= $title?></h4>
	<p class="category"><?= $category?></p>
</div>

<div class="content table-responsive table-full-width">
	<table class="table table-hover table-striped">
		<thead>
			<th>ID</th>
			<th>Indikator</th>
			<th> Tidak ada bukti<br><small>(Tidak terpenuhi)</small> </th>
			<th> Terpenuhi sebagian </th>
			<th> Seluruhnya terpenuhi </th>
		</thead>
		
		<tbody>
			<?php
			$i = 1;
			foreach($result as $row){?>
				<tr>
					<td><?= $i ?></td>
					<td><p><?= $row->indikator ?></p></td>
					<td class="text-center">
						<?php if(@$cek[$i-1]->nilai == 0){ ?>
							<span class="circle"> 0 </span>
						<?php }else{ ?>
							<span> 0 </span>
						<?php } ?>
					</td>
					<td class="text-center">
						<?php if(@$cek[$i-1]->nilai == 1){ ?>
							<span class="circle"> 1 </span>
						<?php }else{ ?>
							<span> 1 </span>
						<?php } ?>
					</td>
					<td class="text-center">
						<?php if(@$cek[$i-1]->nilai == 2){ ?>
							<span class="circle"> 2 </span>
						<?php }else{?>
							<span> 2 </span>
						<?php }
						$i++; ?>
					</td>
				</tr>
			<?php }?>
				<tr class="text-center">
					<td colspan="2"> Total skor untuk kompetensi 1 </td>
					<td class="total" colspan="3"><?php if(!empty($nilai[0])){ echo $nilai[0]->jumlah; }else{ echo "0";} ?> </td>
				</tr>
				<tr class="text-center">
					<td colspan="2"> Skor maksimum kompetensi 1 = jumlah indikator × 2 </td>
					<td colspan="3"> <?= $maks;?> </td>
				</tr>
				<tr class="text-center">
					<td colspan="2"> Persentase = (total skor/12) × 100% </td>
					<td class="persen" colspan="3"> <?php if(!empty($nilai[0])){ echo $nilai[0]->persentase; }else{ echo "0";} ?> </td>
				</tr>
				<tr class="text-center">
					<td colspan="2"> Nilai untuk kompetensi 1 : (0% < X ≤ 25% = 1; 25% < X ≤ 50% = 2;  50% < X ≤ 75% = 3; 75% < X ≤ 100% = 4)</td>
					<td class="akredi" colspan="3"> <?php if(!empty($nilai[0])){ echo $nilai[0]->total_nilai; }else{ echo "0";} ?> </td>
				</tr>
		</tbody>
	</table>
</div>