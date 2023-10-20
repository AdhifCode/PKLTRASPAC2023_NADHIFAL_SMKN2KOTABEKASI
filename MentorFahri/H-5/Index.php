<!DOCTYPE html>
<html>
<head>
    <title>Pilih dan Tampilkan File PHP</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div style="float: left;">
        <form id="fileForm">
            <label for="file">Class DIAGRAM RELATIONSHIP :</label>
            <select name="file" id="fileSelect">
                <option value="Depedency.php">Depedency</option>
                <option value="Association.php">Association</option>
                <option value="Aggregation.php">Aggregation</option>
                <option value="Composition.php">Composition</option>
                <option value="Inheritance.php">Inheritance</option>
                <option value="Realization.php">Realization</option>
            </select>
            <input type="button" value="Jalankan" id="runButton">
        </form>
    </div>
    <div style="float: left; margin-left: 20px;" id="contentDiv">
    </div>

    <script>
        $(document).ready(function() {
            $('#runButton').click(function() {
                var selectedFile = $('#fileSelect').val();
                $.ajax({
                    url: selectedFile,
                    success: function(data) {
                        $('#contentDiv').html(data);
                    },
                    error: function() {
                        $('#contentDiv').html('File tidak ditemukan!');
                    }
                });
            });
        });
    </script>
</body>
</html>
