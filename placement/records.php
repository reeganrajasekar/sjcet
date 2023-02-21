<?php require("../layout/Header.php") ?>
<main class="container my-4">
    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-9 mb-3" data-aos="fade-up" data-aos-once="true">
            <article class="border rounded p-3">
                <h1 class="sjcet-title mb-4">Placement Records</h1>
                <div class="accordion" id="accordionExample">
                <?php
                $sql = "SELECT DISTINCT year FROM placement order by year DESC";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    $i=0;
                    while($row = $result->fetch_assoc()) {
                ?>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo('new'.$row["year"]) ?>" aria-expanded="false" aria-controls="<?php echo('new'.$row["year"]) ?>">
                            <?php echo($row["year"]) ?> 
                        </button>
                        </h2>
                        <div id="<?php echo('new'.$row["year"]) ?>" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="table-responsive">
                                    <table class="table table-striped sjcet-text table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Department</th>
                                                <th scope="col">Year</th>
                                                <th scope="col">Company</th>
                                                <th scope="col">Position</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                        $year = $row["year"];
                                        $sql = "SELECT * FROM placement WHERE year='$year' order by reg_date DESC";
                                        $result1 = $conn->query($sql);
                                        if ($result->num_rows > 0) {
                                            $i=0;
                                            while($row1 = $result1->fetch_assoc()) {
                                                $i++;
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo($i) ?></th>
                                                <td><?php echo($row1["name"]) ?></td>
                                                <td><?php echo($row1["dept"]) ?></td>
                                                <td><?php echo($row1["year"]) ?></td>
                                                <td><?php echo($row1["com"]) ?></td>
                                                <td><?php echo($row1["position"]) ?></td>
                                            </tr>
                                        <?php
                                            }}
                                        ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    }}
                ?>
                </div>
            </article>
        </section>
        <section class="col-sm-12 col-md-12 col-lg-3 " data-aos="fade-up" data-aos-once="true">
            <ul id="sjcet_sub_menu" class="sjcet_sub_menu border rounded">
                <li><a class="sub-item" href="/placement/">Training Procedure</a></li>
                <li><a class="sub-item" href="/placement/recruiters.php">Our Recruiters</a></li>
                <li><a class="sub-item active" href="/placement/records.php">Placement Records</a></li>
                <li><a class="sub-item" href="/placement/contact.php">Contact</a></li>
            </ul>
        </section>
    </div>
</main>
<?php require("../layout/Footer.php") ?>