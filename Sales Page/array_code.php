<?php include "array_image.php"; ?>

<?php foreach ($image["gambar"] as $gambar) : ?>
    <div class="col-md-2 text-center">
        <img src="image/story_ig/<?php echo $gambar; ?>.jpg" class="image-module mb-3"
                        alt="<?php echo $gambar; ?>" width="130" height="230">
    </div>
<?php endforeach; ?>