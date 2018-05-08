<label for="tag">Etiqueta </label>
<select name="tag" id="tag" class="form-control">
    <option value="Deshabilidado" @if($tag == "Deshabilidado") selected="selected" @endif>Deshabilitado</option>
    <option value="Nuevo" @if($tag == "Nuevo") selected="selected" @endif>Nuevo</option>
    <option value="En Oferta" @if($tag == "En Oferta") selected="selected" @endif>En Oferta</option>
    <option value="Destacado" @if($tag == "Destacado") selected="selected" @endif>Destacado</option>
</select>