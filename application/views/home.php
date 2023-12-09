<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>CRUD Page</title>
	<link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
</head>
<body>
	<header class="container">
		<div>
			<ul>
				<li><a href="https://instagram.com/rifqimuafa20">INSTAGRAM</a></li>
				<li><a href="https://github.com/rifqimuafa20">GITHUB</a></li>
				<li><a href="https://linkedin.com/in/rifqimuafa20">LINKEDIN</a></li>
				<li><a href="https://wa.me/6288804265490">WHATSAPP</a></li>
			</ul>
		</div>
		<div class="logo">
			<img src="<?= base_url('assets/img/running_img.jpg') ?>" alt="running image" class="running_img">
		</div>
		<div class="tagline">
			<div class="sub_tagline_1">
				<p>KALENDER LARI</p>
			</div>
			<div class="sub_tagline_2">
				<p>Dapatkan inspirasi lari Anda di sini dan jelajahi setiap event yang ada</p>
			</div>
			<div>

			</div>
		</div>
	</header>
	<main>
		<div class="title">
			<p>Jadwal Event Lari Indonesia 2023</p>
		</div>
		<div class="events-content">
			<?php foreach ($queryAllEvent as $row) {
			?>
				<div class="events">
					<h3><?php echo $row->name ?></h3>
					<p><?php echo $row->description ?></p>
					<div class="item_content">
						<div class="date_desc">
							<div class="location_date">
								<img src="<?= base_url('assets/img/location.png') ?>" alt="location">
								<p><?php echo $row->location ?></p>
							</div>
							<div class="location_date">
								<img src="<?= base_url('assets/img/date.png') ?>" alt="date">
								<p><?php echo $row->date ?></p>
							</div>
						</div>
						<div class="action_btn">
							<div>
								<a href=""><img src="<?= base_url('assets/img/edit.png') ?>" alt="edit"></a>
								<a href=""><img src="<?= base_url('assets/img/delete.png') ?>" alt="delete"></a>
							</div>
						</div>
					</div>
				</div>

				<?php
				}
				?>
		</div>
		<div class="add_event">
			
		</div>
	</main>
	<footer>

	</footer>
</body>
</html>