<?php require("../layout/Header.php") ?>
<main class="container my-4">
    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-9 mb-3" data-aos="fade-up" data-aos-once="true">
            <article class="border rounded p-3">
                <h1 class="sjcet-title">YRC (Youth Red Cross)</h1>
                <p class="container sjcet-text mt-2">
                    &ensp;&ensp;YRC trains to render selfless service to their society. In a bid to prepare communities for emergencies and to nurture humanitarianism in the youth, the Youth Red Cross unit of SJCET undertakes umpteen tasks.
                </p>
                <p class="container sjcet-text mt-2">
                    &ensp;&ensp;Youth represent a substantial part of the membership of Red Cross for its humanitarian commitment. Young volunteers can make a significant contribution to meeting the needs of the most vulnerable people within their local communities through Red Cross youth programme. This has been designed to involve young people as much as possible in the movement and its activities not only as workers and also as beneficiaries, but as partners in management.
                </p>
                <div class="table-responsive sjcet-text mt-3">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">OBJECTIVES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">
                                    <ul>
                                        <li>To conduct social and health awareness programmes.</li>
                                        <li>Awareness on the care of their own health and that of others.</li>
                                        <li>To encourage the students to extend their humanitarian services to the society.</li>
                                        <li>To offer First Aid Training to all the YRC volunteers.</li>
                                        <li>To develop leadership quality among the students.</li>
                                        <li>The understanding and acceptance of civic responsibilities and acting accordingly with humanitarian concern, to fulfill the same.</li>
                                        <li>To offer First Aid Training to all the YRC volunteers.</li>
                                        <li>To inculcate in the Youth of our country.</li>
                                        <li>To understand and acceptance of civic and human responsibilities.</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive sjcet-text mt-3">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">ACTIVITIES OF YRC</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">
                                    <ul>
                                        <li>Blood Donation Camps.</li>
                                        <li>Conducting Awareness Programmes and Seminars.</li>
                                        <li>First Aid Trainings.</li>
                                        <li>Village Camps.</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                        $sql = "SELECT * FROM club WHERE name='yrc' order by reg_date ASC LIMIT 6";
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
        <section class="col-sm-12 col-md-12 col-lg-3 " data-aos="fade-up" data-aos-once="true">
            <ul id="sjcet_sub_menu" class="sjcet_sub_menu border rounded">
                <li><a class="sub-item" href="/co_curricular/">EDC</a></li>
                <li><a class="sub-item" href="/co_curricular/iic.php">IIC</a></li>
                <li><a class="sub-item" href="/co_curricular/rotaract_club.php">Rotaract Club</a></li>
                <li><a class="sub-item" href="/co_curricular/rrc.php">Red Ribbon Club</a></li>
                <li><a class="sub-item" href="/co_curricular/nss.php">National Service Scheme</a></li>
                <li><a class="sub-item active" href="/co_curricular/yrc.php">Youth Red Cross</a></li>
            </ul>
        </section>
    </div>
</main>
<?php require("../layout/Footer.php") ?>