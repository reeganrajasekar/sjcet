<?php require("../layout/Header.php") ?>
<main class="container my-4">
    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-9 mb-3" data-aos="fade-up" data-aos-once="true">
            <article class="border rounded p-3">
                <h1 class="sjcet-title mb-4">EDC (Entrepreneurship Development Cell)</h1>
                <p class="sjcet-text">
                    &ensp;&ensp;Entrepreneurship Development Cell (EDC) of our institution aims to promote a platform for the students to explore various opportunities in the field of entrepreneurship. The main objective of the cell is to break the prevailing myths of entrepreneurship which acts as a barrier in the minds of students. The cell also aims to overcome the various challenges related to entrepreneurship and grooming all the necessary traits of becoming as successful entrepreneurs.<br>
                    &ensp;&ensp;It also tries to empower the girl students to realize the unique opportunities in this field and to cater the needs of the society.
                </p>
                <h1 class="sjcet-title mb-2">Major Focus of EDC</h1>
                <p class="sjcet-text">Our primary objective of the cell is to create the awareness and motivation among the students to explore the unexplored in the field of entrepreneurship.</p>
                <ul class="sjcet-text">
                    <li>Inculcating entrepreneurial spirit among the students of management & engineering graduates.</li>
                    <li>Establishing a bridge between industries and students in generating the innovative ideas.</li>
                    <li>Understanding the various nuances and gain deep insights in the field of entrepreneurship.</li>
                    <li>Offering consultancy services to industries that look forward to learn the modern application and technologies in booming the growth.</li>
                </ul>
                <h1 class="sjcet-title mb-2">Function of EDC</h1>
                <ul class="sjcet-text">
                    <li>Organizing entrepreneurship awareness and development programs to foster the spirit and culture among the students.</li>
                    <li>Establishing Tie- up with Entrepreneurship Development and Innovation Institute ( EDII ), Tamil Nadu to run the entrepreneurship courses and to generate funding opportunities to the aspirants.</li>
                    <li>Generating opportunities to students in undergoing the online learning module courses on entrepreneurship.</li>
                </ul>
                <h1 class="sjcet-title mb-2">Contact</h1>
                <div class="card mb-3" style="border: none;">
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img src="/static/images/placement.jpeg" class="card-img shadow p-1 border" alt="...">
                            </div>
                            <div class="col-md-8">
                            <div class="card-body">
                                <p class="card-text sjcet-name"><b>Mr. P. Sathis Kumar</b> <small class="text-muted">B.E., M.Tech.,(Ph.D.),</small></p>
                                <p class="card-text sjcet-content text-muted">Training & Placement Officer</p>
                                <p class="card-text sjcet-name">+91 9488581589</p>
                                <p class="card-text sjcet-name">sjcetplacement@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h1 class="sjcet-title mt-4">Recent Activities</h1>
                <div class="row mt-4 mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel sjcet-slide slide" data-bs-ride="carousel">
                        <div class="carousel-inner sjcet-inner" role="listbox">
                        <?php
                        $sql = "SELECT * FROM club WHERE name='edc' order by reg_date ASC LIMIT 6";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while($row = $result->fetch_assoc()) {
                        ?>
                            <div class="carousel-item sjcet-carousel-item active">
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
        <section class="col-sm-12 col-md-12 col-lg-3" data-aos="fade-up" data-aos-once="true">
            <ul id="sjcet_sub_menu" class="sjcet_sub_menu border rounded">
                <li><a class="sub-item active" href="/co_curricular/">EDC</a></li>
                <li><a class="sub-item" href="/co_curricular/iic.php">IIC</a></li>
                <li><a class="sub-item" href="/co_curricular/rotaract_club.php">Rotaract Club</a></li>
                <li><a class="sub-item" href="/co_curricular/rrc.php">Red Ribbon Club</a></li>
                <li><a class="sub-item" href="/co_curricular/nss.php">National Service Scheme</a></li>
                <li><a class="sub-item" href="/co_curricular/yrc.php">Youth Red Cross</a></li>
            </ul>
        </section>
    </div>
</main>
<?php require("../layout/Footer.php") ?>