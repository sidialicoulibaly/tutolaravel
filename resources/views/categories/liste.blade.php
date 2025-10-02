<table border="1" style="width: 80%; margin: 30px auto; border-collapse: collapse; box-shadow: 0 2px 8px rgba(0,0,0,0.1); font-family: Arial, sans-serif;">
    <thead>
        <tr style="background-color: #f2f2f2;">
            <th style="padding: 12px; border: 1px solid #ddd;">Nom</th>
            <th style="padding: 12px; border: 1px solid #ddd;">Prix</th>
            <th style="padding: 12px; border: 1px solid #ddd;">Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $valeur)
            <tr>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $valeur->name }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $valeur->price }}</td>
                <td style="padding: 10px; border: 1px solid #ddd;">{{ $valeur->description }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
