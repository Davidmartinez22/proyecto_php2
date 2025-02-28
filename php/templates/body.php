<body>
    <div>
        <img src="<?= $data["poster_url"]?>" alt="<?= $data["title"]?>">
        <h1><?= $data["title"] ?></h1>
        <p><?= $data["type"] ?></p>
        <p><?= $data["release_date"] ?></p>
        <p><?= $data["overview"] ?></p>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div>
    <div>
        <img src="<?= $data["following_production"]["poster_url"]?>" alt="<?= $data["following_production"]["title"]?>">
        <h1><?= $data["following_production"]["title"] ?></h1>
        <p><?= $data["following_production"]["type"] ?></p>
        <p><?= $data["following_production"]["release_date"] ?></p>
        <p><?= $data["following_production"]["overview"] ?></p>
    </div>
</body>


