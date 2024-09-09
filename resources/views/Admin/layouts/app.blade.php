<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jewcus Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    

</head>
<body class="bg-gray-300 font-sans leading-normal tracking-normal">
<section>
    
    @include('Admin.layouts.header')
    
    <div class="flex">
        
        @include('Admin.layouts.sidebar')

        <div class=" w-full pt-20 p-8">
            @yield('content')
        </div>
    </div>
</section>
    @yield('js')
</body>
</html>
