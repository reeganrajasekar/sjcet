<?php require("../layout/Header.php") ?>
<main class="container my-4">
    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-9 mb-3">
            <article class="border rounded p-3">
                <h1 class="sjcet-title">NSS (National Service Scheme)</h1>
                <p class="container sjcet-text mt-2">
                    &ensp;&ensp;National Service Scheme popularly known as NSS ,the scheme was launched in Mahatma Gandhi centenary year 1969 and aimed at developing student’s personality through community service. The overall objective of National Service is educational. This objective is attained through the service to the community.
                </p>
                <p class="container sjcet-text mt-2">
                    &ensp;&ensp;National Service Scheme(NSS) is a permanent youth programme under the ministry of youth Affairs and Sports, Government of India and funded by Government of Tamilnadu and Government of India in the ratio 5:7.
                </p>
                <div class="table-responsive mt-3 sjcet-text">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">MOTTO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">The motto of NSS is "Not me but you". It underlines that the welfare of an individual is ultimately dependent on the welfare of society on the whole. This express the essence of democratic living and upholds the need of selfless service and appreciation of the other man’s point of view and also consideration for fellow human beings.</td>
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
                                    <p class="sjcet-text">The overall objective of NSS is Personality Development through community service. Campus to Community Linkage. The broad objectives of NSS are to:</p>
                                    <ul>
                                        <li>Understand the community in which they work.</li>
                                        <li>Understand themselves in relation to their community.</li>
                                        <li>Identify the needs and problems of the community and involve them in problem solving process.</li>
                                        <li>Develop among themselves a sense of social and civic responsibility.</li>
                                        <li>Utilize their knowledge in finding practical solution to individual and community problems.</li>
                                        <li>Develop competence required for group-living and sharing of responsibilities.</li>
                                        <li>Gain skills in mobilizing community participation.</li>
                                        <li>Acquire leadership qualities and democratic attitude.</li>
                                        <li>Develop capacity to meet emergencies and natural disaster.</li>
                                        <li>Practice national integration and social harmony.</li>
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
                                <th scope="col">NSS ACTIVITIES</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="row">
                                    <p class="sjcet-text">
                                        &ensp;&ensp;Each NSS volunteer is required to put in minimum 120 hours of community service per year for two years, i.e., total 240 hours. The NSS volunteers work on issues of social relevance, which keep evolving in response to the needs of the community, through regular and special camping activities. Such issues include Literacy and Education, Health, Family welfare and Nutrition, Environment Conservation, Rescue and Relief during calamities and Empowerment of Women.
                                    </p>
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
                        $sql = "SELECT * FROM club WHERE name='nss' order by reg_date ASC LIMIT 6";
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
                <li><a class="sub-item" href="/co_curricular/rrc.php">Red Ribbon Club</a></li>
                <li><a class="sub-item active" href="/co_curricular/nss.php">National Service Scheme</a></li>
                <li><a class="sub-item" href="/co_curricular/yrc.php">Youth Red Cross</a></li>
            </ul>
        </section>
    </div>
</main>
<?php require("../layout/Footer.php") ?>