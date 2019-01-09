<label for="tag">Etiqueta </label>
<select name="tag" id="tag" class="form-control">
    <option value="Deshabilidado" @if($tag == "Deshabilidado") selected="selected" @endif>Deshabilitado</option>
    <option value="Nuevo" @if($tag == "Nuevo") selected="selected" @endif>Nuevo</option>
    <option value="Remate" @if($tag == "Remate") selected="selected" @endif>Remate</option>
    <option value="Locura" @if($tag == "Locura") selected="selected" @endif>Locura</option>
    <option value="Agotado" @if($tag == "Agotado") selected="selected" @endif>Agotado</option>
    <option value="Pronto" @if($tag == "Pronto") selected="selected" @endif>Pronto</option>
</select>
