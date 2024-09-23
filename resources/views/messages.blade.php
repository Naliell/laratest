<h2>Список всех элементов (сорт. по created_at)</h2>
<div>
    @foreach ($data as $el)
        <div class="aler alert-info">
            <p>{{ $el->created_at }} | {{ $el->testfield }} | {{ $el->testfield2 }} | {{ $el->testfield3 }}<br>
            {{ $el->message }}<hr></p>
        </div>
    @endforeach
</div>
