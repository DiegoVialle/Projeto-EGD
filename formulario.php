<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <title>Página Única</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>

<body>
    <header>
        <div class="row gradiente" id="corLogo">
            <img src="css/EGD PEQUENO.jpg" class="logo rounded mx-auto d-block" alt="Imagem responsiva">
        </div>
        <div class="cabecalho" align=center>
            <h2>Formulário Cadastral de Análises</h2>
            <p class="font-weight-bold">Locatário Fiador</p>
        </div>
    </header>
    <main>
        <div class="container">
            <form action="gravar.php" method="post">
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Locatário
                                </button>
                            </h5>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-12 form-group">
                                        <label for="cpf">CPF</label>
                                        <input id="cpf" type="text" class="form-control" placeholder="" 
                                            name="cpflocatario">
                                    </div>
                                    <div class="col-sm-9 col-xs-12 form-group">
                                        <label for="nomecompleto">Nome Completo</label>
                                        <input id="nomecompleto" type="text" class="form-control" placeholder=""
                                             name="nomecompletolocatario">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="exampleFormControlSelect1">Tipo de Documento</label>
                                        <select class="form-control" id="exampleFormControlSelect1" 
                                            name="ControlSelect1locatario">
                                            <option>--</option>
                                            <option>RG</option>
                                            <option>RGE</option>
                                            <option>CNH</option>
                                            <option>Doc. Classe</option>
                                            <option>Passaporte</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label class="" for="numero">Número</label>
                                        <input id="numero" type="text" class="form-control" placeholder="" 
                                            name="numerolocatario">
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="orgaoexp.">Órgão Exp.</label>
                                        <input id="orgaoexp." type="text" class="form-control" placeholder="" 
                                            name="orgaolocatario">
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="dataemissao">Data de Emissão</label>
                                        <input id="dataemissao" type="date" class="form-control" placeholder="" 
                                            name="datadeemissaolocatario">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label class="" for="datadenascimento">Data de Nascimento</label>
                                        <input id="datadenascimento" type="date" class="form-control" placeholder=""
                                             name="datadenascimentolocatario">
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="nacionalidade">Nacionalidade</label>
                                        <input id="nacionalidade" type="text" class="form-control" placeholder=""
                                             name="nacionalidadelocatario">
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="exampleFormControlSelect1">Estado Civil</label>
                                        <select class="form-control" id="exampleFormControlSelect1" 
                                            name="estadocivillocatario">
                                            <option>--</option>
                                            <option>Solteiro</option>
                                            <option>Casado</option>
                                            <option>Divorciado</option>
                                            <option>Viúvo</option>
                                            <option>União Estável</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="profissao">Profissão</label>
                                        <input id="profissao" type="text" class="form-control" placeholder="" 
                                            name="profissaolocatario">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label class="" for="telefone/celular">Telefone / Celular</label>
                                        <input id="telefoneCelular" type="text" class="form-control"
                                            pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" placeholder="" 
                                            name="telefonelocatario">
                                    </div>
                                    <div class="col-sm-4 col-xs-6 form-group">
                                        <label for="email">E-mail</label>
                                        <input id="email" type="email" class="form-control" placeholder="" 
                                            name="emaillocatario">
                                    </div>
                                    <div class="col-sm-4 col-xs-6 form-group">
                                        <label for="cpfconjuge">CPF do conjuge/companheiro</label>
                                        <input id="cpfconjuge" type="text" class="form-control" placeholder="" 
                                            name="cpfconjugelocatario">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="exampleFormControlSelect1">Vínculo Empregatício</label>
                                        <select class="form-control" id="exampleFormControlSelect1" 
                                            name="ControlSelect2locatario">
                                            <option>--</option>
                                            <option>Aposentado/Pensionista</option>
                                            <option>Autônomo</option>
                                            <option>Empresário</option>
                                            <option>Estudante</option>
                                            <option>Funcionário Público</option>
                                            <option>Funcionário Público c/ CLT</option>
                                            <option>Profissional Liberal</option>
                                            <option>Renda Proveniente de Aluguéis</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label class="" for="salario">Salário</label>
                                        <input id="salario" type="text" class="form-control" data-thousands="."
                                            data-decimal="," data-prefix="R$ " placeholder="" name="salariolocatario">
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label class="" for="outrosRendimentos">Outros Rendimentos</label>
                                        <input id="outrosRendimentos" type="text" class="form-control"
                                            data-thousands="." data-decimal="," data-prefix="R$ " placeholder=""
                                            name="rendimentoslocatario">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-9 col-xs-6 form-group">
                                        <label class="" for="empresa">Empresa</label>
                                        <input id="empresa" type="text" class="form-control" placeholder=""
                                            name="empresalocatario">
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label class="" for="numero">Telefone da Empresa</label>
                                        <input id="telefoneempresa" type="text" class="form-control" placeholder=""
                                            name="telefoneempresalocatario">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="cepAtual">Cep Atual de Residência</label>
                                        <input id="cepAtual" type="text" class="form-control" placeholder=""
                                            name="cepatuallocatario">
                                    </div>
                                    <div class="col-sm-9 col-xs-6 form-group">
                                        <label for="referencias">Referências Pessoais</label>
                                        <input id="referencias" type="text" class="form-control" placeholder=""
                                            name="referenciaslocatario">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <p class="form-check form-group font-weight-bold" align=justify>
                                        De acordo; Autorizo a EGD Imóveis e seus parceiros comerciais a
                                        consultar dados e
                                        informações
                                        junto aos órgãos
                                        proteção de crédito, bem como declaro serem rigorosamente
                                        verdadeiros os dados acima e
                                        reservo
                                        ao Locador o direito
                                        de recusa a aludida pretensão sem necessário declarar o motivo.
                                    </p>
                                </div>
                                <div class="row form-group">
                                    <div class="form-check form-group">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox8"
                                            value="option8" onclick="marcaDesmarca(this)" name="checkboxlocatario">
                                        <label class="form-check-label text-danger" for="inlineCheckbox8">Li
                                            e estou de acordo
                                            com
                                            as condições</label>
                                    </div>
                                </div>
                                <input id="botaoEnviar" type="submit" name="acao" value="Enviar"
                                    class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Fiador
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                            data-parent="#accordionExample">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3 col-xs-12 form-group">
                                        <label for="cpf">CPF</label>
                                        <input id="cpfFiador" type="text" class="form-control" placeholder="" required
                                            name="cpf">
                                    </div>
                                    <div class="col-sm-9 col-xs-12 form-group">
                                        <label for="nomecompleto">Nome Completo</label>
                                        <input id="nomecompleto" type="text" class="form-control" placeholder=""
                                            required name="nomecompleto">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="exampleFormControlSelect1">Tipo de Documento</label>
                                        <select class="form-control" id="exampleFormControlSelect1" required
                                            name="ControlSelect1">
                                            <option>--</option>
                                            <option>RG</option>
                                            <option>RGE</option>
                                            <option>CNH</option>
                                            <option>Doc. Classe</option>
                                            <option>Passaporte</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label class="" for="numero">Número</label>
                                        <input id="numero" type="text" class="form-control" placeholder="" required
                                            name="numero1">
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="orgaoexp.">Órgão Exp.</label>
                                        <input id="orgaoexp." type="text" class="form-control" placeholder="" required
                                            name="orgao">
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="dataemissao">Data de Emissão</label>
                                        <input id="dataemissao" type="date" class="form-control" placeholder="" required
                                            name="dataemissao">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label class="" for="datadenascimento">Data de Nascimento</label>
                                        <input id="datadenascimento" type="date" class="form-control" placeholder=""
                                            required name="datadenascimento">
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="nacionalidade">Nacionalidade</label>
                                        <input id="nacionalidade" type="text" class="form-control" placeholder=""
                                            required name="nacionalidade">
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="exampleFormControlSelect2">Estado Civil</label>
                                        <select class="form-control" id="exampleFormControlSelect2" required
                                            name="ControlSelect2">
                                            <option>--</option>
                                            <option>Solteiro</option>
                                            <option>Casado</option>
                                            <option>Divorciado</option>
                                            <option>Viúvo</option>
                                            <option>União Estável</option>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label for="profissao">Profissão</label>
                                        <input id="profissao" type="text" class="form-control" placeholder="" required
                                            name="profissao">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 col-xs-6 form-group">
                                        <label class="" for="telefone/celular">Telefone / Celular</label>
                                        <input id="telefoneCelularFiador" type="text" class="form-control"
                                            pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" placeholder="" required
                                            name="telefoneCelular">
                                    </div>
                                    <div class="col-sm-4 col-xs-6 form-group">
                                        <label for="email">E-mail</label>
                                        <input id="email" type="email" class="form-control" placeholder="" required
                                            name="email">
                                    </div>
                                    <div class="col-sm-4 col-xs-6 form-group">
                                        <label for="cpfconjuge">CPF do conjuge/companheiro</label>
                                        <input id="cpfconjugeFiador" type="text" class="form-control" placeholder=""
                                            required name="cpfconjuge">
                                    </div>
                                </div>
                                <div class="row">
                                    <p class="font-weight-bold">Imóvel Caucionado</p>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 col-xs-6 form-group">
                                        <label for="endereco">Endereço</label>
                                        <input id="endereco" type="text" class="form-control" placeholder="" required
                                            name="endereco">
                                    </div>
                                    <div class="col-sm-2 col-xs-6 form-group">
                                        <label for="numero">Número</label>
                                        <input id="numero" type="text" class="form-control" placeholder="" required
                                            name="numero2">
                                    </div>
                                    <div class="col-sm-4 col-xs-6 form-group">
                                        <label for="complemento">Complemento</label>
                                        <input id="complemento" type="text" class="form-control" placeholder="" required
                                            name="complemento">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-4 col-xs-6 form-group">
                                        <label for="bairro">Bairro</label>
                                        <input id="bairro" type="text" class="form-control" placeholder="" required
                                            name="bairro">
                                    </div>
                                    <div class="col-sm-4 col-xs-6 form-group">
                                        <label for="cidade">Cidade</label>
                                        <input id="cidade" type="text" class="form-control" placeholder="" required
                                            name="cidade">
                                    </div>
                                    <div class="col-sm-2 col-xs-6 form-group">
                                        <label for="estado">Estado</label>
                                        <input id="estado" type="text" class="form-control" placeholder="" required
                                            name="estado">
                                    </div>
                                    <div class="col-sm-2 col-xs-6 form-group">
                                        <label for="cep">CEP</label>
                                        <input id="cepFiador" type="text" class="form-control" placeholder="" required
                                            name="cep">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-sm-6 col-xs-6 form-group">
                                        <label for="iptu">Inscrição IPTU</label>
                                        <input id="iptu" type="text" class="form-control" placeholder="" required
                                            name="iptu">
                                    </div>
                                    <div class="col-sm-6 col-xs-6 form-group">
                                        <label for="cartório">Cartório de Imóveis</label>
                                        <input id="cartório" type="text" class="form-control" placeholder="" required
                                            name="cartorio">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <p class="form-check form-group font-weight-bold" align=justify>
                                        De acordo; Autorizo a EGD Imóveis e seus parceiros comerciais a consultar dados
                                        e
                                        informações
                                        junto aos órgãos
                                        proteção de crédito, bem como declaro serem rigorosamente verdadeiros os dados
                                        acima e
                                        reservo
                                        ao Locador o direito
                                        de recusa a aludida pretensão sem necessário declarar o motivo.
                                    </p>
                                </div>
                                <div class="row form-group">
                                    <div class="form-check form-group">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox8"
                                            value="option8" onclick="marcaDesmarca(this)" name="checkbox">
                                        <label class="form-check-label text-danger" for="inlineCheckbox8">Li e estou de
                                            acordo
                                            com
                                            as condições</label>
                                    </div>
                                </div>
                                <input id="botaoEnviar" type="submit" name="acao" value="Enviar"
                                    class="btn btn-primary">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <!-- <script src="js/icone.js"></script> -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-maskmoney/3.0.2/jquery.maskMoney.min.js"></script>
    <script src="js/mascara.js"></script>

</body>

</html>