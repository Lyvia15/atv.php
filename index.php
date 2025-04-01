<div class="container">
    <div class="row">
        <div class="text-center bg-primary mb-5">Calculadora</div>
        <div class="col">
    <form action = "calcular.php" method = "post">
    <label for="" class="form-label">Primeiro número:</label>
    <input type="number" name ="n1" class="form-control">
    <label for="" class="form-label">Segundo número:</label>
    <input type="number" name ="n2" class="form-control" >
    <select name="operacao" id="">
    <option value="+">Adição</option>
    <option value="-">Subtração</option>
    <option value="x">Multiplicação</option>
    <option value="/">Divisão</option>
    </select>
    <input type="submit" value = "Select" class="btn btn-info">
    </form>
        </div>
        <div class="col"></div>
    </div>
</div>