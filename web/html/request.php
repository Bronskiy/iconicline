<?php include '_includes/header.php'; ?>
<section class="container row">
  <div class="col-md-10 offset-md-2 text-center">
    <h1>Let us <strong>show you</strong> Project <strong>Digital in action!</strong></h1>
  </div>

</section>
<section class="container">
  <div class="row">
    <div class="col-4">
      <h2 class="mb-3">What <strong>to expect</strong> from <strong>our demo:</strong></h2>
      <ul>
        <li>A walkthrough of the features and functionality that fit your team’s specific needs</li>
        <li>Expert advice from our consultants who can answer any questions you may have</li>
        <li>Personalized pricing discussion, based on your specific needs</li>
      </ul>
    </div>
    <div class="col-8">
      <div class="form-wrapper">
        <h3 class="h2 text-center"><strong>Demo</strong> form</h3>
        <p class="text-center">Submit your info and one of our advisors will be in touch</p>
        <form>
          <div class="row mb-3">
            <div class="col">
              <input type="text" class="form-control" placeholder="First name">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Last name">
            </div>
          </div>

          <div class="row mb-3">
            <div class="col">
              <input type="email" class="form-control" placeholder="Email">
            </div>
            <div class="col">
              <input type="phone" class="form-control" placeholder="Phone">
            </div>
          </div>
          <div class="form-group mb-3">
            <input class="form-control" type="text" placeholder="Company name">
          </div>
          <div class="row mb-3">
            <div class="col">
              <select id="inputState" class="form-control">
                <option selected>Company size</option>
                <option>...</option>
              </select>
            </div>
            <div class="col">
              <select id="inputState" class="form-control">
                <option selected>Industry</option>
                <option>...</option>
              </select>
            </div>
          </div>
          <button type="submit" class="btn btn-primary">Request a demo</button>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include '_includes/footer.php'; ?>
