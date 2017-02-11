@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Birthday Problem

            <a href="#" class="pull-right" @click.stop="toggleAdvancedOptions" v-if="advanced">Hide advanced options</a>
            <a href="#" class="pull-right" @click.stop="toggleAdvancedOptions" v-if="! advanced">Show advanced options</a>
        </div>

        <div class="panel-body">
            <div class="form-group" v-show="false">
                <label for="" class="control-label">Shared Birthdays</label>
                <input type="text" class="form-control" v-model="sharedBirthdays">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Total People</label>
                <input type="text" class="form-control" v-model="totalPeople">
            </div>
            <div class="form-group">
                <label for="" class="control-label">Number of Days</label>
                <input type="text" class="form-control" v-model="totalDays">
            </div>
            <div class="form-group" v-show="advanced">
                <label for="" class="control-label">Precision</label>
                <input type="text" class="form-control" v-model="precision">
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="result">@{{ formattedProbability }}</span>
        </div>
    </div>
@endsection
