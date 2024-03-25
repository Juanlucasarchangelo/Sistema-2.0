<!-- Masked Input -->
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card">
            <div class="header">
                <ul class="header-dropdown">
                    <li class="dropdown"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                            role="button" aria-haspopup="true" aria-expanded="false"> <i class="zmdi zmdi-more"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                            <li><a href="javascript:void(0);" class="boxs-close">Delete</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <form wire:submit.prevent="salvar">
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-6 col-sm-12 m-b-20">
                            <b>Domínio</b>
                            <div class="form-group">
                                <input type="text" class="form-control" wire:model.defer="dominio" placeholder="exemplo.com.br" />
                                <div>@error('dominio') {{ $message }} @enderror</div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 m-b-20">
                            <b>Cliente</b>
                            <select class="form-control z-index show-tick" wire:model.defer="id_cliente"
                                data-live-search="true">
                                <option selected>Selecione um cliente</option>
                                <option value="1">1</option>
                            </select>
                            <div>@error('id_cliente') {{ $message }} @enderror</div>
                        </div>
                    </div>
                    <div class="demo-masked-input">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-6 col-sm-12"> <b>E-mail Pessoal</b>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-email"></i></span>
                                    <input type="text" class="form-control email" wire:model.defer="email_pessoal" placeholder="exemplo@exemplo.com">
                                    <div>@error('email_pessoal') {{ $message }} @enderror</div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <b>Data Site no Ar</b>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="zmdi zmdi-calendar"></i> </span>
                                    <input type="date" class="form-control date" wire:model.defer="data_inicio_site">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-between px-3">
                        <button class="btn btn-outline-secondary rounded-pill">Voltar</button>
                        <button type="submit" class="btn btn-warning rounded-pill">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- #END# Masked Input -->
