<br>
<main role="main" class="container">
	<?php $this->load->view('layouts/_alert'); ?>
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header" style="background-color: #68D8D6;">
				<strong>Checkout Berhasil</strong>
				</div>
				<div class="card-body">
					<h5>Nomer Order: <?= $content->invoice ?></h5>
					<p>Terima kasih, sudah berbelanja.</p>
					<p>Silakan lakukan pembayaran untuk bisa kami proses selanjutnya dengan cara:</p>
					<ol>
						<li>Lakukan pembayaran pada rekening <strong>BCA 3209123123</strong> a/n PT. Cam Abi</li>
						<li>Sertakan keterangan dengan nomor order: <strong><?= $content->invoice ?></strong></li>
						<li>Total pembayaran: <strong>Rp<?= number_format($content->total, 0, ',', '.') ?>,-</strong></li>
					</ol>
					<p>Jika sudah, silakan kirimkan bukti transfer di halaman konfirmasi atau bisa <a href="<?= base_url("/myorder/detail/$content->invoice") ?>">klik disini</a>!</p>
					<a href="<?= base_url('/') ?>" class="btn btn-outline-dark"><i class="fas fa-angle-left"></i> Kembali</a>
				</div>
			</div>
		</div>
	</div>
</main>
