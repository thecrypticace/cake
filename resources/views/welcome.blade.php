@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">Birthday Problem</div>

        <div class="panel-body">
            <div class="form-group">
                <label for="" class="control-label">Total People</label>
                <input type="text" class="form-control" v-model="totalPeople">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Number of Days</label>
                <input type="text" class="form-control" v-model="totalDays">
            </div>

            <span class="result">@{{ probability }}</span>
        </div>
    </div>
@endsection
