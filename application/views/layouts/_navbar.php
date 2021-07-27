<nav class="navbar navbar-expand-lg navbar-light fixed-top bg-light">
	<div class="container" style="background-color: #07BEB8;">
			
		<a class="navbar-brand" href="<?= base_url('') ?>"><img src="/images/ikon.png"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
			<ul class="navbar-nav">
				<li class="nav-item active">
					<a class="nav-link" href="<?= base_url('') ?>"><strong>Home</strong> <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="dropdown-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><strong>Manage</strong></a>
					<div class="dropdown-menu" aria-labelledby="dropdown-1">
						<a href="<?= base_url('category') ?>" class="dropdown-item"><strong>Kategori</strong></a>
						<a href="<?= base_url('product') ?>" class="dropdown-item"><strong>Produk</strong></a>
						<a href="<?= base_url('order') ?>" class="dropdown-item"><strong>Order</strong></a>
						<a href="<?= base_url('user') ?>" class="dropdown-item"><strong>Pengguna</strong></a>
					</div>
				</li>
			</ul>
			<ul class="navbar-nav" >
				<li class="nav-item">
					<a href="<?= base_url('cart') ?>" class="nav-link" ><i class="fas fa-shopping-cart" ></i><strong> Cart (<?= getCart(); ?>)</strong></a>
				</li>
				<?php if (! $this->session->userdata('is_login')) : ?>
				<li class="nav-item">
					<a href="<?= base_url('/login') ?>" class="nav-link" ><strong>Login</strong> </a>
				</li>
				<li class="nav-item">
					<a href="<?= base_url('/register') ?>" class="nav-link" ><strong>Register</strong> </a>
				</li>
				<?php else : ?>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" id="dropdown-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><strong><?= $this->session->userdata('name') ?></strong></a>
					<div class="dropdown-menu" aria-labelledby="dropdown-2">
						<a href="<?= base_url('/profile') ?>" class="dropdown-item"><strong>Profile</strong> </a>
						<a href="<?= base_url("myorder") ?>" class="dropdown-item"><strong>Orders</strong> </a>
						<a href="<?= base_url('/logout') ?>" class="dropdown-item"><strong>Logout</strong> </a>
					</div>
				</li>
				<?php endif ?>

			</ul>
		</div>

	</div>
</nav>
