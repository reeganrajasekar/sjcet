<?php require("../layout/Header.php") ?>
<main class="container my-4">
    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-9 mb-3">
            <article class="border rounded p-3">
                <h1 class="sjcet-title mb-2">Rotaract Club of SJCET</h1>
                <p class="container sjcet-text">
                    &ensp;&ensp;Rotaract Club of SJCET is a sponsor club of Rotary Club of Thanjavur Cosmos. The Rotaract club of SJCET seeks to improve the leadership and professional skills of the students in addition to moulding them into responsible individuals. They organize various events that foster the spirit of social responsibility.
                </p>
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
                        $sql = "SELECT * FROM club WHERE name='rc' order by reg_date ASC LIMIT 6";
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
                <li><a class="sub-item" href="/co_curricular/">EDC</a></li>
                <li><a class="sub-item" href="/co_curricular/iic.php">IIC</a></li>
                <li><a class="sub-item active" href="/co_curricular/rotaract_club.php">Rotaract Club</a></li>
                <li><a class="sub-item" href="/co_curricular/rrc.php">Red Ribbon Club</a></li>
                <li><a class="sub-item" href="/co_curricular/nss.php">National Service Scheme</a></li>
                <li><a class="sub-item" href="/co_curricular/yrc.php">Youth Red Cross</a></li>
            </ul>
        </section>
    </div>
</main>
<?php require("../layout/Footer.php") ?>