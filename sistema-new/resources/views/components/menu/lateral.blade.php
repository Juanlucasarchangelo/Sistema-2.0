<aside id="minileftbar" class="minileftbar">
    <ul class="menu_list">
        <li>
            <a href="javascript:void(0);" class="bars"></a>
            <a class="navbar-brand" href={{ route('painel.dashboard') }}><img src={{ asset('assets/images/logo.svg') }} alt="Alpino"></a>
        </li>
        <li><a href="javascript:void(0);" class="btn_overlay hidden-sm-down"><i class="zmdi zmdi-search"></i></a>
        </li>
        <li><a href="javascript:void(0);" class="menu-sm"><i class="zmdi zmdi-swap"></i></a></li>
        <li class="menuapp-btn"><a href="javascript:void(0);"><i class="zmdi zmdi-apps"></i></a></li>
        <li class="notifications badgebit">
            <a href="javascript:void(0);">
                <i class="zmdi zmdi-notifications"></i>
                <div class="notify">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                </div>
            </a>
        </li>
        <li class="task badgebit">
            <a href="javascript:void(0);">
                <i class="zmdi zmdi-flag"></i>
                <div class="notify">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                </div>
            </a>
        </li>
        <li><a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
        <li><a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
        <li><a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>
        <li><a href="chat.html"><i class="zmdi zmdi-comments"></i></a></li>
        <li><a href="javascript:void(0);" class="fullscreen" data-provide="fullscreen"><i
                    class="zmdi zmdi-fullscreen"></i></a></li>
        <li class="power">
            <a href="javascript:void(0);" class="js-right-sidebar"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
            <a href="sign-in.html" class="mega-menu"><i class="zmdi zmdi-power"></i></a>
        </li>
    </ul>
</aside>

<aside class="right_menu">
    <div class="menu-app">
        <div class="slim_scroll">
            <div class="card">
                <div class="header">
                    <h2><strong>App</strong> Menu</h2>
                </div>
                <div class="body">
                    <ul class="list-unstyled menu">
                        <li><a href="events.html"><i class="zmdi zmdi-calendar-note"></i><span>Calendar</span></a>
                        </li>
                        <li><a href="file-dashboard.html"><i class="zmdi zmdi-file-text"></i><span>File
                                    Manager</span></a></li>
                        <li><a href="blog-dashboard.html"><i class="zmdi zmdi-blogger"></i><span>Blog</span></a>
                        </li>
                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-arrows"></i><span>Notes</span></a></li>
                        <li><a href="javascript:void(0)"><i class="zmdi zmdi-view-column"></i><span>Taskboard</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="notif-menu">
        <div class="slim_scroll">
            <div class="card">
                <div class="header">
                    <h2><strong>Messages</strong></h2>
                </div>
                <div class="body">
                    <ul class="messages list-unstyled">
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="assets/images/xs/avatar1.jpg"
                                        alt="">
                                    <div class="media-body">
                                        <span class="name">Alexander <small class="time">35min ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="assets/images/xs/avatar2.jpg"
                                        alt="">
                                    <div class="media-body">
                                        <span class="name">Grayson <small class="time">1hr ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);">
                                <div class="media">
                                    <img class="media-object rounded-circle" src="assets/images/xs/avatar3.jpg"
                                        alt="">
                                    <div class="media-body">
                                        <span class="name">Sophia <small class="time">31min ago</small></span>
                                        <p class="message">New tasks needs to be done</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="card">
                <div class="header">
                    <h2><strong>Notifications</strong></h2>
                </div>
                <div class="body">
                    <ul class="notification list-unstyled">
                        <li>
                            <i class="zmdi zmdi-balance-wallet text-success"></i>
                            <strong>+$30 New sale</strong>
                            <p><a href="javascript:void(0)">Admin Template</a></p>
                            <small class="text-muted">7 min ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-edit text-info"></i>
                            <strong>You Edited file</strong>
                            <p><a href="javascript:void(0)">Docs.doc</a></p>
                            <small class="text-muted">15 min ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-delete text-danger"></i>
                            <strong>Project removed</strong>
                            <p><a href="javascript:void(0)">AdminX BS4</a></p>
                            <small class="text-muted">1 hours ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-account text-success"></i>
                            <strong>New user</strong>
                            <p><a href="javascript:void(0)">UI Designer</a></p>
                            <small class="text-muted">1 hours ago</small>
                        </li>
                        <li>
                            <i class="zmdi zmdi-flag text-warning"></i>
                            <strong>Alpino v1.0.0 is available</strong>
                            <p><a href="javascript:void(0)">Update now</a></p>
                            <small class="text-muted">5 hours ago</small>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="task-menu">
        <div class="slim_scroll">
            <div class="card tasks">
                <div class="header">
                    <h2><strong>Project</strong> Status</h2>
                </div>
                <div class="body m-b-10">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 1 <span class="float-right">29%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-turquoise" role="progressbar" aria-valuenow="29"
                                aria-valuemin="0" aria-valuemax="100" style="width: 29%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
                <div class="body m-b-10">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 2 <span class="float-right">78%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-slategray" role="progressbar" aria-valuenow="78"
                                aria-valuemin="0" aria-valuemax="100" style="width: 78%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar7.jpg" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
                <div class="body">
                    <a href="javascript:void(0);">
                        <span class="text-muted">Project Name 4 <span class="float-right">68%</span></span>
                        <div class="progress">
                            <div class="progress-bar l-coral" role="progressbar" aria-valuenow="68"
                                aria-valuemin="0" aria-valuemax="100" style="width: 68%;"></div>
                        </div>
                        <ul class="list-unstyled team-info">
                            <li class="m-r-15"><small class="text-muted">Team</small></li>
                            <li><img src="assets/images/xs/avatar8.jpg" alt="Avatar"></li>
                            <li><img src="assets/images/xs/avatar9.jpg" alt="Avatar"></li>
                        </ul>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="rightsidebar" class="right-sidebar">
        <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#setting">Setting</a></li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity">Activity</a></li>
        </ul>
        <div class="tab-content slim_scroll">
            <div class="tab-pane slideRight active" id="setting">
                <div class="card">
                    <div class="header">
                        <h2><strong>Colors</strong> Skins</h2>
                    </div>
                    <div class="body">
                        <ul class="choose-skin list-unstyled m-b-0">
                            <li data-theme="black" class="active">
                                <div class="black"></div>
                            </li>
                            <li data-theme="purple">
                                <div class="purple"></div>
                            </li>
                            <li data-theme="blue">
                                <div class="blue"></div>
                            </li>
                            <li data-theme="cyan">
                                <div class="cyan"></div>
                            </li>
                            <li data-theme="green">
                                <div class="green"></div>
                            </li>
                            <li data-theme="orange">
                                <div class="orange"></div>
                            </li>
                            <li data-theme="blush">
                                <div class="blush"></div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>General</strong> Settings</h2>
                    </div>
                    <div class="body">
                        <ul class="setting-list list-unstyled m-b-0">
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">Report Panel Usage</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox2" type="checkbox" checked="">
                                    <label for="checkbox2">Email Redirect</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">Notifications</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">Auto Updates</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox">
                                    <input id="checkbox5" type="checkbox" checked="">
                                    <label for="checkbox5">Offline</label>
                                </div>
                            </li>
                            <li>
                                <div class="checkbox m-b-0">
                                    <input id="checkbox6" type="checkbox">
                                    <label for="checkbox6">Location Permission</label>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Left</strong> Menu</h2>
                    </div>
                    <div class="body theme-light-dark">
                        <button class="t-dark btn btn-primary btn-round btn-block">Dark</button>
                    </div>
                </div>
            </div>
            <div class="tab-pane slideLeft" id="activity">
                <div class="card activities">
                    <div class="header">
                        <h2><strong>Recent</strong> Activity Feed</h2>
                    </div>
                    <div class="body">
                        <div class="streamline b-accent">
                            <div class="sl-item">
                                <div class="sl-content">
                                    <div class="text-muted">Just now</div>
                                    <p>Finished task <a href="" class="text-info">#features 4</a>.</p>
                                </div>
                            </div>
                            <div class="sl-item b-info">
                                <div class="sl-content">
                                    <div class="text-muted">10:30</div>
                                    <p><a href="">@Jessi</a> retwit your post</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">12:30</div>
                                    <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the
                                        detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">1 days ago</div>
                                    <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">2 days ago</div>
                                    <p>Call to <a href="" class="text-info">Jacob</a> and discuss the
                                        detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">3 days ago</div>
                                    <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the
                                        detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">4 Week ago</div>
                                    <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">5 days ago</div>
                                    <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">5 Week ago</div>
                                    <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the
                                        detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-primary">
                                <div class="sl-content">
                                    <div class="text-muted">3 Week ago</div>
                                    <p>Call to customer <a href="" class="text-info">Jacob</a> and discuss the
                                        detail.</p>
                                </div>
                            </div>
                            <div class="sl-item b-warning">
                                <div class="sl-content">
                                    <div class="text-muted">1 Month ago</div>
                                    <p><a href="" class="text-info">Jessi</a> commented your post.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="leftsidebar" class="sidebar">
        <div class="menu">
            <ul class="list">
                <li>
                    <div class="user-info m-b-20">
                        <div class="image">
                            <a href="profile.html"><img src={{ asset('assets/images/profile_av.jpg') }} alt="User"></a>
                        </div>
                        <div class="detail">
                            <h6>Michael</h6>
                            <p class="m-b-0">info@example.com</p>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i
                                    class="zmdi zmdi-facebook-box"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i
                                    class="zmdi zmdi-linkedin-box"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i
                                    class="zmdi zmdi-instagram"></i></a>
                            <a href="javascript:void(0);" title="" class=" waves-effect waves-block"><i
                                    class="zmdi zmdi-twitter-box"></i></a>
                        </div>
                    </div>
                </li>
                <li class="active open"> <a href="{{ route('painel.dashboard') }}"><i
                            class="zmdi zmdi-home"></i><span>Dashboard</span></a></li>
                <li><a href="javascript:void(0);" class="menu-toggle"><i
                            class="zmdi zmdi-apps"></i><span>Clientes</span>
                        {{-- <span class="badge badge-success float-right">7</span> --}}
                    </a>
                    <ul class="ml-menu">
                        <li><a href="mail-inbox.html">Criar</a></li>
                        <li><a href="mail-inbox.html">Listar</a></li>
                        <li><a href="chat.html">Briefings</a></li>
                    </ul>
                </li>
                <li><a href="javascript:void(0);" class="menu-toggle">
                    <i class="material-icons">web</i><span>Sites</span>
                    {{-- <span class="badge badge-default float-right">15</span> --}}
                    </a>
                    <ul class="ml-menu">
                        <li><a href={{ route('site.criar') }}>Criar</a></li>
                        <li><a href={{ route('site.listar') }}>Listar</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</aside>
