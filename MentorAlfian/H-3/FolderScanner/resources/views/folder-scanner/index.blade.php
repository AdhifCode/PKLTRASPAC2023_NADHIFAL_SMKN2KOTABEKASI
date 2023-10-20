
<div class="container">
    @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form method="POST" action="/scan">
        @csrf
        <label for="folder_path">Path Folder:</label>
        <input type="text" name="folder_path" required>
        <button type="submit">Mulai Pemindaian</button>
    </form>
</div>
