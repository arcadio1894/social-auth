<!DOCTYPE html>
<html>
<head>
    <title>Categorias PDF</title>
    <style type="text/css">
        table{
            width: 100%;
            border:1px solid black;
        }
        td, th{
            border:1px solid black;
        }
    </style>
</head>

<body>
<h4>HOLAAAA</h4>
<table>
    <thead>
    <tr>
        <th align="center" style="color:#000000; background: #95C6E5">N°</th>
        <th align="centar" style="color:#000000; background: #95C6E5">NOMBRE</th>
        <th align="centar" style="color:#000000; background: #95C6E5">DESCRIPCIÓN</th>
    </tr>
    </thead>
    <tbody>
    @foreach( $categories as $key=>$category )
        <tr>
            <th align="center" style="color:#000000; background: #00BE67">{{ $key = $key+1 }}</th>
            <th align="center" style="color:#000000; background: #00BE67">{{ $category->name }}</th>
            <th align="center" style="color:#000000; background: #00BE67">{{ $category->description }}</th>
        </tr>
    @endforeach
        <tr>
            <th align="center" style="color:#000000; background: #95C6E5"></th>
            <th align="centar" style="color:#000000; background: #95C6E5"></th>
            <th align="centar" style="color:#000000; background: #95C6E5"></th>
        </tr>
        <tr>
            <th align="center" style="color:#000000; background: #95C6E5">Fecha/Hora</th>
            <th align="centar" style="color:#000000; background: #95C6E5">{{ $date }}</th>
            <th align="centar" style="color:#000000; background: #95C6E5"></th>
        </tr>
    </tbody>
</table>
</body>

</html>