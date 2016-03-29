<style>
    .capitalize {
        text-transform: capitalize;
    }
</style>
<script>
    export default {
        props: ['city'],
        data() {
            return {
                url: 'http://developers.agenciaideias.com.br/tempo/json/',
                weather: {}
            }
        },
        ready() {
            self = this;
            this.$http({url: self.url + this.city, method: 'GET'}).then(function (response) {
                self.weather = response.data;
            }, function (response) {
                // error callback
            });

        }
    }

</script>
<template>
    <div class="col-sm-12">
        <div class="panel panel-primary" id="charts_env">
            <div class="panel-heading">
                <div class="panel-title">Tempo</div>
                <div class="panel-options">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#weather" data-toggle="tab">Agora</a></li>
                        <li class=""><a href="#week" data-toggle="tab">Previsão do tempo</a></li>
                    </ul>
                </div>
            </div>
            <div class="panel-body">
                <div class="tab-content">
                    <div class="tab-pane active" id="weather">
                        <h1 class="capitalize">{{ city }}</h1>
                        <h3>Agora</h3>
                        <div class="col-sm-2">
                            <img class="img-responsive" v-bind:src="weather.agora.imagem" alt="">
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
                    <div class="tab-pane" id="week">
                        <h1 class="capitalize">{{ city }}</h1>
                        <h3>Previsão do tempo</h3>
                        <div class="col-sm-12" v-for="item in weather.previsoes">
                            <br>
                            <h3>{{ item.data }}</h3>
                            <div class="col-sm-2">
                                <img class="img-responsive" v-bind:src="item.imagem" alt="">
                            </div>
                            <div class="col-sm-10">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                        <tr>
                                            <th>Previsão</th>
                                            <th>Temperatura Max</th>
                                            <th>Temperatura Min</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>{{ item.descricao }}</td>
                                            <td>{{ item.temperatura_max }} °C</td>
                                            <td>{{ item.temperatura_min}} °C</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>