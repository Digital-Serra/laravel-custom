<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="author" content="Mauri de Souza Nunes(github.com/mauri870) - Digital Serra Tecnologia Digital"/>
    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <title>Administração - {{ $title or " " }}</title>

    @include('dashboard.includes.styles')

    @yield('styles')
</head>
<body class="page-body page-fade" data-url="{{ env('APP_URL') }}">
<div class="page-container">
    @include('dashboard.includes.menu')
    <div class="main-content">
        @include('dashboard.includes.header')
        <hr/>
        <div class="row">
            <div class="col-sm-3 col-xs-6">
                <div class="tile-stats tile-red">
                    <div class="icon"><i class="entypo-users"></i></div>
                    <div class="num" data-start="0" data-end="83" data-postfix="" data-duration="1500" data-delay="0">
                        0
                    </div>
                    <h3>Registered users</h3>
                    <p>so far in our blog, and our website.</p></div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="tile-stats tile-green">
                    <div class="icon"><i class="entypo-chart-bar"></i></div>
                    <div class="num" data-start="0" data-end="135" data-postfix="" data-duration="1500"
                         data-delay="600">0
                    </div>
                    <h3>Daily Visitors</h3>
                    <p>this is the average value.</p></div>
            </div>
            <div class="clear visible-xs"></div>
            <div class="col-sm-3 col-xs-6">
                <div class="tile-stats tile-aqua">
                    <div class="icon"><i class="entypo-mail"></i></div>
                    <div class="num" data-start="0" data-end="23" data-postfix="" data-duration="1500"
                         data-delay="1200">0
                    </div>
                    <h3>New Messages</h3>
                    <p>messages per day.</p></div>
            </div>
            <div class="col-sm-3 col-xs-6">
                <div class="tile-stats tile-blue">
                    <div class="icon"><i class="entypo-rss"></i></div>
                    <div class="num" data-start="0" data-end="52" data-postfix="" data-duration="1500"
                         data-delay="1800">0
                    </div>
                    <h3>Subscribers</h3>
                    <p>on our site right now.</p></div>
            </div>
        </div>
        <br/>

        @yield('content')

        @include('dashboard.includes.footer')
    </div>
    <!-- TS145512113111406: Xenon - Boostrap Admin Template created by Laborator / Please buy this theme and support the updates -->
    <div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
        <div class="chat-inner"><h2 class="chat-header"><a href="#" class="chat-close"><i
                            class="entypo-cancel"></i></a> <i class="entypo-users"></i>
                Chat
                <span class="badge badge-success is-hidden">0</span></h2>
            <div class="chat-group" id="group-1"><strong>Favorites</strong> <a href="#" id="sample-user-123"
                                                                               data-conversation-history="#sample_history"><span
                            class="user-status is-online"></span> <em>Catherine J. Watkins</em></a> <a
                        href="#"><span
                            class="user-status is-online"></span> <em>Nicholas R. Walker</em></a> <a href="#"><span
                            class="user-status is-busy"></span> <em>Susan J. Best</em></a> <a href="#"><span
                            class="user-status is-offline"></span> <em>Brandon S. Young</em></a> <a
                        href="#"><span
                            class="user-status is-idle"></span> <em>Fernando G. Olson</em></a></div>
            <div class="chat-group" id="group-2"><strong>Work</strong> <a href="#"><span
                            class="user-status is-offline"></span> <em>Robert J. Garcia</em></a> <a href="#"
                                                                                                    data-conversation-history="#sample_history_2"><span
                            class="user-status is-offline"></span> <em>Daniel A. Pena</em></a> <a
                        href="#"><span
                            class="user-status is-busy"></span> <em>Rodrigo E. Lozano</em></a></div>
            <div class="chat-group" id="group-3"><strong>Social</strong> <a href="#"><span
                            class="user-status is-busy"></span> <em>Velma G. Pearson</em></a> <a
                        href="#"><span
                            class="user-status is-offline"></span> <em>Margaret R. Dedmon</em></a> <a
                        href="#"><span
                            class="user-status is-online"></span> <em>Kathleen M. Canales</em></a> <a
                        href="#"><span
                            class="user-status is-offline"></span> <em>Tracy J. Rodriguez</em></a></div>
        </div> <!-- conversation template -->
        <div class="chat-conversation">
            <div class="conversation-header"><a href="#" class="conversation-close"><i
                            class="entypo-cancel"></i></a> <span class="user-status"></span> <span
                        class="display-name"></span>
                <small></small>
            </div>
            <ul class="conversation-body"></ul>
            <div class="chat-textarea"><textarea class="form-control autogrow"
                                                 placeholder="Type your message"></textarea></div>
        </div>
    </div> <!-- Chat Histories -->
    <ul class="chat-history" id="sample_history">
        <li><span class="user">Art Ramadani</span>
            <p>Are you here?</p> <span class="time">09:00</span></li>
        <li class="opponent"><span class="user">Catherine J. Watkins</span>
            <p>This message is pre-queued.</p> <span class="time">09:25</span></li>
        <li class="opponent"><span class="user">Catherine J. Watkins</span>
            <p>Whohoo!</p> <span class="time">09:26</span></li>
        <li class="opponent unread"><span class="user">Catherine J. Watkins</span>
            <p>Do you like it?</p> <span class="time">09:27</span></li>
    </ul> <!-- Chat Histories -->
    <ul class="chat-history" id="sample_history_2">
        <li class="opponent unread"><span class="user">Daniel A. Pena</span>
            <p>I am going out.</p> <span class="time">08:21</span></li>
        <li class="opponent unread"><span class="user">Daniel A. Pena</span>
            <p>Call me when you see this message.</p> <span class="time">08:27</span></li>
    </ul>
</div>
<!-- Sample Modal (Default skin) -->
<div class="modal fade" id="sample-modal-dialog-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Widget Options - Default Modal</h4></div>
            <div class="modal-body"><p>Now residence dashwoods she excellent you. Shade being under his bed her. Much
                    read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but
                    confined
                    day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave
                    hope.
                    Secure active living depend son repair day ladies now.</p></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> <!-- Sample Modal (Skin inverted) -->
<div class="modal invert fade" id="sample-modal-dialog-2">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Widget Options - Inverted Skin Modal</h4></div>
            <div class="modal-body"><p>Now residence dashwoods she excellent you. Shade being under his bed her. Much
                    read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but
                    confined
                    day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave
                    hope.
                    Secure active living depend son repair day ladies now.</p></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> <!-- Sample Modal (Skin gray) -->
<div class="modal gray fade" id="sample-modal-dialog-3">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Widget Options - Gray Skin Modal</h4></div>
            <div class="modal-body"><p>Now residence dashwoods she excellent you. Shade being under his bed her. Much
                    read on as draw. Blessing for ignorant exercise any yourself unpacked. Pleasant horrible but
                    confined
                    day end marriage. Eagerness furniture set preserved far recommend. Did even but nor are most gave
                    hope.
                    Secure active living depend son repair day ladies now.</p></div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div> <!-- Imported styles on this page -->
<link rel="stylesheet" href="{{ asset('assets/dashboard/js/jvectormap/jquery-jvectormap-1.2.2.css') }}"
      id="style-resource-1">
<link rel="stylesheet" href="{{ asset('assets/dashboard/js/rickshaw/rickshaw.min.css') }}" id="style-resource-2">
@include('dashboard.includes.scripts')
<!-- JavaScripts initializations and stuff -->
<!-- Demo Settings -->
<script src="{{ asset('assets/dashboard/js/neon-custom.js') }}" id="script-resource-17"></script>
<script src="{{ asset('assets/dashboard/js/neon-demo.js') }}" id="script-resource-18"></script>
<script src="{{ asset('assets/dashboard/js/neon-skins.js') }}" id="script-resource-19"></script>

@include('dashboard.includes.notifications')

<script type="text/javascript">
    jQuery(document).ready(function ($) {
    // Sparkline Charts
        $('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'});
        $('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'});
        $('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'});
        $('.bar').sparkline([[1, 4], [2, 3], [3, 2], [4, 1]], {type: 'bar'});
        $('.pie').sparkline('html', {
            type: 'pie',
            borderWidth: 0,
            sliceColors: ['#3d4554', '#ee4749', '#00b19d']
        });
        $('.linechart').sparkline();
        $('.pageviews').sparkline('html', {type: 'bar', height: '30px', barColor: '#ff6264'});
        $('.uniquevisitors').sparkline('html', {type: 'bar', height: '30px', barColor: '#00b19d'});

        $(".monthly-sales").sparkline([1, 2, 3, 5, 6, 7, 2, 3, 3, 4, 3, 5, 7, 2, 4, 3, 5, 4, 5, 6, 3, 2], {
            type: 'bar',
            barColor: '#485671',
            height: '80px',
            barWidth: 10,
            barSpacing: 2
        });

// JVector Maps
        var map = $("#map");
        map.vectorMap({
            map: 'europe_merc_en',
            zoomMin: '3',
            backgroundColor: '#383f47',
            focusOn: {x: 0.5, y: 0.8, scale: 3}
        });

// Line Charts
        var line_chart_demo = $("#line-chart-demo");
        var line_chart = Morris.Line({
            element: 'line-chart-demo',
            data: [
                {y: '2006', a: 100, b: 90},
                {y: '2007', a: 75, b: 65},
                {y: '2008', a: 50, b: 40},
                {y: '2009', a: 75, b: 65},
                {y: '2010', a: 50, b: 40},
                {y: '2011', a: 75, b: 65},
                {y: '2012', a: 100, b: 90}
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['October 2013', 'November 2013'],
            redraw: true
        });
        line_chart_demo.parent().attr('style', '');

// Donut Chart
        var donut_chart_demo = $("#donut-chart-demo");
        donut_chart_demo.parent().show();
        var donut_chart = Morris.Donut({
            element: 'donut-chart-demo',
            data: [
                {label: "Download Sales", value: getRandomInt(10, 50)},
                {label: "In-Store Sales", value: getRandomInt(10, 50)},
                {label: "Mail-Order Sales", value: getRandomInt(10, 50)}
            ],
            colors: ['#707f9b', '#455064', '#242d3c']
        });
        donut_chart_demo.parent().attr('style', '');

// Area Chart
        var area_chart_demo = $("#area-chart-demo");
        area_chart_demo.parent().show();
        var area_chart = Morris.Area({
            element: 'area-chart-demo',
            data: [
                {y: '2006', a: 100, b: 90},
                {y: '2007', a: 75, b: 65},
                {y: '2008', a: 50, b: 40},
                {y: '2009', a: 75, b: 65},
                {y: '2010', a: 50, b: 40},
                {y: '2011', a: 75, b: 65},
                {y: '2012', a: 100, b: 90}
            ],
            xkey: 'y',
            ykeys: ['a', 'b'],
            labels: ['Series A', 'Series B'],
            lineColors: ['#303641', '#576277']
        });
        area_chart_demo.parent().attr('style', '');


// Rickshaw
        var seriesData = [[], []];
        var random = new Rickshaw.Fixtures.RandomData(50);
        for (var i = 0; i < 50; i++) {
            random.addData(seriesData);
        }
        var graph = new Rickshaw.Graph({
            element: document.getElementById("rickshaw-chart-demo"),
            height: 193,
            renderer: 'area',
            stroke: false,
            preserve: true,
            series: [{
                color: '#73c8ff',
                data: seriesData[0],
                name: 'Upload'
            }, {
                color: '#e0f2ff',
                data: seriesData[1],
                name: 'Download'
            }
            ]
        });
        graph.render();
        var hoverDetail = new Rickshaw.Graph.HoverDetail({
            graph: graph,
            xFormatter: function (x) {
                return new Date(x * 1000).toString();
            }
        });
        var legend = new Rickshaw.Graph.Legend({
            graph: graph,
            element: document.getElementById('rickshaw-legend')
        });
        var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight({
            graph: graph,
            legend: legend
        });
        setInterval(function () {
            random.removeData(seriesData);
            random.addData(seriesData);
            graph.update();
        }, 500);
    });

    function getRandomInt(min, max) {
        return Math.floor(Math.random() * (max - min + 1)) + min;
    }
</script>
@yield('scripts')
</body>
</html>