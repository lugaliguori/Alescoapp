
       <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle">
                                <span class="block m-t-xs font-bold" style="color: white" >Oncologico Luis Razetti</span>
                            </a>
                    </li>
                    <li class="active">
                        <a href="index-2.html"><i class="fa fa-calendar"></i> <span class="nav-label">Citas</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="/admin/{{$id}}">Ver citas</a></li>
                            <li><a href="/admin/citas_add/{{$id}}">Programar citas</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="/pacientes/{{$id}}"><i class="fa fa-user"></i> <span class="nav-label">Pacientes</span></a>
                    </li>
                    <li>
                        <a href="/doctores/{{$id}}"><i class="fa fa-user-md"></i> <span class="nav-label">Doctores</span></a>
                    </li>
                    <li>
                        <a href="/especialidades/{{$id}}"><i class="fa fa-user-md"></i> <span class="nav-label">Especialidades</span></a>
                    </li>
                </ul>

            </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
               <!-- <form role="search" class="navbar-form-custom" action="http://webapplayers.com/inspinia_admin-v2.8/search_results.html">
                    <div class="form-group">
                        <input type="text" placeholder="Busca algo" class="form-control" name="top-search" id="top-search">
                    </div>
                </form> -->
            </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li style="padding: 20px">
                        <span class="m-r-sm text-muted welcome-message">Bienvenido al modulo de citas</span>
                    </li>
                    <li>
                        <a href="{{url('/api/logout')}}">
                            <i class="fa fa-sign-out"></i> Cerrar Sesion
                        </a>
                    </li>
                </ul>

            </nav>
        </div>


