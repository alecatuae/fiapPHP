<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>PHP - Desafio 2</title>
    </head>    
    
    <body>
       <?php 
        /*
            Conta Telefônica
            Uma conta telefonica é composta dos seguintes custos:
            
            Assinatura: R$ 12,90    
            Impulsos    R$ 0,04 por impulso que exceda 90 interurbanos
            Chamadas para celular: R$0,20 por impulso
            
            Sabendo que Maria Lucia, ligou 247 vezes no mês, sendo 120 interurbanos e 37 ligações para celular, QUAL O VALOR TOTAL DA CONTA?
        */
        
        // Variáveis
        
        $valor_assinatura = 12.90;
        $valor_impulso_extra = 0.04;
        $valor_impulso_celular = 0.20;
        $total_ligacoes_interurbano = 120;
        $total_ligacoes_celular = 37; 
        $interurbanos_sem_cobrar = 90;
        
        // Realizando a operação
        
        $valor_interurbano = 
        ($total_ligacoes_interurbano - $interurbanos_sem_cobrar) * $valor_impulso_extra;
        
        $valor_celular = $total_ligacoes_celular * $valor_impulso_celular;  
      
        $valor_final =
        $valor_interurbano + $valor_celular + $valor_assinatura;
        
        echo "Maria Lucia pagou no fim do mês " . $valor_final;
        
        ?>
    </body>    
    
    
</html>    