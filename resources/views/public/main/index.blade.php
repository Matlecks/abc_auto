<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <title></title>
    {{-- Добавляет css в зависимости от страницы, на которой находишься --}}
    <link rel="stylesheet" href="/assets/css/common.css">

    @php
        $currentUrl = $_SERVER['REQUEST_URI'];
        $urlParts = explode('/', $currentUrl);
        if (isset($urlParts[2])) {
            $page = $urlParts[2];
            echo '<link rel="stylesheet" href="/assets/css/pages/' . $page . '/' . $page . '.css">';
        }
    @endphp
</head>

@include('public.main.header')
@include('public.main.body')
@include('public.main.footer')

</body>

</html>
