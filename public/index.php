<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logo jmu.svg" type="image/x-icon">

    <meta name="author" content="Custódio Titosse (Fullstack) e Jemisse Zeca (Frontend)">
    <meta name="email" content="custodiotitossetitosse@email.com, jemissezeca07s3@email.com">
    <meta name="copyright" content="Desenvolvido por Custódio Titosse  e Jemisse Zeca">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="css/style.css">

    <title>Sistema de Estatistica da JMU</title>
</head>
<body>
  <div class="container-fluid position-relative w-100 min-vh-100 bg-light overflow-hidden d-flex containerbag">
   
  <div class="container min-vh-100 d-flex flex-column align-items-center justify-content-center order-1" id="main">      
        <h2 class="text-center  position-absolute pt-1 top-0 fw-bolder titlegeral pt-md-5 ">Inquérito de Levantamento Estatístico Juvenil 2024/2025</h2>

        <!-- DADOS PESSOAIS -->
        <form action="../src/process.php" autocomplete="on" method="post" class="">

            <div id="form-dados-pessoais" class="par formulario active shadow-lg p-4 rounded-4 required A w-50">
                <fieldset>
                    <legend class="mb-3  section-title" >Dados Pessoais</legend>
                    
                    <div class="mb-3">
                    <label class="form-label fw-bold">Nome Completo</label>
                    <input type="text" class="form-control shadow" placeholder="Digite seu nome completo" name="nome_completo" required>
                    </div>
        
                    <div class="mb-3">
                    <label class="form-label fw-bold">Sexo:</label>
                    <div class="d-flex gap-3">
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" value="Feminino" required>
                        <label class="form-check-label">Feminino</label>
                        </div>
                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="sexo" value="Masculino" required>
                        <label class="form-check-label">Masculino</label>
                        </div>
                    </div>
                    </div>
                    <div class="d-flex justify-content-end mt-4">
                    <button type="button" class="btn btn-primary next" id="next01">Continuar</button>
                    </div>
                </fieldset>
                </div>

                <div id="cont form-dados-pessoais" class="impar formulario active shadow-lg p-4 rounded-4 required A w-50">
                <fieldset>
                    <legend class="mb-3  section-title" >Cont..</legend>
                    
        
                    <div class="mb-3">
                    <div class="mb-3">
                        <label class="form-label fw-bold">Data de Nascimento</label>
                        <input type="date" class="form-control shadow" name="data_nascimento" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Naturalidade</label>
                        <input type="text" class="form-control shadow" placeholder="Maputo" name="naturalidade" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label fw-bold">Nacionalidade</label>
                        <input type="text" class="form-control shadow" placeholder="Moçambicano" name="nacionalidade" required>
                    </div>
                    </div>
        
                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary prev" id="prev01">Voltar</button>
                        <button type="button" class="btn btn-primary next" id="next02">Continuar</button>
                    </div>
                </fieldset>
                </div>
        
                <!-- DADOS GERAIS -->
                <div id="form-dados-gerais" class="par formulario shadow-lg p-4 rounded-4 d-none active A w-50">
                <fieldset>
                    <legend class="mb-3  section-title">Dados Gerais</legend>
                    
                    <div class="mb-3">
                    <label class="form-label fw-bold">Cargo Pastoral:</label>
                    <input type="text" class="form-control shadow" placeholder="Digite o nome do seu cargo pastoral" name="cargo_pastoral" required>
                    </div>
        
                    <div class="mb-3">
                    <label class="form-label fw-bold">Igreja Local:</label>
                    <input type="text" class="form-control shadow" name="igreja_local" placeholder="Digite o nome da sua Igreja" required>
                    </div>
        
                    <div class="mb-3">
                        <label class="form-label fw-bold">Classe:</label>
                        <input type="text" class="form-control shadow" name="classe" placeholder="Digite o nome da sua Classe" required>
                        </div>
        
                        <div class="d-flex justify-content-between mt-0 mt-md-3">
                        <button type="button" class="btn btn-secondary prev" id="prev02">Voltar</button>
                        <button type="button" class="btn btn-primary next" id="next03">Continuar</button>
                    </div>
                </fieldset>
                </div>
        
                <!-- ESTADO CIVIL -->
                <div id="form-estado-civil" class="impar formulario shadow-lg p-4 rounded-4 d-none active A w-50">
                <fieldset>
                    <legend class="mb-3 section-title">Estado Civil</legend>
                    
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado_civil" value="Casado(a) no civil pela Igreja" required>
                            <label class="form-check-label">Casado(a) no civil pela Igreja</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado_civil" value="Casdo (a) no civil">
                            <label class="form-check-label">Casdo (a) no civil</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado_civil" value="União facto (a)">
                            <label class="form-check-label">União facto (a)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado_civil" value="Divorciado (a)">
                            <label class="form-check-label">Divorciado(a)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="estado_civil" value="Solteiro(a)">
                            <label class="form-check-label">Solteiro(a)</label>
                        </div>
                    </div>
        
                    <div class="d-flex justify-content-between mt-4">
                        <button type="button" class="btn btn-secondary prev" id="prev03">Voltar</button>
                        <button type="button" class="btn btn-primary next" id="next04">Continuar</button>
                    </div>
                </fieldset>
                </div>
        
                <!-- FORMAÇÃO TEOLÓGICA -->
                <div id="form-formacao-teologica" class="par formulario shadow-lg p-4 rounded-4 d-none active A  w-50">
                <fieldset>
                    <legend class="mb-3 section-title">Formação Teológica</legend>
                    
                    <div class="mb-3">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="formacao_teologica" value="Exortador" required>
                        <label class="form-check-label">Exortador</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="formacao_teologica" value="Pregador">
                        <label class="form-check-label">Pregador</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="formacao_teologica" value="Teologia por extenção">
                        <label class="form-check-label">Teologia por extenção</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="formacao_teologica" value="Sem formacao">
                        <label class="form-check-label">Sem Formação</label>
                    </div>      
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="formacao_teologica" value="Sem formacao">
                        <label class="form-check-label">Sem Formação</label>
                    </div>     
        
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="formacao_teologica" value="Curso de formação de Pastores">
                        <label class="form-check-label">Curso de formação de Pastores</label>
                    </div>
                    </div>
        
                    <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-secondary prev" id="prev04">Voltar</button>
                            <button type="button" class="btn btn-primary next" id="next05">Continuar</button>
                        </div>
                </fieldset>
                </div>
        
                <!--Formacao academica -->
                <div id="form-formacao-academica" class="impar formulario shadow-lg p-4 rounded-4 d-none active A  w-50">
                    <fieldset>
                        <legend class="mb-3 section-title">Formação Academica</legend>
                        
                        <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="formacao_academica" value="Primario (ou equivalente)" required>
                            <label class="form-check-label">Primario (ou equivalente)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="formacao_academica" value="Secundaria Geral I (ou evivalente)" >
                            <label class="form-check-label">Secundaria Geral I (ou evivalente)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="formacao_academica" value="Secundaria Geral II (ou evivalente)">
                            <label class="form-check-label">Secundaria Geral II (ou evivalente)</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="formacao_academica" value="Medio Tecnico (ou evivalente)">
                            <label class="form-check-label">Medio Tecnico (ou evivalente)</label>
                        </div>      
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="formacao_academica" value="Licenciatura (ou evivalente)">
                            <label class="form-check-label">Licenciatura (ou evivalente)</label>
                        </div>     
            
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="formacao_academica" value="Sem formação concluida">
                            <label class="form-check-label">Sem formação concluida</label>
                        </div>
                        </div>
            
                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-secondary prev" id="prev05">Voltar</button>
                            <button type="button" class="btn btn-primary next" id="next06">Continuar</button>
                        </div>
                    </fieldset>
                </div>
        
                <!--Cargos da igreja-->
                <div id="form-Cargos-da-igreja" class="par formulario shadow-lg p-4 rounded-4 d-none active A  w-50">
                    <fieldset>
                        <legend class="mb-3 section-title">Tens Cargos na igreja?</legend>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">seleciona a alternativa correcta:</label>
                            <div class="d-flex gap-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cargo_igreja" value="Não" required>
                                    <label class="form-check-label">Não</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="cargo_igreja" value="Sim" required>
                                    <label class="form-check-label">Sim</label>
                                </div>
                            </div>
                        </div>
        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Se a resposrta é sim! qual é?</label>
                            <input type="text" class="form-control shadow" name="status_membro" placeholder="Digite seu cargo aqui" required>
                        </div>
        
                        <div class="mb-3">
                            <label class="form-label fw-bold section-title">Status de Membro:</label>
                            <div class="form-group address-grid">
                              <select class="custom-select form-control shadow" required>
                                <option value="">Selecione uma opção</option>
                                <option value="1">Sou membro há mais de 1 ano</option>
                                <option value="2">Sou membro recém-transferido</option>
                                <option value="3">Sou membro transferido dentro do Distrito</option>
                                <option value="4">Sou membro transferido de outro Distrito</option>
                              </select>
                            </div>
                          </div>
                          
            
                          <div class="d-flex justify-content-between mt-0 mt-md-">
                            <button type="button" class="btn btn-secondary prev" id="prev06">Voltar</button>
                            <button type="button" class="btn btn-primary next" id="next07">Continuar</button>
                        </div>
                    </fieldset>
                </div>
        
                <!-- FEEDBACK -->
                <div id="form-feedback" class="impar formulario shadow-lg p-4 rounded-4 d-none active A  w-50">
                <fieldset>
                    <legend class="mb-3 section-title">Feedback</legend>
                    
                    <div class="mb-3">
                    <label class="form-label fw-bold">Sugestões de melhoria:</label>
                    <textarea class="form-control shadow" rows="4" name="feedback" placeholder="Escreva aqui..." required></textarea>
                    </div>
        
                    <div class="d-flex justify-content-between mt-4">
                    <button type="button" class="btn btn-secondary prev" id="prev07">Voltar</button>
                    <button type="submit" class="btn btn-success" >Enviar</button>
                    </div>
                </fieldset>
                </div>
        </form>

    </div>

    <div class="painels-container position-absolute w-100 h-100 ">
        
        <div class="painel left  text-center active01 " id="left">
            <div class="content m-0 p-0">
                <div class=" container-fluid">
                <h2 class="text-light section-title text-start ">Lema da JMU</h2>
                <p class="text-light text-start fw-bold ">Cristo assima de <strong>tudo</strong>.</p>
                <h2 class="text-light section-title text-start ">Versiculo</h2>
                <p class="text-light text-start fw-bold  ">O versículo da organização é : <strong>"Seguindo a verdade em amor, cresçamos, em tudo, naquela que é a cabeça, Cristo"</strong>.</p>
                </div>
                <img src="img/logo jmu.svg" alt="lo JMU" class="w-75 h-75" >
            </div>
        </div>
        
        <div class="painel rigth  text-center " id="rigth">
            <div class="content">
                <div class="container-fluid m-0 p-0">
                    <h2 class="text-light section-title text-start ">Lema da JMU</h2>
                <p class="text-light text-start fw-bold">Cristo assima de <strong>tudo</strong>.</p>
                <h2 class="text-light section-title text-start ">Versiculo</h2>
                <p class="text-light text-start fw-bold ">O versículo da organização é : <strong>"Seguindo a verdade em amor, cresçamos, em tudo, naquela que é a cabeça, Cristo"</strong>.</p>
                </div>
                <img src="img/logo jmu.svg" alt="lo JMU" class="w-75 h-75" >
            </div>
        </div>

       
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="js/main.js"></script>

</body>
</html>