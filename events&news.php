<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latest Events and NEWS - St. Joseph's College of Engineering and Technology (SJCET)</title>
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

<main class="container mt-2">
  <section class="pt-3 pb-1">
    <h1 class="sjcet-title">News</h1>
    <article data-aos="fade-up" data-aos-once="true" style="width:100%;border:1px solid #f0f0f0;border-radius:10px;background-color:#f5f5f5;padding:10px">
      <ul >
        <?php
        $sql = "SELECT * FROM news order by news_date DESC LIMIT 20";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
          <li  data-aos="fade-up" data-aos-once="true"><span>
            <script>
              document.write(moment("<?php echo($row["news_date"])?>").format('ll'))
            </script>
            - </span><a target="blank" style="text-decoration:none;color:#C2001B" href="https://<?php echo(strtolower($row["dept"])) ?>.sjcettnj.edu.in/static/uploads/<?php echo $row['pdf']?>"><?php echo $row['title']?></a></li>
        <?php }} ?>
      </ul>
    </article>
  </section>
  <section id="event" class="pt-3 mb-4">
    <h1 class="sjcet-title">Events</h1>
    <article data-aos="fade-up" data-aos-once="true" class="container pt-3">
      <div class="row equal-cols">
        <?php
        $sql = "SELECT * FROM event order by event_date DESC LIMIT 20";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
        ?>
        <article class="col-sm-12 col-md-6 col-lg-3"  data-aos="fade-up" data-aos-once="true">
          <div title="<?php echo $row['title']?>" class="card w-100" data-aos="fade-in" data-aos-once="true" >
            <img loading="lazy" src="https://<?php echo(strtolower($row["dept"])) ?>.sjcettnj.edu.in/static/uploads/event/image/<?php echo $row['img']?>" class="card-img-top" alt="Event Image">
            <div class="card-body text-center">
            <a style="text-decoration:none;color:#444" href="https://<?php echo(strtolower($row["dept"])) ?>.sjcettnj.edu.in/static/uploads/event/<?php echo $row['pdf']?>" target="_blank"><span class="sjcet-text"><?php echo substr($row['title'],0,30).'...'?></span></a><br>
              <span class="text-muted">
                <script>
                  document.write(moment("<?php echo($row["event_date"])?>").format('ll'))
                </script>
              </span>
            </div>
          </div>
        </article>
        <?php }} ?>
      </div>
    </article>
  </section>
</main>
<?php require("./layout/Footer.php") ?>