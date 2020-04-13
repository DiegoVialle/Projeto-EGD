<?php


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
$email = $_POST["emaillocatario"];
$cpfConjuge =  $_POST["cpfconjugelocatario"];
$vinculoEmpregaticio = $_POST["ControlSelect2locatario"];
$salario = $_POST["salariolocatario"];
$rendimentos = $_POST["rendimentoslocatario"];
$empresa = $_POST["empresalocatario"];
$telefoneEmpresa = $_POST["telefoneempresalocatario"];
$cepAtual = $_POST["cepatuallocatario"];
$referencia =  $_POST["referenciaslocatario"];
$checkbox =  $_POST["checkboxlocatario"];



echo "CPF: ".$cpf;
echo "Nome: ".$nome;
echo "Tipo de Documento: ".$tipoDeDocumento;
echo "Número: ".$numero;
echo "Órgão Exp.: ".$orgao;
echo "Data de Emissão: ".$dataEmissao;
echo "Data de Nascimento: ".$dataNascimento;
echo "Nacionalidade: ".$nacionalidade;
echo "Estado Civil: ".$estadoCivil;
echo "Profissão: ".$profissao;
echo "Telefone: ".$telefone;
echo "E-mail: ".$email;
echo "CPF Conjuge: ".$cpfConjuge;
echo "Vínculo Empregatício: ".$vinculoEmpregaticio;
echo "Salário: ".$salario;
echo "Rendimentos: ".$rendimentos;
echo "Empresa: ".$empresa;
echo "Telefone Empresa: ".$telefoneEmpresa;
echo "Cep Atual: ".$cepAtual;
echo "Referência: ".$referencia;
echo "Concordo com Termos: ".$checkbox;

//Gravar os dados em arquivo .txt
    //Criar/Abrir um arquivo .txt
    $arquivo = fopen("clientes.txt","a+");
    
    //Escrever no arquivo
    fwrite($arquivo, "Dados do cliente");
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
    fwrite($arquivo, "\r\nVínculo Empregatício: ".$vinculoEmpregaticio);
    fwrite($arquivo, "\r\nSalário: ".$salario);
    fwrite($arquivo, "\r\nRendimentos: ".$rendimentos);
    fwrite($arquivo, "\r\nEmpresa: ".$empresa);
    fwrite($arquivo, "\r\nTelefone Empresa: ".$telefoneEmpresa);
    fwrite($arquivo, "\r\nCep Atual: ".$cepAtual);
    fwrite($arquivo, "\r\nReferência: ".$referencia);
    fwrite($arquivo, "\r\nTelefone: ".$telefone);
    fwrite($arquivo, "\r\nConcordo com Termos: ".$checkbox);


    fwrite($arquivo, "\r\n-------------------------------------\r\n \r\n");
    
    //Encerrar o arquivo
    fclose($arquivo);
   
?>