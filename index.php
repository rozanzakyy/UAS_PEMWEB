<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
    <style>
    /* Styling dasar untuk body */
    body {
        font-family: 'Arial', sans-serif;
        margin: 20px;
        background-color: #f9f9f9;
        color: #333;
        line-height: 1.6;
    }

    /* Judul utama */
    h1 {
        text-align: center;
        color: #444;
        font-size: 2.5em;
        margin-bottom: 20px;
    }

    /* Styling form */
    form {
        background: #ffffff;
        max-width: 500px;
        margin: 0 auto;
        padding: 20px 30px;
        border: 1px solid #ddd;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 1em;
    }

    input[type="radio"],
    input[type="checkbox"] {
        margin-right: 8px;
    }

    button {
        display: inline-block;
        width: 100%;
        padding: 10px 15px;
        font-size: 1em;
        font-weight: bold;
        background-color: #007bff;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #0056b3;
    }

    /* Styling tabel */
    table {
        width: 90%;
        margin: 20px auto;
        border-collapse: collapse;
        background: white;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    table thead {
        background: #007bff;
        color: white;
    }

    table th,
    table td {
        padding: 15px;
        border: 1px solid #ddd;
        text-align: center;
    }

    table th {
        font-size: 1.1em;
        font-weight: bold;
    }

    table tbody tr:hover {
        background: #f1f1f1;
    }

    /* Responsif untuk layar kecil */
    @media (max-width: 600px) {
        body {
            margin: 10px;
        }

        form {
            padding: 15px;
        }

        button {
            font-size: 0.9em;
        }

        table {
            font-size: 0.9em;
        }
    }
    <style>
    /* Styling checkbox */
    .checkbox-container {
        display: flex;
        align-items: left;
        cursor: pointer;
        font-size: 1em;
        margin-bottom: 15px;
        position: relative;
    }

    .checkbox-container input {
        display: none; /* Sembunyikan checkbox default */
    }

    .checkbox-container .checkmark {
        width: 20px;
        height: 20px;
        background-color: #ddd;
        border-radius: 4px;
        display: inline-block;
        margin-left: 10px;
        position: relative;
    }

    .checkbox-container input:checked + .checkmark {
        background-color: #007bff;
    }

    .checkbox-container .checkmark:after {
        content: '';
        position: absolute;
        display: none;
        top: 5px;
        left: 5px;
        width: 10px;
        height: 10px;
        background: white;
        border-radius: 2px;
    }

    .checkbox-container input:checked + .checkmark:after {
        display: block; 
    }
</style>
    
</style>

</head>
<body>
    <h1>Form Input dan Data Tabel</h1>
    <form id="userForm">
        <label for="name">Nama:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male" required> Male
        <input type="radio" id="female" name="gender" value="Female"> Female

        <label for="agree" class="checkbox-container">
         Setuju dengan syarat
        <input type="checkbox" id="agree" name="agree" required>
        <span class="checkmark"></span></label>



        <button type="submit">Submit</button>
    </form>

    <table id="userTable">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <script src="script.js"></script>
</body>
</html>
