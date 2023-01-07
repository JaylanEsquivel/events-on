<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" integrity="sha512-Ez0cGzNzHR1tYAv56860NLspgUGuQw16GiOOp/I2LuTmpSK9xDXlgJz3XN4cnpXWDmkNBKXR/VDMTCnAaEooxA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="/dist/css/styles.css">
        <script src="/dist/js/myfunctions.js"></script>
    </head>
    <body>


        <header>
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid"  id="navbar">
                  <a class="navbar-brand" href="#">Logo</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">

                      <li class="nav-item">
                        <a class="nav-link" href="/">Eventos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/event/create">Criar Eventos</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Entrar</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                      </li>

                    </ul>
                  </div>
                </div>
              </nav>

        </header>

        <main>
            <div class="container">

                    @yield('content')

            </div>
        </main>


        <footer>
            <p>&copy; Jaylan 2023 <ion-icon name="heart"></ion-icon></p>
        </footer>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js" integrity="sha512-EKWWs1ZcA2ZY9lbLISPz8aGR2+L7JVYqBAYTq5AXgBkSjRSuQEGqWx8R1zAX16KdXPaCjOCaKE8MCpU0wcHlHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>
