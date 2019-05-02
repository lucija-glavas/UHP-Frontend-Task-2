<?php
  $lang = 'en';
  require_once 'php/global.php';
?>

<!DOCTYPE html>
<html lang="<?php print $lang; ?>">

<head>
  <?php
    $page_title = 'Home';
    require_once 'php/elements/head.php';
  ?>
</head>

<body id="page-top" class="home">
  <?php require_once 'php/elements/header.php'; ?>

  <header class="master_header">
    <div class="container">
      <div class="row">
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="title_holder">
            <h1 class="mb-4">Web and mobile <span class="color_primary">development</span> specialists.</h1>
            <a href="<?php print $base_url; ?>" class="btn btn-lg">Let's go digital</a>
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="img_holder">
            <img src="<?php print $base_url; ?>img/bg/masthead.png" alt="<?php print $site_title; ?>">
          </div>
        </div>
      </div>
    </div>
  </header>

  <section id="services" class="page_section">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <h2 class="section_title title_with_separator text-center mb-5">
            <span class="separator"></span>
            Our Services
          </h2>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 info_box mb-3">
          <div class="info_box_inner">
            <div class="info_img">
              <img src="<?php print $base_url; ?>img/icons/web-dev.png" alt="Web development">
            </div>
            <div class="content_holder">
              <h5 class="info_box_title">Web development</h5>
              <p class="info_box_description">State of the art front-end applications and back-end systems.</p>
              <a href="<?php print $base_url; ?>" class="btn btn-outline-light btn-lg">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 info_box mb-3">
          <div class="info_box_inner">
            <div class="info_img">
              <img src="<?php print $base_url; ?>img/icons/mob-dev.png" alt="Mobile development">
            </div>
            <div class="content_holder">
              <h5 class="info_box_title">Mobile development</h5>
              <p class="info_box_description">Delightful mobile experiences.</p>
              <a href="<?php print $base_url; ?>" class="btn btn-outline-light btn-lg">Read More</a>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 info_box">
          <div class="info_box_inner">
            <div class="info_img">
              <img src="<?php print $base_url; ?>img/icons/prod-des.png" alt="Product design">
            </div>
            <div class="content_holder">
              <h5 class="info_box_title">Product design</h5>
              <p class="info_box_description">It's the experience that matters</p>
              <a href="<?php print $base_url; ?>" class="btn btn-outline-light btn-lg">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="showcase" class="page_section">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <h2 class="section_title title_with_separator text-center mb-3">
            <span class="separator"></span>
            Client work
          </h2>
          <p class="text-center mb-5">For leading enterprise customers, we develop mobile apps, web front-ends and scalable cloud solutions</p>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
          <div class="img_holder">
            <img src="<?php print $base_url; ?>img/bg/herbalife-nutrition-iphones.png" alt="Herbalife Nutrition">
          </div>
        </div>
        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
          <h3>Herbalife Nutrition</h3>
          <h4 class="color_primary mb-5">Stay Connected with Herbalife+</h4>
          <div class="text_with_icon mb-5">
            <div class="icon_holder">
              <i class="fas fa-weight"></i>
            </div>
            <div class="text_holder">
              <h5>Set weight</h5>
              <p>The customer and his nutritionist conveniently set their weight, sport and fitness goals in the app.</p>
            </div>
          </div>
          <div class="text_with_icon mb-5">
            <div class="icon_holder">
              <i class="fas fa-clipboard-list"></i>
            </div>
            <div class="text_holder">
              <h5>Individual meal plan</h5>
              <p>The consultant creates an individual meal plan that immediately becomes visible in the user app.</p>
            </div>
          </div>
          <a href="<?php print $base_url; ?>" class="btn btn-outline-primary btn-lg">Read More</a>
        </div>
      </div>
    </div>
  </section>

  <section id="slider">
    <div class="project_slider">
      <div class="project_slide">
        <div class="img_holder">
          <a href="<?php print $base_url; ?>">
            <img src="<?php print $base_url; ?>img/bg/project-csl.jpg" alt="CSL">
          </a>
        </div>
      </div>
      <div class="project_slide">
        <div class="img_holder">
          <a href="<?php print $base_url; ?>">
            <img src="<?php print $base_url; ?>img/bg/project-gor.jpg" alt="GOR">
          </a>
        </div>
      </div>
      <div class="project_slide">
        <div class="img_holder">
          <a href="<?php print $base_url; ?>">
            <img src="<?php print $base_url; ?>img/bg/project-kompass.jpg" alt="Kompass">
          </a>
        </div>
      </div>
      <div class="project_slide">
        <div class="img_holder">
          <a href="<?php print $base_url; ?>">
            <img src="<?php print $base_url; ?>img/bg/project-lingua.jpg" alt="Lingua">
          </a>
        </div>
      </div>
      <div class="project_slide">
        <div class="img_holder">
          <a href="<?php print $base_url; ?>">
            <img src="<?php print $base_url; ?>img/bg/project-bund.jpg" alt="Bund">
          </a>
        </div>
      </div>
    </div>
  </section>

  <section id="facts" class="page_section border_bottom">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <h2 class="section_title title_with_separator text-center">
            <span class="separator"></span>
            <strong class="color_primary">Agile teams delivering</strong>
          </h2>
          <h4 class="color_primary_text text-center mb-5">the future digital products for your business</h4>
          <div class="text-center mb-5">
            <ul class="list_circle text-center">
              <li>Fast delivery and highest transparency</li>
              <li>Commercial reliability of all solutions</li>
              <li>Working software from day one</li>
            </ul>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 info_box reversed mb-3">
          <div class="info_box_inner">
            <div class="info_img">
              <img src="<?php print $base_url; ?>img/icons/facts-web-dev.png" alt="Web Development">
            </div>
            <div class="content_holder">
              <h2 class="info_box_title color_primary_text">85%</h2>
              <h4 class="info_box_description color_secondary_text">Web Development</h4>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 info_box reversed mb-">
          <div class="info_box_inner">
            <div class="info_img">
              <img src="<?php print $base_url; ?>img/icons/facts-mob-dev.png" alt="Mobile Development">
            </div>
            <div class="content_holder">
              <h2 class="info_box_title color_primary_text">90%</h2>
              <h4 class="info_box_description color_secondary_text">Mobile Development</h4>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 info_box reversed mb-3">
          <div class="info_box_inner">
            <div class="info_img">
              <img src="<?php print $base_url; ?>img/icons/facts-vbi.png" alt="Voice-based interactions">
            </div>
            <div class="content_holder">
              <h2 class="info_box_title color_primary_text">69%</h2>
              <h4 class="info_box_description color_secondary_text">Voice-based interactions</h4>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-6 info_box reversed">
          <div class="info_box_inner">
            <div class="info_img">
              <img src="<?php print $base_url; ?>img/icons/facts-iot.png" alt="IOT Solutions">
            </div>
            <div class="content_holder">
              <h2 class="info_box_title color_primary_text">95%</h2>
              <h4 class="info_box_description color_secondary_text">IOT <br> Solutions</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="news" class="page_section bg_whitish">
    <div class="container">
      <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
          <h2 class="section_title text-center mb-5">News &amp; Events</h2>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 featured_post mb-3">
          <div class="featured_post_inner">
            <div class="title_holder">
              <div class="post_date">
                <span class="day">15</span>
                <span class="month">Nov</span>
              </div>
              <div class="post_title">
                <h3><a href="<?php print $base_url; ?>">How We Celebrated Our 3rd Birthday</a></h3>
              </div>
            </div>
            <div class="post_excerpt">
              <p>Do you know that we just celebrated our 3rd birthday? Abd do you know how it looks when UHP celebrates? Find out in our new blog story.</p>
            </div>
            <div class="post_meta">
              <div class="post_autor">
                <i class="fas fa-user"></i>Elizabeta
              </div>
              <div class="comment_number">
                <i class="fas fa-comment-alt"></i>0 Comments
              </div>
              <div class="likes">
                <i class="fas fa-thumbs-up"></i>222 Likes
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 featured_post mb-3">
          <div class="featured_post_inner">
            <div class="title_holder">
              <div class="post_date">
                <span class="day">19</span>
                <span class="month">Oct</span>
              </div>
              <div class="post_title">
                <h3><a href="<?php print $base_url; ?>">MobiConf & WebCamp 2018.</a></h3>
              </div>
            </div>
            <div class="post_excerpt">
              <p>This year, our web,asters, andorids and iOSs have replaced their offices in Osijek and Zagreb for three days with WebCamp in Zagreb and MobiConf in Keakow.</p>
            </div>
            <div class="post_meta">
              <div class="post_autor">
                <i class="fas fa-user"></i>Elizabeta
              </div>
              <div class="comment_number">
                <i class="fas fa-comment-alt"></i>0 Comments
              </div>
              <div class="likes">
                <i class="fas fa-thumbs-up"></i>24 Likes
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 featured_post mb-3">
          <div class="featured_post_inner">
            <div class="title_holder">
              <div class="post_date">
                <span class="day">13</span>
                <span class="month">Sep</span>
              </div>
              <div class="post_title">
                <h3><a href="<?php print $base_url; ?>">Backend Dev Course</a></h3>
              </div>
            </div>
            <div class="post_excerpt">
              <p>Who has missed the Summer Internship at UHP, do not regret! Another opportunity has been opened in the form of an extended course that will take place at FERIT.</p>
            </div>
            <div class="post_meta">
              <div class="post_autor">
                <i class="fas fa-user"></i>Elizabeta
              </div>
              <div class="comment_number">
                <i class="fas fa-comment-alt"></i>0 Comments
              </div>
              <div class="likes">
                <i class="fas fa-thumbs-up"></i>24 Likes
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require_once 'php/elements/footer.php'; ?>

</html>
