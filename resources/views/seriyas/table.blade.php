<div class="table-responsive">
    <table class="table" id="seriyas-table">
        <thead>
            <tr>
                <th>Сериал</th>
        <th>Сезон</th>
        <th>Серии</th>
        <th>Описание</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($seriyas as $seriya)
            <tr>
                <td>{{ $seriya->season->serial->title }}</td>
            <td>{{ $seriya->season->title }}</td>
            <td>{{ $seriya->title }}</td>
            <td>{{ \Illuminate\Support\Str::limit($seriya->description) }}</td>
                <td>
                    {!! Form::open(['route' => ['seriyas.destroy', $seriya->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('seriyas.show', [$seriya->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('seriyas.edit', [$seriya->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
