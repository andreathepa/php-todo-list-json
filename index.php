<?php

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
        <script src='https://unpkg.com/vue@3/dist/vue.global.js'></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <title>Document</title>
    </head>
    <body>
        <div class="wrapper">
            <div id="app">
                <section class="py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h1 class="display-1 text-white">Todo List</h1>
                                <ul class="list-group list-group-flush border-1 border rounded">
                                    <li v-for="(item, index) in todoList" key="index" class="list-group-item"> {{ item }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>
                <div class="section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="input-group mb-3">
                                    <input type="type-text" @keyup.enter="updateList" v-model="todoItem" placeholder="todo" class="form-control">
                                    <button type="button" @click="updateList" class="btn-outline-success" id="button-add">Aggiungi</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <script type="text/javascript" src="./js/script.js"></script>

    </body>
</html>