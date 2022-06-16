<?php
require_once 'public/header.php';
?>

<div class="card w-50" style="width: auto; margin: auto ;" id="card1">
  <div class="card-body ">
    <nav class="navbar navbar-light justify-content-between navCentral">
    <marquee direction="left" >    
    <img src="public\img\animacion.gif" width="200" heigth="50"> 
    </marquee>
    </nav>
  </div>
</div>


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
