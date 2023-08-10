<div class="wrapper">
    <nav id="sidebar" class="sidebar js-sidebar">
        <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="index.php">
                <span class="align-middle">ADMIN </span>
                <span class="align-middle">USER </span>
            </a>

            <ul class="sidebar-nav">
                <li class="sidebar-header">
                    หน้า
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="index.php">
                        <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">หน้าหลัก</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a class="sidebar-link" href="addproject_page.php">
                        <i class="align-middle" data-feather="layers"></i> <span class="align-middle">เพิ่มหัวข้องาน</span>
                    </a>
                </li>
              
                <li class="sidebar-item">
                    <a data-bs-target="#project_list" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                        <i class="align-middle" data-feather="list"></i> 
                         <span class="align-middle">
                         รายการหัวข้องาน
                        </span>
                    </a>
                </li>
                 
                    <ul id="project_list" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="project_list.php">
                            &nbsp;&nbsp;&nbsp;--> หัวข้องานที่สร้าง 
                            </a>
                        </li>
                    </ul>
                  
                    <ul id="project_list" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="project_list_user.php">
                            &nbsp;&nbsp;&nbsp;--> หัวข้องานที่ถูกมอบหมาย
                            </a>
                        </li>
                    </ul>
                </li>
            
        <li class="sidebar-item">
            <a data-bs-target="#report" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                <i class="align-middle" data-feather="clipboard"></i> 
                    <span class="align-middle">
                    รายงาน
                </span>
            </a>

            <ul id="report" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="report.php">
                    &nbsp;&nbsp;&nbsp;--> รายงานหัวข้องาน
                    </a>
                </li>
            </ul>
        
            <ul id="report" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="">
                <li class="sidebar-item">
                    <a class="sidebar-link" href="reportuser.php">
                    &nbsp;&nbsp;&nbsp;--> รายงานสมาชิก
                    </a>
                </li>
            </ul>
        
        </li>
             
                <li class="sidebar-item">
                    <a class="sidebar-link" href="checktask_list.php">
          <i class="align-middle" data-feather="check-square"></i> <span class="align-middle">ตรวจงาน</span>
        </a>
        
                </li>

              
                <li class="sidebar-header">
                    ADMIN
                </li>
              
                <li class="sidebar-header">
                    USER
                </li> 
              
                
               
                    <li class="sidebar-item">
                        <a class="sidebar-link"  href="jobtype_list.php">
            <i class="align-middle" data-feather="layers"></i> <span class="align-middle">ประเภทงาน</span>
                        </a>
                
                    <li class="sidebar-item">
                        <a class="sidebar-link"  href="departmant_list.php">
            <i class="align-middle" data-feather="layers"></i> <span class="align-middle">รายการฝ่าย</span>
                        </a>

                    <li class="sidebar-item">
                        <a class="sidebar-link"  href="position_list.php">
            <i class="align-middle" data-feather="layers"></i> <span class="align-middle">รายการตำเเหน่ง</span>
                        </a>
               

                    

                <li class="sidebar-item">
                    <a data-bs-target="#user" data-bs-toggle="collapse" class="sidebar-link collapsed" aria-expanded="false">
                        <i class="align-middle" data-feather="users"></i> 
                         <span class="align-middle">
                            สมาชิก
                        </span>
                    </a>
                
                    <ul id="user" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar" style="">
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="user_list.php">
                            &nbsp;&nbsp;&nbsp;--> รายการสมาชิก
                            </a>
                        </li>
                    </ul>
                </li>
                
            
          
            
            </ul>

        </div>
    </nav>

    <div class="main">
        <nav class="navbar navbar-expand navbar-light navbar-bg">
            <a class="sidebar-toggle js-sidebar-toggle">
      <i class="hamburger align-self-center"></i>
    </a>

            <div class="navbar-collapse collapse">
                <ul class="navbar-nav navbar-align">
                
                
                        <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                        
                          </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item viewuserdata"  data-userid="" data-feather="user"></i> โปรไฟล์</a>
                            <a class="dropdown-item" href="edituser.php?user_id="><i class="align-middle me-1" data-feather="edit"></i> เเก้ไขโปรไฟล์</a>
                            <a class="dropdown-item" href="editnewpassuser.php"><i class="align-middle me-1" data-feather="key"></i> เปลียนรหัสผ่าน</a>

                            <!-- <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                            <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a> -->
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item logoutuser" >ออกจากระบบ</a>
                        </div>
                     
                </ul>
            </div>
        </nav>