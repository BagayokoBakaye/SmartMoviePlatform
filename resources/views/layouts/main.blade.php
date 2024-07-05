<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @include('sidebar') <!-- Include the sidebar partial -->

    @include('rightsidebar')
    <div class="main-content">
       
        @yield('main-content') <!-- Main content section -->
    </div>
    <div class="modal" id="save-prompt-modal">
        <div class="modal-content">
            <!-- resources/views/create_project.blade.php -->
<form action="{{ route('projects.store') }}" method="POST">
    @csrf
    <div>
        <label for="name">tile:</label>
        <input type="text" id="name" name="name" required>
    </div>
    <div>
        <label for="description">Description:</label>
        <textarea id="description" name="description"></textarea>
    </div>
    
            <div class="modal-actions">
                <button class="cancel-btn" onclick="closeModal()">Cancel</button>
                <button type="submit" class='generate-btn'>Create Project</button>
            </div>
            </form>
        </div>
    </div>

    <script>
        function closeModal() {
            document.getElementById('save-prompt-modal').style.display = 'none';
        }
    </script>
</body>
</html>