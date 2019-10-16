<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Pengaduan</th>
        </tr>
    </thead>
    <tbody>
        @for ($i = 1; $i < 20; $i++)
        <tr>
                <td>{{$i}}</td>
                <td></td>
                <td></td>
            </tr>    
        @endfor
    </tbody>
</table>