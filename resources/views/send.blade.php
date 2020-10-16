<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>正在導向到綠界......</title>
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC" rel="stylesheet">
    <style>
        body {
            padding: 1em;
            color: #3C651C;
            text-align: center;
            width: 80%;
            margin: 0 auto;
            font-family: 'Noto Sans TC', sans-serif;
        }
        .loader {
            margin: 0 auto 1em;
            height: 100px;
            width: 20%;
            text-align: center;
            padding: 1em;
            display: inline-block;
            vertical-align: top;
        }
        /*
          Set the color of the icon
        */
        svg path,
        svg rect {
            fill: #3C651C;
        }
    </style>
</head>
<body>
    <h1>正在導向到綠界 ......</h1>
    <form action="{{ $ServiceURL }}" id="form" method="post" hidden>
        @foreach($parameters as $key => $parameter)
            <input type="hidden" name="{{ $key }}" value="{{ $parameter }}">
        @endforeach
    </form>
    <div class="loader" title="7">
        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                width="24px" height="30px" viewBox="0 0 24 30" style="enable-background:new 0 0 50 50;" xml:space="preserve">
            <rect x="0" y="10" width="4" height="10" fill="#333" opacity="0.2">
                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0s" dur="0.6s" repeatCount="indefinite"/>
                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0s" dur="0.6s" repeatCount="indefinite"/>
                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0s" dur="0.6s" repeatCount="indefinite"/>
            </rect>
            <rect x="8" y="10" width="4" height="10" fill="#333" opacity="0.2">
                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.15s" dur="0.6s" repeatCount="indefinite"/>
                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite"/>
                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.15s" dur="0.6s" repeatCount="indefinite"/>
            </rect>
            <rect x="16" y="10" width="4" height="10" fill="#333" opacity="0.2">
                <animate attributeName="opacity" attributeType="XML" values="0.2; 1; .2" begin="0.3s" dur="0.6s" repeatCount="indefinite"/>
                <animate attributeName="height" attributeType="XML" values="10; 20; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite"/>
                <animate attributeName="y" attributeType="XML" values="10; 5; 10" begin="0.3s" dur="0.6s" repeatCount="indefinite"/>
            </rect>
        </svg>
    </div>
    <script>
        setTimeout(function(){
            document.getElementById('form').submit();
        }, 1000);
    </script>
</body>
</html>