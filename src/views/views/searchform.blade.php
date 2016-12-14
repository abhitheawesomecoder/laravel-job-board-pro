<form action="{{ url('job-search') }}" method="post">
{{ csrf_field() }}
    <div class="form-container fix bg-opacity-blue-85 mt-125">
        <div class="box-select">
            <div class="select large">
                <select name="keyword">
                    <option value="">Keywords</option>
                    <option value="web">Web</option>
                    <option value="Graphic">Graphic</option>
                    <option value="Graphic">Print</option>
                </select>
            </div>
            <div class="select small">
                <select name="location">
                    <option value="">Region</option>
                    <option value="Willshire1">Willshire1</option>
                    <option value="Willshire2">Willshire2</option>
                </select>
            </div>
            <div class="select medium">
                <select name="category">
                    <option value="">Category</option>
                    <option value="Designing">Designing</option>
                    <option value="Devlopment">Devlopment</option>

                </select>
            </div>
        </div>
        <button type="submit" class="button-dark pull-right">Search</button>
    </div>
</form>
