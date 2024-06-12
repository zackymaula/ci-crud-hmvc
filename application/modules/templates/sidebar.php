<div class="inner-wrapper">
	<!-- start: sidebar -->
	<aside id="sidebar-left" class="sidebar-left">

		<div class="sidebar-header">
			<div class="sidebar-title">
				Navigation
			</div>
			<div class="sidebar-toggle d-none d-md-block" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
				<i class="fas fa-bars" aria-label="Toggle sidebar"></i>
			</div>
		</div>

		<div class="nano">
			<div class="nano-content">
				<nav id="menu" class="nav-main" role="navigation">

					<ul class="nav nav-main">
						<li>
							<a class="nav-link" href="<?= base_url('beranda') ?>">
								<i class="bx bx-home-alt" aria-hidden="true"></i>
								<span>Beranda</span>
							</a>
						</li>

						<li>
							<a class="nav-link" href="<?= base_url('siswa') ?>">
								<i class="bx bx-loader-circle" aria-hidden="true"></i>
								<span>Siswa</span>
							</a>
						</li>

						<li>
							<a class="nav-link" href="<?= base_url('guru') ?>">
								<i class="bx bx-table" aria-hidden="true"></i>
								<span>Guru</span>
							</a>
						</li>

						<li class="nav-parent">
							<a class="nav-link" href="#">
								<i class="bx bx-collection" aria-hidden="true"></i>
								<span>Menu Levels</span>
							</a>
							<ul class="nav nav-children">
								<li>
									<a>
										First Level
									</a>
								</li>
								<li class="nav-parent">
									<a class="nav-link" href="#">
										Second Level
									</a>
									<ul class="nav nav-children">
										<li>
											<a>
												Second Level Link #1
											</a>
										</li>
										<li>
											<a>
												Second Level Link #2
											</a>
										</li>
										<li class="nav-parent">
											<a class="nav-link" href="#">
												Third Level
											</a>
											<ul class="nav nav-children">
												<li>
													<a>
														Third Level Link #1
													</a>
												</li>
												<li>
													<a>
														Third Level Link #2
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
							</ul>
						</li>

					</ul>
				</nav>


			</div>

			<script>
				// Maintain Scroll Position
				if (typeof localStorage !== 'undefined') {
					if (localStorage.getItem('sidebar-left-position') !== null) {
						var initialPosition = localStorage.getItem('sidebar-left-position'),
							sidebarLeft = document.querySelector('#sidebar-left .nano-content');

						sidebarLeft.scrollTop = initialPosition;
					}
				}
			</script>

		</div>

	</aside>
	<!-- end: sidebar -->

	<section role="main" class="content-body">
		<header class="page-header">
			<h2><?= $title ?></h2>

			<div class="right-wrapper text-end">
				<ol class="breadcrumbs">
					<li>
						<a href="index.html">
							<i class="bx bx-home-alt"></i>
						</a>
					</li>

					<li><span><?= $title ?></span></li>

				</ol>

				<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fas fa-chevron-left"></i></a>
			</div>
		</header>

		<!-- start: page -->

		<!-- end: page -->