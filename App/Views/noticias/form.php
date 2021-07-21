
                <form method="POST" action="/cadastrarNoticia" class="col-12 ">
                    <h1 class="texto d-flex justify-content-center">Cadastrar notícias</h1><br>
                    <div id="forms" class="col-12 ">
                        <div class="mb-4 row col-6 mt-5 form-1">
                            <label for="titulo" class="col-sm-2 col-form-label">Titulo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="titulo" id="titulo">
                            </div>
                        </div>
                        <div class="mb-4 row col-6 mt-2 form-2">
                            <label for="resumo" class="col-sm-2 col-form-label">Resumo</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="resumo" id="resumo">
                            </div>
                        </div>
                        <div class="mb-4 row col-6 mt-2 form-2">
                            <label for="imagem" class="col-sm-2 col-form-label">Caminho imagem</label>
                            <div class="col-sm-10">
                                <input type="text" name="imagem" class="form-control" id="imagem">
                            </div>
                        </div>
                        <div class="mb-4 row col-6 mt-5 form-1">
                            <label for="autor" class="col-sm-2 col-form-label">Jornalista</label>
                            <div class="col-sm-10">
                                <input type="text" name="autor" class="form-control" id="autor">
                            </div>
                        </div>
                        <div class="mb-3 col-6">
                            <label for="texto" class="form-label">Texto Notícia</label>
                            <textarea class="form-control" name="texto" id="texto" rows="8"></textarea>
                        </div>

                        <button class="btn btn-warning btn-lg botao">Cadastrar</button>
                    </div>
                 </form>