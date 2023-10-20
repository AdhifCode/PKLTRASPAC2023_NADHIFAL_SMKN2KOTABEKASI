<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Soal : Ada 3 contoh fungsi aktivasi yang populer, buatlah contoh program seperti dibawah ini menggunakan php native!</h3>
    <hr>
    
    <h1>Implementasi Fungsi Aktivasi</h1>

    <div>           
        <form action="index.php" method="post">
            <table style="width: 50%;">
                <tbody>
                <tr>
                    <td>
                        <input type="number" name="in" value="<?php echo isset($_POST['in']) ? $_POST['in'] : ''; ?>">
                    </td>
                    <td>
                        <select name="fn">
                            <option value="relu" <?php echo isset($_POST['fn']) && $_POST['fn'] === 'relu' ? 'selected' : ''; ?>>ReLU</option>
                            <option value="sigmoid" <?php echo isset($_POST['fn']) && $_POST['fn'] === 'sigmoid' ? 'selected' : ''; ?>>Sigmoid</option>
                            <option value="tanh" <?php echo isset($_POST['fn']) && $_POST['fn'] === 'tanh' ? 'selected' : ''; ?>>Tanh</option>
                        </select>
                    </td>
                    <td>
                        <input type="submit" value="Hitung Output" name="do_hitung">
                    </td>
                    <td>
                        <input type="number" name="out" value="<?php echo isset($_POST['do_hitung']) ? calculateOutput($_POST['fn'], $_POST['in']) : ''; ?>" readonly>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>

    <?php
    function calculateOutput($functionName, $inputValue) {
        if ($functionName === 'relu') {
            return max(0, $inputValue);
        } elseif ($functionName === 'sigmoid') {
            return 1 / (1 + exp(-$inputValue));
        } elseif ($functionName === 'tanh') {
            return tanh($inputValue);
        } else {
            return 'Pilih fungsi aktivasi yang rill coy.';
        }
    }
    ?>
</body>
</html>
