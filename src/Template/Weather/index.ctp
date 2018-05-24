<!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>WeatherApi</h1>
                        <h3>Implementação teste de consumo de Api</h3>
                      <hr class="intro-divider">
                    </div> 
                </div>
              </div>
                
              <div class="row">
                <div class="col-md-offset-1 col-lg-offset-1 col-md-10 col-lg-10">
                  <form method="post">
                    <div class="form-row">
                      <div class="col-lg-9 col-md-9">
                        <input type="text" name="search" class="form-control form-control-lg" placeholder="Digite o nome da cidade">
                      </div>
                      <div class="col-lg-3 col-md-3">
                        <button type="submit" class="btn btn-block btn-lg btn-primary">Consultar!</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

	<a  name="services"></a>
    <div class="content-section-a">

        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                  
                    <?php if(isset($data)){ ?>
                      <div class="result">
                          <div class="row">
                              <div class="col-md-4">
                                <div style="float: left;">
                                  <img src="https://openweathermap.org/img/w/<?=$data['weather'][0]['icon'] ?>.png" style="width:180px"/>
                                </div>
                              </div>
                              <div class="col-md-8" style="font-size:16px">
                                <div style="padding: 10px;">
                                <h3><?= $data['name'] .' - '. $arr_weather[$data['weather'][0]['description']] ?></h3>
                                <strong><i class="fa fa-arrow-right" style="color:green"></i>
                                    Temperatura Atual:</strong> <?= $data['main']['celsius'].'º' ?> <br/>

                                <strong><i class="fa fa-caret-up" style="color:red"></i> 
                                    Temperatura Máxima:</strong> <?= $data['main']['celsius_max'].'º' ?> <br/>

                                <strong><i class="fa fa-caret-down" style="color:blue"></i> 
                                    Temperatura Mínima:</strong> <?= $data['main']['celsius_min'].'º' ?> <br/>
                                    
                                <strong><i class="fa fa-tint" style="color:#333"></i> 
                                    Humidade do Ar:</strong> <?= $data['main']['humidity'].'%' ?> <br/>
                                </div>
                              </div>

                      </div>
                      <?php }else{ ?>
                        <h2 class="section-heading">Implementação teste realizada por <br>Julio C. Martins</h2>
                        <p class="lead">Realize a consulta digitando o nome da cidade no campo a cima.</p>
                      <?php } ?>
                          
                          <hr class="section-heading-spacer">
                    <div class="clearfix"></div>

                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.content-section-a -->

    
	<a  name="contact"></a>
    <div class="banner">

        <div class="container">

            <div class="row">
                <div class="col-lg-6">
                    <h2>Onde Me encontrar?</h2>
                </div>
                <div class="col-lg-6">
                    <ul class="list-inline banner-social-buttons">
                        <li>
                            <a href="https://developer.juliocmartins.com.br" class="btn btn-default btn-lg"><i class="fa fa-link fa-fw"></i> <span class="network-name">Site</span></a>
                        </li>
                        <li>
                            <a href="https://github.com/juliocmartins/WeatherApi" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/in/julio-concolino-martins-487880b5/" class="btn btn-default btn-lg"><i class="fa fa-linkedin fa-fw"></i> <span class="network-name">Linkedin</span></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- /.container -->