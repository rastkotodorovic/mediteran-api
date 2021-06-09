<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <h3>Title</h3>
    <input type="text" name="title">
    <h3>Body</h3>
    <input type="text" name="body">
    <h3>Source</h3>
    <input type="text" name="source">
    <button>Submit</button>
</form>
