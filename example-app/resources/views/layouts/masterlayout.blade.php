<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Moyeen kazi-@yield('title','website')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    @stack('style')
    
    <style>

        /* Basic CSS styles for the layout */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        nav {
            background-color: #444;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        nav a {
            color: #fff;
            text-decoration: none;
            padding: 0 10px;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        </style>
</head>
<body>
    <header>
        <h1>Your Website</h1>
    </header>
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
    <div>
        <!-- Your content here -->

   @hasSection ('content')
   @yield('content')    
   @else
   <h2>No content found</h2>    
   @endif     
   
    </div>

    <aside>
        @section('sidebar')
        <ul>
            <li><a href="/">Home</a></li>
                <li><a href="/about">About</a></li>
                    <li> <a href="/contact">Contact</a></li>
        
        </ul>  
        @show
    </aside>
    <footer>
        <p>&copy; 2024 Your Website. All rights reserved.</p>
        <p>Address: 123 Main Street, City, Country</p>
        <p>Email: info@example.com | Phone: +1 123-456-7890</p>
    </footer>

    @stack('scripts')
</body>
</html>