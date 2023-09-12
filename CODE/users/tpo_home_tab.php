<?php
    session_start();
    include '../dbcon.php';
    
?>
<div class="card-columns" style="width: 80%;margin-left: 10%">
    <div class="card bg-primary text-white text-center p-3" style="cursor: pointer" >
        <blockquote class="blockquote mb-0">
            <p>Total Registered Students</p>
            <?php
            $br=$_SESSION['dept'];
            $sql = "select count(*) from stud_info where sts=1";
            $result = $db->query($sql);
            $row = $result->fetch_assoc()
            ?>
            <p><?php echo $row['count(*)'] ?></p>
            <footer class="blockquote-footer text-white">
                <small>
                    <cite title="Source Title">Sanjivani Group of Institute</cite>
                </small>
            </footer>
        </blockquote>
    </div>
    <!-- ======================================   2   ===============================================-->  
    <div class="card bg-secondary text-white text-center p-3" style="cursor: pointer" >
        <blockquote class="blockquote mb-0">
           <p>Old Requirements</p>
            <?php
            $sql = "select count(*) from req where costs=1 and fullfill=1";
            $result = $db->query($sql);
            $row = $result->fetch_assoc()
            ?>
            <p><?php echo $row['count(*)'] ?></p>
            <footer class="blockquote-footer text-white">
                <small>
                    <cite title="Source Title">Sanjivani Group of Institute</cite>
                </small>
            </footer>
        </blockquote>
    </div>
    <!-- ======================================   3   ===============================================-->
    <div class="card" style="visibility: hidden">
        <!--blockquote class="blockquote mb-0">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
          <footer class="blockquote-footer text-white">
            <small>
              Someone famous in <cite title="Source Title">Source Title</cite>
            </small>
          </footer>
        </blockquote-->
    </div><br><br>
    <!-- ======================================   4   ===============================================-->
    <div class="card bg-danger text-white text-center p-3" style="cursor: pointer">
        <blockquote class="blockquote mb-0">
            <p>Requirement Approval Pending</p>
            <?php
            $sql = "select count(*) from req where costs=0";
            $result = $db->query($sql);
            $row = $result->fetch_assoc()
            ?>
            <p><?php echo $row['count(*)'] ?></p>
            <footer class="blockquote-footer text-white">
                <small>
                    <cite title="Source Title">Sanjivani Group of Institute</cite>
                </small>
            </footer>
        </blockquote>
    </div>
    <!-- ======================================   5   ===============================================-->
    <div class="card bg-info text-white text-center p-3" style="cursor: pointer">
        <blockquote class="blockquote mb-0">
            <p>Company's Registered</p>
             <?php
            $sql = "select count(*) from login_info where status=2";
            $result = $db->query($sql);
            $row = $result->fetch_assoc()
            ?>
            <p><?php echo $row['count(*)'] ?></p>
            <footer class="blockquote-footer text-white">
                <small>
                    <cite title="Source Title">Sanjivani Group of Institute</cite>
                </small>
            </footer>
        </blockquote>
    </div>
    <!-- ======================================   6   ===============================================-->
    <div class="card bg-primary text-white text-center p-3" style="visibility: hidden" style="cursor: pointer">
        <blockquote class="blockquote mb-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
            <footer class="blockquote-footer text-white">
                <small>
                    <cite title="Source Title">Sanjivani Group of Institute</cite>
                </small>
            </footer>
        </blockquote>
    </div>
    <!-- ======================================  7   ===============================================-->
    <div class="card bg-warning text-white text-center p-3" style="cursor: pointer">
        <blockquote class="blockquote mb-0">
            <p>Pending Requirements</p>
            <?php
            $sql = "select count(*) from req where fullfill=0 and costs=1";
            $result = $db->query($sql);
            $row = $result->fetch_assoc()
            ?>
            <p><?php echo $row['count(*)'] ?></p>
            <footer class="blockquote-footer text-white">
                <small>
                    <cite title="Source Title">Sanjivani Group of Institute</cite>
                </small>
            </footer>
        </blockquote>
    </div>
    <!-- ======================================   8   ===============================================-->
    <div class="card bg-success text-white text-center p-3" style="cursor: pointer">
        <blockquote class="blockquote mb-0">
            <p>Departmental Coordinator</p>
            <?php
            $sql = "select count(*) from login_info where status=3";
            $result = $db->query($sql);
            $row = $result->fetch_assoc()
            ?>
            <p><?php echo $row['count(*)'] ?></p>
            <footer class="blockquote-footer text-white">
                <small>
                    <cite title="Source Title">Sanjivani Group of Institute</cite>
                </small>
            </footer>
        </blockquote>
    </div>
    <!-- ======================================   9  ===============================================-->
    <div class="card bg-success text-white text-center p-3" style="visibility: hidden">
        <blockquote class="blockquote mb-0">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat.</p>
            <footer class="blockquote-footer text-white">
                <small>
                    <cite title="Source Title">Sanjivani Group of Institute</cite>
                </small>
            </footer>
        </blockquote>
    </div>
</div>
      