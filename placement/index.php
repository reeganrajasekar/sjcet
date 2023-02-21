<?php require("../layout/Header.php") ?>
<main class="container my-4">
    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-9 mb-3">
            <article class="border rounded p-3">
                <h1 class="sjcet-title">TRAINING & PLACEMENT</h1>
                <p class="container sjcet-text">
                &ensp;&ensp;The Placement Cell at SJCET is dedicated towards giving students an opportunity to excel in their field of career. It is keen on providing skill based programs that will give students a practical edge in the real world.
                </p>
                <span class="container sjcet-text mt-3">The Placement Cell provides :</span>
                <ul class="sjcet-text">
                    <li>Career Counseling</li>
                    <li>Campus Recruitment Training + Soft skills training</li>
                    <li>Providing Job Placement, Internships</li>
                    <li>Encouraging Scholarship Programs & Competitions</li>
                </ul>
                <h1 class="sjcet-title mt-4">Recent Activities</h1>
                <div class="row mt-4 mx-auto my-auto justify-content-center">
                    <div id="recipeCarousel" class="carousel sjcet-slide slide" data-bs-ride="carousel">
                        <div class="carousel-inner sjcet-inner" role="listbox">
                        <?php
                        $sql = "SELECT * FROM club WHERE name='placement' order by reg_date ASC LIMIT 6";
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
        <section class="col-sm-12 col-md-12 col-lg-3 ">
            <ul id="sjcet_sub_menu" class="sjcet_sub_menu border rounded">
                <li><a class="sub-item active" href="/placement/">Training Procedure</a></li>
                <li><a class="sub-item" href="/placement/recruiters.php">Our Recruiters</a></li>
                <li><a class="sub-item" href="/placement/records.php">Placement Records</a></li>
                <li><a class="sub-item" href="/placement/contact.php">Contact</a></li>
            </ul>
        </section>
    </div>
</main>
<?php require("../layout/Footer.php") ?>