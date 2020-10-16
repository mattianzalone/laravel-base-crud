<form action="{{route('cars.store')}}" method="post">
    @csrf
    {{-- scriviamo a mano l'input --}}
    <input name="_method" type="hidden" value="POST">
    {{-- oppure usiamo blade --}}
    @method('POST')
    <label for="title">Marca</label>
    <input type="text" name="marca" placeholder="Marca">
    <label for="content">Anno</label>
    <input type="date" name="anno"
    placeholder="Anno">
    <label for="content">Prezzo</label>
    <input type="text" name="prezzo"
    placeholder="Prezzo">
    <textarea name="descrizione" id="" cols="30" rows="10"></textarea>
    <input type="submit" value="Invia">
</form>