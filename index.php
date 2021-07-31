<?php
include("includes/header.php");
?>

<div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <?php
                    if (isset($_SESSION['flag']) && isset($_SESSION['status'])) 
                    {
                        $flag = $_SESSION['flag']; 
                        if ($flag == 1)
                            {
                                echo "<h5 class = 'alert alert-success alert-outline text-center'>".$_SESSION['status']."</h5>";
                                unset($_SESSION['status']);
                                unset($_SESSION['flag']);
                            }
                        else
                            {
                                echo "<h5 class = 'alert alert-danger alert-outline text-center'>".$_SESSION['status']."</h5>";
                                unset($_SESSION['status']);
                                unset($_SESSION['flag']);
                            }   
                    }        
                    ?>
                <div class="card bg-dark mt-3">
                    <div class="card-header ">
                        <h4 class="text-light"> Students List
                            <a href="add-student.php" class="btn btn-primary float-end">Add Students</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive table-dark table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Sl.No</th>
                                        <th>ID</th>
                                        <th>First Name</th> 
                                        <th>Last Name</th>
                                        <th>Phone</th>
                                        <th>View</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        include('dbcon.php');
                                        $query = "SELECT * FROM student";
                                        $query_run = mysqli_query($con,$query);
                                        if($query_run && $qu) 
                                        {
                                            $i = 1;
                                            while($row = mysqli_fetch_array($query_run))
                                            { ?>
                                                    <tr>
                                                        <td><?=$i++;?></td>
                                                        <td><?=$row[0]?></td>
                                                        <td><?=$row[1]?></td>
                                                        <td><?=$row[2]?></td>
                                                        <td><?=$row[3]?></td>
                                                        <td>
                                                            <a href="student-view.php?id=<?=$key?>" class="btn btn-success btn-sm">View</a>
                                                        </td>
                                                        <td>
                                                            <a href="edit-contact.php?id=<?=$key?>" class="btn btn-primary btn-sm">Edit</a>
                                                        </td>
                                                        <td>
                                                            <!-- <a href="delete-contact.php?id" class="btn btn-danger btn-sm">Delete</a> -->
                                                            <form action="code.php" method="post">
                                                                <button type="submit" class="btn btn-danger btn-sm" name="delete_btn" value=<?=$key?>>Delete</button>
                                                            </form>
                                                        </td>
                                                    </tr> 
                                                    <?php
                                          }
                                        }  
                                        else {
                                        ?>
                                                <tr>
                                                    <td colspan="7">No Record Found</td>
                                                </tr>
                                            <?php 
                                        } ?>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include("includes/footer.php");
?>