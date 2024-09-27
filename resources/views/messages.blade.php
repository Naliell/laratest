@vite(['resources/css/test.css'])
@vite(['resources/js/test.js'])
<h2>Список всех элементов (сорт. по created_at)</h2>
<div class="db-list">
    @foreach ($data as $el)
        <div class="aler alert-info">
            <p>{{ $el->created_at }} | {{ $el->testfield }} | {{ $el->testfield2 }} | {{ $el->testfield3 }}<br>
            {{ $el->message }}<hr></p>
        </div>
    @endforeach
</div>
