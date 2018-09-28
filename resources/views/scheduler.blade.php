@extends("layout")


@section('content')
    <div class="container mb-5">
        <div class="row mb-5 justify-content-center">
            <div class="col-sm-10 ">
                <h2>Scheduler</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, blanditiis commodi consequuntur dolorem, et fugiat maxime nulla quae quasi quis, quod repellendus suscipit vel. Architecto labore laboriosam quis quos repudiandae.</p>

                <form>
                    <div class="form-group">
                        <label >date</label>
                        <input type="date" class="form-control" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label >time</label>
                        <input type="time" class="form-control" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label >custom message(on timer set)</label>
                        <input type="text" class="form-control" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label >custom message(on merger work)</label>
                        <input type="text" class="form-control" placeholder="Enter email">
                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    </div>
                    <div class="form-group">
                        <label>Merge Type</label>
                        <select name="" id="" class="form-control">
                            <option>Merge</option>
                            <option>Merge</option>
                            <option>Merge</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block">set timer</button>
                </form>
            </div>
        </div>

    </div>
@endsection
