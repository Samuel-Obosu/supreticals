<ul class="sidebar-menu">
        <?php
        $classG="";
        $classC="";
        $classP="";
        $classA="";
        $classB="";
              switch ($page) {
                 case 'mission':
                   $classG="active";
                   break;

                 case 'guide':
                   $classG="active";
                   break;  

                 case 'bestP':
                   $classG="active";
                   break;  

                 case 'lBoard':
                   $classG="active";
                   break;  
                 
                 case 'accInfo':
                   $classA="active";
                   break;
                
                 case 'compMess':
                   $classC="active";
                   break;
                 
                 case 'inbox':
                    $classC="active";
                    break;

                 case 'overview':
                   $classP="active";
                   break;

                 case 'tasks':
                   $classP="active";
                   break;
                 
                 case 'resources':
                   $classP="active";
                   break;
                 case 'clientProject':
                   $classB="active";
                   break;
                 case 'internalProject':
                   $classB="active";
                   break;  
                 case 'projOverview':
                   $classB="active";
                   break; 
                 case 'projModification':
                   $classB="active";
                   break;
                 case 'projCompletion':
                   $classB="active";
                   break;  
                 case 'projHistory':
                   $classB="active";
                   break;  
                 case 'viewProposal':
                    $classB="active";
                    break;  
                 default:
                   # code...
                   break;
               } ?>
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->

        <li class="<?php echo "$classA"; ?>"><a href="?page=accInfo"><i class="fa fa-link"></i> <span>Account Information</span></a></li>

        <li class="<?php echo "$classG"; ?>" class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>General Information</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=mission">Mission and Vision</a></li>
            <li><a href="?page=guide">Guidelines</a></li>
            <li><a href="?page=bestP">Best Practices</a></li>
            <li><a href="?page=lBoard">Leadership board</a></li>
          </ul>
        </li>
        
        <li class="<?php echo "$classC"; ?>" class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Messaging</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="?page=compMess">Compose Message</a></li>
            <li><a href="?page=inbox">Inbox</a></li>
          </ul>
        </li>

        <li class="treeview <?php echo "$classB"; ?>">
          <a href="#">
            <i class="fa fa-share"></i> <span>Project</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul style="display: block;" class="treeview-menu menu-open">
            <li class="active">
              <a href="#"><i class="fa fa-circle-o"></i> Create Project
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul style="display: block;" class="treeview-menu menu-open">
                <li><a href="?page=clientProject"><i class="fa fa-circle-o"></i>Client Project</a></li>
                <li><a href="?page=internalProject"><i class="fa fa-circle-o"></i>Internal Project</a></li>
              </ul>
            </li>
            <li class="active">
              <a href="#"><i class="fa fa-circle-o"></i>Existing Project
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul style="display: block;" class="treeview-menu menu-open">
                <li><a href="?page=projOverview"><i class="fa fa-circle-o"></i>Description</a></li>
                <li><a href="?page=projModification"><i class="fa fa-circle-o"></i>Members</a></li>
                <li><a href="?page=projCompletion"><i class="fa fa-circle-o"></i>Completion</a></li>
              </ul>
            </li>
            <li><a href="?page=viewProposal"><i class="fa fa-circle-o"></i> View Project Proposals</a></li>
            <li><a href="?page=projHistory"><i class="fa fa-circle-o"></i> Project History</a></li>
          </ul>
        </li>
      </ul>