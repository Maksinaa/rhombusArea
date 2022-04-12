<div class="mb-3">

  <label for="exampleInputText" class="form-label">
    Example Input Text
  </label>

  <input type="text" class="form-control" id="exampleInputText" name="exampleInputText"
    value="{{ $exampleInputText ?? old('exampleInputText') }}" placeholder="Input Text">

  <div class="form-text">
    Block-level help text in forms
  </div>

</div>

<div class="mb-3">

  <label for="exampleTextarea" class="form-label">
    Example textarea
  </label>

  <textarea class="form-control" id="exampleTextarea" name="exampleTextarea"
    rows="3">{{ $exampleTextarea ?? old('exampleTextarea') }}</textarea>

</div>



<div class="mb-3">

  <select class="form-select" id="exampleSelect" name="exampleSelect">

    <option value="1" {{ $exampleSelect ?? old('exampleSelect') == '1' ? 'selected' : '' }}>One</option>

    <option value="2" {{ $exampleSelect ?? old('exampleSelect') == '2' ? 'selected' : '' }}>Two</option>

    <option value="3" {{ $exampleSelect ?? old('exampleSelect') == '3' ? 'selected' : '' }}>Three</option>

  </select>

</div>

<div class="mb-3">

  <div class="form-check">
    <input class="form-check-input" type="checkbox" id="exampleCheckbox1" name="exampleCheckbox1"
      {{ $exampleCheckbox1 ?? old('exampleCheckbox1') == 'on' ? 'checked' : '' }}>
    <label class="form-check-label" for="exampleCheckbox1">
      Example checkbox 1
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="checkbox" value="2" id="exampleCheckbox2" name="exampleCheckbox2"
      {{ $exampleCheckbox2 ?? old('exampleCheckbox2') == '2' ? 'checked' : '' }}>
    <label class="form-check-label" for="exampleCheckbox2">
      Example checkbox 2
    </label>
  </div>

</div>

<div class="mb-3">

  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadio1" value="1"
      {{ $exampleRadio ?? old('exampleRadio') == '1' ? 'checked' : '' }}>
    <label class="form-check-label" for="exampleRadio1">
      Example radio 1
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadio2" value="2"
      {{ $exampleRadio ?? old('exampleRadio') == '2' ? 'checked' : '' }}>
    <label class="form-check-label" for="exampleRadio2">
      Example radio 2
    </label>
  </div>

  <div class="form-check">
    <input class="form-check-input" type="radio" name="exampleRadio" id="exampleRadio3" value="3"
      {{ $exampleRadio ?? old('exampleRadio') == '3' ? 'checked' : '' }}>
    <label class="form-check-label" for="exampleRadio3">
      Example radio 3
    </label>
  </div>

</div>

<div class="mb-3">

  <label for="exampleInputRange" class="form-label">
    Example range input
  </label>
  <input type="range" class="form-range" min="0" max="5" step="1" id="exampleInputRange" name="exampleInputRange"
    value="{{ $exampleInputRange ?? old('exampleInputRange') }}">

</div>

<div class="mb-3">

  <label for="exampleFileInput" class="form-label">
    Example File Input
  </label>

  <input type="file" class="form-control" id="exampleFileInput">

</div>

<div class="d-grid gap-2">
  <button class="btn btn-primary" type="submit">
    Submit form
  </button>
</div>
