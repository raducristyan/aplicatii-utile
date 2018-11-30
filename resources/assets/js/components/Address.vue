<script>
export default {
    name: 'Address',
    data() {
        return { 
            cities: [],
            selected: {
                county: '',
                city: ''
            },
            showCities: 'disabled'
        }
    },
    methods: {
        getCities: function () {
            this.showCities = false;
            this.selected.city = "";

            axios.post('/api/county/cities', {'county_id': this.selected.county})
                    .then((data) => {
                    console.log(data);
                    this.cities = data.data;
                    if (this.selected.county) {
                        this.showCities = true;
                    }
                    this.showHideCities();
                })
                    .catch((error) => {
                console.log(error)
            })
        }
    }
}
</script>

