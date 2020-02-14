<div class="table-responsive">
    <table class="table" id="serials-table">
        <thead>
            <tr>
                <th>Название</th>
        <th>Описание</th>
        <th>Path</th>
        <th>Start</th>
        <th>Finish</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($serials as $serial)
            <tr>
                <td>{{ $serial->title }}</td>
                <td><a href="{{ route('seasons.index', ['serial_id' => $serial->id]) }}">{{ \Illuminate\Support\Str::limit($serial->description) }}</a></td>
            <td>{{ $serial->path }}</td>
            <td>{{ $serial->start }}</td>
            <td>{{ $serial->finish }}</td>
                <td>
                    {!! Form::open(['route' => ['serials.destroy', $serial->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('serials.show', [$serial->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('serials.edit', [$serial->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
