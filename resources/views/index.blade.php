<!DOCTYPE html>
<html lang="pt-BR">

  <head>
    <meta charset="utf-8">
    <title>Heróis favoritos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  </head>

  <body class="bg-dark">
    <div class="container-fluid">
      <div class="row">
        @foreach ($listaDeHerois as $heroi)
          <div class="col-12 col-sm-6 col-md-4">
            <div class="card h-100">
              <img src="{{ $heroi->imagem }}" class="card-img-top" alt="Imagem de {{ $heroi->nome }}">
              <div class="card-body text-center">
                <h5 class="card-title fs-2">Herói: {{ $heroi->nome }}</h5>
                <p class="card-text fs-5 mt-2">{{ $heroi->descricao }}</p>
              </div>
              <button type="button" class="btn btn-primary fs-4" data-bs-toggle="modal" data-bs-target="#modal{{ $heroi->id }}">
                Históriass de {{ $heroi->nome }}
              </button>
              <div class="modal fade" id="modal{{ $heroi->id }}" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title fs-4" id="modalLabel">Algumas história no qual {{ $heroi->nome }} está presente:</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      <ul class="list-group list-group-flush fs-5">
                        @foreach ($heroi->historias as $historia)
                        <li class="list-group-item text-center border-0">{{ $historia }}</li>
                        @endforeach
                      </ul>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Legal!</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </body>
</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
