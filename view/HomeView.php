<?php
require_once 'public/header.php';
?>

<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-4">
<?php
if ($var != null):
  foreach($var as $item):
?>
            <div class="col-md-6 col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                <div class="service-item rounded overflow-hidden">
                    <img class="img-fluid" src="<?php echo $item['img'] ?>" alt="">
                    <div class="position-relative p-4 pt-0">
                        <h4 class="mb-3"> <?php echo $item['nombre'] ?> </h4>
                        <p> <?php echo $item['desc'] ?> </p>
                        <a class="small fw-medium" href="">Read More<i class="fa fa-arrow-right ms-2"></i></a>
                    </div>
                </div>
            </div>
<?php
  endforeach;
endif;
?>
        </div>
    </div>
</div>

<?php
require_once 'public/footer.php';
?>
