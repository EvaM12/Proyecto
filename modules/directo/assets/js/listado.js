console.log('hola');

            // $.ajax({
            //     url: "https://site.api.espn.com/apis/site/v2/sports/soccer/uefa.champions/scoreboard/687597",
            //     method: "GET"
            // }).then(function (response) {
            //     console.log('entro');
            //     if (response.status.type.state == 'in') {
            //         console.log('el partido se esta jugando en ' + response.status.type.name);
            //         reloj = response.status.displayColock;
            //         tiempo = response.status.type.description;
            //         estadio = response.competitions[0].venue.fullName;
            //         ciudad = response.competitions[0].venue.address.city;
            //         pais = response.competitions[0].venue.address.country;

            //         for(i = 0; i<response.competitions[0].details.length(); i++){
            //             $('.directo').append();
            //             response.competitions[0].details[i].type.text
            //             response.competitions[0].details[i].clock.displayValue
            //             response.competitions[0].details[i].athletesInvolved[0].displayName
            //             response.competitions[0].details[i].athletesInvolved[0].jersey
            //         }
            //     }
            // });