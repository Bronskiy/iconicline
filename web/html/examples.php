<?php include '_includes/header.php'; ?>

<section class="container row">
  <div class="col-md-10 offset-md-2 text-center">
    <h1><strong>Examples</strong></h1>
  </div>
</section>
<section class="container">
  <div class="examples-buttons">
    <a href="#" class="btn btn-primary">All industries</a>
    <a href="#" class="btn btn-secondary">Software & IT</a>
    <a href="#" class="btn btn-secondary">Business services</a>
</div>

</section>
<?php include '_includes/callToAction.php'; ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<script>
  var slider = tns({
    container: '.examples-buttons',
    items: 1,
    responsive: {
      640: {
        edgePadding: 20,
        gutter: 20,
        items: 2
      },
      700: {
        gutter: 30
      },
      900: {
        items: 3
      }
    }
  });
</script>
<?php include '_includes/footer.php'; ?>
