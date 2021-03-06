<table class="table table-hover" id="tblEvents">
    <thead>
    <tr>
        @foreach($columnNames as $columnName)
            @if($columnName == "posterPath")
                <th class="text-center">Poster</th>
            @elseif($columnName == "posterFileName")
                @continue
            @elseif($columnName == "eventName")
                <th class="text-center">Event</th>
            @elseif($columnName == "seatCount")
                <th class="text-center">Seat Count</th>
            @elseif($columnName == "eventDate")
                <th class="text-center">Date</th>
            @elseif($columnName == "created_at")
                <th class="text-center">Created</th>
            @elseif($columnName == "updated_at")
                <th class="text-center">Updated</th>
            @else
                <th class="text-center">{{ $columnName }}</th>
            @endif
        @endforeach
        <th class="text-center">Actions</th>
    </tr>
    </thead>
    <tbody id="tableBody">
    @foreach($events as $event)
        <tr id="{{ $event->id }}">
            @foreach($columnNames as $columnName)
                @if($columnName == "posterPath")
                    <td><img src="{{ asset($event->$columnName) }}" style="width: 130px; height: 60px"></td>
                @elseif($columnName == "created_at" || $columnName == "updated_at")
                    <td class="text-center" style="vertical-align: middle;">{{ $event->$columnName->diffForHumans() }}</td>
                @elseif($columnName == "posterFileName")
                    @continue
                @else
                    <td class="text-center" style="vertical-align: middle;">{{ $event->$columnName }}</td>
                @endif
            @endforeach
            <td class="text-nowrap" style="vertical-align: middle;">
                <button type="button" class="btn btn-primary edit" data-toggle="modal" data-target="#add" id="update{{ $event->id }}">
                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                </button>
                <button type="button" class="btn btn-danger delete" data-toggle="modal" data-target="#delete" id="delete{{ $event->id }}">
                    <i class="fa fa-trash-o" aria-hidden="true"></i>
                </button>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>

