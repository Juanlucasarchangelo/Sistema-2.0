<div class="row clearfix">
    <div class="col-lg-3 col-md-6">
        <div class="card text-center">
            <div class="body">
                <p class="m-b-20"><i class="zmdi zmdi-balance zmdi-hc-3x col-amber"></i></p>
                <span>Clientes Ativos</span>
                <h3 class="m-b-10"><span class="number count-to" data-from="0" data-to="{{ $cliente }}"
                        data-speed="2000" data-fresh-interval="700">{{ $cliente }}</span></h3>
                <!-- Habilite caso queira mostrar um percentual com base no mes passado-->
                {{-- <small class="text-muted">27% lower growth</small> --}}
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card text-center">
            <div class="body">
                <p class="m-b-20"><i class="zmdi zmdi-assignment zmdi-hc-3x col-blue"></i></p>
                <span>Sites Ativos</span>
                <h3 class="m-b-10 number count-to" data-from="0" data-to="{{ $site }}" data-speed="2000"
                    data-fresh-interval="700">{{ $site }}</h3>
                {{-- <small class="text-muted">88% lower growth</small> --}}
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card text-center">
            <div class="body">
                <p class="m-b-20"><i class="zmdi zmdi-shopping-basket zmdi-hc-3x"></i></p>
                <span>Briefings Ativos</span>
                <h3 class="m-b-10 number count-to" data-from="0" data-to="" data-speed="2000"
                    data-fresh-interval="700"></h3>
                {{-- <small class="text-muted">38% lower growth</small> --}}
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6">
        <div class="card text-center">
            <div class="body">
                <p class="m-b-20"><i class="zmdi zmdi-account-box zmdi-hc-3x col-green"></i></p>
                <span>Clientes</span>
                <h3 class="m-b-10 number count-to" data-from="0" data-to="{{ $cliente }}" data-speed="2000"
                    data-fresh-interval="700">{{ $cliente }}</h3>
                {{-- <small class="text-muted">78% lower growth</small> --}}
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Listagem</strong> Sites <small>Informações / Credenciais</small>
                </h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                            data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Deletee</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body sales_report">
                <div class="table-responsive">
                    <table class="table m-b-0 table-hover">
                        <tbody>
                            <tr>
                                <td>
                                    <h6>Alpino 4.1</h6>
                                    <span>WrapTheme To By Again</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                        <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="sparkline text-left" data-type="line" data-width="8em"
                                        data-height="20px" data-line-Width="1.5" data-line-Color="#00c5dc"
                                        data-fill-Color="transparent">3,5,1,6,5,4,8,3</div>
                                </td>
                                <td>11,200</td>
                                <td>$83</td>
                                <td><strong>$22,520</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Compass 2.0</h6>
                                    <span>WrapTheme To By Again</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                        <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="sparkline text-left" data-type="line" data-width="8em"
                                        data-height="20px" data-line-Width="1.5" data-line-Color="#f4516c"
                                        data-fill-Color="transparent">4,6,3,2,5,6,5,4</div>
                                </td>
                                <td>11,200</td>
                                <td>$66</td>
                                <td><strong>$13,205</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Nexa 1.1</h6>
                                    <span>WrapTheme To By Again</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                        <li><img src="assets/images/xs/avatar6.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="sparkline text-left" data-type="line" data-width="8em"
                                        data-height="20px" data-line-Width="1.5" data-line-Color="#31db3d"
                                        data-fill-Color="transparent">7,3,2,1,5,4,6,8</div>
                                </td>
                                <td>12,080</td>
                                <td>$93</td>
                                <td><strong>$17,700</strong></td>
                            </tr>
                            <tr>
                                <td>
                                    <h6>Oreo 2.2</h6>
                                    <span>ThemeMakker To By Again</span>
                                </td>
                                <td>
                                    <ul class="list-unstyled team-info">
                                        <li><img src="assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                        <li><img src="assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                        <li><img src="assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                        <li><img src="assets/images/xs/avatar9.jpg" alt="Avatar"></li>
                                    </ul>
                                </td>
                                <td>
                                    <div class="sparkline text-left" data-type="line" data-width="8em"
                                        data-height="20px" data-line-Width="1.5" data-line-Color="#2d342e"
                                        data-fill-Color="transparent">3,1,2,5,4,6,2,3</div>
                                </td>
                                <td>18,200</td>
                                <td>$178</td>
                                <td><strong>$17,700</strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row clearfix">
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="header">
                <h2><strong>Campaign</strong> Performance</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Deletee</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body m-b-10">
                <div class="progress-container l-black">
                    <span class="progress-badge">Facebook Campaign</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="68" aria-valuemin="0"
                            aria-valuemax="100" style="width: 68%;">
                            <span class="progress-value">68%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body m-b-10">
                <div class="progress-container progress-info">
                    <span class="progress-badge">Google AdSense</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0"
                            aria-valuemax="100" style="width: 91%;">
                            <span class="progress-value">91%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body m-b-20">
                <div class="progress-container progress-warning">
                    <span class="progress-badge">LinkedIn Campaign</span>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="35" aria-valuemin="0"
                            aria-valuemax="100" style="width: 35%;">
                            <span class="progress-value">35%</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body align-center">
                <div class="row">
                    <div class="col-4">
                        <h4 class="margin-0">60%</h4>
                        <p>Monthly</p>
                    </div>
                    <div class="col-4">
                        <h4 class="margin-0">20%</h4>
                        <p>Weekly</p>
                    </div>
                    <div class="col-4">
                        <h4 class="margin-0">30%</h4>
                        <p>Daily</p>
                    </div>
                </div>
                <div class="sparkline-pie">6,1,3</div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="header">
                <h2><strong>Browser</strong> Usage</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                            data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a role="button" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div class="doughnut">
                    <canvas id="canvas" height="200"></canvas>
                    <canvas id="tooltip-canvas" width="150" height="100"></canvas>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover m-b-0 m-t-20">
                        <tbody>
                            <tr>
                                <td>
                                    <small>Page Views</small>
                                    <h5 class="m-b-0">32,211</h5>
                                </td>
                                <td>
                                    <div class="sparkline m-t-10" data-type="bar" data-width="97%"
                                        data-height="30px" data-bar-Width="3" data-bar-Spacing="7"
                                        data-bar-Color="#2b314a">2,3,5,6,9,8,7,8,7</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <small>Site Visitors</small>
                                    <h5 class="m-b-0">2,516</h5>
                                </td>
                                <td>
                                    <div class="sparkline m-t-10" data-type="bar" data-width="97%"
                                        data-height="30px" data-bar-Width="3" data-bar-Spacing="7"
                                        data-bar-Color="#2b314a">8,5,3,2,2,3,5,6,4</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <small>Total Clicks</small>
                                    <h5 class="m-b-0">4,536</h5>
                                </td>
                                <td>
                                    <div class="sparkline m-t-10" data-type="bar" data-width="97%"
                                        data-height="30px" data-bar-Width="3" data-bar-Spacing="7"
                                        data-bar-Color="#2b314a">6,5,4,6,5,1,8,4,2</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <small>Total Returns</small>
                                    <h5 class="m-b-0">516</h5>
                                </td>
                                <td>
                                    <div class="sparkline m-t-10" data-type="bar" data-width="97%"
                                        data-height="30px" data-bar-Width="3" data-bar-Spacing="7"
                                        data-bar-Color="#2b314a">8,2,3,5,6,4,5,7,5</div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Site</strong> Traffic</h2>
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle"
                            data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="zmdi zmdi-more"></i> </a>
                        <ul class="dropdown-menu slideUp">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a role="button" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body m-b-10">
                <h5 class="m-b-0 number count-to" data-from="0" data-to="2651" data-speed="2000"
                    data-fresh-interval="700">2651</h5>
                <p class="text-muted">Direct <span class="float-right">48%</span></p>
                <div class="progress m-b-20">
                    <div class="progress-bar l-dark" role="progressbar" aria-valuenow="48" aria-valuemin="0"
                        aria-valuemax="100" style="width: 48%;"></div>
                </div>

                <h5 class="m-b-0 number count-to" data-from="0" data-to="251" data-speed="2000"
                    data-fresh-interval="700">251</h5>
                <p class="text-muted">Referrals <span class="float-right">18%</span></p>
                <div class="progress m-b-20">
                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="18" aria-valuemin="0"
                        aria-valuemax="100" style="width: 18%;"></div>
                </div>

                <h5 class="m-b-0 number count-to" data-from="0" data-to="941" data-speed="2000"
                    data-fresh-interval="700">941</h5>
                <p class="text-muted">Search Engines <span class="float-right">67%</span></p>
                <div class="progress">
                    <div class="progress-bar l-green" role="progressbar" aria-valuenow="67" aria-valuemin="0"
                        aria-valuemax="100" style="width: 67%;"></div>
                </div>
            </div>
            <div class="body">
                <p class="m-b-10">Page View <small class="float-right">3,665</small></p>
                <div id="sparkline14"></div>
                <p class="m-b-10 m-t-30">Bounce Rate <small class="float-right">2,925</small></p>
                <div id="sparkline15"></div>
            </div>
        </div>
    </div>
</div>
