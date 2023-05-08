<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Dischi JSON</title>

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- STYLE-CSS -->
    <link rel="stylesheet" href="css/style.css">

    <!-- FONT-AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- VUE-JS -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <!-- AXIOS -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

</head>

<body>
    <div id="app">
        <header class="d-flex align-items-center justify-content-center">
            <div class="container">
                <img src="img/logo-small.svg" alt="Logo">
            </div>
        </header>
        <main>
            <div class="container pt-4">
                <div class="row row-cols-3 px-5">
                    <div v-for="(disk, index) in dischi" :key="index" class="col p-4" @click="details(index)">
                        <div class="card text-center">
                            <img :src="disk.poster" class="card-img-top pt-4 px-5" alt="Copertina">
                            <div class="card-body">
                                <h5 class="card-title">{{ disk.title }}</h5>
                                <p class="card-text">{{ disk.author }}</p>
                                <h5 class="card-title">{{ disk.year }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden d-flex align-items-center justify-content-center" v-if="clicked">
                <i class="fa-solid fa-circle-xmark" @click="clicked = false"></i>
                <div class="card text-center">
                    <img :src="curCard.poster" class="card-img-top pt-4 px-5" alt="Copertina">
                    <div class="card-body">
                        <h5 class="card-title">{{ curCard.title }}</h5>
                        <p class="card-text">{{ curCard.author }}</p>
                        <h5 class="card-title">{{ curCard.year }}</h5>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <!-- SCRIPT-JS -->
    <script src="js/script.js"></script>
</body>

</html>