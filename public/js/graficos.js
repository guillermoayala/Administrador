
                    //Grafico de tareas
                    var ctx = document.getElementById('myChart').getContext('2d');
                    var chart = new Chart(ctx, {
                   // The type of chart we want to create
                               type: 'line',
          
                   // The data for our dataset
                               data: {
                               labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
                               datasets: [{
                                      label: 'Tareas por mes',
                                      lineTension: 0.3,
                                      backgroundColor: "rgba(2,117,216,0.2)",
                                      borderColor: "rgba(2,117,216,1)",
                                      pointRadius: 5,
                                      pointBackgroundColor: "rgba(2,117,216,1)",
                                      pointBorderColor: "rgba(255,255,255,0.8)",
                                      pointHoverRadius: 5,
                                      pointHoverBackgroundColor: "rgba(2,117,216,1)",
                                      pointHitRadius: 50,
                                      pointBorderWidth: 2,
                                      data: [0, 10, 5, 2, 20, 30, 45]
                                   }]
                                  },
          
                              // Configuration options go here
                          options: {}
                      });
          
           
                  //Graficos de proyectos
                      var ctx = document.getElementById('myChart2').getContext('2d');
                      var chart = new Chart(ctx, {
                   // The type of chart we want to create
                               type: 'line',
          
                   // The data for our dataset
                               data: {
                               labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio'],
                               datasets: [{
                                      label: 'Proyectos terminados por mes',
                                      backgroundColor: "rgba(2,117,216,0.2)",
                                      borderColor: "rgba(2,117,216,1)",
                                      pointRadius: 5,
                                      pointBackgroundColor: "rgba(2,117,216,1)",
                                      pointBorderColor: "rgba(255,255,255,0.8)",
                                      pointHoverRadius: 5,
                                      pointHoverBackgroundColor: "rgba(2,117,216,1)",
                                      pointHitRadius: 50,
                                      pointBorderWidth: 2,
                                      data: [1, 2, 4, 2, 1, 5, 1]
                                   }]
                                  },
          
                              // Configuration options go here
                          options: {}
                      });