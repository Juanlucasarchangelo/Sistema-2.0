<div class="row clearfix">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2><strong>Listagem</strong> Sites <small>Informações / Credenciais</small>
                </h2>
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
            <div class="body sales_report">
                <div class="table-responsive">
                    <table class="table m-b-0 table-hover">
                        <tbody>
                            @foreach ($all_sites as $all_site)
                                <tr>
                                    <td>
                                        <h6>{{ $all_site->id_cliente }}</h6>
                                        <span>{{ $all_site->data_inicio_site }}</span>
                                    </td>
                                    <td>
                                        <a href="http://{{ $all_site->dominio }}" target="_blank"
                                            rel="noopener noreferrer"> {{ $all_site->dominio }} </a>
                                    </td>
                                    <td class="text-center">
                                        <a href="#modalExcluir" data-toggle="modal" data-target="#modalExcluir">
                                            <button class="btn btn-primary btn-icon  btn-icon-mini btn-round">
                                                <i class="zmdi zmdi-close"></i>
                                            </button>
                                        </a>
                                        <a href="#modalEditar" data-toggle="modal" data-target="#modalEditar">
                                            <button class="btn btn-primary btn-icon  btn-icon-mini btn-round">
                                                <i class="zmdi zmdi-edit"></i>
                                            </button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal Excluir - Start -->
<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Modal title</h4>
            </div>
            <div class="modal-body"> dignissim nibh faucibus ullamcorper.
                Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc. </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger btn-simple btn-round waves-effect"
                    data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Excluir - End -->

<!-- Modal Editar - Start -->
<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="largeModalLabel">Editar Informações</h4>
            </div>
            <div class="modal-body"> dignissim nibh faucibus ullamcorper.
                Fusce pulvinar libero vel ligula iaculis ullamcorper. Integer dapibus, mi ac tempor varius, purus
                nibh mattis erat, vitae porta nunc nisi non tellus. Vivamus mollis ante non massa egestas fringilla.
                Vestibulum egestas consectetur nunc at ultricies. Morbi quis consectetur nunc. </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success btn-round waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-danger btn-simple btn-round waves-effect"
                    data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Editar - End -->
