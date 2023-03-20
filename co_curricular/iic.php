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
                <h1 class="sjcet-title mb-2">IIC (Institution’s Innovation Council)</h1>
                <p class="sjcet-text">
                    &ensp;&ensp;The Ministry of Education (MoE), Government of India has established ‘MoE’s Innovation Cell (MIC)’ to systematically foster the culture of Innovation among all Higher Education Institutions (HEIs).<br>
                    &ensp;&ensp;MIC has envisioned encouraging creation of ‘Institution’s Innovation Council (IICs) across selected HEIs.<br>
                    &ensp;&ensp;The IICs are established to promote innovation and entrepreneurship in the Institution and to create an innovation promotion ecosystem in the campus.<br>
                    &ensp;&ensp;IIC is basically a supportive ecosystem which tries to give multiple levels of support for the student innovators.
                </p>
                <h1 class="sjcet-title mb-2">Major Focus of IIC</h1>
                <ul class="sjcet-text">
                    <li>To create a vibrant Innovation ecosystem.</li>
                    <li>Start-up supporting mechanism in HEIs.</li>
                    <li>Prepare institute for Atal Ranking of institutions on innovation achievements framework.</li>
                    <li>Establish function ecosystem for scouting ideas and pre-incubation of ideas.</li>
                </ul>
                <h1 class="sjcet-title mb-2">Function of IIC</h1>
                <ul class="sjcet-text">
                    <li>Organize periodic workshops/ seminars/ interactions with entrepreneurs, professionals and create a mentor pool for student innovators.</li>
                    <li>Network with peers and entrepreneurship development organizations.</li>
                    <li>Help students and faculty to convert their ideas into working prototypes using hardware and software resources.</li>
                    <li>Organize Hackathons, design contests etc. with the involvement of industries.</li>
                </ul>
                <h1 class="sjcet-title mb-2">IIC Members</h1>
                <div class="table-responsive sjcet-text mt-3">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr class="text-center">
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">1</td>
                                <td scope="row">
                                    <p class="sjcet-text">
                                    Dr. D. Shanmugasundaram<br>
                                    Principal<br>
                                    Head of the Institution
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">2</td>
                                <td scope="row">
                                    <p class="sjcet-text">
                                    Mr. P. Sathis Kumar<br>
                                    Assistant Professor, Department of Mechanical Engineering<br>
                                    President
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td scope="row">3</td>
                                <td scope="row">
                                    <p class="sjcet-text">
                                    Mr. P. Muthamil Selvan<br>
                                    Assistant Professor, Department of CSE<br>
                                    Convener
                                    </p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                
                <h1 class="sjcet-title mb-2">Recent Activities</h1>
                <div class="row mt-4 mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel sjcet-slide slide" data-bs-ride="carousel">
                        <div class="carousel-inner sjcet-inner" role="listbox">
                        <?php
                        $sql = "SELECT * FROM club WHERE name='iic' order by reg_date ASC LIMIT 6";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                        ?>
                            <div class="carousel-item sjcet-carousel-item">
                                <div class="col-md-3">
                                    <div class="card">
                                        <div class="card-img">
                                            <img src="/static/uploads/placement/<?php echo($row["file"]) ?>" width="100%" class="img-fluid">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }}
                        ?>
                        </div>
                        <a class="carousel-control-prev bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        </a>
                        <a class="carousel-control-next bg-transparent w-aut" href="#recipeCarousel" role="button" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        </a>
                    </div>
                </div>
            </article>
        </section>
        <section class="col-sm-12 col-md-12 col-lg-3 " data-aos="fade-up" data-aos-once="true">
            <ul id="sjcet_sub_menu" class="sjcet_sub_menu border rounded">
                <li><a class="sub-item" href="/co_curricular/">EDC</a></li>
                <li><a class="sub-item active" href="/co_curricular/iic.php">IIC</a></li>
                <li><a class="sub-item" href="/co_curricular/rotaract_club.php">Rotaract Club</a></li>
                <li><a class="sub-item" href="/co_curricular/rrc.php">Red Ribbon Club</a></li>
                <li><a class="sub-item" href="/co_curricular/nss.php">National Service Scheme</a></li>
                <li><a class="sub-item" href="/co_curricular/yrc.php">Youth Red Cross</a></li>
            </ul>
        </section>
    </div>
</main>
<?php require("../layout/Footer.php") ?>