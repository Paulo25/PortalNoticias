<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal de Notícias</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
        /* Cor verde esmeralda */
        body {
            background-color: #2ecc71;
            color: #fff;
        }
        /* Estilos da tabela */
        table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: #fff;
            border-collapse: collapse;
        }
        th, td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
            border-left: 1px solid #dee2e6;
            border-right: 1px solid #dee2e6;
        }
        th:first-child, td:first-child {
            border-left: 0;
        }
        th:last-child, td:last-child {
            border-right: 0;
        }
        th {
            background-color: #2ecc71;
            color: #fff;
            border-color: #dee2e6;
            text-align: left;
        }
        /* Estilo de linhas alternadas */
        tbody tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        /* Hover na tabela */
        tbody tr:hover {
            background-color: #d4edda;
        }
        /* Estilos de texto da tabela */
        td {
            font-size: 14px;
            line-height: 1.5;
        }
        /* Cabeçalho estilizado */
        .header {
            background-color: #2ecc71;
            padding: 1rem;
            text-align: center;
        }
        /* Rodapé estilizado */
        .footer {
            background-color: #2ecc71;
            padding: 1rem;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- Cabeçalho -->
    <div class="header">
        <h1>Portal de Notícias</h1>
    </div>

    <!-- Tabela de Notícias -->
    <table class="table">
        <thead>
            <tr>
                <th>Título</th>
                <th>Notícia</th>
            </tr>
        </thead>
        <tbody>
        @if(count($noticias))
            @foreach ($noticias as $noticia)
                <tr>
                    <td>{{ $noticia->titulo }}</td>
                    <td>{{ $noticia->noticia }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="2">Nenhum registro...</td>
            </tr>
        @endif
        </tbody>
    </table>

    <!-- Rodapé -->
    <div class="footer">
        <p>&copy; 2024 Portal de Notícias</p>
    </div>

    <!-- Bootstrap JS (opcional) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>