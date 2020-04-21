<?php

if (isset($_POST["acao"])){
    echo "<script>alert('Dados enviados com sucesso!')</script>";
    }

$cpf = $_POST["cpflocatario"];
$nome = $_POST["nomecompletolocatario"];
$tipoDeDocumento =  $_POST["ControlSelect1locatario"];
$numero = $_POST["numerolocatario"];
$orgao =  $_POST["orgaolocatario"];
$dataEmissao = $_POST["datadeemissaolocatario"];
$dataNascimento =  $_POST["datadenascimentolocatario"];
$nacionalidade = $_POST["nacionalidadelocatario"];
$estadoCivil =  $_POST["estadocivillocatario"];
$profissao = $_POST["profissaolocatario"];
$telefone =  $_POST["telefonelocatario"];
$celular =  $_POST["celularlocatario"];
$email = $_POST["emaillocatario"];
$cpfConjuge =  $_POST["cpfconjugelocatario"];
$vinculoEmpregaticio = $_POST["ControlSelect2locatario"];
$salario = $_POST["salariolocatario"];
$rendimentos = $_POST["rendimentoslocatario"];
$empresa = $_POST["empresalocatario"];
$telefoneEmpresa = $_POST["telefoneempresalocatario"];
$cepAtual = $_POST["cepatuallocatario"];
$referencia =  $_POST["referenciaslocatario"];
$referenciatelefone =  $_POST["telefonereferencia"];
$checkbox =  $_POST["checkboxlocatario"];


echo "Dados do Locatário<br>";

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
echo "<br><b>Celular:</b> ".$celular;
echo "<br><b>E-mail:</b> ".$email;
echo "<br><b>CPF Conjuge:</b> ".$cpfConjuge;
echo "<br><b>Vínculo Empregatício:</b> ".$vinculoEmpregaticio;
echo "<br><b>Salário:</b> ".$salario;
echo "<br><b>Rendimentos:</b> ".$rendimentos;
echo "<br><b>Empresa:</b> ".$empresa;
echo "<br><b>Telefone Empresa:</b> ".$telefoneEmpresa;
echo "<br><b>Cep Atual:</b> ".$cepAtual;
echo "<br><b>Referência:</b> ".$referencia;
echo "<br><b>Telefone / Celular:</b> ".$referenciatelefone;
echo "<br><b>Concordo com Termos:</b> ".$checkbox;

//Gravar os dados em arquivo .txt
    //Criar/Abrir um arquivo .txt
    $arquivo = fopen("locatario.txt","a+");
    
    //Escrever no arquivo
    fwrite($arquivo, "Dados do Locatário\r\n");

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
    fwrite($arquivo, "\r\nCelular: ".$celular);
    fwrite($arquivo, "\r\nE-mail: ".$email);
    fwrite($arquivo, "\r\nCPF Conjuge: ".$cpfConjuge);
    fwrite($arquivo, "\r\nVínculo Empregatício: ".$vinculoEmpregaticio);
    fwrite($arquivo, "\r\nSalário: ".$salario);
    fwrite($arquivo, "\r\nRendimentos: ".$rendimentos);
    fwrite($arquivo, "\r\nEmpresa: ".$empresa);
    fwrite($arquivo, "\r\nTelefone Empresa: ".$telefoneEmpresa);
    fwrite($arquivo, "\r\nCep Atual: ".$cepAtual);
    fwrite($arquivo, "\r\nReferência: ".$referencia);
    fwrite($arquivo, "\r\nTelefone / Celular: ".$referenciatelefone);
    fwrite($arquivo, "\r\nConcordo com Termos: ".$checkbox);


    fwrite($arquivo, "\r\n-------------------------------------\r\n \r\n");
    
    //Encerrar o arquivo
    fclose($arquivo);
   
?>