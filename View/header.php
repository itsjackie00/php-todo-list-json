<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Google font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&family=Mochiy+Pop+One&display=swap"
    rel="stylesheet">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <!-- CSS -->
  <link rel="stylesheet" href="css/style.css"/>
  <!-- Axios -->
  <script src="https://unpkg.com/axios@1.6.7/dist/axios.min.js"></script>
  <!-- VueJS -->
  <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
  <!-- JS -->
  <script src="js/script.js" type="module" defer></script>
  
 
  <title>Oreo</title>
</head>
<body>
  <div id="app">
    <!-- header -->
    <header class="bg-light p-4 d-flex justify-content-between">
      <div class="d-flex align-items-center h-bg">
        <img class="w-25 me-3" src="https://i.pinimg.com/originals/a1/a1/98/a1a19896946aac042da2df47b7b57181.gif"
          alt="Kirby gif">
        <h1>Oreo to-do-list</h1>
      </div>
      <div class="d-flex align-items-center">
        <div>
          <select name="done" id="done" v-model="done">
            <option value="">tutto</option>
            <option value="0">fatto</option>
            <option value="1">da fare</option>
          </select>
        </div>
      </div>
    </header>