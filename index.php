<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Calculadora Simples</h2>
    <form action="calcular.php" method="POST">
        <div class="mb-3">
            <label for="num1" class="form-label">Número 1:</label>
            <input type="number" class="form-control" name="num1" required>
        </div>
        <div class="mb-3">
            <label for="num2" class="form-label">Número 2:</label>
            <input type="number" class="form-control" name="num2" required>
        </div>
        <div class="mb-3">
            <label for="operacao" class="form-label">Operação:</label>
            <select class="form-select" name="operacao">
                <option value="adicao">Adição</option>
                <option value="subtracao">Subtração</option>
                <option value="multiplicacao">Multiplicação</option>
                <option value="divisao">Divisão</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Calcular</button>
    </form>
</body>
</html>
