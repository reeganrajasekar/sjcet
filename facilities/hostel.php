<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SJCET-TNJ</title>
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
<?php require("../layout/Header.php") ?>
<main class="container my-4">
    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-9 mb-3" data-aos="fade-up" data-aos-once="true">
            <article class="border rounded p-3">
                <h1 class="sjcet-title">HOSTEL FACILITIES</h1>
                <div class="text-center my-4">
                    <img src="/static/images/hostel.jpg" alt="Sports Img" class="w-50 border rounded text-center p-2 shadow mb-3">
                </div>
                <p class="container sjcet-text">
                &ensp;&ensp;Full-fledged hostel facilities for boys & girls students have been established inside the campus. It also provides good and safe facilities of lodging and boarding to cater to the needs of outstation students. Hostel Students are also permitted to use their own computers in their own rooms. The mess is spacious with a dining hall and kitchen. Separate seating arrangements are made for both boys and girls. For students’ convenience, we have also included a reading hall, for students who would like to study extra hours.
                </p>
            </article>
        </section>
        <section class="col-sm-12 col-md-12 col-lg-3" data-aos="fade-up" data-aos-once="true">
            <ul id="sjcet_sub_menu" class="sjcet_sub_menu border rounded">
                <li><a class="sub-item" href="/facilities/">Library</a></li>
                <li><a class="sub-item" href="/facilities/sports.php">Sports</a></li>
                <li><a class="sub-item" href="/facilities/transport.php">Transport</a></li>
                <li><a class="sub-item active" href="/facilities/hostel.php">Hostel</a></li>
                <li><a class="sub-item" href="/facilities/cafeteria.php">Cafeteria</a></li>
            </ul>
        </section>
    </div>
</main>
<?php require("../layout/Footer.php") ?>