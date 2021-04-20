<?php include('partials/navigationbar.php'); ?>
        <div class="main-content" style="background-color: #F0C929;">
            <div class="wrapper">
                <p><h2 style="padding: 10px;"><b>Manage Admins</b></h2></p>
                <p style="padding: 20px;"><a class="button-link" href="add-admin.php" ><button type="button" class="btn btn-primary">Add Admin</button></a></p>
                <table class="tbl.full">
                    <tr>
                        <th style="padding: 30px;">Sl. No</th>
                        <th style="padding: 30px;" >Full Name</th>
                        <th style="padding: 30px;">Username</th>
                        <th style="padding: 30px;"> Actions</th>
                    </tr>
                    
                    <tr>
                        <td style="padding: 30px;">1.</td>
                        <td style="padding: 30px;"> Kaviyashre R P</td>
                        <td style="padding: 30px;">kaviya_21</td>
                        <td style="padding: 30px;">
                        <a class="button-link" href="#" ><button type="button" class="btn btn-success">Update Admin</button></a>
                        <a class="button-link" href="#" ><button type="button" class="btn btn-danger">Delete Admin</button></a>
                    </td>
                    </tr>

                    <tr>
                        <td style="padding: 30px;">2.</td>
                        <td style="padding: 30px;">Everly S Precia</td>
                        <td style="padding: 30px;">everly-gif</td>
                        <td style="padding: 30px;">
                            <a class="button-link" href="#" ><button type="button" class="btn btn-success">Update Admin</button></a>
                            <a class="button-link" href="#" ><button type="button" class="btn btn-danger">Delete Admin</button></a>
                    </td>
                    </tr>
                    <tr>
                        <td style="padding: 30px;">3.</td>
                        <td style="padding: 30px;"> Vivek Singh Baghel</td>
                        <td style="padding: 30px;">vb6539</td>
                        <td style="padding: 30px;">
                            <a class="button-link" href="#" ><button type="button" class="btn btn-success">Update Admin</button></a>
                            <a class="button-link" href="#" ><button type="button" class="btn btn-danger">Delete Admin</button></a>
                    </td>
                    </tr>
                </table>
                
            </div>
        </div>
<?php include('partials/footer.php'); ?>