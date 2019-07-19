<?php include 'inc/header.php' ;
$galeries=glob("img/gal/*.{jpg,png,gif}", GLOB_BRACE);
?>
<div class="galerie"> 

<?php foreach($galeries as $image) : ?>
    <img src="<?=$image?>">
<?php endforeach;?>

</div>
<?php include 'inc/footer.php' ?>