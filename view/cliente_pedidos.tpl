<!DOCTYPE html>
<html lang="en">
<br>
<br>

<section class="row" id="pedidos">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


    <h4 class="text-center">Meus Pedidos</h4>
    
    <center>
    {if $PEDIDOS_QUANTIDADE > 0}
    <table class="table table-bordered" style="width: 90%">
        
        <tr class="text-danger bg-danger">
            <td>Data</td>
            <td>Hora</td>
            <td>Ref</td>
           
            <td>Status</td>
            <td></td>
        </tr>
        
        {foreach from=$PEDIDOS item=P}
        <tr>
            
            <td style="width: 10%">{$P.ped_data}</td>
            <td style="width: 10%">{$P.ped_hora}</td>
            <td style="width: 10%">{$P.ped_ref}</td>
          
            
            {if $P.ped_pag_status == 'NAO'} 
             <td style="width: 15%"><span class="label label-danger">{$P.ped_pag_status} PAGO</span></td>
            {elseif $P.ped_pag_status == 'Pago'}
              <td style="width: 15%"><span class="label label-success">{$P.ped_pag_status}</span></td>
            {else}
              <td style="width: 15%">{$P.ped_pag_status}</td>
            {/if}
             
        <form name="itens" method="post" action="{$PAG_ITENS}">
            
             <input type="hidden" name="cod_pedido" id="cod_pedido" value="{$P.ped_cod}">
             <td style="width: 10%"><button class="btn btn-default"><i class="glyphicon glyphicon-menu-hamburger"></i> Detalhes</button></td>
       
        </form>    
            
        </tr>
        {/foreach}
        {else}
        Você ainda não efetuou pedidos
        
        {/if}
        
    </table>
      <section id="paginacao" class="row">
    <center>
    {$PAGINAS}
    </center>
    </section>
    
    
</section>
      