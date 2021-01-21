@extends('Admin.layouts.app')
@section('content')
    <section class="clean-block clean-form dark">
        <div class="container">
            <form action="{{ route('admin.pembimbing.store') }}" method="post"> {{--add lecturer -- LecturerController--}}
                @csrf
                <div class="form-group">
                    <label for="nama">NIP:</label>
                    <input type="text" class="form-control"  name="nip">
                </div>
                <div class="form-group">
                    <label for="nama">NIDN:</label>
                    <input type="text" class="form-control"  name="nidn">
                </div>
                <div class="form-group">
                    <label for="nama">Lecturer Name:</label>
                    <input type="text" class="form-control"  name="nama">
                </div>
                <div class="form-group">
                    <label for="nama">Lecturer Email:</label>
                    <input type="text" class="form-control"  name="email">
                </div>
                <div class="form-group">
                    <label for="nama">Description:</label>
                    <input type="text" class="form-control"  name="description">
                </div>
                <div class="form-group">
                    <label for="nama">Lecturer Photo:</label>
                    <input type="text" class="form-control" name="lecturerphoto">
                </div>
                <div class="form-group">
                    <label for="nama">Email:</label>
                    <input type="text" class="form-control"  name="email">
                </div>
                <div class="form-group">
                    <label for="nama">Keterangan:</label>
                    <textarea type="text" class="form-control"  name="keterangan"></textarea>
                </div>
                <div class="form-group">
                    <label for="nama">Department:</label>
                    <select name="prodi_id" class="custom-select">
                        @foreach($departments as $department)
                            <option value="{{$prodi->id}}">{{$prodi->initial.'('.$department->department.')'}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">title:</label>
                    <select name="title_id" class="custom-select">
                        @foreach($titles as $title)
                            <option value="{{$title->id}}">{{$title->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Jaka:</label>
                    <select name="jaka_id" class="custom-select">
                        @foreach($jakas as $jaka)
                            <option value="{{$jaka->id}}">{{$jaka->jaka}}</option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div>
                <button class="btn btn-primary btn-block" type="submit">Create</button> </div>
            </form>
        </div>
    </section>
@endsection
