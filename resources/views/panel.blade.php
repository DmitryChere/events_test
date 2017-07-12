@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Manage panel</div>

                    <div class="panel-body">
                        <div class="switch">
                            <button type="button" data-content="1" class="btn btn-primary active">Events</button>
                            <button type="button" data-content="2" class="btn btn-primary">Templates</button>
                        </div>

                        <div class="content-wrap">
                            <div class="item" data-id="1">
                                <button id="addEvent" type="button" class="btn btn-default btn-sm" data-action="{{ route('events.create') }}">
                                    <i class="fa fa-plus"></i> Add event
                                </button>

                                @if ($events->count())
                                    @foreach ($events as $event)
                                        <div class="panel panel-default">
                                            <div class="panel-body">
                                                <p>{{ $event->type->label }}</p>
                                                <button class="btn btn-default btn-xs dropdown-toggle" type="button">
                                                    <i class="fa fa-pencil"></i>
                                                    Edit
                                                </button>
                                                <button class="btn btn-danger btn-xs dropdown-toggle" type="button">
                                                    <i class="fa fa-trash"></i>
                                                    Delete
                                                </button>
                                            </div>
                                        </div>
                                    @endforeach
                                @else
                                    Events not found
                                @endif
                            </div>
                            <div class="item none" data-id="2">
                                <button id="addTemplate" type="button" class="btn btn-default btn-sm">
                                    <i class="fa fa-plus"></i> Add template
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection