<?php

if (isset($_POST["acao"])){
    echo "<script>alert('Dados enviados com sucesso!')</script>";
    }

$cpf = $_POST["cpf"];
$nome = $_POST["nomecompleto"];
$tipoDeDocumento =  $_POST["ControlSelect1"];
$numero = $_POST["numero"];
$orgao =  $_POST["orgao"];
$dataEmissao = $_POST["dataemissao"];
$dataNascimento =  $_POST["datadenascimento"];
$nacionalidade = $_POST["nacionalidade"];
$estadoCivil =  $_POST["estadocivil"];
$profissao = $_POST["profissao"];
$telefone =  $_POST["telefonefiador"];
$celular =  $_POST["celularfiador"];
$email = $_POST["email"];
$cpfConjuge =  $_POST["cpfconjuge"];
$endereco1 = $_POST["endereco1"];
$numero1 = $_POST["numero1"];
$complemento1 = $_POST["complemento1"];
$bairro1 = $_POST["bairro1"];
$cidade1 = $_POST["cidade1"];
$cep1 =  $_POST["cep1"];
$iptu1 =  $_POST["iptu1"];
$cartorio1 =  $_POST["cartorio1"];
$endereco2 = $_POST["endereco2"];
$numero2 = $_POST["numero2"];
$complemento2 = $_POST["complemento2"];
$bairro2 = $_POST["bairro2"];
$cidade2 = $_POST["cidade2"];
$cep2 =  $_POST["cep2"];
$iptu2 =  $_POST["iptu2"];
$cartorio2 =  $_POST["cartorio2"];
$checkbox =  $_POST["checkboxFiador"];

if($_POST['endereco2'] == ""  
|| $_POST['numero2'] == ""
|| $_POST['complemento2'] == "" 
|| $_POST['bairro2'] == ""
|| $_POST['cidade2'] == ""
|| $_POST['cep2'] == ""
|| $_POST['iptu2'] == ""
|| $_POST['cartorio2'] == ""
) {
echo "Dados do Fiador<br>";

echo "<br><b>CPF:</b> ".$cpf;
echo "<br><b>Nome:</b> ".$nome;
echo "<br><b>Tipo de Documento:</b> ".$tipoDeDocumento;
echo "<br><b>Número:</b> ".$numero;
echo "<br><b>Órgão Exp.:</b> ".$orgao;
echo "<br><b>Data de Emissão:</b> ".$dataEmissao;
echo "<br><b>Data de Nascimento:</b> ".$dataNascimento;
echo "<br><b>Nacionalidade:</b> ".$nacionalidade;
echo "<br><b>Estado Civil:</b> ".$estadoCivil;
echo "<br><b>Profissão:</b> ".$profissao;
echo "<br><b>Telefone:</b> ".$telefone;
echo "<br><b>E-mail:</b> ".$email;
echo "<br><b>CPF Conjuge:</b>".$cpfConjuge;
echo "<br>";
echo "<br><b>Imovel Caucionado 1</b><br>";

echo "<br><b>Endereço:</b> ".$endereco1;
echo "<br><b>Número:</b> ".$numero1;
echo "<br><b>Complemento:</b> ".$complemento1;
echo "<br><b>Bairro:</b> ".$bairro1;
echo "<br><b>Cidade:</b> ".$cidade1;
echo "<br><b>Cep:</b> ".$cep1;
echo "<br><b>IPTU:</b> ".$iptu1;
echo "<br><b>Cartório:</b> ".$cartorio1;
echo "<br><b>Concordo com Termos:</b> ".$checkbox;
echo "<br>";;
}else {
    echo "Dados do Fiador<br>";

    echo "<br><b>CPF:</b> ".$cpf;
    echo "<br><b>Nome:</b> ".$nome;
    echo "<br><b>Tipo de Documento:</b> ".$tipoDeDocumento;
    echo "<br><b>Número:</b> ".$numero;
    echo "<br><b>Órgão Exp.:</b> ".$orgao;
    echo "<br><b>Data de Emissão:</b> ".$dataEmissao;
    echo "<br><b>Data de Nascimento:</b> ".$dataNascimento;
    echo "<br><b>Nacionalidade:</b> ".$nacionalidade;
    echo "<br><b>Estado Civil:</b> ".$estadoCivil;
    echo "<br><b>Profissão:</b> ".$profissao;
    echo "<br><b>Telefone:</b> ".$telefone;
    echo "<br><b>E-mail:</b> ".$email;
    echo "<br><b>CPF Conjuge:</b>".$cpfConjuge;
    echo "<br>";
    echo "<br><b>Imovel Caucionado 1</b><br>";
    
    echo "<br><b>Endereço:</b> ".$endereco1;
    echo "<br><b>Número:</b> ".$numero1;
    echo "<br><b>Complemento:</b> ".$complemento1;
    echo "<br><b>Bairro:</b> ".$bairro1;
    echo "<br><b>Cidade:</b> ".$cidade1;
    echo "<br><b>Cep:</b> ".$cep1;
    echo "<br><b>IPTU:</b> ".$iptu1;
    echo "<br><b>Cartório:</b> ".$cartorio1;
    echo "<br>";
    echo "<br><b>Imovel Caucionado 2</b><br>";
    
    echo "<br><b>Endereço:</b> ".$endereco2;
    echo "<br><b>Número:</b> ".$numero2;
    echo "<br><b>Complemento:</b> ".$complemento2;
    echo "<br><b>Bairro:</b> ".$bairro2;
    echo "<br><b>Cidade:</b> ".$cidade2;
    echo "<br><b>Cep:</b> ".$cep2;
    echo "<br><b>IPTU:</b> ".$iptu2;
    echo "<br><b>Cartório:</b> ".$cartorio2;
    echo "<br><b>Concordo com Termos:</b> ".$checkbox;
}



//Gravar os dados em arquivo .txt
    //Criar/Abrir um arquivo .txt
    $arquivo = fopen("fiador.txt","a+");
    
    //Escrever no arquivo

    if($_POST['endereco2'] == ""  
    || $_POST['numero2'] == ""
    || $_POST['complemento2'] == "" 
    || $_POST['bairro2'] == ""
    || $_POST['cidade2'] == ""
    || $_POST['cep2'] == ""
    || $_POST['iptu2'] == ""
    || $_POST['cartorio2'] == ""
    ) {

        fwrite($arquivo, "Dados do Fiador\r\n");

        fwrite($arquivo, "\r\nCPF: ".$cpf);
        fwrite($arquivo, "\r\nNome: ".$nome);
        fwrite($arquivo, "\r\nTipo de Documento: ".$tipoDeDocumento);
        fwrite($arquivo, "\r\nNúmero: ".$numero);
        fwrite($arquivo, "\r\nÓrgão Exp.: ".$orgao);
        fwrite($arquivo, "\r\nData de Emissão: ".$dataEmissao);
        fwrite($arquivo, "\r\nData de Nascimento: ".$dataNascimento);
        fwrite($arquivo, "\r\nNacionalidade: ".$nacionalidade);
        fwrite($arquivo, "\r\nEstado Civil: ".$estadoCivil);
        fwrite($arquivo, "\r\nProfissão: ".$profissao);
        fwrite($arquivo, "\r\nTelefone: ".$telefone);
        fwrite($arquivo, "\r\nE-mail: ".$email);
        fwrite($arquivo, "\r\nCPF Conjuge: ".$cpfConjuge);
        fwrite($arquivo, "\r\n");
        fwrite($arquivo, "\r\nImóvel Caucionado 1\r\n");
        
        fwrite($arquivo, "\r\nEndereço: ".$endereco1);
        fwrite($arquivo, "\r\nNúmero: ".$numero1);
        fwrite($arquivo, "\r\nComplemento: ".$complemento1);
        fwrite($arquivo, "\r\nBairro: ".$bairro1);
        fwrite($arquivo, "\r\nCidade: ".$cidade1);
        fwrite($arquivo, "\r\nCep: ".$cep1);
        fwrite($arquivo, "\r\nInscrição IPTU: ".$iptu1);
        fwrite($arquivo, "\r\nCartório de Imóveis: ".$cartorio1);
        fwrite($arquivo, "\r\nConcordo com Termos: ".$checkbox);

        fwrite($arquivo, "\r\n-------------------------------------\r\n \r\n");
    }else {
        fwrite($arquivo, "Dados do Fiador\r\n");

        fwrite($arquivo, "\r\nCPF: ".$cpf);
        fwrite($arquivo, "\r\nNome: ".$nome);
        fwrite($arquivo, "\r\nTipo de Documento: ".$tipoDeDocumento);
        fwrite($arquivo, "\r\nNúmero: ".$numero);
        fwrite($arquivo, "\r\nÓrgão Exp.: ".$orgao);
        fwrite($arquivo, "\r\nData de Emissão: ".$dataEmissao);
        fwrite($arquivo, "\r\nData de Nascimento: ".$dataNascimento);
        fwrite($arquivo, "\r\nNacionalidade: ".$nacionalidade);
        fwrite($arquivo, "\r\nEstado Civil: ".$estadoCivil);
        fwrite($arquivo, "\r\nProfissão: ".$profissao);
        fwrite($arquivo, "\r\nTelefone: ".$telefone);
        fwrite($arquivo, "\r\nE-mail: ".$email);
        fwrite($arquivo, "\r\nCPF Conjuge: ".$cpfConjuge);
    
        fwrite($arquivo, "\r\nImóvel Caucionado 1\r\n");
    
        fwrite($arquivo, "\r\nEndereço: ".$endereco1);
        fwrite($arquivo, "\r\nNúmero: ".$numero1);
        fwrite($arquivo, "\r\nComplemento: ".$complemento1);
        fwrite($arquivo, "\r\nBairro: ".$bairro1);
        fwrite($arquivo, "\r\nCidade: ".$cidade1);
        fwrite($arquivo, "\r\nCep: ".$cep1);
        fwrite($arquivo, "\r\nInscrição IPTU: ".$iptu1);
        fwrite($arquivo, "\r\nCartório de Imóveis: ".$cartorio1);
        fwrite($arquivo, "\r\nConcordo com Termos: ".$checkbox);

        fwrite($arquivo, "\r\nImóvel Caucionado 2\r\n");

        fwrite($arquivo, "\r\nEndereço: ".$endereco2);
        fwrite($arquivo, "\r\nNúmero: ".$numero2);
        fwrite($arquivo, "\r\nComplemento: ".$complemento2);
        fwrite($arquivo, "\r\nBairro: ".$bairro2);
        fwrite($arquivo, "\r\nCidade: ".$cidade2);
        fwrite($arquivo, "\r\nCep: ".$cep2);
        fwrite($arquivo, "\r\nInscrição IPTU: ".$iptu2);
        fwrite($arquivo, "\r\nCartório de Imóveis: ".$cartorio2);
        fwrite($arquivo, "\r\nConcordo com Termos: ".$checkbox);


        fwrite($arquivo, "\r\n-------------------------------------\r\n \r\n");
    }
       
    
    //Encerrar o arquivo
    fclose($arquivo);
