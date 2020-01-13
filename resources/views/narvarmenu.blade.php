      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- Messages: style can be found in dropdown.less-->
          @can('msg.menu')
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-success">4</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- start message -->
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Support Team
                        <small><i class="fa fa-clock-o"></i> 5 mins</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <!-- end message -->
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        AdminLTE Design Team
                        <small><i class="fa fa-clock-o"></i> 2 hours</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Developers
                        <small><i class="fa fa-clock-o"></i> Today</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user3-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Sales Department
                        <small><i class="fa fa-clock-o"></i> Yesterday</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <div class="pull-left">
                        <img src="dist/img/user4-128x128.jpg" class="img-circle" alt="User Image">
                      </div>
                      <h4>
                        Reviewers
                        <small><i class="fa fa-clock-o"></i> 2 days</small>
                      </h4>
                      <p>Why not buy a new awesome theme?</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">See All Messages</a></li>
            </ul>
          </li>
          @endcan

          <!-- Notifications: style can be found in dropdown.less -->
          @can('notificaciones.menu')

          <?php 
          $total=$sc+$sp+$ss+$us;
          ?>

          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-warning">{{$total}}</span>
            </a>
            <ul class="dropdown-menu">

              <li class="header">{{$total}} Notificaciones nuevas</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li>
                    <a href="#">
                      <i class="fa fa-warning text-red"></i> {{$sc}} Ordenes Criticas
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-thumbs-up text-yellow"></i> {{$sp}} Ordenes por Asignar
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-check-circle text-green"></i>{{$ss}} Ordenes Completadas
                    </a>
                  </li>                 
                  <li>
                    <a href="#">
                      <i class="fa fa-users text-aqua"></i> {{$us}} Técnicos
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="fa fa-user text-red"></i> 0 Bajas
                    </a>
                  </li>
                </ul>
              </li>
              <li class="footer"><a href="#">Ver mas</a></li>
            </ul>
          </li>
          @endcan

          <!-- Tasks: style can be found in dropdown.less -->
          @can('tareas.menu')
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">9</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 9 tasks</li>
              <li>
                <!-- inner menu: contains the actual data -->
                <ul class="menu">
                  <li><!-- Task item -->
                    <a href="#">
                      <h3>
                        Design some buttons
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                        <span class="sr-only">20% Complete</span>
                      </div>
                    </div>
                  </a>
                </li>
                <!-- end task item -->
                <li><!-- Task item -->
                  <a href="#">
                    <h3>
                      Create a nice theme
                      <small class="pull-right">40%</small>
                    </h3>
                    <div class="progress xs">
                      <div class="progress-bar progress-bar-green" style="width: 40%" role="progressbar"
                      aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                      <span class="sr-only">40% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <!-- end task item -->
              <li><!-- Task item -->
                <a href="#">
                  <h3>
                    Some task I need to do
                    <small class="pull-right">60%</small>
                  </h3>
                  <div class="progress xs">
                    <div class="progress-bar progress-bar-red" style="width: 60%" role="progressbar"
                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                    <span class="sr-only">60% Complete</span>
                  </div>
                </div>
              </a>
            </li>
            <!-- end task item -->
            <li><!-- Task item -->
              <a href="#">
                <h3>
                  Make beautiful transitions
                  <small class="pull-right">80%</small>
                </h3>
                <div class="progress xs">
                  <div class="progress-bar progress-bar-yellow" style="width: 80%" role="progressbar"
                  aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                  <span class="sr-only">80% Complete</span>
                </div>
              </div>
            </a>
          </li>
          <!-- end task item -->
        </ul>
      </li>
      <li class="footer">
        <a href="#">View all tasks</a>
      </li>
    </ul>
  </li>
  @endcan

  <!-- User Account: style can be found in dropdown.less -->
  <li class="dropdown user user-menu">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
      <img src="{{asset ('images/user/user1_160x160.png')}}" class="user-image" alt="User Image">
      <span class="hidden-xs" style="color:white;"> {{Auth::user()->name}}</span>
    </a>
    <ul class="dropdown-menu">
      <!-- User image -->
      <li class="user-header">
        <img src="{{asset ('images/user/user1_160x160.png')}}" class="img-circle" alt="User Image">

        
        <p>{{Auth::user()->name}} {{Auth::user()->apellidos}}<br><small> <strong>  </strong></small>
          <small>Desde./small>
        </p>
      </li>
      <!-- Menu Body -->
      <li class="user-body">
        <div class="row">
          <div class="col-xs-6 text-center">
            <a href="#">Mi actividad</a>
          </div>
          <div class="col-xs-6 text-center">
            <a href="#">Ayuda</a>
          </div>
        </div>
        <!-- /.row -->
      </li>
      <!-- Menu Footer-->
      <li class="user-footer">
        <div class="pull-left">
          <a href="#" class="btn btn-primary btn-flat" >Mi Perfil</a>
        </div>
        <div class="pull-right">

          <a href="{{url('/logout')}}"  class="btn btn-danger btn-flat">Cerrar Sesión </a>
        </div>
      </li>
    </ul>
  </li>

</ul>
</div>