<div class="mb-3">
    <div class="row">
        <div class="col">
            <label for="exampleInputText" class="form-label"> First name </label>
            <input
            type="text"
            class="form-control"
            id="exampleInputText1"
            name="exampleInputText1"
            value="{{ $exampleInputText1 ?? old('exampleInputText1') }}"
            required
        />
        </div>
        <div class="col"><label for="exampleInputText" class="form-label"> Last name </label>
          <input
          type="text"
          class="form-control"
          id="exampleInputText2"
          name="exampleInputText2"
          value="{{ $exampleInputText2 ?? old('exampleInputText2') }}"
          required
      />
        </div>
      </div>
</div>
<div class="mb-3">
    <label for="exampleInputEmail" class="form-label"> Email </label>

    <input
        type="email"
        class="form-control"
        id="exampleInputEmail"
        name="exampleInputEmail"
        value="{{ $exampleInputEmail ?? old('exampleInputEmail') }}"
        placeholder="you@example.com"
    />
</div>

<div class="mb-3">
    <label for="exampleInputAddress" class="form-label"> Address </label>

    <input
        type="text"
        class="form-control"
        id="exampleInputAddress"
        name="exampleInputAddress"
        value="{{ $exampleInputAddress ?? old('exampleInputAddress') }}"
        placeholder="1234 Main St"
    />
</div>

<div class="mb-3 row">
    <div class="col-6">

        <label for="exampleSelect1" class="form-label">Country </label>
        <select class="form-select" id="exampleSelect1" name="exampleSelect1">

        <option value="1" {{ $exampleSelect1 ?? old('exampleSelect1') == '1' ? 'selected' : '' }}>Choose... </option>

        <option value="2" {{ $exampleSelect1 ?? old('exampleSelect1') == '2' ? 'selected' : '' }}>United States </option>

        <option value="3" {{ $exampleSelect1 ?? old('exampleSelect1') == '3' ? 'selected' : '' }}>Russia</option>
        </select>
    </div>
    <div class="col-4">
        <label for="exampleSelect2" class="form-label"> State  </label>
        <select class="form-select" id="exampleSelect2" name="exampleSelect2">

            <option value="1" {{ $exampleSelect2 ?? old('exampleSelect2') == '1' ? 'selected' : '' }}>Choose... </option>

            <option value="2" {{ $exampleSelect2 ?? old('exampleSelect2') == '2' ? 'selected' : '' }}>California </option>

            <option value="3" {{ $exampleSelect2 ?? old('exampleSelect2') == '3' ? 'selected' : '' }}>Mari El Republic</option>
        </select>
    </div>

    <div class="col-2">
        <label for="exampleInputPostCode" class="form-label">Post Code</label>
        <input
        type="text"
        class="form-control"
        id="exampleInputPostCode"
        name="exampleInputPostCode"
        value="{{ $exampleInputPostCode ?? old('exampleInputPostCode') }}"/>
    </div>
</div>

<hr>
<div class="mb-3">
    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="exampleCheckbox1"
        name="exampleCheckbox1"
        {{
            $exampleCheckbox1 ?? old("exampleCheckbox1") == "on"
                ? "checked"
                : ""
        }}>
        <label class="form-check-label" for="exampleCheckbox1">
            Shipping address is the same as my billing address</label
        >
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" value="2"
        id="exampleCheckbox2" name="exampleCheckbox2"
        {{
            $exampleCheckbox2 ?? old("exampleCheckbox2") == "2"
                ? "checked"
                : ""
        }}>
        <label class="form-check-label" for="exampleCheckbox2"
            >Save this informaion for next time</label
        >
    </div>
</div>
<hr>
<div class="mb-3">
    <h1> Payment</h1>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadio"
        id="exampleRadio1" value="1"
        {{ $exampleRadio ?? old("exampleRadio") == "1" ? "checked" : "" }}>
        <label class="form-check-label" for="exampleRadio1">Credit card</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadio"
        id="exampleRadio2" value="2"
        {{ $exampleRadio ?? old("exampleRadio") == "2" ? "checked" : "" }}>
        <label class="form-check-label" for="exampleRadio2">Debit card</label>
    </div>

    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadio"
        id="exampleRadio3" value="3"
        {{ $exampleRadio ?? old("exampleRadio") == "3" ? "checked" : "" }}>
        <label class="form-check-label" for="exampleRadio3">PayPal </label>
    </div>
</div>

<div class="d-grid gap-2">
    <button class="btn btn-primary" type="submit">Countinue to checkout</button>
</div>
