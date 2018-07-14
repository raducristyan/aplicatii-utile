<div class="row">
    <div class="col-sm-12">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover table-condensed" id="registration-certificates-table">
                <thead>
                    <tr>
                        <th>Titular</th>
                        <th>Vehicul</th>
                        <th>Categorie</th>
                        <th>Numar</th>
                        <th>Actiuni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($v as $vehicle)
                        <tr>
                            @if(isset($vehicle->people) && isset($vehicle->company))
                                @if(count($vehicle->people))
                                    <td>{{$vehicle->people[0]->name}}</td>
                                @else
                                    <td>{{$vehicle->company[0]->name}}</td>
                                @endif
                            @elseif(isset($vehicle->people))
                                <td>{{$vehicle->people[0]->name}}</td>
                            @elseif (isset($vehicle->company))
                                <td>{{$vehicle->company[0]->name}}</td>
                            @else
                                -
                            @endif
                            <td>{{ $vehicle->markType[0]->mark->mark }} - {{ $vehicle->markType[0]->type }}</td>
                            <td >{{ $vehicle->category[0]->category }}</td>
                            <td class="text-right">{{ $vehicle['registrationNumber']->number }}</td>
                            <td>
                                <a href="/myapps/rc/{{ $vehicle->id }}" class="btn btn-xs btn-primary" data-toggle="tooltip" data-placement="top" title="Vizualizare">
                                    <i class="fal fa-eye" aria-hidden="true"></i>
                                </a>
                                <a href="/myapps/rc/{{ $vehicle->id }}/edit" class="btn btn-xs btn-info" data-toggle="tooltip" data-placement="top" title="Editare">
                                    <i class="fal fa-edit"></i>
                                </a>
                                <a href="/myapps/rc/{{ $vehicle->id }}" class="btn btn-xs btn-danger" data-toggle="tooltip" data-placement="top" title="Ștergere">
                                    <i class="fal fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@section('scripts')
    
@endsection
