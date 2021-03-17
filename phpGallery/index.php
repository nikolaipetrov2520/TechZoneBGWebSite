<?php
include 'functions.php';
// Connect to MySQL
$pdo = pdo_connect_mysql();
// MySQL query that selects all the images
$stmt = $pdo->query('SELECT * FROM images ORDER BY uploaded_date DESC');
$images = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<?=template_header('Gallery')?>


<section style="padding: 30px;max-width: 90%;">
    <div class="content home">
        <h2 style="width: 600px;display: inline-block;">Галерия</h2>
       
        <div class="images">
            <?php foreach ($images as $image): ?>
            <?php if (file_exists($image['path'])): ?>
            <a href="#">
                <img src="<?=$image['path']?>" alt="<?=$image['description']?>" data-id="<?=$image['id']?>" data-title="<?=$image['title']?>" width="300" height="200">
                <span><?=$image['description']?></span>
            </a>
            <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="image-popup"></div>
</section>

<script>
// Container we'll use to show an image
let image_popup = document.querySelector('.image-popup');
// Loop each image so we can add the on click event
document.querySelectorAll('.images a').forEach(img_link => {
	img_link.onclick = e => {
		e.preventDefault();
		let img_meta = img_link.querySelector('img');
		let img = new Image();
		img.onload = () => {
			// Create the pop out image
			image_popup.innerHTML = `
				<div class="con">
					<h3>${img_meta.dataset.title}<br><br></h3>
					<p>${img_meta.alt}<br><br></p>
					<img src="${img.src}" width="960" height="540">
				</div>
			`;
			image_popup.style.display = 'flex';
		};
		img.src = img_meta.src;
	};
});
// Hide the image popup container if user clicks outside the image
image_popup.onclick = e => {
	if (e.target.className == 'image-popup') {
		image_popup.style.display = "none";
	}
};
</script>
<?=template_footer()?>