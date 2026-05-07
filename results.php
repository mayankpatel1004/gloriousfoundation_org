<?php include "connection.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include "include/head.php"; ?>
</head>

<body>
    <?php include "include/header.php"; ?>

    

    <!-- what it biomass Briquettes section -->

    <section class="section-padding what-is-section custom-overflow-hidden">
        <div class="container custom-container-width">
            <div class="markdown prose w-full break-words dark:prose-invert dark">
                <div class="row mt-4 g-4">
                <?php for($i=2;$i<29;$i++):?>
                    <div class="col-12 col-sm-6 col-md-3 d-flex">
                    <img src="<?php echo $url?>images/after/<?php echo $i;?>.webp" class="w-100" />
                    </div>
                <?php endfor;?>
                </div>
            </div>
        </div>
    </section>
    <?php include 'include/footer.php'; ?>
    <?php include 'include/footerscript.php'; ?>
</body>

</html>