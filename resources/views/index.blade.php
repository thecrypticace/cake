@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Birthday Problem

            <a href="#" class="pull-right" @click.prevent="toggleAdvancedOptions" v-if="advanced">Hide advanced options</a>
            <a href="#" class="pull-right" @click.prevent="toggleAdvancedOptions" v-if="! advanced">Show advanced options</a>
        </div>

        <div class="panel-body">
            <div class="form-group" v-if="false">
                <label for="" class="control-label">Shared Birthdays</label>
                <step-input v-model="sharedBirthdays"></step-input>
            </div>
            <div class="form-group">
                <label for="" class="control-label">Total People</label>
                <step-input v-model="totalPeople"></step-input>
            </div>
            <div class="form-group">
                <label for="" class="control-label">Number of Days</label>
                <step-input v-model="totalDays"></step-input>
            </div>
            <div class="form-group" v-if="advanced">
                <label for="" class="control-label">Precision</label>
                <step-input v-model="precision" min="0" max="20"></step-input>
            </div>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <span class="result">@{{ formattedProbability }}</span>
        </div>
    </div>
@endsection
