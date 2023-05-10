@extends('layouts.app')


@section('content')

    <div class="width-50 p-5">
        <div class="border p-4 bg-light">
            <h2 class="justify-content-center center-text">Pridanie Športovca</h2>
            <hr class="mb-4 mt-3">
            <form action="{{url('editfiles')}}" method="post">
                <div class="mb-3 row">
                    <div class="col form-group">
                        <label for="date" class="form-label">Dátum*</label><input type="date" name="date"
                                                                                      id="date" class="form-control"
                                                                                      required>
                    </div>
                    <div class="col form-group">
                        <label for="points" class="form-label">Body*</label><input type="number" name="points"
                                                                                               id="points"
                                                                                               class="form-control"
                                                                                               required>
                    </div>
                    <input type="hidden" name="studentid" value="{{$studentid}}">
                    <input type="hidden" name="fileid" value="{{$fileid}}">
                </div>
                <button type="submit" class="btn btn-success">Uprav</button>
            </form>
            <!-- to iste len nad vsetkymi olympijskymi hramy - games to bude -
            ten isty form najprv to bude skryta a potom ked posle prvy tak sa objavi dalsi formular -->
        </div>
    </div>


@endsection


