<?php require("./layout/Header.php") ?>
<?php require("./layout/db.php") ?>

<div id="loader" style="position:fixed;width:100%;height:100%;background-color:#ff965999;z-index: 10000;top:0px;display: none;">
      <div class="spinner-border" style="color:#fff;position:fixed;top:48%;left:49%;" role="status">
        <span class="sr-only"></span>
      </div>
</div>
<div class="container mt-3">
    <div style="display:flex;flex-direction:row;justify-content:space-between">
        <h2 style="color:#922521;font-weight:600">Placement Records</h2>
        <button type="button" class="btn btn-primary" style="color:white;background:#922521;font-weight:600" data-bs-toggle="modal" data-bs-target="#myModal">
            Add Record
        </button>
    </div>
    <br>   
    
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
                                        <th scope="col">Action</th>
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
                                        <td>
                                        <form action="/placement/admin/delete/data.php" onsubmit="document.getElementById('loader').style.display='block'" method="post">
                                            <input type="hidden" name="id" value="<?php echo($row1["id"]) ?>">
                                            <button style="border:none;background:none;width:100%;text-align:center" onclick="return confirm('Do you want to delete?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash3 text-danger" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                                </svg>
                                            </button>
                                        </form>
                                        </td>
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
    
        
        </div>
    </div>
    <br>
</div>



<div class="modal fade model-sm" id="myModal">
  <div class="modal-dialog ">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Add Placement</h4>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
            <form action="/placement/admin/create/data.php" onsubmit="document.getElementById('loader').style.display='block'" method="post">
                <div class=" mb-3">
                    <label for="name" class="form-label">Name <span style="color:red">*</span>:</label>
                    <input required type="text" placeholder="Name" class="form-control" id="name" name="name">
                </div>
                
                <div class=" mb-3">
                    <label for="name" class="form-label">Department  <span style="color:red">*</span>:</label>
                    <select class="form-select" name="dept" aria-label="Default select example">
                        <option selected disabled value="">Select Department</option>
                        <option value="ECE">AI&DS</option>
                        <option value="ECE">Civil</option>
                        <option value="CSE">CSE</option>
                        <option value="EEE">EEE</option>
                        <option value="ECE">ECE</option>
                        <option value="Mech">Mech</option>
                        <option value="MBA">MBA</option>
                    </select>
                </div>

                <div class=" mb-3">
                    <label for="name" class="form-label">Year  <span style="color:red">*</span>:</label>
                    <select class="form-select" name="year" aria-label="Default select example">
                        <option selected disabled value="">Select Year</option>
                        <option value="2016-2017">2016-2017</option>
                        <option value="2017-2018">2017-2018</option>
                        <option value="2018-2019">2018-2019</option>
                        <option value="2019-2020">2019-2020</option>
                        <option value="2020-2021">2020-2021</option>
                        <option value="2021-2022">2021-2022</option>
                        <option value="2022-2023">2022-2023</option>
                        <option value="2023-2024">2023-2024</option>
                        <option value="2024-2025">2024-2025</option>
                        <option value="2025-2026">2025-2026</option>
                        <option value="2026-2027">2026-2027</option>
                        <option value="2027-2028">2027-2028</option>
                        <option value="2028-2029">2028-2029</option>
                        <option value="2029-2030">2029-2030</option>
                        <option value="2030-2031">2030-2031</option>
                    </select>
                </div>

                <div class=" mb-3">
                    <label for="name" class="form-label">Company <span style="color:red">*</span>:</label>
                    <input required type="text" placeholder="Company" class="form-control" id="name" name="company">
                </div>

                <div class=" mb-3">
                    <label for="name" class="form-label">Position <span style="color:red">*</span>:</label>
                    <input required type="text" placeholder="Position" class="form-control" id="name" name="position">
                </div>

                <button class="btn mt-2 mb-2" style="text-align:center;width:100%;height:50px;background-color:#922521;color:white;font-weight:800">Create</button>
            </form>
        </div>
    </div>
  </div>
</div>

<script>
    const queryString = window.location.search;
    const urlParams = new URLSearchParams(queryString);
    if(urlParams.get('err')){
      document.write("<div id='err' style='position:fixed;bottom:30px; right:30px;background-color:#FF0000;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('err')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("err").style.display="none"
    }, 3000)
</script>

<script>
    if(urlParams.get('msg')){
      document.write("<div id='msg' style='position:fixed;bottom:30px; right:30px;background-color:#4CAF50;padding:10px;border-radius:10px;box-shadow:2px 2px 4px #aaa;color:white;font-weight:600'>"+urlParams.get('msg')+"</div>")
    }
    setTimeout(()=>{
        document.getElementById("msg").style.display="none"
    }, 3000)
</script>


<?php require("./layout/Footer.php") ?>