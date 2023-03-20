<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gallery - St. Joseph's College of Engineering and Technology (SJCET)</title>

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