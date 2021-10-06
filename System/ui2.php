<!DOCTYPE html>
<html>
<head>
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/@mdi/font@4.x/css/materialdesignicons.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">
</head>


<body>
<div id="app">
  <v-app id="inspire">
    <v-card
      max-width="400"
      class="mx-auto"
    >
      <v-system-bar
        color="pink darken-2"
        dark
      >
        <v-spacer></v-spacer>
  
        <v-icon>mdi-window-minimize</v-icon>
  
        <v-icon>mdi-window-maximize</v-icon>
  
        <v-icon>mdi-close</v-icon>
      </v-system-bar>
  
      <v-app-bar
        dark
        color="pink"
      >
        <v-app-bar-nav-icon></v-app-bar-nav-icon>
  
        <v-toolbar-title>My Music</v-toolbar-title>
  
        <v-spacer></v-spacer>
  
        <v-btn icon>
          <v-icon>mdi-magnify</v-icon>
        </v-btn>
      </v-app-bar>
  
      <v-container>
        <v-row dense>
          <v-col cols="12">
            <v-card
              color="#385F73"
              dark
            >
              <v-card-title class="text-h5">
                Unlimited music now
              </v-card-title>
  
              <v-card-subtitle>Listen to your favorite artists and albums whenever and wherever, online and offline.</v-card-subtitle>
  
              <v-card-actions>
                <v-btn text>
                  Listen Now
                </v-btn>
              </v-card-actions>
            </v-card>
          </v-col>
  
          <v-col
            v-for="(item, i) in items"
            :key="i"
            cols="12"
          >
            <v-card
              :color="item.color"
              dark
            >
              <div class="d-flex flex-no-wrap justify-space-between">
                <div>
                  <v-card-title
                    class="text-h5"
                    v-text="item.title"
                  ></v-card-title>
  
                  <v-card-subtitle v-text="item.artist"></v-card-subtitle>
  
                  <v-card-actions>
                    <v-btn
                      v-if="item.artist === 'Ellie Goulding'"
                      class="ml-2 mt-3"
                      fab
                      icon
                      height="40px"
                      right
                      width="40px"
                    >
                      <v-icon>mdi-play</v-icon>
                    </v-btn>
  
                    <v-btn
                      v-else
                      class="ml-2 mt-5"
                      outlined
                      rounded
                      small
                    >
                      START RADIO
                    </v-btn>
                  </v-card-actions>
                </div>
  
                <v-avatar
                  class="ma-3"
                  size="125"
                  tile
                >
                  <v-img :src="item.src"></v-img>
                </v-avatar>
              </div>
            </v-card>
          </v-col>
        </v-row>
      </v-container>
    </v-card>
  </v-app>
</div>
  
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
  <script src="https://unpkg.com/vue-chartjs/dist/vue-chartjs.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script>
    var times = [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60];
    //Component Total_Accesses ****************************************************
    Vue.component('chart_ta', {
        extends: VueChartJs.Line,
        props: {
            data_ta: {
                type: Array,
            },
        },
        data() {
            return {
                chartdata: {
                    labels: times,
                    datasets: [{
                        label: 'Total_Accesses',
                        backgroundColor: '#f87979',
                        data: this.data_ta
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            }
        },
        methods: {
            refresh_chart: function() {
                setInterval(() => {
                    this.renderChart(this.chartdata, this.options)
                }, 2000)
            }
        },
        mounted() {
            this.renderChart(this.chartdata, this.options)
            this.refresh_chart();
        },
        template: '<div>{{chartdata}}</div>'

    })
      //component Total_kBytes ********************************************************************
    Vue.component('chart_tk', {
        extends: VueChartJs.Line,
        props: {
            data_tk: {
                type: Array,
            },
        },
        data() {
            return {
                chartdata: {
                    labels: times,
                    datasets: [{
                        label: 'Total_kBytes',
                        backgroundColor: '#f87979',
                        data: this.data_tk
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            }

        },
        methods: {
            refresh_chart: function() {
                setInterval(() => {
                    this.renderChart(this.chartdata, this.options)
                }, 2000)
            }
        },
        mounted() {
            this.renderChart(this.chartdata, this.options)
            this.refresh_chart();
        },
        template: '<div>{{chartdata}}</div>'

    })  
  </script>
  <script>
        var times = [0, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 60];
    //Component Total_Accesses ****************************************************
    Vue.component('chart_ta', {
        extends: VueChartJs.Line,
        props: {
            data_ta: {
                type: Array,
            },
        },
        data() {
            return {
                chartdata: {
                    labels: times,
                    datasets: [{
                        label: 'Total_Accesses',
                        backgroundColor: '#f87979',
                        data: this.data_ta
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false
                }
            }
        },
        methods: {
            refresh_chart: function() {
                setInterval(() => {
                    this.renderChart(this.chartdata, this.options)
                }, 2000)
            }
        },
        mounted() {
            this.renderChart(this.chartdata, this.options)
            this.refresh_chart();
        },
        template: '<div>{{chartdata}}</div>'

    })
  </script>

  <script>
    new Vue({
      el: '#app',
      vuetify: new Vuetify(),
      data: () => ({
            drawer: false,
            group: null,
            items: [
              { title: 'Home', icon: 'mdi-home', to:'/'},
              { title: 'Account', icon: 'mdi-account', to:'/account'}
            ],
            data_ta: [],
            data_tk: [],
            items: [
              {
                color: '#1F7087',
                src: 'https://cdn.vuetifyjs.com/images/cards/foster.jpg',
                title: 'Supermodel',
                artist: 'Foster the People',
              },
              {
                color: '#952175',
                src: 'https://cdn.vuetifyjs.com/images/cards/halcyon.png',
                title: 'Halcyon Days',
                artist: 'Ellie Goulding',
              },
            ],
    }),
      methods: {
            getData: function() {
                setInterval(() => {
                    axios.get("data.php").then((response) => {

                        console.log('Total_Accesses:', response.data.Total_Accesses);
                        console.log('Total_kBytes:', response.data.Total_kBytes);

                        //parseInt from response.data
                        var Total_Accesses = parseFloat(response.data.Total_Accesses);
                        var Total_kBytes = parseFloat(response.data.Total_kBytes);

                        //update data
                        var index = 0;
                        if (this.data_ta.length < 13) {
                            //push data
                            this.data_ta.push(Total_Accesses);
                            this.data_tk.push(Total_kBytes);
                        } else {
                            //romove data index 0
                            this.data_ta.splice(index, 1);
                            this.data_tk.splice(index, 1);
                            //push data
                            this.data_ta.push(Total_Accesses);
                            this.data_tk.push(Total_kBytes);
                        }

                        //show data
                        console.log('data_ta', this.data_ta)
                        console.log('data_tk', this.data_tk)

                    }).catch((err) => console.log(err));
                }, 2000); // 5000 =  5 วินาที
            }
        },
        mounted() {
            this.getData()
        }
    })
  </script>
</body>
</html>