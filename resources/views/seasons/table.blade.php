<div class="table-responsive">
    <table class="table" id="seasons-table">
        <thead>
            <tr>
                <th>Сериал</th>
                <th>Сезон</th>
        <th>Описание</th>
        <th>Start</th>
        <th>Finish</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($seasons as $season)
            <tr>
                <td>{{ $season->serial->title }}</td>
                <td>{{ $season->title }}</td>
            <td><a href="{{ route('seriyas.index', ['season_id' => $season->id]) }}">{{ \Illuminate\Support\Str::limit($season->description) }}</a></td>
            <td>{{ $season->start }}</td>
            <td>{{ $season->finish }}</td>
                <td>
                    {!! Form::open(['route' => ['seasons.destroy', $season->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('seasons.show', [$season->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('seasons.edit', [$season->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
