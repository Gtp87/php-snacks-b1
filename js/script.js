const App = new Vue(
    {
        el: '#app',
        data: {
        cars: [],
        arrayFiltered: [],
        filterFuel: 'all',
        filterColor: 'all',
        },
        created() {
            // prendo api creata in db.php
        axios.get('http://localhost/php-snacks-b1/server/controller-api.php').then((result) => {
            this.cars = result.data.results;
            this.arrayFiltered = this.cars;
        }).catch((error) => { console.log(error); });
        },
        methods: {
            carsFilter() {
                if (this.filterFuel != 'all' && this.filterColor != 'all') {
                    this.arrayFiltered = this.cars.filter((element) => {
                        return element.colore == this.filterColor && element.carburante == this.filterFuel;
                    });
                } else if (this.filterColor == 'all' && this.filterFuel != 'all') {
                    this.arrayFiltered = this.cars.filter((element) => {
                        return element.carburante == this.filterFuel;
                    });
                } else if (this.filterColor != 'all' && this.filterFuel == 'all') {
                    this.arrayFiltered = this.cars.filter((element) => {
                        return element.colore == this.filterColor;
                    });
                } else {
                    this.arrayFiltered = this.cars;
                }
            },
        }
    }
);