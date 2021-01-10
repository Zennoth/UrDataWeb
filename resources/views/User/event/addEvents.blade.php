@extends('User.layouts.app')
@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <form action="{{ route('user.event.store') }}" method="post">
                @csrf

                <div class="form-group">
                    <label>Event Name:</label>
                    <input type="text" class="form-control"  name="event_name">
                </div>
                <div class="form-group">
                    <label">Event Date:</label>
                    <textarea type="date" class="form-control"  name="event_date"></textarea>
                </div>
                <div class="form-group">
                    <label>Location</label>
                    <input type="text" class="form-control"  name="event_location"></input>
                </div>
                <div class="form-group">
                    <label>Event Detail</label>
                    <input type="text" class="form-control"  name="event_detail"></input>
                </div>

                <div>
                <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </div>
                
            </form>
        </div>
    </section>


@endsection
