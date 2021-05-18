<h4 class="text-center"> Gerenciar Pedidos </h4>
<hr>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table mr-1"></i>
        Pedidos
    </div>
    <div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered"  width="100%" cellspacing="0">
        <hr>

        <thead>
            <tr>
                <th>Nome</th>
                <th>Nº Pedido</th>                                                                               
                <th>Valor do pedido</th>
                <th>Status de pagamento</th>
                <th>Data</th>
                <th>Horário</th>
                <th></th> 
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
                    </form> 
                </td>
                <td>
                    <form name="deletar" method="post" action="">
                        <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
                        <button class="btn btn-danger" name="ped_apagar" value="ped_apagar"><i class="glyphicon glyphicon-menu-remove"></i> </button>
                    </form>      
                </td>
            </tr>
            {/foreach}
        </tbody>
    </table>
    </div>
    </div>
    <section id="paginacao" class="row">
    <center>
    {$PAGINAS}
    </center>
    </section>
</div>
       
        

        
 