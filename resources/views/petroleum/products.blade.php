<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <title>Normalization</title>
</head>
<body>
<div class="flex flex-col">
    <x-layouts>
    <table class="table" style="padding-top: 60px;">
        <thead>
            <tr>
            <th scope="col">No.</th>
            <th scope="col">Year</th>
            <th scope="col">Petroleum_product</th>
            <th scope="col">Sale</th>
            <th scope="col">Country</th>
            </tr>
        </thead>
        @foreach($product as $item)
            <tbody>
                <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>{{$item->year }}</td>
                <td>{{ $item->petroleum_product }}</td>
                <td>{{ $item->sale }}</td>
                <td>{{ $item->country }}</td>
                </tr>
            </tbody>
        @endforeach
            <p style="padding-top: 30px;">First Noramlization</p>
</table>
    </x-layouts>
</body>
</html>