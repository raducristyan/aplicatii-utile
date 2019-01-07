<div class="tab-pane" id="users" role="tabpanel">
    <div class="card-body">
        <table class="table full-color-table full-inverse-table hover-table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nume</th>
                    <th>adresa de email</th>
                    <th>Creat la:</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->full_name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
