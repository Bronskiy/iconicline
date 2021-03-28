<?php include '_includes/header.php'; ?>
<section class="container row">
  <div class="col-md-10 offset-md-2 text-center">
    <h1 class="mb-3"><strong>Our story</strong></h1>
    <p class="lead">How two Dutch guys set out to democratize next-level
      interactive web content and ended up creating the world's #1
      interactive content platform.
    </p>
  </div>
</section>

<section class="container">
  <div class="row featured">
    <div class="col-md-7">
      <h2>First step: <span>Content problem.</span></h2>
      <p>We used to run a creative agency.</p>
      <p>And like many people with experience in marketing or communications, we found that no matter how much branded content we produced, it was difficult to get noticed.</p>
      <p>We saw that average people were spending more time gobbling up content than ever before. At home, on the train, at work, even on the toilet.<br>
        The problem wasn’t that there was too much content, the problem was that content wasn’t being designed for the modern content consumer!
        Today, people need content to be snackable. They need it to be visual. And most importantly, they need to be able to consume it when, where and on whatever device they prefer.</p>
      </div>
      <div class="col-md-5">
        <svg class="bd-placeholder-img bd-placeholder-img-lg featured-image-right img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

      </div>
    </div>


    <div class="row featured">
      <div class="col-md-7 order-md-2">
        <h2>Second Step: <span>Create Project Digital</span></h2>
        <p>Therefore, in 2008, with this in mind, we put together a team of developers and designers to try something new.<br>
          We needed - no, the world needed a permanent solution. A platform that allows marketers and communications professionals to create these things by day, without the need for a development and design team.<br>
          Because nothing like this existed, Daan our CEO, and Joost (his name rhymes with toast), our CTO, decided they would build the platform themselves. And in 2013, Project Digital was born (then called Instant Magazine)!<br>
          We set out to democratize the production of top-notch web content so that anyone could create media-rich HTML5-based sales and marketing collateral without needing any technical expertise.
          And it worked!</p>
        </div>
        <div class="col-md-5 order-md-1">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featured-image-left img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>

        </div>
      </div>


      <div class="row featured">
        <div class="col-md-7">
          <h2 >Third step: <span >Success</span></h2>
          <p>After launching, we scored our first two clients in the first week. Fast forward to today, and we’ve amassed more than 1,300 clients in 40+ countries, and have offices in Amsterdam, London and New York.
            We now have an amazing team of more than 100 dedicated people.<br>
            The success we’ve seen proves our initial belief was accurate: Today’s audiences want to read exceptional content more than ever — it's just that they need it to be tailored to their content consumption habits.<br>
            The powerful and easy-to-use platform we developed (and are still improving) allows anyone to quickly create media-rich HTML5-based content that really stands out. So, that’s our story... But it's not over yet.<br>
            Our big hairy audacious goal is that by 2030 we will have reached 10% of the world's population with a Foleon. And we're working hard, together with our customers, to achieve this!
            Want to be part of the story? Start creating your first Foleon today!</p>
            <button type="button" class="btn btn-primary">Primary</button>

          </div>
          <div class="col-md-5">
            <div class="container-bg">
              <div class="inner-bg">
                <svg class="bd-placeholder-img bd-placeholder-img-lg featured-image-right img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
              </div>
            </div>
          </div>
        </div>

      </section>
      <section class="container team">

        <div class="row">
          <?php $a = 1; while ($a <= 3) { ?>
            <div class="col-lg-4 team-item">
              <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#777"/><text x="50%" y="50%" fill="#777" dy=".3em">140x140</text></svg>

              <h5>Katerina Sluchak</h5>
              <h6>QA Engineer</h6>
              <p>Katerina is using Project Digital more than any other
                human and aspires to break everything our developers create.
                Other than that she is very friendly.
              </p>
            </div>
            <?php  $a++; }  ?>

          </div>
        </section>
        <?php include '_includes/callToAction.php'; ?>
        <?php include '_includes/footer.php'; ?>
