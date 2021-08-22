<div class="btn-group">
    <button class="btn btn-white btn-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <svg width="14" height="14" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
        </svg>
    </button>
    <div class="dropdown-menu dropdown-menu-right">
        <a
            href="{{ route('articles.edit', $article) }}"
            class="dropdown-item"
        >
            Edit
        </a>
        <form action="{{ route('articles.destroy', $article) }}" method="POST"  >
            @method('delete')
            @csrf
            <button class="dropdown-item btn-delete-amenity">
                Delete
            </button>
        </form>
    </div>
</div>