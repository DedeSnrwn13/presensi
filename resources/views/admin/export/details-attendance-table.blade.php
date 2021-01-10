<div class="table-responsive overflow-auto">
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th scope="col" class="text-center">No</th>
                <th scope="col">NAMA</th>
                <th scope="col">TANGGAL</th>
                <th scope="col">JAM MASUK</th>
                <th scope="col">JAM SELESAI</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp
            @foreach ($data_absen as $absen)
            <tr>
                <th scope="row" class="num text-center">{{ $no }}</th>
                <th class="text-info">{{ $absen->teacher->name }}</th>
                <td  td>{{ date('d F Y', strtotime($absen->date)) }}</td>
                <td class="text-white"><span class="bg-info px-2 py-1">{{ $absen->time_in }}</span></td>
                <td class="text-white"><span class="bg-info px-2 py-1">{{ $absen->time_out }}</span></td>
            </tr>
            @php
                $no++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>

