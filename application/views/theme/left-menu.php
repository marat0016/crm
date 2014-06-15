
<!-- .aside -->
<aside class="bg-light lt b-r b-light aside-md hidden-print" id="nav">
    <section class="vbox">
        <section class="w-f scrollable">
            <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="10px" data-color="#333333">
                <div class="clearfix wrapper dk nav-user hidden-xs">
                    <div class="dropdown"> 
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                            <span class="thumb avatar pull-left m-r"> 
                                <img src="<?=get_photo($this->account->getInfo()->photo);?>"> 
                                <i class="on md b-light"></i> 
                            </span> 
                            <span class="hidden-nav-xs clear"> 
                                <span class="block m-t-xs"> 
                                    <strong class="font-bold text-lt"><?=$this->account->getInfo()->name;?></strong>
                                </span> 
                                <span class="text-muted text-xs block"><?=get_position($this->account->getInfo()->class);?></span> 
                            </span> 
                        </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                          <span class="arrow top hidden-nav-xs"></span>
                          <li> <a href="#">Settings</a> </li>
                          <li> <a href="profile.html">Profile</a> </li>
                          <li> <a href="#"> <span class="badge bg-danger pull-right">3</span> Notifications </a> </li>
                          <li> <a href="docs.html">Help</a> </li>
                          <li class="divider"></li>
                          <li> <a href="modal.lockme.html" data-toggle="ajaxModal" >Logout</a> </li>
                        </ul>
                    </div>
                </div>
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                    <div class="text-muted text-sm hidden-nav-xs padder m-t-sm m-b-sm"><?=lang("menu");?></div>
                    <ul class="nav nav-main" data-ride="collapse">
                        <li class="active"> <a href="index.html" class="auto"> <i class="fa fa-home"> </i> <span class="font-bold"><?=lang("home");?></span> </a> </li>
                        <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <b class="badge bg-danger pull-right">4</b> <i class="fa fa-coffee"> </i> <span class="font-bold"><?=lang("deals");?></span> </a>
                            <ul class="nav dk">
                                <li > <a href="layout-color.html" class="auto"> <i class="i i-dot"></i> <span>Color option</span> </a> </li>
                                <li > <a href="layout-hbox.html" class="auto"> <i class="i i-dot"></i> <span>Hbox layout</span> </a> </li>
                            </ul>
                        </li>
                        <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="fa fa-user"> </i> <span class="font-bold"><?=lang("contacts");?></span> </a>
                            <ul class="nav dk">
                              <li > <a href="buttons.html" class="auto"> <i class="i i-dot"></i> <span>Buttons</span> </a> </li>
                              <li > <a href="icons.html" class="auto"> <b class="badge bg-info pull-right">369</b> <i class="i i-dot"></i> <span>Icons</span> </a> </li>
                              <li > <a href="grid.html" class="auto"> <i class="i i-dot"></i> <span>Grid</span> </a> </li>
                              <li > <a href="widgets.html" class="auto"> <b class="badge bg-dark pull-right">8</b> <i class="i i-dot"></i> <span>Widgets</span> </a> </li>
                              <li > <a href="components.html" class="auto"> <i class="i i-dot"></i> <span>Components</span> </a> </li>
                              <li > <a href="list.html" class="auto"> <i class="i i-dot"></i> <span>List group</span> </a> </li>
                              <li > <a href="#table" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-dot"></i> <span>Table</span> </a>
                                <ul class="nav dker">
                                  <li > <a href="table-static.html"> <i class="i i-dot"></i> <span>Table static</span> </a> </li>
                                  <li > <a href="table-datatable.html"> <i class="i i-dot"></i> <span>Datatable</span> </a> </li>
                                </ul>
                              </li>
                              <li > <a href="#form" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="i i-dot"></i> <span>Form</span> </a>
                                <ul class="nav dker">
                                  <li > <a href="form-elements.html"> <i class="i i-dot"></i> <span>Form elements</span> </a> </li>
                                  <li > <a href="form-validation.html"> <i class="i i-dot"></i> <span>Form validation</span> </a> </li>
                                  <li > <a href="form-wizard.html"> <i class="i i-dot"></i> <span>Form wizard</span> </a> </li>
                                </ul>
                              </li>
                              <li > <a href="chart.html" class="auto"> <i class="i i-dot"></i> <span>Chart</span> </a> </li>
                              <li > <a href="portlet.html" class="auto"> <i class="i i-dot"></i> <span>Portlet</span> </a> </li>
                              <li > <a href="timeline.html" class="auto"> <i class="i i-dot"></i> <span>Timeline</span> </a> </li>
                            </ul>
                        </li>
                        <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="fa fa-tasks"> </i> <span class="font-bold"><?=lang("tasks");?></span> </a>
                            <ul class="nav dk">
                                <li > <a href="profile.html" class="auto"> <i class="i i-dot"></i> <span>Profile</span> </a> </li>
                                <li > <a href="invoice.html" class="auto"> <i class="i i-dot"></i> <span>Invoice</span> </a> </li>
                                <li > <a href="intro.html" class="auto"> <i class="i i-dot"></i> <span>Intro</span> </a> </li>
                                <li > <a href="master.html" class="auto"> <i class="i i-dot"></i> <span>Master</span> </a> </li>
                                <li > <a href="gmap.html" class="auto"> <i class="i i-dot"></i> <span>Google Map</span> </a> </li>
                                <li > <a href="jvectormap.html" class="auto"> <i class="i i-dot"></i> <span>Vector Map</span> </a> </li>
                                <li > <a href="signin.html" class="auto"> <i class="i i-dot"></i> <span>Signin</span> </a> </li>
                                <li > <a href="signup.html" class="auto"> <i class="i i-dot"></i> <span>Signup</span> </a> </li>
                                <li > <a href="404.html" class="auto"> <i class="i i-dot"></i> <span>404</span> </a> </li>
                            </ul>
                        </li>
                        <li > <a href="#" class="auto"> <span class="pull-right text-muted"> <i class="i i-circle-sm-o text"></i> <i class="i i-circle-sm text-active"></i> </span> <i class="fa fa-bar-chart-o"> </i> <span class="font-bold"><?=lang("analytics");?></span> </a>
                            <ul class="nav dk">
                              <li > <a href="mail.html" class="auto"> <b class="badge bg-success lt pull-right">2</b> <i class="i i-dot"></i> <span>Mailbox</span> </a> </li>
                              <li > <a href="fullcalendar.html" class="auto"> <i class="i i-dot"></i> <span>Calendar</span> </a> </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- / nav -->
            </div>
        </section>
        <footer class="footer hidden-xs no-padder text-center-nav-xs"> <a href="modal.lockme.html" data-toggle="ajaxModal" class="btn btn-icon icon-muted btn-inactive pull-right m-l-xs m-r-xs hidden-nav-xs"> <i class="i i-logout"></i> </a> <a href="#nav" data-toggle="class:nav-xs" class="btn btn-icon icon-muted btn-inactive m-l-xs m-r-xs"> <i class="fa fa-chevron-left text"></i> <i class="fa fa-chevron-right text-active"></i> </a> </footer>
    </section>
</aside>
