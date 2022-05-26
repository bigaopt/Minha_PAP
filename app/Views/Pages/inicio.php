<div class="content-wrapper container">
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Noticías recentes</h4>
                            </div>
                            <div class="card-body">
                                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                                        <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner" id="not">
                                        <div class="carousel-item active">
                                            <img src="Img/caminhada/foto_caminhada.jpg" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="Img/la_remontada/joel&marco.jpg" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block text-light">
                                                <h5>"La Remontada"</h5>
                                                <p>Os Juniores do Milheiroense venceram neste fim de semana o S. Roque por 3-2 no Centro de Formação Desportiva Floriano Borges.</p>
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img src="Img/campo/inauguraçao_campo.jpg" class="d-block w-100" alt="...">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h5>Inauguraçao do Relvado sintético e iluminação LED</h5>
                                                <p>Decorreu neste sábado a inauguração destas 2 obras ansiadas há muito tempo pelo GD Milheiroense.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                                        <!-- botao noticia anteriror-->
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                                        <!-- botao proxima noticia-->
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-xl-12">
                        <div class="card" id="jogos_recentes">
                            <div class="card-header">
                                <h4>Jogos mais recentes</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-hover table-lg table-dark text-center">
                                        <thead>
                                            <tr>
                                                <th>Dia</th>
                                                <th>Horas</th>
                                                <th>Local</th>
                                                <th>Nome Equipa</th>
                                                <th>Adversário</th>
                                                <th>Resultado</th>
                                                <th>Tipo de Resultado</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($jogos as $jogo) : ?>
                                                <tr class="table-light">
                                                    <td><?= $jogo->dia; ?></td>
                                                    <td><?= $jogo->hora; ?></td>
                                                    <td><?= $jogo->local; ?></td>
                                                    <td><?= $jogo->nome_equipa; ?></td>
                                                    <td><?= $jogo->adversario; ?></td>
                                                    <td><?= $jogo->resultado; ?></td>
                                                    <td><?= $jogo->tipo_resultado; ?></td>
                                                </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-4">
                <!-- <div class="card">
                    <div class="card-header">
                        <h4>Equipas</h4>
                    </div>
                    <div class="card-content pb-4">
                        <table class="table table-hover table-lg table-dark">
                                <thead>
                                     <tr>
                                        <th>Nome Equipa</th>
                                        <th>Pontos</th>
                                        <th>Classificação</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($equipas as $teste) : ?>
                                         <tr class="table-light">
                                                <td><?= $teste->nome_equipa; ?></td>
                                                <td><?= $teste->pontos; ?></td>
                                                <td><?= $teste->classificacao; ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                    </div>
                </div> -->
                <div class="card">
                    <div class="card-header">
                        <h4>Visitors Profile</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-visitors-profile"></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Profile Visit</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <svg class="bi text-primary" width="32" height="32" fill="blue" style="width:10px">
                                        <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                    </svg>
                                    <h5 class="mb-0 ms-3">Europe</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="mb-0">862</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-europe"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <svg class="bi text-success" width="32" height="32" fill="blue" style="width:10px">
                                        <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                    </svg>
                                    <h5 class="mb-0 ms-3">America</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="mb-0">375</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-america"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="d-flex align-items-center">
                                    <svg class="bi text-danger" width="32" height="32" fill="blue" style="width:10px">
                                        <use xlink:href="assets/vendors/bootstrap-icons/bootstrap-icons.svg#circle-fill" />
                                    </svg>
                                    <h5 class="mb-0 ms-3">Indonesia</h5>
                                </div>
                            </div>
                            <div class="col-6">
                                <h5 class="mb-0">1025</h5>
                            </div>
                            <div class="col-12">
                                <div id="chart-indonesia"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

</div>