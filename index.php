<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PHP Dischi JSON</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div id="app" v-cloak>
      <header class="text-center my-3">
        <h1>I miei dischi</h1>
      </header>
        <main class="container">
          <div class="row">
            <div v-for="disc in discs" class="col-md-4 g-3">
              <div class="card">
                <img :src="disc.cover" :alt="disc.nome_album" class="card-img">
                <div class="card-body">
                  <h3>{{ disc.nome_album }}</h3>
                  <div>{{ disc.artista }}</div>
                  <div>{{ disc.anno }}</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="index.js"></script>
  </body>
</html>



