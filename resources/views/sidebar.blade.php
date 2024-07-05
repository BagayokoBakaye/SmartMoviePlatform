<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MooVee.ai Studio</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
    <script src="{{ asset('js/script.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <div class="logo">
            <img src="smp-logo.png" alt="SMP">
        </div>
        <nav class="menu">
        <ul>
       
        <a href="{{ url('/aiprompt') }}"> <li class="{{ request()->is('aiprompt') ? 'active' : '' }}">AI prompt</li></a>  
        <a href="{{ url('/imagemotion') }}"> <li class="{{ request()->is('imagemotion') ? 'active' : '' }}">Image Motion AI</li></a>  
        <a href="{{ url('/createnew') }}"> <li class="{{ request()->is('createnew*') ? 'active' : '' }}"> <i class="fas fa-plus"></i> Create New</li></a> 
        <a href="{{ url('/createnew') }}"> <li class="{{ request()->is('dfgdf') ? 'active' : '' }}"> <i class="fas fa-key icon"></i> Get API Key</li></a>
        <a href="{{ url('/projects') }}"> <li class="{{ request()->is('projects*') ? 'active' : '' }}"> <i class="fas fa-key icon"></i> My Library</li></a>
           
            <li class="{{ request()->is('home') ? 'active' : '' }}">Getting Started</li>
            <li class="{{ request()->is('home') ? 'active' : '' }}">Documentation</li>
            <li class="{{ request()->is('home') ? 'active' : '' }}">Prompt Gallery</li>
            <li class="{{ request()->is('home') ? 'active' : '' }}">Discord Community</li>
        <!-- Add more menu items as needed -->
    </ul>
            
        </nav>
        <footer>
            <button class="menu-item" onclick="openPage(event, 'ImageMotionAI', 'settings.php')"">Settings</button>
    
        </footer>
    </div>
    
</body>
</html>
