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
                <li><a class="sub-item" href="#">Apply Online</a></li>
                <li><a class="sub-item" href="/admission/contact.php">Contact</a></li>
            </ul>
        </section>
    </div>
</main>
<?php require("../layout/Footer.php") ?>