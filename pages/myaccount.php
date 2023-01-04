<div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div>QUẢN LÝ TÀI KHOẢN</div>
                    </div>
                </div>
            </div>        
            
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">DANH SÁCH TÀI KHOẢN
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover" id="tableList">
                            <thead>
                            <tr>
                                <th class="text-left pl-4">Tên tài khoản</th>
                                <th class="text-left ">Ngày sinh</th>
                                <th class="text-left ">Giới tính</th>
                                <th class="text-left ">Email</th> 
                               
                            </tr>
                            </thead>
                           
                            <tbody>
                            
                            <?php 
                            //   $adminId = $_SESSION['admin']['admin_id'];
                            //   $selExam = $conn->query("SELECT * FROM admin_acc WHERE admin_id=$adminId ");
                            //   if($selExam->rowCount() > 0)
                            //   {
                            //       while ($selExamRow = $selExam->fetch(PDO::FETCH_ASSOC)) { ?>
                                      <tr>
                                          <td class="pl-4" style="color:red;">
                                             <?php 
                                                echo strtoupper($selExmneeData['exmne_fullname']);
                                            ?>
                                          </td>
                                          <td class="" style="color:red;">
                                             <?php 
                                                echo strtoupper($selExmneeData['exmne_birthdate']);
                                            ?>
                                          </td>
                                        
                                          <td style="color:red;">
                                          <?php 
                                                echo strtoupper($selExmneeData['exmne_gender']);
                                         ?>
                                          </td>
                                          <td style="color:red;">
                                          <?php 
                                                echo strtoupper($selExmneeData['exmne_email']);
                                         ?>
                                          </td>
                                        
                                         
                                         
                                         

                                      </tr>

                              -
                                
                            
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
      
        
</div>
         
