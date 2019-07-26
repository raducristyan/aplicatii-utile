<div class="tab-pane" id="users" role="tabpanel">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nume</th>
                        <th>adresa de email</th>
                        <th>Creat la:</th>
                        <th>Acțiuni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($institution->users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->full_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                        <td>
                            <a href="#" data-original-title="Editează"> <i class="fal fa-pencil text-dark m-r-10"></i> </a>
                            <a href="#" data-original-title="Șterge"> <i class="fal fa-user-times text-danger"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div> 