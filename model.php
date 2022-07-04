<?php

class Perfil{
    public $cnt_cod;
    public $cnt_nome;
    public $cnt_nicho;
    public $cnt_preco;
    public $mve_vlLiquido; 
    public $cli_faixa;
    public $cnt_tipo; // assinatura ou pagamento único;
    public $cnt_entrega; // nutror, entrega de arquivos, blinket, customizada ou física

    function PrimeiraBusca(){ 
        //realizar acesso ao banco de dados antes
        $query = "Class Perfil <br/> <br/>Function Primeira Busca: buscar conteúdos ativos do cliente <br/>";
        $consulta = $query;   //$consulta = array($query);
        print_r($consulta);
        echo"<br/>Produto Escolhido:";
        $this->cnt_cod = "cnt_cod = 01"; 
        echo"$this->cnt_cod";

    }
    
    function SegundaBusca(){
        $query = "<br/><br/>Function Segunda Busca: buscar dados do conteúdo escolhido <br/> <br/>";
        $consulta = $query; //$consulta = array($query);
        print_r($consulta);
        echo"<br/>MAPA PERFIL<br/> Dados do Produto:<br/>";
        $this->cnt_nome = "cnt_nome = Produto Teste"; 
        echo"$this->cnt_nome<br/>";
        echo"$this->cnt_cod";
        $this->cnt_nicho = "<br/>cnt_nicho = Administração"; 
        echo"$this->cnt_nicho";
        $this->cnt_preco = "<br/>cnt_preco = 147,00<br/>"; 
        echo"$this->cnt_preco";
        $this->cnt_vlLiquido = 1000001; 
        echo"$this->cnt_vlLiquido";
        $this->cli_faixa = "<br/>cnt_faixa = Nutror"; 
        echo"$this->cnt_entrega";
        $this->cnt_tipo = "<br/>cnt_tipo = Assinatura"; 
        echo"$this->cnt_tipo";
        $this->cnt_entrega = "<br/>cnt_entrega = Nutror"; 
        echo"$this->cnt_entrega";

        if($this->cnt_vlLiquido <= 1000000){
            $this->cli_faixa = "<br/>cli_faixa = White Belt";
            echo"$this->cli_faixa";
        }
        elseif($this->cnt_vlLiquido > 1000000 && $this->cnt_vlLiquido < 2500000)
        {
            $this->cli_faixa = "<br/>cli_faixa = Red Belt";
            echo"$this->cli_faixa";
        }
        elseif($this->cnt_vlLiquido >= 2500000 && $this->cnt_vlLiquido <= 5000000){
            $this->cli_faixa = "<br/>cli_faixa = Orange Belt";
            echo"$this->cli_faixa";
        }
        elseif($this->cnt_vlLiquido >= 5000000 && $this->cnt_vlLiquido <= 10000000){
            $this->cli_faixa = "<br/>cli_faixa = Green Belt";
            echo"$this->cli_faixa";
        }
        elseif($this->cnt_vlLiquido >= 10000000 && $this->cnt_vlLiquido <= 20000000){
            $this->cli_faixa = "<br/>cli_faixa = Black Belt";
            echo"$this->cli_faixa";
        }
        
    }

         function Calculo_ProjecaoVendas(){
            $query1 = "<br/><br/> Function Calculo_ProjecaoVendas: 1ª Query - Verificar se o cliente solicitante possui mais de 1 ano de cadastro,
            se sim, a próxima consulta será feita com 4 clientes e a quinta análise será da própria conta";
            //FIM DA PRIMEIRA SUBETAPA DA QUARTA ETAPA
            $resultado = $query1; //valor sim ou não (se query trazer algum dado SIM)
            $query2 = " <br/>Function Calculo_ProjecaoVendas: 2ª Query- Consultar 5 ou 4 clientes onde:<br/>
            <br/>- Possuam mais de 1 ano de cadastro;
            <br/>- A faixa seja igual ao cli_faixa;
            <br/>- Não possa conter o cliente solicitante da Projeção de Vendas;
            <br/>- Conteúdo seja do mesmo nicho;
            <br/>- Conteúdo seja do mesmo tipo;
            <br/>- Conteúdo seja do mesmo valor(buscar valor atual).<br/>";
            $consulta = $query2; //$consulta = array($query);
            echo"$resultado <br/> $consulta"; 
            //FIM DA SEGUNDA SUBETAPA DA QUARTA ETAPA
            $query3 = "<br/> Function Calculo_ProjecaoVendas: 3ª Query - Buscar dados para a Projeção de Vendas calculando o total de um ano e
            fazendo sua média mensal:<br/>
            <br/>- Ganho líquido; 
            <br/>- Total Vendas;
            <br/>- Vendas Pagas;
            <br/>- Total Leads;
            <br/>- Leads Fatura;";
            $calculo = "<br/>Taxa de Conversão por Venda = (Vendas Pagas/Total Vendas)*100;
            <br/>Taxa de Conversão por Leads = (Leads Fatura/Total Leads)*100;
            <br/>Valor Médio = (Faturas Pagas/Ganho Líquido)*100<br/><br/>";
            echo"$query3 <br/> <br/>Calculos Adicionais: <br/> $calculo Exibir ao Cliente sua Projeção de Vendas";
            //FIM DA TERCEIRA SUBETAPA DA QUARTA ETAPA
            $query4 = "<br/> <br/>Function Calculo_ProjecaoVendas: 4ª Query - Executar segunda query considerando 5 clientes Black Belts, alterando
            na query o and de ganho para >= 1M and <2M<br/>";
            echo"$query4 <br/> Após, executar a segunda query para finalizar a Projeção de Vendas exibindo ao Cliente ";
         }
        }

