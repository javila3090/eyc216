<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <ul>
        @foreach ($errors->all() as $error)
            <b>{{ $error }}</b>
        @endforeach
    </ul>
</div>