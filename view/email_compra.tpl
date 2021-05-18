<!DOCTYPE html>
<html lang="en">
<style>
.tabela {
    border-collapse: collapse;
    width: 100%;
}

.tabela th, td {
    text-align: left;
    padding: 8px;
}

.tabela tr:nth-child(odd){
  background-color: #b2b2b2;
}

.sessao{
  
  padding:20px;
}


.total{
  text-align:right;
}




.textoinicio{
  text-align:center;
}

.minhaconta{
  text-align:center;
}


</style>

<p class="textoinicio"> Olá {$NOME_CLIENTE} , obrigado pela sua compra em {$SITE_NOME} <br>
<a href="{$SITE_HOME}"> {$SITE_HOME} </a>
</p>


  <section class="row">
      <p class="minhaconta">
          Para acessar a sua conta e ter um histórico de seus pedidos acesse nosso site, e sua conta<br>
          Minha conta: <a  href="{$PAG_MINHA_CONTA}" > {$PAG_MINHA_CONTA} </a>
      
      </p>                 
                   
  </section>


<section class="row ">
   
    <center>
      
     
   <br>
        
    <table class="tabela" style="width: 95%;">
     
        <tr style="
            border: 1px solid #b2dba1; 
            text-align:center;
            background-color: #072339;
            color:#FFF;
            font-size:18px;" >
            <td colspan="5">Itens do seu pedido </td>
            
        </tr>
        {foreach from=$PRO item=P}
          
          <tr style="border: 1px solid #b2dba1">      
            <td> <img src="{$P.pro_img}" alt=" {$P.pro_nome} "> </td> 
            <td>  {$P.pro_nome}  </td>
            <td>  {$P.pro_valor} </td>
            <td>  {$P.pro_qtd}   </td>
            <td>  {$P.pro_subtotal} </td>
        </tr>
        
        {/foreach}
        
    </table>
  
    </center>
        
           
</section><!-- fim da listagem itens -->


   <!-- botoes de baixo e valor total -->
        <div class="sessao">                            
              <p class="total">
               <h4>Total:</h4><h5>R$ {$TOTAL}</h5>
               </p>
        </div>
               <br>
             