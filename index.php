<!DOCTYPE html>

<html>

<head>
    <title>REST / HTTP VERB TESTING</title>
    <script>
        var dojoConfig = {
            'parseOnLoad' : true
        };
    </script>
    <script src="//ajax.googleapis.com/ajax/libs/dojo/1.9.1/dojo/dojo.js"></script>

    <style type="text/css">
        <!--
        @import "//ajax.googleapis.com/ajax/libs/dojo/1.9.1/dijit/themes/claro/claro.css";
        -->
    </style>

    <script type="text/javascript">
        function echoResponse(data) {
            alert(data);
        }

        function doRequest(method) {
            alert(method + ' Client Request');
            require(['dojo/request/xhr'], function (xhr){
                xhr('endpoint.php', {
                    handleAs: 'text',
                    method: method
                }).then(echoResponse, echoResponse);
            });
        }
    </script>
</head>

<body class="claro">

<div style="width:50%">
    <h1>Requests</h1>

    <button data-dojo-type="dijit/form/Button" onclick="doRequest('get')">GET</button> <br/>
    <button data-dojo-type="dijit/form/Button" onclick="doRequest('post')">POST</button> <br/>
    <button data-dojo-type="dijit/form/Button" onclick="doRequest('put')">PUT</button> <br/>
    <button data-dojo-type="dijit/form/Button" onclick="doRequest('delete')">DELETE</button> <br/>

</div>

</body>
</html>