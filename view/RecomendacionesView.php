<?php
require_once 'public/header.php';
?>

<div class="col-lg-6 quote-text py-5 wow fadeIn"  data-wow-delay="0.5s">
                    <div class="p-lg-5 pe-lg-0">
                        <h1 class="mb-4">Datos para la recomendación</h1>
                        <form>
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <select class="form-select border-0" style="height: 55px;">
                                        <option selected>Select A Service</option>
                                        <option value="1">Service 1</option>
                                        <option value="2">Service 2</option>
                                        <option value="3">Service 3</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Note"></textarea>
                                </div>
                                <div class="col-12">
                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Submit</button>
            </div>
        </div>
      </form>
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
