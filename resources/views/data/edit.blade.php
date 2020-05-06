@extends('layouts.app')

@section('content')

    <div class="container w-95">

        <form method="POST" action="/edit-data">
            @csrf

            <input name="id" value="{{$data->id}}" hidden />

            <div class="form-group">
                <label for="DistrictName">District Name</label>
                <input type="text" class="form-control" id="DistrictName" name="district" aria-describedby="DistrictName" required placeholder="Enter District Name in Camel Casing" value="{{$data->district}}">
            </div>
            <div class="form-group">
                <label for="zoneselect">Select Zone</label>
                <select class="form-control" id="zoneselect" required name="zone">
                    <option value="">Select</option>
                    <option value="Green Zone" style="background-color: lime">Green Zone</option>
                    <option value="Orange Zone" style="background-color: orange">Orange Zone</option>
                    <option value="Red Zone" style="background-color: red">Red Zone</option>
                </select>
                <script>
                    $(document).ready(function() {
                        $('select').change(function() {
                            if($(this).val() === 'Green Zone') {
                                $("#zoneselect").css("background-color", "lime");
                                $("#zoneselect").css("color", "white");
                            }
                            else if($(this).val() === 'Orange Zone') {
                                $("#zoneselect").css("background-color", "orange");
                                $("#zoneselect").css("color", "white");
                            }
                            else if($(this).val() === 'Red Zone') {
                                $("#zoneselect").css("background-color", "red");
                                $("#zoneselect").css("color", "white");
                            }
                            else {
                                $("#zoneselect").css("background-color", "white");
                                $("#zoneselect").css("color", "black");
                            }
                        });
                    });
                </script>
            </div>
            <div class="form-group">
                <label for="StateSelect">State Name</label>
                <input type="text" class="form-control" id="StateSelect" aria-describedby="StateSelect" placeholder="Enter State Name in Camel Casing" name="state"  value="{{$data->state}}">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
