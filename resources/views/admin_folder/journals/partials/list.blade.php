<!-- resources/views/journals/partials/list.blade.php -->

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>Title</th>
            <th>Status</th>
            <th width="220">Actions</th>
        </tr>
    </thead>

    <tbody id="sortable">
        @foreach($journals as $journal)
        <tr data-id="{{ $journal->id }}">
            <td>{{ $journal->title }}</td>
            <td>
                <span class="badge {{ $journal->is_published ? 'bg-success' : 'bg-secondary' }}">
                    {{ $journal->is_published ? 'Published' : 'Draft' }}
                </span>
            </td>
            <td>
                <button class="btn btn-sm btn-warning toggle-btn" data-id="{{ $journal->id }}">Toggle</button>
                <button class="btn btn-sm btn-danger delete-btn" data-id="{{ $journal->id }}">Delete</button>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{ $journals->links() }}
