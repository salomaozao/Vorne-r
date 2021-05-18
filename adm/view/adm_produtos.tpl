<html lang="en">
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{$GET_SITE_HOME}/lib/paginas/produtos_admin/dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{$GET_SITE_HOME}/lib/paginas/produtos_admin/dist/assets/demo/chart-area-demo.js"></script>
        <script src="{$GET_SITE_HOME}/lib/paginas/produtos_admin/dist/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{$GET_SITE_HOME}/lib/paginas/produtos_admin/dist/assets/demo/datatables-demo.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    
<h4 class="text-center" style="color: darkblue">Gerenciar Produtos</h4>
<hr>
<br>  
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Produtos
        </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
                        <thead>
                            <tr class="">
                                <th>Imagem</th>
                                <th>Nome Produto</th>                                          
                                <th>Categoria</th>
                                <th>Preço</th>
                                <th>Estoque</th>
                                <th>Editar</th>
                                <th>Imagens Sec.</th>
                                
                            </tr>
                        </thead>
                                       
                        <tbody>
                             {foreach from=$PRO item=P} 
                            <tr>
                                <td><img src="{$P.pro_img_p}" alt="" height= "80" width="80" ></td>                           
                                <td>{$P.pro_nome}</td>
                                <td>{$P.cat_nome}</td>
                                <td>R$ {$P.pro_valor}</td> 
                                <td>{$P.pro_estoque}</td>
                                <td>
                                    <form name="proeditar" method="post" action="{$PAG_PRODUTO_EDITAR}">
                                    <input type="hidden" name="pro_id" id="pro_id" value="{$P.pro_id}">
                                    <input type="hidden" name="pro_nome" id="pro_nome" value="{$P.pro_nome}">
                                    <button class="btn btn-info"> <i class="glyphicon glyphicon-pencil">
                                    </i></button>
                                    </form>  
                                </td> 
                                <td>
                                    <form name="proimg" method="post" action="{$PAG_PRODUTO_IMG}">
                                    <input type="hidden" name="pro_id" id="pro_id" value="{$P.pro_id}">
                                    <input type="hidden" name="pro_nome" id="pro_nome" value="{$P.pro_nome}">
                                    <button class="btn btn-info"> <i class="glyphicon glyphicon-picture">
                                    </i></button>
                                    </form>  
                                </td> 
                            </tr>
                            {/foreach}
                        </tbody>
                    </table>
                </div>
            </div>
        <section id="pagincao" class="row">
            <center>
                {$PAGINAS}
            </center>
        </section>
    </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{$GET_SITE_HOME}/lib/paginas/index_admin/dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{$GET_SITE_HOME}/lib/paginas/index_admin/dist/assets/demo/chart-area-demo.js"></script>
        <script src="{$GET_SITE_HOME}/lib/paginas/index_admin/dist/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="{$GET_SITE_HOME}/lib/paginas/index_admin/dist/assets/demo/datatables-demo.js"></script>
