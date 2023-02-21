<?php require("./layout/Header.php") ?>
<main class="container my-4">
    <h1 class="sjcet-title">Gallery</h1>
    <section class="mt-4 row gx-3">
        <?php
            $sql = "SELECT * FROM img order by reg_date DESC";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
        ?>
        <div class="col-sm-12 col-md-12 col-lg-3 mb-2">
            <div title="<?php echo $row['name']?>" class="card w-100" data-aos="fade-in" data-aos-once="true" >
                <img loading="lazy" src="/static/uploads/img/<?php echo $row['file']?>" class="gall-img" alt="Event Image">
                <div class="card-body text-center">
                <span class="sjcet-text"><?php echo substr($row['name'],0,30).'...'?></span>
                </div>
            </div>
        </div>
        <?php
                }
            }
        ?>
    </section>
</main>
<?php require("./layout/Footer.php") ?>