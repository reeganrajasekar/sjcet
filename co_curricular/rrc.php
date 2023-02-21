<?php require("../layout/Header.php") ?>
<main class="container my-4">
    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-9 mb-3">
            <article class="border rounded p-3">
                <h1 class="sjcet-title">RRC (Red Ribbon Club)</h1>
                <p class="container sjcet-text mt-2">
                    &ensp;&ensp;The Red Ribbon Club (RRC) is a voluntary on-campus intervention programme for students in colleges and universities in Tamil Nadu. A state RRC coordinator supervises the programme in all its aspects. RRC in SJCET is functioning effectively since 2007. Every student admitted in the college is an active member of RRC. A 10 Hours Life Skills Enhancement Programme is offered to all students and 25 students are selected as Peer Educators, trained to monitor the social awareness of their localities.
                </p>
                <div class="table-responsive mt-3 sjcet-text">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">GOAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">The goal of RRC is to reduce the occurrence of new sexually transmitted infections, particularly HIV, among youth.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
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
                                        <li>To increase awareness on sexual reproductive health and HIV/AIDS.</li>
                                        <li>To impart skills on communication, self-protection, negotiation, and effective group interaction.</li>
                                        <li>To prepare youth as peer educators/agents of change by developing their skills on leadership and team building.</li>
                                        <li>To encourage blood donations.</li>
                                        <li>To serve as forums for students to participate in the fight against HIV/AIDS.</li>
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
                                <th scope="col">RRC ACTIVITIES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">
                                    <ul>
                                        <li>Conducts AIDS Awareness Programme in our campus and in the adopted villages.</li>
                                        <li>Conducts regular Blood-donation camps and Blood-group identification camps.</li>
                                        <li>Conducts various competitions on the theme of AIDS Awareness and distributes prizes for the winners.</li>
                                        <li>Organizes Annual Youth festival and motivates youths to positive attitudes.</li>
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
                        $sql = "SELECT * FROM club WHERE name='rrc' order by reg_date ASC LIMIT 6";
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
                <li><a class="sub-item" href="/co_curricular/rotaract_club.php">Rotaract Club</a></li>
                <li><a class="sub-item active" href="/co_curricular/rrc.php">Red Ribbon Club</a></li>
                <li><a class="sub-item" href="/co_curricular/nss.php">National Service Scheme</a></li>
                <li><a class="sub-item" href="/co_curricular/yrc.php">Youth Red Cross</a></li>
            </ul>
        </section>
    </div>
</main>
<?php require("../layout/Footer.php") ?>