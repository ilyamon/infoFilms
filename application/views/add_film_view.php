<form method="POST" action="/main/addFilm">
    <div class="form-group mt-4">
        <label for="exampleFormControlInput1">Movie title</label>
        <input name="title" type="text" class="form-control" id="exampleFormControlInput1" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="inputDate">Year</label>
        <input name="release_year" type="text" class="form-control" >
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Format</label>
        <select name="format" class="form-control" id="exampleFormControlSelect1" required>
            <option>VHS</option>
            <option>DVD</option>
            <option>Blue-Ray</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Actors</label>
        <textarea name="actors" class="form-control" id="exampleFormControlTextarea1" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary mb-3">Add</button>
</form>
