<div class="container-fluid">
                       <center> <h1 class="mt-4">Gerenciamento</h1></center>
                        <br>
                        <br>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Visualizações</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Visualizar</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Renda Mensal</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Visualizar</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Estoque</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Visualizar</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Cadastros</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">Visualizar</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        Vendas Mensais
                                    </div>
                                    <div class="card-body"><canvas id="myAreaChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                         Visualizações mensais
                                    </div>
                                    <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                                </div>
                            </div>
                        </div>
    
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                                Pedidos
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered"  width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Nº Pedido</th>                                                                               <th>Valor do pedido</th>
                                                <th>Status de pagamento</th>
                                                <th>Data</th>
                                                <th>Horário</th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                       
                                        <tbody>
                                            {foreach from=$PEDIDOS item=P}
                                            <tr>
                                                <td>{$P.cli_nome} {$P.cli_sobrenome}</td>
                                                <td>{$P.ped_ref}</td>          
                                                <td>R$ {$P.ped_valor}</td>
                                                <td>{$P.ped_pag_status}</td>
                                                <td>{$P.ped_data}</td>
                                                <td>{$P.ped_hora}</td>
                                                <td><form name="itens" method="post" action="{$PAG_ITENS}">
                                                <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                                                <button class="btn btn-info"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button>
                                                </form> </td>
                                                
                                            </tr>
                                            {/foreach}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>