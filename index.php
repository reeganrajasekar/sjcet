<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home | SJCET-TNJ</title>
  <link rel="stylesheet" href="/static/css/bootstrap.min.css">
  <link rel="stylesheet" href="/static/style.css">
  <script src="/static/js/moment.js"></script>
  <link rel="icon" href="/static/images/favicon.png">
  <link href="/static/css/aos.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Tilt+Warp&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<?php require("./layout/Header.php") ?>
<!-- Carousel -->
<main>
<div id="carouselExampleDark" class="carousel slide carousel-fade" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active" >
      <img src="/static/images/1.jpg" class="d-block w-100"  alt="Slide_1">
    </div>
    <div class="carousel-item">
      <img src="/static/images/2.jpg" loading="lazy" class="d-block w-100" alt="Slide_2">
    </div>
    <div class="carousel-item">
      <img src="/static/images/3.jpg" loading="lazy" class="d-block w-100" alt="Slide_3">
    </div>
    <div class="carousel-item">
      <img src="/static/images/4.jpg" loading="lazy" class="d-block w-100" alt="Slide_4">
    </div>
    <div class="carousel-item">
      <img src="/static/images/5.jpg" loading="lazy" class="d-block w-100" alt="Slide_5">
    </div>
  </div>
</div>

<section class="container-fluid sjcet-box">
  <div class="container py-3">
    <h3 class="sjcet-title">WELCOME TO SJCET</h3>
    <p class="sjcet-text">
      &ensp;&ensp;St. Joseph’s College of Engineering & Technology is one of the seven engineering colleges under the umbrella of DFT Group of Institutions. It was founded in the year 2007. It is a Christian Minority Institution of Higher Technical Education, approved by the All India Council for Technical Education [AICTE], NewDelhi, Government of Tamilnadu and affiliated to Anna University, Chennai. The College is promoted and managed by Sisters of DMI, which was founded in the year 1984 by Rev.Fr.Dr.J.E.Arulraj. The Society manages several educational, technical, health, welfare and social development Institutions. Besides the College commits itself to promote self-disciplined holistic academic excellence among the most marginalized, oppressed and disadvantaged sections of the society so as to mould persons in pursuance of making a better human life through science and technology.
    </p>
  </div>
</section>
<section class="container mt-2">
    <div class="row equal-cols gx-2 mx-1">
      <article id="event" class="col-sm-12 col-md-12 col-lg-8 mb-2 h-100" data-aos="zoom-in" data-aos-once="true">
        <div class="news">
          <h1 class="sjcet-title">Latest Events @ SJCET</h1>
          <section class="row equal-cols gx-2 mx-1">
            <?php
            $sql = "SELECT * FROM event order by event_date DESC LIMIT 2";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
            ?>
            <article class="col-sm-12 col-md-6 col-lg-4 mb-1">
              <div title="<?php echo $row['title']?>" class="card w-100" data-aos="fade-in" data-aos-once="true" >
                <img loading="lazy" src="https://<?php echo(strtolower($row["dept"])) ?>.sjcettnj.edu.in/static/uploads/event/image/<?php echo $row['img']?>" class="card-img-top" alt="Event Image">
                <div class="card-body text-center">
                <a style="text-decoration:none;color:#444" href="https://<?php echo(strtolower($row["dept"])) ?>.sjcettnj.edu.in/static/uploads/event/<?php echo $row['pdf']?>" target="_blank"><span class="sjcet-text"><?php echo substr($row['title'],0,30).'...'?></span></a><br>
                  <span class="text-muted">
                    <script>
                      document.write(moment("<?php echo($row["event_date"])?>").format('ll'))
                    </script>
                  </span>
                </div>
              </div>
            </article>
            <?php }} ?>
            <article class="col-sm-12 col-md-12 col-lg-4 mb-1 " style="display: flex;flex-direction: column;justify-content: space-around;align-items:center;">
              <p class="sjcet-text">
                At SJCET, we keep on organising various events and functions from time to time for the welfare of students in terms of technical skill development and personal growth.
              </p>
              <a class="btn text-center" style="color:#C2001B;border:2px solid #C2001B;border-radius: 15px;;" href="/events&news.php#event">View All Events</a>
            </article>
          </section>
        </div>
      </article>
      <article class="col-sm-12 col-md-12 col-lg-4 mb-2 h-100" data-aos="zoom-in" data-aos-once="true">
        <div class="news" id="news">
          <h1 class="sjcet-title">SJCET News</h1>
          <div class="holder" id="holder">
            <ul id="ticker01">
              <?php
              $sql = "SELECT * FROM news order by news_date DESC LIMIT 10";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
              ?>
              <li>
                <span>
                  <script>
                    document.write(moment("<?php echo($row["news_date"])?>").format('ll'))
                  </script>
                - </span><a class="sjcet-text" target="blank" href="https://<?php echo(strtolower($row["dept"])) ?>.sjcettnj.edu.in/static/uploads/<?php echo $row['pdf']?>"><?php echo $row['title']?></a></li>
              <?php }} ?>
            </ul>
          </div>
          <a href="/events&news.php#news" class="btn pt-2 sjcet-text" style="float: right;color:#C2001B;text-decoration: underline;">more...</a>
        </div>
      </article>
    </div>
  </section>

<section class="container-fluid sjcet-box">
  <div class="container p-3" data-aos="fade-up" data-aos-once="true">
    <h3 class="sjcet-title">STUDY @ SJCET</h3>
    <article class="row gx-2 mt-4">
      <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
        <a href="https://cse.sjcettnj.edu.in" class="dept">
        B.E Computer Science and Engineering
        </a>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
        <a href="https://cse.sjcettnj.edu.in" class="dept">
        B.E Electronics and Communication Engineering
        </a>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
        <a href="https://cse.sjcettnj.edu.in" class="dept">
        B.E Electrical and Electronics Engineering
        </a>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
        <a href="https://cse.sjcettnj.edu.in" class="dept">
        B.E Mechanical Engineering
        </a>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4 mb-3">
        <a href="https://cse.sjcettnj.edu.in" class="dept">
        B.Tech Artificial Intelligence and Data Science
        </a>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-4 mb-2">
        <a href="https://cse.sjcettnj.edu.in" class="dept">
        MBA(Master of Business Administration)
        </a>
      </div>
    </article>
  </div>
</section>

<section class="container">
  <div class="container p-3" data-aos="fade-up" data-aos-once="true">
    <h3 class="sjcet-title">EXPLORE @ SJCET</h3>
    <article class="row gx-2 mt-4" data-aos="fade-up" data-aos-once="true">
      <div class="col-sm-12 col-md-12 col-lg-3 mb-3">
        <div class="sjcet-ex">
          <p>PLACEMENTS</p>
          <p class="sjcet-ex-con">
          &ensp;&ensp;Our Placement Cell is dedicated towards giving students an opportunity to excel in their field of career and also ...
          </p>
          <span style="display: flex;justify-content:right">
            <a href="/placement" style="color:#C2001B;border:2px solid #C2001B;border-radius: 15px;" class="btn sjcet-btn" >More</a>
          </span>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-3 mb-3">
        <div class="sjcet-ex">
          <p>CLUBS & ASSOCIATIONS</p>
          <p class="sjcet-ex-con">
          &ensp;&ensp;Keeping in view the all-round development of students, the students of SJCET actively organize and participate in ...
          </p>
          <span style="display: flex;justify-content:right">
            <a href="co_curricular" style="color:#C2001B;border:2px solid #C2001B;border-radius: 15px;" class="btn sjcet-btn" >More</a>
          </span>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-3 mb-3">
        <div class="sjcet-ex">
          <p>ANTI-RAGGING CELL</p>
          <p class="sjcet-ex-con">
          &ensp;&ensp;SJCET aims at achieving student discipline and offers protection to the new entrants from the menace of ragging. I...
          </p>
          <span style="display: flex;justify-content:right">
            <a href="/anti_ragging.php" style="color:#C2001B;border:2px solid #C2001B;border-radius: 15px;" class="btn sjcet-btn" >More</a>
          </span>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-3 mb-3">
        <div class="sjcet-ex">
          <p>GRIEVANCE AND REDRESSAL</p>
          <p class="sjcet-ex-con">
          &ensp;&ensp;The Grievance and Redressal Cell was constituted to probe into the student grievances. The Grievance Redressal Cel...
          </p>
          <span style="display: flex;justify-content:right">
            <a href="//forms.gle/mLkVSUCbPyEXGMEfA" style="color:#C2001B;border:2px solid #C2001B;border-radius: 15px;" class="btn sjcet-btn" >More</a>
          </span>
        </div>
      </div>
      
    </article>
  </div>
</section>


<div class="p-4 sjcet-box">
    <h2 class="sjcet-title">LIFE @ SJCET</h2>
    <div class="row gx-5 mx-auto my-auto justify-content-center">
      <div id="sjcet-slider" class="carousel sjcet-slide slide" data-bs-ride="carousel">
          <div class="carousel-inner sjcet-inner" role="listbox">

            <div class="carousel-item sjcet-carousel-item active">
              <div class="col-md-2">
                  <div class="card">
                      <div class="card-img">
                          <img loading="lazy" src="/static/images/life/1.jpg" width="100%" class="img-fluid p-1">
                      </div>
                      <div class="card-img-overlay"><span>Alumni Meets</span></div>
                  </div>
              </div>
            </div>
                
            <div class="carousel-item sjcet-carousel-item">
              <div class="col-md-2">
                  <div class="card">
                      <div class="card-img">
                          <img loading="lazy" src="/static/images/life/2.jpg" width="100%" class="img-fluid p-1">
                      </div>
                      <div class="card-img-overlay"><span>Career Guidance</span></div>
                  </div>
              </div>
            </div>

            <div class="carousel-item sjcet-carousel-item">
              <div class="col-md-2">
                  <div class="card">
                      <div class="card-img">
                          <img loading="lazy" src="/static/images/life/3.jpg" width="100%" class="img-fluid p-1">
                      </div>
                      <div class="card-img-overlay"><span>Awareness Rallies</span></div>
                  </div>
              </div>
            </div>

            <div class="carousel-item sjcet-carousel-item">
              <div class="col-md-2">
                  <div class="card">
                      <div class="card-img">
                          <img loading="lazy" src="/static/images/life/4.jpg" width="100%" class="img-fluid p-1">
                      </div>
                      <div class="card-img-overlay"><span>Sports Meets</span></div>
                  </div>
              </div>
            </div>

            <div class="carousel-item sjcet-carousel-item">
              <div class="col-md-2">
                  <div class="card">
                      <div class="card-img">
                          <img loading="lazy" src="/static/images/life/5.jpg" width="100%" class="img-fluid p-1">
                      </div>
                      <div class="card-img-overlay"><span>Engineers Day</span></div>
                  </div>
              </div>
            </div>

            <div class="carousel-item sjcet-carousel-item">
              <div class="col-md-2">
                  <div class="card">
                      <div class="card-img">
                          <img loading="lazy" src="/static/images/life/6.jpg" width="100%" class="img-fluid p-1">
                      </div>
                      <div class="card-img-overlay"><span>Entrepreneurs Meet</span></div>
                  </div>
              </div>
            </div>

            <div class="carousel-item sjcet-carousel-item">
              <div class="col-md-2">
                  <div class="card">
                      <div class="card-img">
                          <img loading="lazy" src="/static/images/life/7.jpg" width="100%" class="img-fluid p-1">
                      </div>
                      <div class="card-img-overlay"><span>Teachers Day</span></div>
                  </div>
              </div>
            </div>

            <div class="carousel-item sjcet-carousel-item">
              <div class="col-md-2">
                  <div class="card">
                      <div class="card-img">
                          <img loading="lazy" src="/static/images/life/8.jpg" width="100%" class="img-fluid p-1">
                      </div>
                      <div class="card-img-overlay"><span>Culturals Day</span></div>
                  </div>
              </div>
            </div>

            <div class="carousel-item sjcet-carousel-item">
              <div class="col-md-2">
                  <div class="card">
                      <div class="card-img">
                          <img loading="lazy" src="/static/images/life/9.jpg" width="100%" class="img-fluid p-1">
                      </div>
                      <div class="card-img-overlay"><span>Graduation Day</span></div>
                  </div>
              </div>
            </div>

          </div>
            <a class="carousel-control-prev bg-transparent w-auto" href="#sjcet-slider" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next bg-transparent w-auto" href="#sjcet-slider" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
</div>
</main>

<?php require("./layout/Footer.php") ?>