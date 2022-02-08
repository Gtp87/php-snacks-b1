<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- vue js -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="app">
        <span>Scegli carburante</span>
        <select @change="carsFilter()" v-model="filterFuel" name="carburante" id="carburante" >
            <option value="all">All</option>
            <option value="diesel">Diesel</option>
            <option value="benzina">Benzina</option>
        </select>
        <span>Scegli colore</span>
        <select @change="carsFilter()" v-model="filterColor" name="colore" id="colore" >
            <option value="all">All</option>
            <option value="nero">Nero</option>
            <option value="bianco">Bianco</option>
            <option value="grigio">Grigio</option>
            <option value="rosso">Rosso</option>
            <option value="verde">Verde</option>
        </select>
        <div v-for="car in arrayFiltered">
            <img :src="car.foto" alt="">
            <h3>{{car.marca}}</h3>
            <h3>{{car.modello}}</h3>
            <h3>{{car.prezzo}}</h3>
            <h3>{{car.trazione}}</h3>
            <h3>{{car.km}}</h3>
            <h3>{{car.targa}}</h3>
            <h3>{{car.immatricolazione}}</h3>
            <h3>{{car.colore}}</h3>
            <h3>{{car.carburante}}</h3>
            
        </div> 
    </div>

    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- js -->
    <script src="js/script.js"></script>
</body>
</html>