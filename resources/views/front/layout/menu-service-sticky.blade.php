<div class="sticky-top">
    <div class="shadow-body">
        <div class="sticky-menu">
            @foreach($extensions as $key => $extension)
                <a class="" href="{{ route('extension.detail', $extension->id) }}">
                    <div class="sticky-item">
                        {{ $extension->name }}
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</div>
