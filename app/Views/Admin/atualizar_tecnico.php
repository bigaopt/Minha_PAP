<section id="multiple-column-form">
    <div class="row match-height">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Atualizar Tecnico</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <form class="form" method="POST" action="<?php echo base_url('Admin/atualizar_dados_tecnicos') ?>">
                            <div class="row">
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <select class="form-control" name="id-column">
                                            <option name="<?= $id ?>"><?= $nome ?></option> 
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="cc">Cartão Cidadao</label>
                                        <input type="text" id="last-name-column" class="form-control" placeholder="Cartão de Cidadão" name="cc-column" maxlength="9">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="data_nascimento">Data de nascimento</label>
                                        <input type="date" id="city-column" class="form-control" placeholder="Data" name="data-column">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="genero">Genero</label>
                                        <select class="form-select" name="genero-column">
                                            <option value="masculino">Masculino</option>
                                            <option value="feminino">Feminino</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="nacionalidade">Nacionalidade</label>
                                        <input type="text" id="country-floating" class="form-control" name="nacionalidade-column" placeholder="Nacionalidade">
                                    </div>
                                </div>

                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="morada">Morada</label>
                                        <input type="text" id="company-column" class="form-control" name="morada-column" placeholder="Morada">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="codigo-postal">Código Postal</label>
                                        <input type="text" id="email-id-column" class="form-control" name="CodPostal-column" placeholder="Código Postal" required pattern="\d{4}-\d{3}" />
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <div class="form-group">
                                        <label for="telemovel">Telemóvel</label>
                                        <input type="text" id="company-column" class="form-control" name="telemovel-column" placeholder="Telemóvel" maxlength="9">
                                    </div>
                                </div>
                                <div class="col-md-6 col-12">
                                    <fieldset class="form-group">
                                        <label for="cargo">Cargo</label>
                                        <select class="form-select" name="cargo-column">
                                            <option value="treinador principal">Treinador Principal</option>
                                            <option value="treinador adjunto">Treinador adjunto</option>
                                            <option value="diretor">Diretor</option>
                                        </select>
                                    </fieldset>
                                </div>
                                <div class="col-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-danger me-1 mb-1">Atualizar técnico</button>
                                    <button type="reset" class="btn btn-dark me-1 mb-1"> Limpar campos</button>
                                    <a href="/tabela_tecnicos"><button type="button" class="btn btn-danger">Voltar à tabela</button></a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>