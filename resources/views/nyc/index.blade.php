<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TEAM NYC's</title>
    <link rel="manifest" href="/manifest.json">
    <link rel="stylesheet" href="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <style>
        .aqua-blue th {
            background-color: #1BB9ED !important;
            border-color: #fff !important;
        }
        body { font-size: 1.5rem;}
        #goFS {
            position: absolute;
            bottom: 20px;
            right: 20px;
        }
        .noweight {
            font-weight: 400 !important;
        }
        table {
            width: 100%;
        }
        #main-table {
            height: 100vh;
        }
        .addred {
            color: red;
        }
    </style>
</head>
<body id="result"> 
    <div class="fluid-container">
        <table class="table table-bordered" id="main-table">
            <thead class="thead-dark aqua-blue">
                <tr>
                    <th scope="col">Sale<span class="float-right noweight">NYC</span></th>
                    <th scope="col"><span class="float-right noweight">NYC</span></th>
                    <th scope="col">Leasing<span class="float-right noweight">NYC</span></th>
                    <th scope="col">Off-plan<span class="float-right noweight">NYC</span></th>
                    <th scope="col">International<span class="float-right noweight">NYC</span></th>
                </tr>
            </thead>
            <tbody>
            
            <tr>
                <td>
                    <table>
                        @foreach($datas as $data)
                            @if($data['department'] == 'Secondary Sales')
                                @foreach($data['nyc'] as $nyc)
                                    @if($nyc['full_name'] != 'Dan McGeachy')
                                    <tr>
                                            <td><span>{{ $nyc['full_name'] }}</span> 
                                                @if($nyc['count'] >= 5 )
                                                    <span class="float-right noweight addred">{{ $nyc['count'] }}</span>
                                                @else
                                                    <span class="float-right noweight">{{ $nyc['count'] }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        
                    </table>
                </td>
                <td>
                    <table>
                        @foreach($datas as $data)
                            @if($data['department'] == 'Team Paul')
                                @foreach($data['nyc'] as $nyc)
                                    @if($nyc['full_name'] != 'Paul Christodoulou')
                                    <tr>
                                            <td><span>{{ $nyc['full_name'] }}</span> 
                                                @if($nyc['count'] >= 5 )
                                                    <span class="float-right noweight addred">{{ $nyc['count'] }}</span>
                                                @else
                                                    <span class="float-right noweight">{{ $nyc['count'] }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        
                    </table>
                </td>

                <td>
                    <table>
                        @foreach($datas as $data)
                            @if($data['department'] == 'Leasing/PM Department')
                                @foreach($data['nyc'] as $nyc)
                                @if($nyc['full_name'] != 'Emma Jayne Main')
                                        <tr>
                                            <td><span>{{ $nyc['full_name'] }}</span> 
                                                @if($nyc['count'] >= 5 )
                                                    <span class="float-right noweight addred">{{ $nyc['count'] }}</span>
                                                @else
                                                    <span class="float-right noweight">{{ $nyc['count'] }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        
                    </table>
                </td>

                <td>
                    <table>
                        @foreach($datas as $data)
                            @if($data['department'] == 'Off-Plan')
                                @foreach($data['nyc'] as $nyc)
                                <tr>
                                            <td><span>{{ $nyc['full_name'] }}</span> 
                                                @if($nyc['count'] >= 5 )
                                                    <span class="float-right noweight addred">{{ $nyc['count'] }}</span>
                                                @else
                                                    <span class="float-right noweight">{{ $nyc['count'] }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                @endforeach
                            @endif
                        @endforeach
                        
                    </table>
                </td>
                <td>
                    <table>
                        @foreach($datas as $data)
                            @if($data['department'] == 'International')
                                @foreach($data['nyc'] as $nyc)
                                    @if($nyc['full_name'] != 'Paul Christodoulou')
                                    <tr>
                                            <td><span>{{ $nyc['full_name'] }}</span> 
                                                @if($nyc['count'] >= 5 )
                                                    <span class="float-right noweight addred">{{ $nyc['count'] }}</span>
                                                @else
                                                    <span class="float-right noweight">{{ $nyc['count'] }}</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endif
                        @endforeach
                        
                    </table>
                </td>
            </tr>

            </tbody>
        </table>




    </div>


        <svg id="goFS" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
        </svg>

        <script src="//code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        var goFS = document.getElementById("goFS");
        goFS.addEventListener('click', toggleFullScreen);
        
        function toggleFullScreen() {
            const elem = document.documentElement;
            const rfs = elem.requestFullscreen || elem.webkitRequestFullScreen || elem.mozRequestFullScreen || elem.msRequestFullscreen;
            rfs.call(elem);
        }


        jQuery(function(){

            jQuery.ajaxSetup ({
            cache: false
        });


        var loadUrl = "https://aquaproperties.app/api/nyc";

        setTimeout(function(){
            jQuery("#result").load(loadUrl);
        }, 500);


        // end  
        });
    </script>

    

</body>
</html>