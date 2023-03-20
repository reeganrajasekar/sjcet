<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses Offered- St. Joseph's College of Engineering and Technology (SJCET)</title>
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
                <h1 class="sjcet-title">UG COURSES</h1>
                <div class="table-responsive sjcet-text mt-3">
                    <table class="table table-striped text-center table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name of the Course</th>
                                <th scope="col">Intake</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1.</th>
                                <td>B.Tech. Artificial Intelligence and Data Science</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <th scope="row">2.</th>
                                <td>B.E. Computer Science and Engineering</td>
                                <td>90</td>
                            </tr>
                            <tr>
                                <th scope="row">3.</th>
                                <td>B.E. Electronics and Communication Engineering</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <th scope="row">4.</th>
                                <td>B.E. Electrical and Electronics Engineering</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <th scope="row">5.</th>
                                <td>B.E. Mechanical Engineering</td>
                                <td>60</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h1 class="sjcet-title mt-3">PG COURSES</h1>
                <div class="table-responsive sjcet-text mt-3">
                    <table class="table table-striped text-center table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name of the Course</th>
                                <th scope="col">Intake</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1.</th>
                                <td>MBA (Master of Business Administration)</td>
                                <td>60</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </article>
        </section>
        <section class="col-sm-12 col-md-12 col-lg-3 " data-aos="fade-up" data-aos-once="true">
            <ul id="sjcet_sub_menu" class="sjcet_sub_menu border rounded">
                <li><a class="sub-item" href="/admission/">Approved & Affiliation</a></li>
                <li><a class="sub-item active" href="/admission/courses.php">Courses Offered</a></li>
                <li><a class="sub-item" href="/admission/eligibility.php">Eligibility Criteria</a></li>
                <li><a class="sub-item" target="_blank" href="https://forms.gle/nfwVCNaVyZFDRfqH6">Apply Online</a></li>
                <li><a class="sub-item" href="/admission/contact.php">Contact</a></li>
            </ul>
        </section>
    </div>
</main>
<?php require("../layout/Footer.php") ?>