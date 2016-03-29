<style>

</style>
<script>
    export default {
        data() {
          return {
              url: 'http://developers.agenciaideias.com.br/tempo/json/',
              weather: ''
          }
        },
        ready: function() {
            self = this;
            this.$http({url: self.url + 'bento gonçalves-RS', method: 'GET'}).then(function (response) {
                self.weather = response.data;
            }, function (response) {
                // error callback
            });

        }
    }

</script>
<template>
    <div>
        <h1>Bento Gonçalves - RS</h1>
        <div class="col-sm-2">
            <img class="img-responsive" src="{{ weather.agora.imagem }}" alt="">
        </div>
        <div class="col-sm-10">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Data</th>
                        <th>Descrição</th>
                        <th>Temperatura</th>
                        <th>Umidade</th>
                        <th>Nascer do Sol</th>
                        <th>Pôr do Sol</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>{{ weather.agora.data_hora }}</td>
                        <td>{{ weather.agora.descricao }}</td>
                        <td>{{ weather.agora.temperatura }} °C</td>
                        <td>{{ weather.agora.umidade }}</td>
                        <td>{{ weather.agora.nascer_do_sol }}</td>
                        <td>{{ weather.agora.por_do_sol }}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</template>