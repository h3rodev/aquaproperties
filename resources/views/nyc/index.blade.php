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
        body { font-size: 2rem;}
        #goFS {
            position: absolute;
            bottom: 20px;
            right: 20px;
        }
        .noweight {
            font-weight: 400 !important;
        }
    </style>
</head>
<body>
    <div class="fluid-container">
        <table class="table table-bordered">
            <thead class="thead-dark aqua-blue">
                <tr>
                    <th scope="col">Team Paul<span class="float-right noweight">NYC</span></th>
                    <th scope="col">Off-plan<span class="float-right noweight">NYC</span></th>
                    <th scope="col">Secondary Sales<span class="float-right noweight">NYC</span></th>
                    <th scope="col">Leasing / PM<span class="float-right noweight">NYC</span></th>
                    <th scope="col">International<span class="float-right noweight">NYC</span></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <span>Yifeng Jiang</span><span class="float-right">1</span>
                    </td>
                    <td>
                       <span>Vitalii Grytsenko</span><span class="float-right">1</span>
                    </td>
                    <td>
                        <span>Mustapha Majdi</span><span class="float-right">1</span>
                    </td>
                    <td>
                        <span>Syed MUhammad Ali</span><span class="float-right">1</span>
                    </td>
                    <td>
                        <span>Sam Prirzad</span><span class="float-right">1</span>
                    </td>
                </tr>
            </tbody>
        </table>


    </div>


        <svg id="goFS" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
        </svg>

    <script>
        var goFS = document.getElementById("goFS");
        goFS.addEventListener('click', toggleFullScreen);
        
        function toggleFullScreen() {
            const elem = document.documentElement;
            const rfs = elem.requestFullscreen || elem.webkitRequestFullScreen || elem.mozRequestFullScreen || elem.msRequestFullscreen;
            rfs.call(elem);
        }

    </script>
    <script src="//code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="//stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>