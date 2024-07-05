<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MooVee.ai Studio</title>
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    
    <script src="{{ asset('js/script.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        body {
    font-family: Arial, sans-serif;
}

.sidebar-right {
    width: 250px;
    padding: 15px;
    background-color: #f4f4f4;
    border-left: 1px solid #ccc;
    position: fixed;
    right: 0;
    top: 0;
    height: 100%;
    overflow-y: auto;
}

.divider2 {
    height: 1px;
    background-color: #ccc;
    margin: 15px 0;
}

.user-profile {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
}

.user-profile img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 10px;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropbtn {
    background-color: #4c4c4c;
    color: white;
    padding: 10px;
    
    
    border: none;
    cursor: pointer;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}

.model-selection, .temper-selection {
    margin-bottom: 20px;
}

.model-selection img, .temper-selection img {
    vertical-align: middle;
}

label {
    margin-right: 10px;
}

input[type="range"] {
    width: 100%;
}

    </style>
</head>
<body>
    <div class="right-sidebar">
    <div class="user-profile">
            <!-- User Image -->
          
            <!-- Dropdown for Logout -->
            <div class="dropdown">
                <button class="dropbtn"> {{ Auth::user()->name }}</button>
                <div class="dropdown-content">
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        <div class="divider2"></div>
        <!-- Model Selection -->
        <div class="model-selection">
           
            <label for="model">Model</label>
            <select name="model" id="model">
                <option value="Gemini Pro">Gemini Pro</option>
                <!-- Add more options if needed -->
            </select>
        </div>

        <!-- Temperature Selection -->
        <div class="temper-selection">
            
            <label for="temper">Temperature</label>
            <input type="range">
        </div>
        
    </div>
    
</body>
</html>
