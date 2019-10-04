<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        fieldset {
            width: 450px;
        }

        label {
            float: left;
            width: 10em;
            padding-right: 1em;
        }

        input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        select {
            float: left;
            margin-bottom: .5em;
        }

        button {
            margin-left: 13.2em;
            margin-bottom: 1em;
        }
    </style>
</head>
<body>
<form method="post" action="display_canculate.php">
    <h1>Simple Calculator</h1>
    <fieldset>
        <legend>Calculator</legend>
        <label>First operand: </label>
        <input type="text" value="0" name="operand1"><br>
        <label>Operator: </label>
        <select name="operator">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="multi">Multiplication</option>
            <option value="div">Division</option>
        </select><br>
        <label>Second operand: </label>
        <input type="text" value="0" name="operand2"><br>
        <button type="submit">Calculate</button>
    </fieldset>
</form>
</body>
</html>
