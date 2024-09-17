<div class="card">
    <div class="card-header">
        <h3 class="card-title">Responsive Hover Table</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
            <thead>
            <tr>
                <th>Título</th>
                <th>Descrição</th>
            </tr>
            </thead>
            <tbody>
                @foreach($annotations as $annotation)
                <tr>
                    <td>{{ $annotation->title }}</td>
                    <td>{{ $annotation->description }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
