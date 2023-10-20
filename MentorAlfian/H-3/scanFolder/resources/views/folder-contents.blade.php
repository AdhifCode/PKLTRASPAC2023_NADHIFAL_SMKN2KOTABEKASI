<!DOCTYPE html>
<html>
<head>
    <title>Banggg Udah Bangg</title>
</head>
<body>
    <h1>Folder Contents for{{ $folderPath }}</h1>
    
    <h2>Folders:</h2>
    <table border="1">
        <tr>
            <th>Folder Name</th>
        </tr>
        @foreach ($folders as $folder)
            <tr>
                <td>{{ $folder }}</td>
            </tr>
        @endforeach
    </table>
    
    <h2>Files:</h2>
    <table border="1">
        <tr>
            <th>File Name</th>
        </tr>
        @foreach ($files as $file)
            <tr>
                <td>{{ $file }}</td>
            </tr>
        @endforeach
    </table>
    
    <h2>Images:</h2>
    <table border="1">
        <tr>
            <th>Image Name</th>
        </tr>
        @foreach ($images as $image)
            <tr>
                <td>{{ $image }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
