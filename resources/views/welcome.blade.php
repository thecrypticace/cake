@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
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
        </div>
    </div>
</div>
@endsection