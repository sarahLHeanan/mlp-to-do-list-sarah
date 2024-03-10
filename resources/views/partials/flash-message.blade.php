
    <div class="info my-2">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @elseif (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @elseif ($errors->any())
            <div class="alert alert-danger text-red-500">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="p-4">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>