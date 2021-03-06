<?
    session_start();
    require_once($_SESSION["cliente"]["controller"]);
    $config = new Config();
    require_once($config->getMenu());
    $controller = new ClienteController();
    $config->verificarLogin("admin");
?>
<section class="conteudo cliente cadastro">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Cadastro de Cliente
                </div>
            </div>
        </div>
        <?=$controller->getAlert();?>
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <form action="cadastroCliente.php" method="POST">
                        <div class="row">
                            <div class="col-xs-12 col-md-8">
                                <div class="form-group">
                                    <label for="nomeCliente">Nome</label>
                                    <input type="text" required class="form-control" name="nomeCliente" id="nomeCliente" placeholder="Nome do Cliente">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label for="cnpjCliente">CNPJ</label>
                                    <input type="text" required class="form-control" onkeypress="return onlyNumber(event)" maxlength="14" name="cnpjCliente" id="cnpjCliente" placeholder="CNPJ">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-4">
                                <div class="form-group">
                                    <label for="paisCliente">País</label>
                                    <input type="text" required class="form-control" name="paisCliente" id="paisCliente" placeholder="País">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-2">
                                <div class="form-group">
                                    <label for="cidadeCliente">Estado</label>
                                    <input type="text" required class="form-control" name="estadoCliente" id="estadoCliente" placeholder="Estado">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <div class="form-group">
                                    <label for="cidadeCliente">Cidade</label>
                                    <input type="text" required class="form-control" name="cidadeCliente" id="cidadeCliente" placeholder="Cidade">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-5">
                                <div class="form-group">
                                    <label for="bairroCliente">Bairro</label>
                                    <input type="text" required class="form-control" name="bairroCliente" id="bairroCliente" placeholder="Bairro">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-5">
                                <div class="form-group">
                                    <label for="ruaCliente">Rua</label>
                                    <input type="text" required class="form-control" name="ruaCliente" id="ruaCliente" placeholder="Rua">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-2">
                                <div class="form-group">
                                    <label for="numEndCliente">Nº</label>
                                    <input type="text" required class="form-control" name="numEndCliente" id="numEndCliente" placeholder="Número">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-7">
                                <div class="form-group">
                                    <label for="bairroCliente">Complemento</label>
                                    <input type="text" required class="form-control" name="complementoCliente" id="complementoCliente" placeholder="Complemento">
                                </div>
                            </div>
                            <div class="col-xs-12 col-md-5">
                                <div class="form-group">
                                    <label for="telefoneCliente">Telefone</label>
                                    <input type="text" required class="form-control" name="telefoneCliente" id="telefoneCliente" placeholder="Telefone">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <button type="submit" class="btn btn-default">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</section>
<?=$config->getAssets("js","config.js");?>
<?
    require_once($config->getMenuRodape());
?>
