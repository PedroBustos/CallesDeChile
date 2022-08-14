<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
    <head>
        <title>Calles de Chile</title>
    </head>
    <body>
        <center>
            <h1>Calles de Chile</h1>
            <span>Region: </span>
            <select style="width: 200px" class="region" id="combobox_region">
                @foreach($data as $row)
                    <option value="{{$row->item_id}}">{{$row->region}}</option>
                @endforeach

            </select>

        </center>
    </body>
</html>
